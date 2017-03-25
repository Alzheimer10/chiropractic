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

// SERVICIOS
	Route::get('/colsulta-medica', function () {
	    return view('pages.services.colsultaMedica')->with('swiper', 'swiper.services');
	})->name('services.colsultaMedica');

	Route::get('/psicologia-clinica', function () {
	    return view('pages.services.psicologiaClinica')->with('swiper', 'swiper.services');
	})->name('services.psicologiaClinica');

	Route::get('/depresion', function () {
	    return view('pages.services.depresion')->with('swiper', 'swiper.services');
	})->name('services.depresion');

	Route::get('/dia-saludables', function () {
	    return view('pages.services.diaSaludables')->with('swiper', 'swiper.services');
	})->name('services.diaSaludables');

	Route::get('/dejar-fumar', function () {
	    return view('pages.services.dejarFumar')->with('swiper', 'swiper.services');
	})->name('services.dejarFumar');

	Route::get('/nutricion', function () {
	    return view('pages.services.nutricion')->with('swiper', 'swiper.services');
	})->name('services.nutricion');

	Route::get('/new-star', function () {
	    return view('pages.services.newStar')->with('swiper', 'swiper.services');
	})->name('services.newStar');

