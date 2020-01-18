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

// hoofdpaginas

Route::get('/', 'HomeController@showHome')->name('homepage');

Route::get('/about-us', 'HomeController@showAboutUs')->name('about-us');

Route::get('/browsers', 'HomeController@showBrowsers')->name('browsers');

Route::get('/contact', 'HomeController@showContact')->name('contact');

Route::get('/browsers/{name}','HomeController@showName')->name('show-name');



Route::get('/blog/artikel/{id}','BlogController@showArtikel');

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
