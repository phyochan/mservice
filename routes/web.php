<?php

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

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/api/testpoint/all', function () {

     return Response::json(DB::table('testpoints')->orderBy('id','desc')->get());

});

Route::get('/api/firmware/all', function () {

    return Response::json(DB::table('firmware')->orderBy('id','desc')->get());

});

