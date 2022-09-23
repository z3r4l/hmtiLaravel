<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Category $category)
    {
        return view('frontend.kategori.index', [
            'posts' => $category->posts->load('category'),
        ]);
    }

    public function loadOnScroll(Request $request, Category $category)
    {
        $posts = Post::where('category_id', $category->id)->latest()->paginate(10);
        if ($request->ajax()) {
            $view = view('frontend.partials.cardKegiatan.index', compact('posts'))->render();
            return response()->json(['html' => $view]);
        }
        return view('frontend.kategori.index', compact('posts'));
    }
}
