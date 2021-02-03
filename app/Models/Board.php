<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Auth;

class Board extends Model
{
    use HasFactory;
    protected $fillable = ['qualification_id', 'name', 'message'];
    
    public function likes()
    {
      return $this->hasMany('App\Models\Like');
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
