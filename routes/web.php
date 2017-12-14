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


Route::group(
[
	'prefix' => LaravelLocalization::setLocale(),
	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
],
function()
{
	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
	Route::get('/', function()
	{
		//return View::make('home.home');
		return View::make('maintenance.maintenance');
	});

	Route::get('test',function(){
		return View::make('test');
	});

	Route::get('language/{lang}', function ($lang) {
     /**
       * whenever you change locale 
       * by passing language ISO code (like en, pl, pt-BR etc.)
       * add/update passed language to a session value with key 'locale'
       */
       Session::put('locale', $lang);
 
      /**
       * and now return back to a page 
       * on which you changed language
       */
       return back();
	})->name('langroute'); //this is route name - for ease of using it anywhere

});

