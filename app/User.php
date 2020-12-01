<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements HasMedia
{
    use Notifiable, HasRoles, InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'slug'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = ['role_id', 'avatar'];

    //mutators

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = str_slug($value);
    }

    public function getRoleIdAttribute()
    {
        return $this->roles[0]->id;
    }

    public function getAvatarAttribute()
    {
        return $this->getMedia('user_avatar')->first()->getUrl();
    }

    //media method
    public function clearMediaCollection(string $collectionName = 'default'): HasMedia
    {
        //
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function isModerator(array $permissions = []) : bool
    {
        return $this->hasAnyRole(['admin', 'editor'])
                && $this->hasAnyPermission($permissions);
    }
}
