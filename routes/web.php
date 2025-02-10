<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CompetitionController;
use App\Http\Controllers\CooperationController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AlbumController;

Route::get('/', [HomeController::class, 'index']);

// 關於我們
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/about/{id}', [AboutController::class, 'show'])->name('about.show');

// 教育課程
Route::get('/courses', [CourseController::class, 'index'])->name('courses');
Route::get('/courses/{id}', [CourseController::class, 'show'])->name('courses.show');

// 國際競賽
Route::get('/competitions', [CompetitionController::class, 'index'])->name('competitions');
Route::get('/competitions/{id}', [CompetitionController::class, 'show'])->name('competitions.show');

// 合作項目
Route::get('/cooperation', [CooperationController::class, 'index'])->name('cooperation');
Route::get('/cooperation/{id}', [CooperationController::class, 'show'])->name('cooperation.show');

// 最新消息
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');

// 精彩相簿
Route::get('/albums', [AlbumController::class, 'index'])->name('albums');
Route::get('/albums/{id}', [AlbumController::class, 'show'])->name('albums.show');
