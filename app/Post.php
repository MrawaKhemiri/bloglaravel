<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

   protected $guarded =[];

   public function category()
    {
        return $this->belongsTo('App\Category');  
    }
    public function author()
    {
        return $this->belongsTo('App\Author');  
    }
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

}


