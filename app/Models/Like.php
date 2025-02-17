<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Like extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'like_id';

    public function board()
    {
      return $this->belongsTo('App\Models\Board');
    }
  
    public function user()
    {
      return $this->belongsTo('App\Models\User');
    }
}

