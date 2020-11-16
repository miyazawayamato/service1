<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Auth;

class Experience extends Model
{
    use HasFactory;
    protected $guarded = [];
    //メソッド名大事 モデル名と一致？
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function qualification()
    {
        return $this->belongsTo('App\Models\Qualification');
    }
    
    
    public function likes()
    {
      return $this->hasMany('App\Models\ExpLike');
    }
    
    public function is_liked_by_auth_user()
    {
        $id = Auth::id();

        $likers = array();
        foreach($this->likes as $like) {
            array_push($likers, $like->user_id);
        }

        if (in_array($id, $likers)) {
            return true;
        } else {
            return false;
        }
    }
}

