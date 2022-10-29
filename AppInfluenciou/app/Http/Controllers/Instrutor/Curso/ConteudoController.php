<?php

namespace App\Http\Controllers\Instrutor\Curso;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ConteudoRequest;
use App\Models\Conteudo;
use Illuminate\Support\Facades\Auth;

class ConteudoController extends Controller
{
    public function index()
    {
        return view('Dashboard.instrutor.curso.conteudo.index', [
            'cursos' => Conteudo::where('instrutor_id', Auth::user()->id)->get()
        ]);
    }

    public function create()
    {
        return view('Dashboard.instrutor.curso.conteudo.create');
    }

    public function store(ConteudoRequest $request)
    {
        $validated = $request->validated();
        Conteudo::create($validated);

        return redirect()->route('curso.conteudo.index')->with('success', 'Curso criado com sucesso.');
    }

    public function edit($id)
    {
        return view('Dashboard.instrutor.curso.conteudo.edit');
    }

    public function update(ConteudoRequest $request, $id)
    {
        $validated = $request->validated();

        $curso = Conteudo::where([
            ['instrutor_id', Auth::user()->id],
            ['id', $id]
        ])->first();

        if ($curso) {
            $curso->update($validated);

            return redirect()->route('curso.conteudo.index')->with('success', 'Curso editado com sucesso.');
        }

        return redirect()->route('curso.conteudo.index')->with('error', 'Curso não encontrado.');
    }

    public function destroy($id)
    {
        $curso = Conteudo::where([
            ['instrutor_id', Auth::user()->id],
            ['id', $id]
        ])->first();

        if ($curso) {
            $curso->update([
                'disponivel' => 'N'
            ]);
            return redirect()->route('curso.conteudo.index')->with('success', 'Curso desativado, porém continua disponível para os que se inscreveram.');
        }

        return redirect()->route('curso.conteudo.index')->with('error', 'Curso não encontrado.');
    }
}
