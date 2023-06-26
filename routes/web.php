<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $nome = "Alberto";
    $idade = "56";
    $arr = [10,20,30,40,50];

    return view('welcome', 
        [   
            'nome' => $nome,
            'idade' => $idade,
            'profissao' => "Developer",
            'arr' => $arr
        ]);
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/product/{id?}', function ($id) {
    return view('product', ['id' => $id]);
});

