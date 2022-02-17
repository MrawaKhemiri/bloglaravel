<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];

    public function post()
    {
        return $this->belongsto('App\Post');
    }
    public function user()
    {
        return $this->belongsto('App\User');
    }
}
