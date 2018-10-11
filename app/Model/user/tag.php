<?php

namespace App\Model\user;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    protected $guarded = [];

    public function posts()
    {
    	return $this->belongsToMany('App\Model\user\post', 'post_tags')->paginate(4);
    }
    public function getRouteKeyName()
    {
    	return 'slug';
    }
}
