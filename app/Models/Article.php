<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['id','title','body','featured_image','image','created_at','updated_at'];
    use HasFactory;
}
