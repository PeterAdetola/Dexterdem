<?php

use App\AppHelpers;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Home\HeroController;

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

Route::get('/', function () {
    return view('public/index/index');
})->name('home');

Route::get('/dashboard', function () {
    // return view('dashboard');
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// --------------| Hero Routes |----------------------------------------
Route::controller(HeroController::class)->group(function () 
{
    // Route::get('/', 'Intropage')->name('intro');
    // Route::post('/save/hero', 'SaveHero')->name('save.hero');
    Route::patch('/update/hero', 'UpdateHero')->name('update.hero');

    // Route::get('/edit/slide/{id}', 'EditSlide')->name('edit.slide');
    Route::post('/delete/image/{id}', 'DeleteImage')->name('delete.image');
    Route::get('/view/images', 'ViewImages')->name('view.images');
    Route::post('/sort/slide', 'SortImage')->name('sort.slide');
    Route::post('/update/image', 'UpdateImage')->name('update.image');
    Route::post('/store/image', 'SaveSlide')->name('save.image');    
});


require __DIR__.'/auth.php';
