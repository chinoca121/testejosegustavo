<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assignedst to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post("/enviar", function (Illuminate\Http\Request $request){
    $produtos = new App\Models\produtos();
    $produtos-> Nome =$request->get("nome");
    $produtos-> categoria =$request->get("categoria");
    $produtos-> preço =$request->get("preco");
    $produtos-> descrição =$request->get("descricao");

    $produtos->save();

    echo "Inserido com sucesso";

});

Route::get('/lista', function () {
    return view('lista', array('produtos' => App\Models\Produtos::all()));
});
