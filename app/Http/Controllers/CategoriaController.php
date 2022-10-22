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
        $categorias = Categoria::create($data);

        return redirect()->route('categoria.index')->with('success', 'Categoria cadastrada com sucesso');
    }

    public function show($id)
    {
        $categorias = Categoria::find($id);
        return response()->json($categorias);
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
