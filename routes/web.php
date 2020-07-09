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

Route::get('/', 'FrontendController@index')->name('home');
Route::get('/news', 'FrontendController@news')->name('news');
Route::get('/contact', 'FrontendController@contact')->name('contact');
Route::post('/contact/send', 'ContactController@send')->name('contact.send');

Route::get('/news/{slug}', 'FrontendController@newsSingle')->name('news.single');
Route::get('/about/{slug}', 'FrontendController@aboutSingle')->name('about.single');
Route::get('/business/{slug}', 'FrontendController@businessSingle')->name('business.single');

Route::get('/career', 'FrontendController@career')->name('career');
Route::get('/career/{slug}', 'FrontendController@careerSingle')->name('career.single');

Route::get('/facility/{slug}', 'FrontendController@facilitySingle')->name('facility.single');
Route::get('/event', 'FrontendController@event')->name('event');
Route::get('/event/{slug}', 'FrontendController@eventSingle')->name('event.single');

Route::get('/gallery', 'FrontendController@gallery')->name('gallery');

Route::get('/job/category', 'FrontendController@careerFromCategory')->name('career.category');

Route::get('/management', 'FrontendController@management')->name('management');