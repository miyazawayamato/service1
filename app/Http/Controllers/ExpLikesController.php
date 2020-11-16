<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ExpLike;
use Illuminate\Support\Facades\Auth;

class ExpLikesController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware(['auth', 'verified'])->only(['like', 'unlike']);
    }
    
    
    
     /**
    * 引数のIDに紐づくリプライにLIKEする
    *
    * @param $id リプライID
    * @return \Illuminate\Http\RedirectResponse
    */
    
    public function like($id)
    {
        
        ExpLike::create([
        'experience_id' => $id,
        'user_id' => Auth::id(),
        ]);

        session()->flash('success', 'You Liked the Reply.');

        return redirect()->back();
    }
  
    /**
     * 引数のIDに紐づくリプライにUNLIKEする
     *
     * @param $id リプライID
     * @return \Illuminate\Http\RedirectResponse
     */
    public function unlike($id)
    {
        $like = ExpLike::where('experience_id', $id)->where('user_id', Auth::id())->first();
        $like->delete();
    
        session()->flash('success', 'You Unliked the Reply.');
    
        return redirect()->back();
    }
}