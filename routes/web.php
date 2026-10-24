
<?php

use App\Models\Category;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SpecialistController;
use App\Http\Controllers\CustomerController;


Route::get('/', [CustomerController::class, 'index'])
    ->name('customer.home');

// ADMIN
Route::prefix('admin')->name('admin.')->group(function () {
    // Login
    Route::get('login', [AdminAuthController::class, 'showLogin'])->name('login');
    Route::post('login', [AdminAuthController::class, 'login']);

    // Dashboard
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // Logout
    Route::post('logout', [AdminAuthController::class, 'logout'])->name('logout');

    Route::resource('category', CategoryController::class);
    Route::resource('specialist', SpecialistController::class);
});













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


