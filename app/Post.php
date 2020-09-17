<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Post extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia;
    protected $fillable = [
        'title',
        'content',
        'status',
        'excerpt',
        'user_id',
        'category_id'
    ];

    public function setTitleAttribute($value)
    {
        $this->attributes['title']  = $value;
        $this->attributes['slug']   = str_slug($value);
    }


    public function clearMediaCollection(string $collectionName = 'default'): HasMedia
    {
        // TODO: Implement clearMediaCollection() method.
    }
}
