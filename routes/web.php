<?php

use App\Models\Post;
use App\Models\Category;
use App\Models\Struktur;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardDivisiController;
use App\Http\Controllers\DashboardCategoryController;
use App\Http\Controllers\DashboardStrukturController;

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


//************************************************** Start Page Frontend **************************************************//

Route::get('/', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
Route::get('/kegiatan', [PostController::class, 'loadOnScroll']);
// Route::get('/kegiatan', function () {
//     return view('frontend.kegiatan.index', [
//         'posts' => Post::with(['author', 'category'])->latest()->paginate(6),
//     ]);
// });


Route::get('/struktur', function () {
    return view('frontend.struktur.index', [
        'struktur' => Struktur::where('divisi_id', '1')->get()
    ]);
});
Route::get('/tentang', function () {
    return view('frontend.tentang.index');
});

Route::get('/categories/{category:slug}', [CategoryController::class, 'loadOnScroll']);

Route::get('/divisi/{divisi:slug}', [DivisiController::class, 'index']);

//************************************************** End Page Frontend **************************************************//
//************************************************** Start Page Backend **************************************************//


//********** Start Page Login **********//
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
//********** End Page Login **********//

Route::middleware('auth')->group(function () {
    //********** Start Page dashboard **********//
    Route::get('/dashboard', function () {
        return view('backend.dashboard.index', [
            'title' => 'Halaman Dashboard',
            'active' => 'dashboard'
        ]);
    });
    //********** End Page dashboard **********//

    //********** Start Page dashboard Post **********//
    Route::resource('/dashboard/posts', DashboardPostController::class);
    //********** End Page dashboard Post **********//

    //********** Start Page dashboard Struktur **********//
    Route::resource('/dashboard/strukturs', DashboardStrukturController::class);
    //********** End Page dashboard Struktur **********//

    //********** Start Page dashboard DIvisi **********//
    Route::resource('/dashboard/divisi', DashboardDivisiController::class);
    //********** End Page dashboard DIvisi **********//

    //********** Start Page dashboard Category **********//
    Route::resource('/dashboard/category', DashboardCategoryController::class);
    //********** End Page dashboard Category **********//

});


//************************************************** End Page Backend **************************************************//