<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SihousyosiTable;
use App\Models\GyouseisyosiTable;

class ExperienceController extends Controller
{
    //一覧
    public function Reports() {
        return view('reports');
    }
    //一覧表示
    public function showList($id) {
        
        switch ($id) {
            case 1:
                $exps = SihousyosiTable::all();
            break;
            case 2: 
                $exps = GyouseisyosiTable::all();
            break;
            case 3: 
                return($id);
            break;
            default: 
            return('失敗しました');
        }
        return view('experiences', ['id' => $id, 'exps' => $exps]);
    }
    
    //上下別のコントローラーがいい？
    
    //個別
    public function show($id, $qualiexp_id) {
        switch ($id) {
            case 1:
                $texts = SihousyosiTable::find($qualiexp_id);
            break;
            case 2: 
                $texts = GyouseisyosiTable::find($qualiexp_id);
            break;
            case 3: 
                return($qualiexp_id);
            break;
            default: 
            return('失敗しました');
        }
        return view('experience',['texts' => $texts]);
    }
}
