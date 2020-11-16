<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpLike extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = 'like_id';

    public function experience()
    {
      return $this->belongsTo('App\Models\Experience');
    }
  
    public function user()
    {
      return $this->belongsTo('App\Models\User');
    }
}
