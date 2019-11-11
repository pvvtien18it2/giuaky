<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categoris';
    protected $fillable = ['newstype_id','post_id'];
    public $timestamps = false;

    
}
