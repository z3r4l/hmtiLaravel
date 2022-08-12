<?php

use App\Http\Controllers\DivisiController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
