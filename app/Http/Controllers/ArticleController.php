<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    //
    public function show() {
        //全部取得
        $articles = Article::all();
        
        return view('article',compact('articles'));
    }
}
