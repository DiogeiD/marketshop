<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Produto;

Route::get('/home', function () {
    return view('welcome');
});

//Route::view('/','home' ); 

Route::get('/', function () {
   // dd(Produto::all());


   $listaProdutos = Produto::all();

   return view('home', compact('listaProdutos'));

 });

Route::view('/cria-conta','cria-conta' ); 

Route::view('/test','test' ); 

Route::post('/salva-usuario',function (Request $request) {
    dd($request);
    $usuario = new User();
    $usuario->name = $request->nome;
    $usuario->email = $request->email; 
    $usuario->password = $request->senha;
    $usuario->save();
    dd("Cauvo com susseço!!");

})->name('salva-usuario');

//-----------------------------------Escreveu algo-----------------------------------

Route::view('/cadastra-produto','cadastra-produto' ); 

Route::post('/salva-produto',function (Request $request) {
    dd($request);
    $produto = new Produto();
    $produto->nome = $request->nome;
    $produto->descricao = $request->descricao; 
    $produto->valor = $request->valor;

    //pega o arquivo enviado
    $file = request()->file('foto');
    //salva na pasta fotos, subpasta produtos
    $foto = $file->store('produtos', ['disk' => 'fotos']);

    //adiciona foto ao produto
    $produto->foto = $foto;

    //pega id do usuario que salvou a foto

    $produto->user_id = 1; //comentou mais algo que não sei


    //$produto->save();
    dd("Cauvo com susseço!!");

})->name('salva-produto');