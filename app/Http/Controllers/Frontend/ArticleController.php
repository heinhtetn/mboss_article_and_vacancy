<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->paginate(6);
        return view('frontend.blogs.blogs',compact('articles'));
    }
    public function detail($language,$id)
    {
        $article = Article::findOrFail($id);
        $image = explode(',', $article->image);
        return view('frontend.blogs.detail',compact('article','image'));
    }
    public function search()
    {
        $search_text = $_GET['search'];
        $articles = Article::where('title','LIKE','%'.$search_text.'%')->get();
        return view('frontend.blogs.search-blogs',compact('articles'));
    }
}
