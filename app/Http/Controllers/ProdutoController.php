<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ProdutoController extends Controller
{
    // private Produto $produtos:

    // public function construct(Produto $produtos)
    // {
    //     $this-> produto = $produtos;
    // }

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
        $rules = [
            'nome do produto' => 'required|string|max:50',
            'descrição' => 'required|string|max:50',
            'preço' => 'required|integer',
            'quantidade' => 'required|integer',
            'categoria_id' => 'required',
        ];
        $data = $request->validate($rules);

        if ($request->hasFile('imagem')) {
            $data['foto'] = $request->file['imagem']->store('produtos', 'public');
        }
        Produto::create($data);

        return redirect()->route('produto.index')->with('success', 'produto cadastrado com sucesso');
    }


    public function show($id)
    {
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
