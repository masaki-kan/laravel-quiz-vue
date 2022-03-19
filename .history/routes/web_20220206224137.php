<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     // return view('welcome');
//     return view('vue');
// });

Route::get('/', function () {
    return view('index');
});

Route::get('/quiz', function () {
    return view('quiz.index');
});

Route::get('/test', function () {
    return view('test.index');
});

Route::get('/register', function () {
    return view('auth.register.index');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
