<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    //
    public function show() {
        return view('experience');
    }
    
    public function showList($id) {
        //swithcになおした方がよさそう
        if ($id == 1) {
            //テーブル選択まだ
            return view('experiences', ['id' => $id]);
        } else {
            return($id);
        }
    }
}
