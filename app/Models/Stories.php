<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stories extends Model
{
    use HasFactory;

    public function storiesImages()
    {
        return $this->hasMany(StoriesImages::class, 'stories_id', 'id');
    }
}
