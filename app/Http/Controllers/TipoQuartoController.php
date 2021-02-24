<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoQuarto;

class TipoQuartoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TipoQuarto::get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!isset($request->nome)){
            throw "O campo nome é obrigatório.";
        }
        return TipoQuarto::create(['nome' => $request->nome]);
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
            throw "O campo id é obrigatório.";
        }
        return TipoQuarto::find($request->id);
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
        if (!isset($request->id, $request->nome)){
            throw "Os campos id e nome são obrigatórios.";
        }
        return TipoQuarto::where('id', $request->id)->update(['nome' => $request->nome]);
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
            throw "O campo id é obrigatório.";
        }
        return TipoQuarto::destroy($request->id);
    }
}
