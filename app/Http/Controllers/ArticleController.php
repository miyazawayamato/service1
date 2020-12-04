<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    //
    public function show() {
        //全部取得
        // $articles = Article::all();
        
        // $articles = Article::Paginate(9);
        // $articles = Article::orderBy('id', 'desc')->Paginate(9);
        
        
        return view('article');
        // return view('article',compact('articles'));
    }
}
