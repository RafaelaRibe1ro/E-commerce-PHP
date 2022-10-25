<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        return view('categoria.index', compact('categorias'));
    }


    public function create()
    {
        return view('categoria.crud');
    }


    public function store(Request $request)
    {
        $rules = [
            'categoria' => 'required|string|max:50',
        ];

        $data = $request->validate($rules);
        Categoria::create($data);

        return redirect()->route('categoria.index')->with('success', 'categoria cadastrada com sucesso');
    }

    public function show($id)
    {
        $categorias = Categoria::find($id);
        return response()->json($categorias);
    }

    public function edit($id)
    {
        $categorias = Categoria::find($id);
        return view('categoria.crud', compact('categorias'));
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'categorias' => 'required|string|max:50',
        ];

        $categorias = Categoria::find($id);
        $data = $request->validate($rules);
        $categorias->update($data);

        return redirect()->route('categoria.index')->with('success', 'categoria atualizada com sucesso');
    }

    public function destroy($id)
    {
        $categorias = Categoria::find($id);
        $categorias->delete();

        return redirect()->route('categoria.index')->with('success', 'categoria excluída com sucesso');
    }
}
