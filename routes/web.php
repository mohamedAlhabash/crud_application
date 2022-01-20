<?php

use App\Http\Controllers\postController;
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
Route::prefix('posts')->controller(postController::class)->group(function(){
    Route::get('','index');
    Route::get('/delete/{id}','delete')->name('delete');
    Route::get('/add','add')->name('add');
    Route::post('/add','store')->name('store');
    Route::get('/{id}/update','update')->name('update');
    Route::put('/{id}/update','change')->name('change');
});

// Route::get('/', function () {
//     return view('welcome');
// });
