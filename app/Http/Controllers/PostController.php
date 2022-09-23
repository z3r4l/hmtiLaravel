<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Struktur;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class PostController extends Controller
{
    public function index()
    {
        return view('frontend.beranda.index', [
            'posts' => Post::with(['author', 'category'])->latest()->paginate(),
            'postsLimit' => Post::with(['author', 'category'])->latest()->offset(1)->limit(4)->get(),
            'jumlahRepository' => Post::all()->count(),
            'jumlahAnggota' => Struktur::all()->count() - 4,
            'struktur' => Struktur::where('divisi_id', '1')->limit(4)->get(),
        ]);
    }
    public function show(Post $post)
    {
        return view('frontend.post.index', [
            'post' => $post,
            'category' => Category::all(),
        ]);
    }
    public function loadOnScroll(Request $request)
    {
        $posts = Post::with(['author', 'category'])->latest()->paginate(10);
        if ($request->ajax()) {
            $view = view('frontend.partials.cardKegiatan.index', compact('posts'))->render();
            return response()->json(['html' => $view]);
        }
        return view('frontend.kegiatan.index', compact('posts'));
    }
}
