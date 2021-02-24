<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MargemLucro;

class MargemLucroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return MargemLucro::get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!isset($request->modo_compra_id, $request->percentual, $request->moeda_id)){
            return "Os seguintes campos são obrigatórios: modo_compra_id, percentual, moeda_id.";
        }
        return MargemLucro::create(['modo_compra_id' => $request->modo_compra_id,
                                    'percentual' => $request->percentual,
                                    'moeda_id' => $request->moeda_id]);
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
        return MargemLucro::find($request->id);
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
        if (!isset($request->modo_compra_id, $request->percentual, $request->moeda_id, $request->id)){
            return "Os seguintes campos são obrigatórios: modo_compra_id, percentual, moeda_id, id.";
        }
        return MargemLucro::where('id', $request->id)->update(['modo_compra_id' => $request->modo_compra_id,
                                                               'percentual' => $request->percentual,
                                                               'moeda_id' => $request->moeda_id]);
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
        return MargemLucro::destroy($request->id);
    }
}
