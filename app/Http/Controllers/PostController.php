<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\WillPosts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('frontend.beranda.index', [
            'posts' => Post::with(['author', 'category'])->latest()->paginate(),
            'postsLimit' => Post::with(['author', 'category'])->latest()->offset(1)->limit(4)->get(),
            'jumlahRepository' => Post::all()->count()
        ]);
    }
    public function show(Post $post)
    {
        return view('frontend.post.index', [
            'post' => $post,
        ]);
    }
}
