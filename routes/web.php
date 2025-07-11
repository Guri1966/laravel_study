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
//ブログ一覧を表示（名前をblogsと名付ける)

Route::get('/', 'App\\Http\\Controllers\\BlogController@showList')->name('blogs');

// Route::get('/', 'App\\Http\\Controllers\\MemoController@show');

// Route::post('/add', 'App\\Http\\Controllers\\MemoController@add');
