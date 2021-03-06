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
		return View::make('home.home');
	});
	Route::get(LaravelLocalization::transRoute('routes.about-us'), function() {
		return View::make('about-us.about-us');
	});
	Route::get(LaravelLocalization::transRoute('routes.services'), function() {
		return View::make('home.home');
	});
	/*Route::get(LaravelLocalization::transRoute('routes.web-pages'), function() {
		return View::make('home.home');
	});
	Route::get(LaravelLocalization::transRoute('routes.maintenance'), function() {
		return View::make('home.home');
	});*/
	Route::get(LaravelLocalization::transRoute('routes.services'), function() {
		return View::make('services.services');
	});
	Route::get(LaravelLocalization::transRoute('routes.creation'), function() {
		return View::make('services.single-service.creation');
	});
	Route::get(LaravelLocalization::transRoute('routes.domain'), function() {
		return View::make('services.single-service.domain');
	});
	Route::get(LaravelLocalization::transRoute('routes.hosting'), function() {
		return View::make('services.single-service.hosting');
	});
	Route::get(LaravelLocalization::transRoute('routes.seo'), function() {
		return View::make('services.single-service.seo');
	});
	Route::get(LaravelLocalization::transRoute('routes.stats'), function() {
		return View::make('services.single-service.stats');
	});
	Route::get(LaravelLocalization::transRoute('routes.assistance'), function() {
		return View::make('services.single-service.assistance');
	});
	Route::get(LaravelLocalization::transRoute('routes.projects'), function() {
		return View::make('projects.projects');
	});
	
	Route::get(LaravelLocalization::transRoute('routes.antzuolako8miliak'), function() {
		return View::make('projects.single-project.antzuolako8miliak');
	});
	Route::get(LaravelLocalization::transRoute('routes.contact'), function() {
		return View::make('contact.contact');
	});
	Route::post(LaravelLocalization::transRoute('routes.contact'), ['as' => 'routes.contact','uses' => 'Contact\ContactController@store']);
	Route::post('/passGenerator', ['as' => 'passGenerator','uses' => 'PassGenerator\PassGeneratorController@store' ]);

});
