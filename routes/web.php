<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('content');
})->name('contact');

Route::post('/contact/submit',
    "\App\Http\Controllers\ContactController@submit"
)->name('contact-form');

Route::get('/contact/all',
    "\App\Http\Controllers\ContactController@allData"
)->name('contact-data');

Route::get('/contact/all/{id}',
    "\App\Http\Controllers\ContactController@oneMessage"
)->name('one-message');

Route::get('/contact/update/{id}',
    "\App\Http\Controllers\ContactController@updateMessage"
)->name('update-contact');

Route::post('/contact/update/submit/{id}',
    "\App\Http\Controllers\ContactController@updateMessageSubmit"
)->name('update-contact-submit');

Route::get('/contact/delete/{id}',
    "\App\Http\Controllers\ContactController@deleteMessage"
)->name('delete-contact');
