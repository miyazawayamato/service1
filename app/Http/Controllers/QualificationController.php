<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Qualification;

class QualificationController extends Controller
{
    
    //一覧表示
    public function show() {
        
        $qualis = Qualification::all();
        
        return view('qualis', ['qualis' => $qualis]);
    }
    
}
