<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Qualification;

class QualificationController extends Controller
{
    //一覧表示
    public function show() {
        return view('qualis');
    }
    //個別表示
    public function Individual($id) {
        
        $quali = Qualification::find($id);
        
        // return view('quali', compact('quali'));
        return view('quali', ['quali' => $quali, 'id' => $id]);
        
    }
}
