<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function getRouteKeyName()
    {
        return 'slug'; //  Model binding use 'slug' column instead of 'id' column
    }

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function childs(){
        return $this->hasMany(Category::class,'parent_id', 'id');
    }
}
