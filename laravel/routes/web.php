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
	    return view('welcome')->with('swiper', 'swiper.index');
	})->name('index');

	Route::get('/about', function () {
	    return view('pages.about')->with('swiper', 'swiper.about');
	})->name('about');

	Route::get('/contacts', function () {
	    return view('pages.contacts')->with('swiper', 'swiper.contacts');
	})->name('contacts');

	Route::get('/services', function () {
	    return view('pages.services')->with('swiper', 'swiper.services');
	})->name('services');

	Route::get('/privacity', function () {
	    return view('pages.privacity')->with('swiper', 'swiper.privacity');
	})->name('privacity');
// ABOUT
Route::get('/weare', function () {
	    return view('pages.about.weare')->with('swiper', 'swiper.services');
	})->name('about.weare');

	Route::get('/history', function () {
	    return view('pages.about.history')->with('swiper', 'swiper.services');
	})->name('about.history');

	Route::get('/governance', function () {
	    return view('pages.about.governance')->with('swiper', 'swiper.services');
	})->name('about.governance');


// SERVICIOS
	Route::get('/medica', function () {
	    return view('pages.services.medica')->with('swiper', 'swiper.services');
	})->name('services.medica');

	Route::get('/psychology', function () {
	    return view('pages.services.psychology')->with('swiper', 'swiper.services');
	})->name('services.psychology');

	Route::get('/dental', function () {
	    return view('pages.services.dental')->with('swiper', 'swiper.services');
	})->name('services.dental');

	Route::get('/newStart', function () {
	    return view('pages.services.newStart')->with('swiper', 'swiper.services');
	})->name('services.newStart');

	Route::get('/depresion', function () {
	    return view('pages.services.depresion')->with('swiper', 'swiper.services');
	})->name('services.depresion');

	Route::get('/internment', function () {
	    return view('pages.services.internment')->with('swiper', 'swiper.services');
	})->name('services.internment');

	Route::get('/healthy', function () {
	    return view('pages.services.healthy')->with('swiper', 'swiper.services');
	})->name('services.healthy');

	Route::get('/formation', function () {
	    return view('pages.services.formation')->with('swiper', 'swiper.services');
	})->name('services.formation');

	Route::get('/healthexpo', function () {
	    return view('pages.services.healthexpo')->with('swiper', 'swiper.services');
	})->name('services.healthexpo');

