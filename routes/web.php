<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sandiController;
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
    return view('index');
});

Route::get('/', function () {
    return view('login');
});

Route::get('/', function () {
    return view('produk');
});


// Route::get('/', [sandiController::class, 'index']
//     );