<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['name', 'email', 'comment', 'user_id', 'parent_id'];

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
