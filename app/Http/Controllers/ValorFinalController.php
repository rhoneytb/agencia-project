<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MargemLucro;
use App\Models\Tarifa;
use App\Models\Moeda;
use App\Models\ModoCompra;

class ValorFinalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (!isset($request->modo_compra_id, $request->moeda_id, $request->hotel_id, $request->tipo_quarto_id, $request->diarias)) {
            return "Os seguintes campos são obrigatórios: modo_compra_id, moeda_id, hotel_id, tipo_quarto_id, diarias.";
        }

        $tarifa = Tarifa::where('tipo_quarto_id', $request->tipo_quarto_id)
                        ->where('hotel_id', $request->hotel_id)
                        ->first();

        if ( empty($tarifa) ) {
            return "Não foi encontrada tarifa cadastrada para esse hotel com esse tipo de quarto.";
        }

        $modoCompra = ModoCompra::where('id', $request->modo_compra_id)->first();
        //dd($modoCompra);
        if ( !empty( $modoCompra ) ) {
            $percentualAumento = ( $modoCompra->percentual_aumento + 100 ) / 100;
        } else {
            return "Modo de compra não encontrado.";
        }

        $moeda = Moeda::where('id', $request->moeda_id)->first();

        if ( !empty( $moeda ) ) {
            $cambio = $moeda->cambio;
        } else {
            $cambio = 1;
        }

        $margem = MargemLucro::where('modo_compra_id', $request->modo_compra_id)
                             ->where('moeda_id', $request->moeda_id)
                             ->first();

        if ( !empty($margem) ) {
            $valorMargem = ( $margem->percentual + 100 ) / 100;
        } else {
            $valorMargem = 1;
        }
        
        $valorFinal = $valorMargem * $percentualAumento * $tarifa->valor * $cambio * $request->diarias;
        //dd($valorMargem ." " . $tarifa->valor ." " . $cambio);
        return "R$ " . round ( $valorFinal , 2 );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!isset($request->modo_compra_id, $request->percentual, $request->moeda_id)) {
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
