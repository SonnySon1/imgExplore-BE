<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Album;
use App\Models\Comment;
use App\Models\Notification;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    
    // has many to photo
    public function photo(){
        return $this->hasMany(Photo::class);
    }

    // has many to album
    public function album(){
        return $this->hasMany(Album::class);
    }

    // has many to favorite
    public function favorite(){
        return $this->hasMany(Favorite::class);
    }

    // has many to follow
    public function followTo(){
        return $this->hasMany(Follow::class, 'to', 'id');
    } 
    public function followFrom(){
        return $this->hasMany(Follow::class, 'from', 'id');
    } 

    // has many to comment
    public function comment(){
        return $this->hasMany(Comment::class);
    }

    // has many to notification
    public function notificationFrom(){
        return $this->hasMany(Notification::class, 'form', 'id');
    }
    public function notificationTo(){
        return $this->hasMany(Notification::class, 'to', 'id');
    }
}
