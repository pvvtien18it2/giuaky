<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['title','body','author_id','image','publish'];

    public function newstype()
    {
        return $this->belongsToMany('App\Newstype', 'categories');
        // return $this->belongsToMany('App\Newstype', 'categories','post_id','newstype_id');
    }
    public function user()
    {
        return $this->belongsTo('App\User','id','author_id');
    }
}
