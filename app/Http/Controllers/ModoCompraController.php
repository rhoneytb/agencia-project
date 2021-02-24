<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModoCompra;

class ModoCompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ModoCompra::get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!isset($request->nome, $request->percentual_aumento)){
            return "Os campos nome e percentual_aumento são obrigatórios.";
        }
        return ModoCompra::create(['nome' => $request->nome,
                                   'percentual_aumento' => $request->percentual_aumento]);
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
        return ModoCompra::find($request->id);
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
        if (!isset($request->id, $request->nome, $request->percentual_aumento)){
            return "Os campos id, nome e percentual_aumento são obrigatórios.";
        }
        return ModoCompra::where('id', $request->id)->update(['nome' => $request->nome,
                                                              'percentual_aumento' => $request->percentual_aumento]);
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
        return ModoCompra::destroy($request->id);
    }
}
