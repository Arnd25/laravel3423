<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'content',
        'main_image',
        'additional_images',
        'tags'
    ];
    protected $casts = [
        'additional_images' => 'array',
        'tags' => 'array',
    ];
}
