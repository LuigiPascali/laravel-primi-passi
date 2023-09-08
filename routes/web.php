<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    $title = "About";
    $aboutContent = "This is the about page content.";
    return view('about', compact('title', 'aboutContent'));
});

Route::get('/contact', function () {
    $title = "Contact";
    $contactInfo = "Contact us at example@example.com";
    return view('contact', compact('title', 'contactInfo'));
});

Route::get('/', function () {
    $message = "Primo paragrafo scritto con Laravel";
    return view('home', compact('message'));
});

