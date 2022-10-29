<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteIndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = [
            ['nome' => 'Teste 1', 'idade' => '1'],
            ['nome' => 'Teste 2', 'idade' => '2'],
            ['nome' => 'Teste 3', 'idade' => '3'],
            ['nome' => 'Teste 4', 'idade' => '4'],
            ['nome' => 'Teste 5', 'idade' => '5'],
            ['nome' => 'Teste 6', 'idade' => '6'],
            ['nome' => 'Teste 7', 'idade' => '7'],
            ['nome' => 'Teste 8', 'idade' => '8'],
            ['nome' => 'Teste 9', 'idade' => '9'],
            ['nome' => 'Teste 10', 'idade' => '10'],
        ];

        return view('site.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
