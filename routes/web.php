<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Error page if any page not found
Route::fallback(function () {
    return response()->view('error', [], 404);
});

require __DIR__ . '/auth.php';



// =======================================================================================================================
// Admin Routes ==========================================================================================================
// =======================================================================================================================
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->group(function () {


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    Route::get('/admin-home', function () {
        return view('admin-home');
    })->name('admin-home');


    Route::get('/admin-about', function () {
        return view('admin-about');
    })->name('admin-about');


    Route::get('/admin-services', function () {
        return view('admin-services');
    })->name('admin-services');


    Route::get('/admin-specialized', function () {
        return view('admin-specialized');
    })->name('admin-specialized');


    Route::get('/admin-projects', function () {
        return view('admin-projects');
    })->name('admin-projects');
    


    Route::get('/admin-blogs', function () {
        return view('admin-blogs');
    })->name('admin-blogs');

    

    Route::get('/admin-inquiries', function () {
        return view('admin-inquiries');
    })->name('admin-inquiries');


});



// =======================================================================================================================
// User Routes ===========================================================================================================
// =======================================================================================================================
Route::get('/', function () {
    return view('user-home');
});

Route::get('/about', function () {
    return view('user-about');
});

Route::get('/services', function () {
    return view('user-services');
});

Route::get('/projects', function () {
    return view('user-projects');
});

Route::get('/blogs', function () {
    return view('user-blogs');
});

Route::get('/single-blog', function () {
    return view('user-single-blog');
});

Route::get('/privacy-policy', function () {
    return view('user-privacy-policy');
});


Route::get('/contact', function () {
    return view('user-contact');
});
