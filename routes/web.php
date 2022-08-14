<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\DashboardPostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
Route::get('/kegiatan', function () {
    return view('frontend.kegiatan.index', [
        'posts' => Post::with(['author', 'category'])->latest()->paginate(6),
    ]);
});
Route::get('/struktur', function () {
    return view('frontend.struktur.index');
});
Route::get('/tentang', function () {
    return view('frontend.tentang.index');
});
Route::get('/divisi/litbang', [DivisiController::class, 'litbang']);
Route::get('/divisi/program', [DivisiController::class, 'program']);


// Page Backend
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function () {
    return view('backend.dashboard.index', [
        'title' => 'Halaman Dashboard',
        'active' => 'dashboard'
    ]);
})->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
