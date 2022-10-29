<?php

namespace App\Http\Controllers\Instrutor\Curso;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ModuloRequest;
use App\Models\Modulo;
use Illuminate\Support\Facades\Auth;

class ModuloController extends Controller
{
    public function index()
    {
        return view('Dashboard.instrutor.curso.modulo.index', [
            'cursos' => Modulo::where('instrutor_id', Auth::user()->id)->get()
        ]);
    }

    public function create()
    {
        return view('Dashboard.instrutor.curso.modulo.create');
    }

    public function store(ModuloRequest $request)
    {
        $validated = $request->validated();
        Modulo::create($validated);

        return redirect()->route('curso.modulo.index')->with('success', 'Curso criado com sucesso.');
    }

    public function edit($id)
    {
        return view('Dashboard.instrutor.curso.modulo.edit');
    }

    public function update(ModuloRequest $request, $id)
    {
        $validated = $request->validated();

        $curso = Modulo::where([
            ['instrutor_id', Auth::user()->id],
            ['id', $id]
        ])->first();

        if ($curso) {
            $curso->update($validated);

            return redirect()->route('curso.modulo.index')->with('success', 'Curso editado com sucesso.');
        }

        return redirect()->route('curso.modulo.index')->with('error', 'Curso não encontrado.');
    }

    public function destroy($id)
    {
        $curso = Modulo::where([
            ['instrutor_id', Auth::user()->id],
            ['id', $id]
        ])->first();

        if ($curso) {
            $curso->update([
                'disponivel' => 'N'
            ]);
            return redirect()->route('curso.modulo.index')->with('success', 'Curso desativado, porém continua disponível para os que se inscreveram.');
        }

        return redirect()->route('curso.modulo.index')->with('error', 'Curso não encontrado.');
    }
}
