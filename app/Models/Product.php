<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug'; //  Model binding use 'slug' column instead of 'id' column
    }

    public function category(){
        // hasOne, hasMany, belongsTo, belongsToMany
        return $this->belongsTo(Category::class, 'category_id');  // set relationship to category table 1-1
    }

}
