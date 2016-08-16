<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use Favouritable;

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
