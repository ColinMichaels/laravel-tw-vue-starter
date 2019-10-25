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

use Illuminate\Http\Resources\Json\Resource;

Route::get( '/', 'HomeController@index' );
Auth::routes();

Route::get( '/home', 'HomeController@index' )->name( 'home' );

Route::resources( [
    'games'   => 'GameController',
    'decks'   => 'DeckController',
    'players' => 'PlayerController',
    'cards'   => 'CardController'
] );


