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

Route::get('/', [MemoController::class, 'show']);
Route::get('/edit/{edit_id}', [MemoController::class, 'getEdit']);
Route::post('/add', [MemoController::class, 'add']);
Route::post('/delete', [MemoController::class, 'delete']);
Route::post('/update', [MemoController::class, 'postEdit']);
