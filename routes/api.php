<?php

use Illuminate\Http\Request;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\MargemLucroController;
use App\Http\Controllers\ModoCompraController;
use App\Http\Controllers\MoedaController;
use App\Http\Controllers\TipoQuartoController;
use App\Http\Controllers\TarifaController;
use App\Http\Controllers\ValorFinalController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('hotel/criar', [HotelController::class, 'store']);

Route::post('hotel', [HotelController::class, 'index']);

Route::post('hotel/mostrar', [HotelController::class, 'show']);

Route::post('hotel/atualizar', [HotelController::class, 'update']);

Route::post('hotel/excluir', [HotelController::class, 'destroy']);

Route::post('margem_lucro/criar', [MargemLucroController::class, 'store']);

Route::post('margem_lucro', [MargemLucroController::class, 'index']);

Route::post('margem_lucro/mostrar', [MargemLucroController::class, 'show']);

Route::post('margem_lucro/atualizar', [MargemLucroController::class, 'update']);

Route::post('margem_lucro/excluir', [MargemLucroController::class, 'destroy']);

Route::post('modo_compra/criar', [ModoCompraController::class, 'store']);

Route::post('modo_compra', [ModoCompraController::class, 'index']);

Route::post('modo_compra/mostrar', [ModoCompraController::class, 'show']);

Route::post('modo_compra/atualizar', [ModoCompraController::class, 'update']);

Route::post('modo_compra/excluir', [ModoCompraController::class, 'destroy']);

Route::post('moeda/criar', [MoedaController::class, 'store']);

Route::post('moeda', [MoedaController::class, 'index']);

Route::post('moeda/mostrar', [MoedaController::class, 'show']);

Route::post('moeda/atualizar', [MoedaController::class, 'update']);

Route::post('moeda/excluir', [MoedaController::class, 'destroy']);

Route::post('tipo_quarto/criar', [TipoQuartoController::class, 'store']);

Route::post('tipo_quarto', [TipoQuartoController::class, 'index']);

Route::post('tipo_quarto/mostrar', [TipoQuartoController::class, 'show']);

Route::post('tipo_quarto/atualizar', [TipoQuartoController::class, 'update']);

Route::post('tipo_quarto/excluir', [TipoQuartoController::class, 'destroy']);

Route::post('tarifa/criar', [TarifaController::class, 'store']);

Route::post('tarifa', [TarifaController::class, 'index']);

Route::post('tarifa/mostrar', [TarifaController::class, 'show']);

Route::post('tarifa/atualizar', [TarifaController::class, 'update']);

Route::post('tarifa/excluir', [TarifaController::class, 'destroy']);

Route::post('valor_final', [ValorFinalController::class, 'index']);