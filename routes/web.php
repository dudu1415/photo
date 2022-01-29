<?php

use App\Http\Controllers\ExerciseController;
use Illuminate\Support\Facades\Route;

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
    return view('wellcome');
});
Route::get('/images', function () {
    return view('images');
});
Route::get('/document', function () {
    return view('documents');
});
Route:

Route::post('/photo', [ExerciseController::class, 'photo']);
Route::post('/images', [ExerciseController::class, 'images']);
Route::post('/document', [ExerciseController::class, 'document']);
