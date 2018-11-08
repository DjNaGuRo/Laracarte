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
use App\Mail\ContactMessageCreated;

Route::get('/',[
	'as' => 'home',
	'uses' => 'PageController@home'
]);

Route::get('/test-email',function ()
{
	return new ContactMessageCreated('DjNaGuRo', 'nanaguyrostan@yahoo.fr', 'Test mailing sending');
});

Route::get('/about',[
	'as' => 'about',
	'uses' => 'PageController@about'
]);

Route::get('/contact', 'ContactController@create')->name('contacts.create');
Route::post('/contact', 'ContactController@store')->name('contacts.store');