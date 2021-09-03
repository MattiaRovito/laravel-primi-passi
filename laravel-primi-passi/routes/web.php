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
    return view('hello');
})->name('hello');



Route::get('/home', function () {
    $data = [
        'presentazione' => 'Ciao! Questa è la nostra pagina web!'
    ];
    return view('home', $data);
})->name('pagina-web');


Route::get('/proposte', function () {
    $data = [
        'vetrine' => ['Pacchetto HTML', 'Pacchetto HTML-CSS', 'Pacchetto HTML-CSS-JS', 'Pacchetto HTML-CSS-JS-PHP']
    ];
    return view('proposte', $data);
})->name('cosa-proponiamo');


Route::get('/indirizzo', function () {
    $data = [
        'sito' => 'www.boolean.careers',
        'mail' => 'boolean.careers@gmail.com'
    ];
    return view('indirizzo', $data);
})->name('indirizzo-ip');