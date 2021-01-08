<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $comics = config('comics');
    $data= [
        'comics' => $comics
    ];
   // per stampare la variabile =>  dd($comics);
    return view('home', $data);
})->name('home');



Route::get('/single-p/{id}', function($id) {
    // recupero tutti i fumetti
    $comics = config('comics');
    // verifico che l'id sia una chiave valida
    if(array_key_exists($id, $comics)) {
        // recupero il fumetto corrispondente all'id presente nell'url
        $fumetto = $comics[$id];
        $data = [
            'comic' => $fumetto
        ];
        return view('single-product', $data);
    }
    abort(404);
})->name('comic-details');
