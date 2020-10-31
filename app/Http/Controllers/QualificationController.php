<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QualificationController extends Controller
{
    //一覧表示
    public function show() {
        return view('qualis');
    }
    //
    public function Individual() {
        return view('quali');
    }
}
