<?php
 Route::view('/', 'landing.index')-> name('index');
 Route::view('/', 'home')->name('home');
 Route::view('/about', 'about')->name('about');
 Route::view('/contact', 'contact')->name('contact');
