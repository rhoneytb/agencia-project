<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Moeda;

class MoedaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Moeda::get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!isset($request->nome, $request->cambio)){
            return "Os campos nome e cambio são obrigatórios.";
        }
        return Moeda::create(['nome' => $request->nome,
                              'cambio' => $request->cambio]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        if (!isset($request->id)){
            return "O campo id é obrigatório.";
        }
        return Moeda::find($request->id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if (!isset($request->nome, $request->cambio)){
            return "Os campos id, nome e cambio são obrigatórios.";
        }
        return Moeda::where('id', $request->id)->update(['nome' => $request->nome,
                                                         'cambio' => $request->cambio]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if (!isset($request->id)){
            return "O campo id é obrigatório.";
        }
        return Moeda::destroy($request->id);
    }
}
