<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\RouteFileRegistrar;
use App\Http\Controllers\StudentController;

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

// Route::get('/greeting', function () {
//     return view('example');
// })->name('greeting');

// Route::get('/greeting/{name}', function ($name) {
//     return view('example', ['name' => $name]);
// });

Route::get('/greeting/{id}', [StudentController::class, 'show']);
