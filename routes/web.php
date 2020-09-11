<?php

use Illuminate\Support\Facades\Route;
use ProgramsController;

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

    $data = [
        ['id' => 1, 'name' => 'isq', 'img' => asset('img/isq.png')],
        ['id' => 2, 'name' => 'Truehero'],
        ['id' => 3, 'name' => 'Truecoder'],
    ];

    return view('pages/home', ['data' => $data]);
});
