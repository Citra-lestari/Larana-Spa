
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('customer.homepage');
})->name('customer.home');

Route::get('/all-treatment', function () {
    return view('customer.all-treatment');
})->name('customer.all-treatment');

Route::get('/all-packages', function () {
    return view('customer.all-packages');
})->name('customer.all-packages');

Route::get('/all-testimonial', function () {
    return view('customer.all-testimoni');
})->name('customer.all-testimonial');

Route::get('/all-blog', function () {
    return view('customer.all-blog');
})->name('customer.all-blog');

Route::get('/all-faq', function () {
    return view('customer.all-faq');
})->name('customer.all-faq');

Route::get('/all-terapist', function () {
    return view('customer.all-terapist');
})->name('customer.all-terapist');

Route::get('/all-gallery', function () {
    return view('customer.all-gallery');
})->name('customer.all-gallery');

Route::get('/detail-treatment', function () {
    return view('customer.detail-treatment');
})->name('customer.detail-treatment');

Route::get('/about-us', function () {
    return view('customer.about-us');
})->name('customer.about-us');

Route::get('/detail-blog', function () {
    return view('customer.detail-blog');
})->name('customer.detail-blog');
