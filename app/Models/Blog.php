<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'blog_image',
        'order',
        'slug',
        'status',
        'category_id',
        'views',
        'likes',
        'description',
        'reading_time'
    ];
}
