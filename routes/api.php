<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/tickets', 'TicketController@all')->name('ticket.all');

Route::post('/tickets', 'TicketController@store')->name('ticket.store');

Route::get('/tickets/{id}', 'TicketkController@show')->name('ticket.show');

Route::put('/tickets/{id}', 'TicketkController@update')->name('ticket.update');

Route::delete('/tickets/{task}', 'TicketkController@destory')->name('ticket.destroy');
