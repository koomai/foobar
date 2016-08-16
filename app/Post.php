<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Favouritable;

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}
