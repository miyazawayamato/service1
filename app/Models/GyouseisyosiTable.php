<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GyouseisyosiTable extends Model
{
    use HasFactory;
    protected $primaryKey = 'qualiexp_id';
    protected $fillable = ['name','body'];
}
