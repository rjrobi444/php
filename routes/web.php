<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// frontend routes <start>=================================================================================================================

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/welcome', function () {
    return view('welcome');
});


// /frontend routes>>>>> <end>>>>>>========================================================================================================


// ----------------


// backend routes===========================================================================================================================




// deshboard routes++++++++++++++++++++++++++++++++++++++

Route::get('/dashboard', function () {
    return view('backend.page.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard2', function () {
    return view('backend.page.index2');
})->middleware(['auth', 'verified'])->name('dashboard2');

Route::get('/dashboard3', function () {
    return view('backend.page.index3');
})->middleware(['auth', 'verified'])->name('dashboard3');

// deshboard routes end++++++++++++++++++++++++++++++++++++++

// ----------------

// theme routes start++++++++++++++++++++++++++++++++++++++++

Route::get('/theme', function () {
    return view('backend.page.generate.theme');
})->middleware(['auth', 'verified'])->name('theme');


// theme routes end++++++++++++++++++++++++++++++++++++++++++

// -----------------

// widget routes start +++++++++++++++++++++++++++++++++++++++

Route::get('/small-box', function () {
    return view('backend.page.widgets.small-box');
})->middleware(['auth', 'verified'])->name('small-box');

Route::get('/info-box', function () {
    return view('backend.page.widgets.info-box');
})->middleware(['auth', 'verified'])->name('info-box');

Route::get('/cards', function () {
    return view('backend.page.widgets.cards');
})->middleware(['auth', 'verified'])->name('cards');

// widget routes end +++++++++++++++++++++++++++++++++++++++

// ----------------

// layout routes start +++++++++++++++++++++++++++++++++++++++

Route::get('/layout/unfixed-sidebar', function () {
    return view('backend.page.layout.unfixed-sidebar');
})->middleware(['auth', 'verified'])->name('layout.unfixed-sidebar');

Route::get('/layout/fixed-sidebar', function () {
    return view('backend.page.layout.fixed-sidebar');
})->middleware(['auth', 'verified'])->name('layout.fixed-sidebar');

Route::get('/layout/layout-custom-area', function () {
    return view('backend.page.layout.layout-custom-area');
})->middleware(['auth', 'verified'])->name('layout.layout-custom-area');

Route::get('/layout/layout-rtl', function () {
    return view('backend.page.layout.layout-rtl');
})->middleware(['auth', 'verified'])->name('layout.layout-rtl');

Route::get('/layout/logo-switch', function () {
    return view('backend.page.layout.logo-switch');
})->middleware(['auth', 'verified'])->name('layout.logo-switch');

Route::get('/layout/sidebar-mini', function () {
    return view('backend.page.layout.sidebar-mini');
})->middleware(['auth', 'verified'])->name('layout.sidebar-mini');

Route::get('/layout/collapsed-sidebar', function () {
    return view('backend.page.layout.collapsed-sidebar');
})->middleware(['auth', 'verified'])->name('layout.collapsed-sidebar');


// layout routes end +++++++++++++++++++++++++++++++++++++++

// ----------------

// UL routes start ++++++++++++++++++++++++++++++++++++++++

Route::get('/general', function () {
    return view('backend.page.UI.general');
})->middleware(['auth', 'verified'])->name('general');

Route::get('/icons', function () {
    return view('backend.page.UI.icons');
})->middleware(['auth', 'verified'])->name('icons');

Route::get('/timeline', function () {
    return view('backend.page.UI.timeline');
})->middleware(['auth', 'verified'])->name('timeline');

// UL routes end ++++++++++++++++++++++++++++++++++++++++

// ----------------

// forms route start ++++++++++++++++++++++++++++++++++++++++

Route::get('/forms/general', function () {
    return view('backend.page.forms.general');
})->middleware(['auth', 'verified'])->name('/forms/general');

// forms route end ++++++++++++++++++++++++++++++++++++++++++

// ----------------

// tables route start++++++++++++++++++++++++++++++++++++++++

Route::get('/tables/simple', function () {
    return view('backend.page.tables.simple');
})->middleware(['auth', 'verified'])->name('/tables/simple');

// tables route end++++++++++++++++++++++++++++++++++++++++++

// ----------------

// product route start++++++++++++++++++++++++++++++++++++++++

// Route::get('/product-upload', function () {
//     return view('backend.page.product.product-upload');
// })->middleware(['auth', 'verified'])->name('/product-upload');

// product route end++++++++++++++++++++++++++++++++++++++++++








Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile/password', [ProfileController::class, 'password'])->name('profile.password');
    Route::patch('/profile/password', [ProfileController::class, 'passwordUpdate'])->name('profile.password.update');
    Route::get('/profile/notifications', [ProfileController::class, 'notifications'])->name('profile.notifications');

    // product conteoller route==========================================================

    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products/store', [ProductController::class,'store'])->name('products.store');
    Route::get('/products/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/update/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::get('/products/delete/{id}', [ProductController::class, 'destroy'])->name('products.delete');
    
    
    
    // product conteoller route==========================================================


});

require __DIR__.'/auth.php';
