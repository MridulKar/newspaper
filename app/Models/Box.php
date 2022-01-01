<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Box extends Model
{
    protected $guarded = [];
    public function sub_boxes()
    {
    	return $this->hasMany(SubBox::class);
    }
}
