<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    use HasFactory;
    
    public function exps() {
        return $this->hasMany('App\Models\Experience');
    }
    
    public function message()
    {
        return $this->hasMany('App\Models\Board');
    }
}
