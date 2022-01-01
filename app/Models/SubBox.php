<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubBox extends Model
{
    protected $guarded = [];
    public function sub_boxes()
    {
    	return $this->belongsTo(Box::class);
    }


    public function subboxcomments(){
        return $this->hasMany(SubBoxComment::class,'subbox_id');

    }
    

}
