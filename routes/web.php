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

Route::get('/', 'HomeController@showHome');

Route::get('/about-us', 'HomeController@showAboutUs');

Route::get('/products', 'HomeController@showProducts');



Route::get('/blog/artikel/{id}','BlogController@showArtikel');


Route::get('/contact', function()
{
    return 'Contact!';
});

Route::get('/producten', function()
{
    return 'Hier staan straks mijn producten';
});

// Opdracht 3
Route::get('/artikel/{name}', function() {
    //
})->where('name', '[A-Za-z]+');
// Einde opdracht 3

route::prefix('mijn-account')->group(function(){
  Route::get('instellingen', function(){ return 'instellingen'; });
  Route::get('bestellingen', function(){ return 'bestellingen'; });

});

Route::get('/producten', 'PageController@index');
Route::get('/dit/is/een/lange-url/zeg', 'PageController@LongUrl');
Route::redirect('/korte-url', '/dit/is/een/lange-url/zeg');
