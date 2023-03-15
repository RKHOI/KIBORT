<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Kibort;
use App\Models\pembeli;
use Spatie\LaravelIgnition\Solutions\UseDefaultValetDbCredentialsSolution;

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
    $data = Kibort::all();
    return view('index', ['data' => $data]);
});

Route::get('/pembeli', function () {
    $pembeli = pembeli::all();
    return view('pembeli', ['pembeli' => $pembeli]);
});

Route::get('/home', [UserController::class], 'home');
Route::get('/login', [UserController::class, 'login']);
