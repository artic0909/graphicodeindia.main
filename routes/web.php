<?php

use App\Http\Controllers\AdminAboutDescController;
use App\Http\Controllers\AdminAboutFAQController;
use App\Http\Controllers\AdminMarqueeTextController;
use App\Http\Controllers\AdminNumbersController;
use App\Http\Controllers\AdminPartnerController;
use App\Http\Controllers\AdminServiceController;
use App\Http\Controllers\AdminVideoDescControlller;
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


    // Admin---Home---Routes--->
    Route::get('/admin-home', function () {
        return view('admin-home');
    })->name('admin-home');

    Route::get('/admin-home', [AdminVideoDescControlller::class, 'index'])->name('admin-home');
    Route::post('/admin-home', [AdminVideoDescControlller::class, 'store'])->name('admin-home.store');
    Route::put('/admin-home/{id}', [AdminVideoDescControlller::class, 'update'])->name('admin-home.update');
    Route::delete('/admin-home/delete/{id}', [AdminVideoDescControlller::class, 'destroy'])->name('admin-home.delete');

    Route::post('/admin-home/num', [AdminNumbersController::class, 'store'])->name('admin-home.num.store');
    Route::put('/admin-home/num/{id}', [AdminNumbersController::class, 'update'])->name('admin-home.num.update');
    Route::delete('/admin-home/num/delete/{id}', [AdminNumbersController::class, 'destroy'])->name('admin-home.num.delete');

    Route::post('/admin-home/partner', [AdminPartnerController::class, 'store'])->name('admin-home.partner.store');
    Route::put('/admin-home/partner/{id}', [AdminPartnerController::class, 'update'])->name('admin-home.partner.update');
    Route::delete('/admin-home/partner/delete/{id}', [AdminPartnerController::class, 'destroy'])->name('admin-home.partner.delete');
    // Admin---Home---Routes--->






    // Admin---About---Routes--->
    Route::get('/admin-about', function () {
        return view('admin-about');
    })->name('admin-about');

    Route::get('/admin-about', [AdminMarqueeTextController::class, 'index'])->name('admin-about');
    Route::post('/admin-about', [AdminMarqueeTextController::class, 'store'])->name('admin-about.store');
    Route::put('/admin-about/{id}', [AdminMarqueeTextController::class, 'update'])->name('admin-about.update');
    Route::delete('/admin-about/delete/{id}', [AdminMarqueeTextController::class, 'destroy'])->name('admin-about.delete');

    Route::post('/admin-about/desc', [AdminAboutDescController::class, 'store'])->name('admin-about.desc.store');
    Route::put('/admin-about/desc/{id}', [AdminAboutDescController::class, 'update'])->name('admin-about.desc.update');
    Route::delete('/admin-about/desc/delete/{id}', [AdminAboutDescController::class, 'destroy'])->name('admin-about.desc.delete');

    Route::post('/admin-about/faq', [AdminAboutFAQController::class, 'store'])->name('admin-about.faq.store');
    Route::put('/admin-about/faq/{id}', [AdminAboutFAQController::class, 'update'])->name('admin-about.faq.update');
    Route::delete('/admin-about/faq/delete/{id}', [AdminAboutFAQController::class, 'destroy'])->name('admin-about.faq.delete');
    // Admin---About---Routes--->



    // Admin---About---Routes--->
    Route::get('/admin-services', function () {
        return view('admin-services');
    })->name('admin-services');

    Route::get('/admin-services', [AdminServiceController::class, 'index'])->name('admin-services');
    Route::post('/admin-services', [AdminServiceController::class, 'store'])->name('admin-services.store');
    Route::put('/admin-services/{id}', [AdminServiceController::class, 'update'])->name('admin-services.update');
    Route::delete('/admin-services/delete/{id}', [AdminServiceController::class, 'destroy'])->name('admin-services.delete');
    // Admin---About---Routes--->


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
