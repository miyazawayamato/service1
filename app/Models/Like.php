<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Like extends Model
{
    use HasFactory;
    protected $fillable = ['experience_id','user_id'];

    public function experience()
    {
      return $this->belongsTo('App\Models\Experience');
    }
  
    public function user()
    {
      return $this->belongsTo('App\Models\User');
    }
}

