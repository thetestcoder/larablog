<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{



    //relationship
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function replies(){
        return $this->hasMany(Comment::class, 'parent_id');
    }

    public function commentable()
    {
        return $this->morphTo();
    }
}
