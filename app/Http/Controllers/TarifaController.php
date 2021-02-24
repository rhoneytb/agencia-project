<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarifa;

class TarifaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Tarifa::get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!isset($request->tipo_quarto_id, $request->hotel_id, $request->moeda_id, $request->valor)){
            return "Os seguintes campos são obrigatórios: tipo_quarto_id, hotel_id, moeda_id, valor.";
        }
        return Tarifa::create(['tipo_quarto_id' => $request->tipo_quarto_id,
                               'hotel_id' => $request->hotel_id,
                               'moeda_id' => $request->moeda_id,
                               'valor' => $request->valor]);
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
        return Tarifa::find($request->id);
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
        if (!isset($request->tipo_quarto_id, $request->hotel_id, $request->moeda_id, $request->valor, $request->id)){
            return "Os seguintes campos são obrigatórios: tipo_quarto_id, hotel_id, moeda_id, valor, id.";
        }
        return Tarifa::where('id', $request->id)->update(['tipo_quarto_id' => $request->tipo_quarto_id,
                                                          'hotel_id' => $request->hotel_id,
                                                          'moeda_id' => $request->moeda_id,
                                                          'valor' => $request->valor]);
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
        return Tarifa::destroy($request->id);
    }
}
