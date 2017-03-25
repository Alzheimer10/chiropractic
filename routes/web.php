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
	    return view('pages.about')->with('swiper', 'swiper.about');;
	})->name('about');

	Route::get('/contacts', function () {
	    return view('pages.contacts')->with('swiper', 'swiper.contacts');;
	})->name('contacts');

	Route::get('/services', function () {
	    return view('pages.services')->with('swiper', 'swiper.services');;
	})->name('services');
