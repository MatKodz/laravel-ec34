<?php

use App\Models\Agence;

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
    return view('welcome');
});


Route::get('/agences/{slug}', function($slug) {

    return view("agence", [
        'agence' => Agence::findAgency($slug) 
    ]);
});