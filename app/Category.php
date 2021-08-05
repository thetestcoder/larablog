<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $fillable = ['name'];
    public function setNameAttribute($value){
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = str_slug($value);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
