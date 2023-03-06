<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    use HasFactory;

    public function Service(){
        return $this->hasMany(Service::class,'service_category_id', 'id');
    }

    public function Services()
    {
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }

    /**
     * Get all of the comments for the ServiceCategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

}
