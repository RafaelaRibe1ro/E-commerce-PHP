<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ProdutoController extends Controller
{

    public function index()
    {
        $produtos = Produto::all();
        return view('produto.index', compact('produtos'));
    }


    public function create()
    {
        $categorias = Categoria::all();
        return view('produto.crud', compact('categorias'));
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:50',
            'descricao' => 'required|string|max:50',
            'preco' => 'required|integer',
            'quantidade' => 'required|integer',
            'categoria_id' => 'required',
            'imagem' => 'image'
        ]);

        if ($request->hasFile('image')) {
            $data['imagem'] = $request->file('image')->store('produtos', 'public');
        }
        Produto::create($data);

        return redirect()->route('produto.index')->with('success', 'produto cadastrado com sucesso');
    }


    public function show($id)
    {
        $produto = Produto::find($id);
        $produto->load('categoria');
        return response()->json($produto);
    }


    public function edit($id)
    {
        $produto = Produto::find($id);
        $categorias = Categoria::all();

        return view('produto.crud', compact('produto', 'categorias'));
    }


    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:50',
            'descricao' => 'required|string|max:50',
            'preco' => 'required|integer',
            'quantidade' => 'required|integer',
            'categoria_id' => 'required',
            'imagem' => 'image|file',
        ]);

        $produto = Produto::find($id);

        if ($request->hasFile('image')) {
            Storage::delete('public/' . $produto->imagem);
            $data['imagem'] = $request->file('image')->store('produtos', 'public');
        }

        $produto->update($data);
        return redirect()->route('produto.index')->with('success', 'produto atualizado com sucesso');
    }

    public function destroy($id)
    {
        $produto = Produto::find($id);
        if ($produto->imagem)
            Storage::delete('public/' . $produto->imagem);

        $produto->delete();

        return redirect()->route('produto.index')->with('success', 'produto excluído com sucesso');
    }
}
