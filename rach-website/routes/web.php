<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use Illuminate\Support\Facades\Route;

// Главная страница
Route::get('/', [HomeController::class, 'index'])->name('home');

// Публичные страницы
Route::get('/about', [PublicController::class, 'about'])->name('about');
Route::get('/media-about-us', [PublicController::class, 'mediaAboutUs'])->name('media-about-us');
Route::get('/international-cooperation', [PublicController::class, 'internationalCooperation'])->name('international-cooperation');
Route::get('/public-offer', [PublicController::class, 'publicOffer'])->name('public-offer');

Route::get('/departments', [PublicController::class, 'departments'])->name('departments');
Route::get('/departments/{department}', [PublicController::class, 'departmentShow'])->name('departments.show');

Route::get('/news', [PublicController::class, 'news'])->name('news');
Route::get('/news/{news}', [PublicController::class, 'newsShow'])->name('news.show');

Route::get('/events', [PublicController::class, 'events'])->name('events');

Route::get('/conferences', [PublicController::class, 'conferences'])->name('conferences');
Route::get('/conferences/{conference}', [PublicController::class, 'conferenceShow'])->name('conferences.show');

Route::get('/publications', [PublicController::class, 'publications'])->name('publications');
Route::get('/publications/{publication}', [PublicController::class, 'publicationShow'])->name('publications.show');

Route::get('/projects', [PublicController::class, 'projects'])->name('projects');
Route::get('/projects/{project}', [PublicController::class, 'projectShow'])->name('projects.show');

Route::get('/partners', [PublicController::class, 'partners'])->name('partners');
Route::get('/partners/{partner}', [PublicController::class, 'partnerShow'])->name('partners.show');

Route::get('/membership', [PublicController::class, 'membership'])->name('membership');

// Личный кабинет
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Профиль пользователя
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Админ-панель
Route::prefix('admin')->name('admin.')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    
    Route::resource('news', AdminNewsController::class);
});

require __DIR__.'/auth.php';
