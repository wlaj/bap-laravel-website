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

Route::get('/photos', 'HomeController@showPhotos')->name('photos');

Route::get('/contact', 'HomeController@showContact')->name('contact');

Route::get('/gallery/{name}','HomeController@showName')->name('show-name');

Route::get('/post/upload', 'PostController@create')->name('photo.upload');
Route::post('/post/upload', 'PostController@store')->name('photo.store');

// Login

Route::get('/login', 'LoginController@index')->name('login');

// Route voor bedrijven ( later aanpassen )

Route::get('/companies', 'CompanyController@list')->name('company.list');
Route::get('/companies/{id}','CompanyController@details')->name('company.details');

// Route voor posts

Route::prefix('/user')->middleware('auth')->group(function () {
Route::get('/posts', 'PostController@index')->name('post.posts');
Route::get('/posts/{id}', 'PostController@show')->name('post.details');

// Niet werkende links ( voor nu )
Route::get('/post/create', 'Post@create');
Route::get('/post/create','Post@store')->name('post.details');
});


// Eerder gemaakte opdrachten

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

Route::get('/account', 'LoginController@index')->name('account');

Auth::routes();
