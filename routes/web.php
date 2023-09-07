<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;

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

Route::get('/', [FrontendController::class,'frontshow'])->name('frontshow');
Route::get('/moviedetails/{id}', [FrontendController::class,'movieDetails'])->name('movieDetails');
Route::post('/insertreview', [FrontendController::class,'insertreview'])->name('insertreview');



Route::get('/admin', function () {
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['prefix'=>'/admin'],function(){
    Route::group(['prefix'=>'/origin'],function(){
        Route::get('/create','App\Http\Controllers\Backend\OriginController@create')->name('createorigin');
        Route::post('/insert','App\Http\Controllers\Backend\OriginController@store')->name('insert');
        Route::get('/manage','App\Http\Controllers\Backend\OriginController@index')->name('manageorigin');
        Route::get('/edit/{id}','App\Http\Controllers\Backend\OriginController@edit')->name('edit');
        Route::post('/update/{id}','App\Http\Controllers\Backend\OriginController@update')->name('update');
    });

    Route::group(['prefix'=>'/movies'],function(){
        Route::get('/create','App\Http\Controllers\Backend\MoviesController@create')->name('createmovie');
        Route::post('/insert','App\Http\Controllers\Backend\MoviesController@store')->name('insertmovie');
        Route::get('/manage','App\Http\Controllers\Backend\MoviesController@index')->name('managemovie');
        Route::get('/edit/{id}','App\Http\Controllers\Backend\MoviesController@edit')->name('editmovie');
        Route::post('/update/{id}','App\Http\Controllers\Backend\MoviesController@update')->name('updatemovie');
        Route::get('/delete/{id}','App\Http\Controllers\Backend\MoviesController@destroy')->name('deletemovie');
    });


});

require __DIR__.'/auth.php';
