<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdditionController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AdditionController::class, 'index']);

Route::post('/count', [AdditionController::class, 'count'])->name('count');

?>
