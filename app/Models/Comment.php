<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];

    //public function replies(){
    //    return $this->hasmany(Comment::class, 'parent_id');
   // }

    //public function comentable(){
        //return $this->morphTo();
   // }
}
