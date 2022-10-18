<?php

namespace App\Http\Controllers\Instrutor\Curso;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curso;
use App\Http\Requests\CursoRequest;

class CursoController extends Controller
{
    public function index()
    {
        return view('Dashboard.instrutor.curso.index');
    }

    public function create()
    {
        return view('Dashboard.instrutor.curso.create');
    }

    public function store(CursoRequest $request)
    {
        $validated = $request->validated();
        Curso::create($validated);

        return redirect()->route('curso.index')->with('success', 'Curso criado com sucesso.');
    }

    public function edit($id)
    {
        return view('Dashboard.instrutor.curso.edit');
    }

    public function update(CursoRequest $request, $id)
    {
        $validated = $request->validated();

        $curso = Curso::where([
            ['instrutor_id', Auth::user()->id],
            ['id', $id]
        ])->first();

        if ($curso) {
            $curso->update($validated);

            return redirect()->route('curso.index')->with('success', 'Curso editado com sucesso.');
        }

        return redirect()->route('curso.index')->with('error', 'Curso não encontrado.');
    }

    public function destroy($id)
    {
        $curso = Curso::where([
            ['instrutor_id', Auth::user()->id],
            ['id', $id]
        ])->first();

        if ($curso) {
            $curso->update([
                'disponivel' => 'N'
            ]);
            return redirect()->route('curso.index')->with('success', 'Curso desativado, porém continua disponível para os que se inscreveram.');
        }

        return redirect()->route('curso.index')->with('error', 'Curso não encontrado.');
    }
}
