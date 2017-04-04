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
		'middleware' => [ 'localeSessionRedirect', 'localizationRedirect' ,'localize']
	],
	function()
	{
		/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
		Route::get('/', function () {
	    return view('welcome')->with('swiper', 'swiper.index');
	})->name('index');

	Route::get(LaravelLocalization::transRoute('route.about'), function () {
	    return view('pages.about')->with('swiper', 'swiper.about');
	})->name('about');

	Route::get(LaravelLocalization::transRoute('route.contacts'), function () {
	    return view('pages.contacts')->with('swiper', 'swiper.contacts');
	})->name('contacts');

	Route::get(LaravelLocalization::transRoute('route.services'), function () {
	    return view('pages.services')->with('swiper', 'swiper.services');
	})->name('services');

	Route::get(LaravelLocalization::transRoute('route.galery'), function () {
	    return view('pages.galery')->with('swiper', 'swiper.galery');
	})->name('galery');

	Route::get(LaravelLocalization::transRoute('route.privacity'), function () {
	    return view('pages.privacity')->with('swiper', 'swiper.privacity');
	})->name('privacity');
// ABOUT
	Route::get(LaravelLocalization::transRoute('route.weare'), function () {
	    return view('pages.about.weare')->with('swiper', 'swiper.about');
	})->name('about.weare');

	Route::get(LaravelLocalization::transRoute('route.history'), function () {
	    return view('pages.about.history')->with('swiper', 'swiper.about');
	})->name('about.history');

	Route::get(LaravelLocalization::transRoute('route.governance'), function () {
	    return view('pages.about.governance')->with('swiper', 'swiper.about');
	})->name('about.governance');


// SERVICIOS
	Route::get(LaravelLocalization::transRoute('route.medica'), function () {
	    return view('pages.services.medica')->with('swiper', 'swiper.services');
	})->name('services.medica');

	Route::get(LaravelLocalization::transRoute('route.psychology'), function () {
	    return view('pages.services.psychology')->with('swiper', 'swiper.services');
	})->name('services.psychology');

	Route::get(LaravelLocalization::transRoute('route.dental'), function () {
	    return view('pages.services.dental')->with('swiper', 'swiper.services');
	})->name('services.dental');

	Route::get('/newStart', function () {
	    return view('pages.services.newStart')->with('swiper', 'swiper.services');
	})->name('services.newStart');

	Route::get(LaravelLocalization::transRoute('route.depresion'), function () {
	    return view('pages.services.depresion')->with('swiper', 'swiper.services');
	})->name('services.depresion');

	Route::get(LaravelLocalization::transRoute('route.internment'), function () {
	    return view('pages.services.internment')->with('swiper', 'swiper.services');
	})->name('services.internment');

	Route::get(LaravelLocalization::transRoute('route.healthy'), function () {
	    return view('pages.services.healthy')->with('swiper', 'swiper.services');
	})->name('services.healthy');

	Route::get(LaravelLocalization::transRoute('route.formation'), function () {
	    return view('pages.services.formation')->with('swiper', 'swiper.services');
	})->name('services.formation');

	Route::get(LaravelLocalization::transRoute('route.healthexpo'), function () {
	    return view('pages.services.healthexpo')->with('swiper', 'swiper.services');
	})->name('services.healthexpo');
	});

