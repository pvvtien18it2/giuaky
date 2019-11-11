<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newstype extends Model
{
    protected $table = 'newstypes';
    protected $fillable = ['name'];
    public $timestamps = false;

    public function post()
    {
        return $this->belongsToMany('App\Post', 'categories');
        // return $this->belongsToMany('App\Post', 'categories','newstype_id','post_id');
    }
    // public function roles()
    // {
    //     return $this->belongsToMany('App\Role', 'role_user_table', 'user_id', 'role_id');
    // }
}
