<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemoController;
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

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', 'App\\Http\\Controllers\\MemoController@show');
Route::get('edit/{edit_id}', 'App\\Http\\Controllers\\MemoController@getEdit');
Route::post('/add', 'App\\Http\\Controllers\\MemoController@add');
Route::post('/delete', 'App\\Http\\Controllers\\MemoController@delete');
