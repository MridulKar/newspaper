<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function post(){
        return $this->hasMany(Post::class, 'category_id', 'id');
    }

    //public function subcategory(){
    //    return $this->hasMany('App\Models\Category', 'parent_id');
   // }
    protected $guarded = [];
}
