<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoriesImages extends Model
{
    use HasFactory;

    protected $table = 'stories_images';

    protected $fillable = [
        'stories_id',
        'image',
    ];
}
