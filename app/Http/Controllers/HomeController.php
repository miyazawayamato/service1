<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Qualification;

class HomeController extends Controller
{
    //ホーム画面表示
    public function show() {
        $qualis = Qualification::find([1,2,3,4,5,6,7,8,9]);
        //ランキング記述
        return view('home', ['qualis' => $qualis]);
    }
}
