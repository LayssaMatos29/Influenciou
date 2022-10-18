<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Http\Requests\CategoriaRequest;

class CategoriaController extends Controller
{
    public function index()
    {
        return view('Dashboard.admin.categoria.index', [
            'categorias' => Categoria::get()
        ]);
    }

    public function create()
    {
        return view('Dashboard.admin.categoria.create', [
            'categorias' => Categoria::get()
        ]);
    }

    public function store(CategoriaRequest $request)
    {
        $validated = $request->validated();
        Categoria::create($validated);

        return redirect()->route('categoria.index')->with('success', 'Categoria cadastrada com sucesso.');
    }

    public function edit($id)
    {
        $categoria = Categoria::find($id);

        return view('Dashboard.admin.categoria.edit', [
            'categoria' => $categoria,
            'categoria_pai' => Categoria::find($categoria->categoria_id),
            'categorias' => Categoria::where('id', '!=', $id)->get()
        ]);
    }

    public function update(CategoriaRequest $request, $id)
    {
        $validated = $request->validated();
        $categoria = Categoria::find($id);
        $categoria->update($validated);

        return redirect()->route('categoria.index')->with('success', 'Categoria editada com sucesso.');
    }

    public function destroy($id)
    {
        Categoria::destroy($id);

        return redirect()->route('categoria.index')->with('success', 'Categoria excluída com sucesso.');
    }
}
