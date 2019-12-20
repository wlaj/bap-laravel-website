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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/blog/artikel/{id}','BlogController@showArtikel');


Route::get('/contact', function()
{
    return 'Contact!';
});

Route::get('/producten', function()
{
    return 'Hier staan straks mijn producten';
});

Route::get('/producten', 'PageController@index');
Route::get('/dit/is/een/lange-url/zeg', 'PageController@LongUrl');
Route::redirect('/korte-url', '/dit/is/een/lange-url/zeg');
