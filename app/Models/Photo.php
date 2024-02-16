<?php

namespace App\Models;

use App\Models\Album;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Photo extends Model
{
    use HasFactory;
    protected $guarded = [];

    // belongs to category
    public function category(){
        return $this->belongsTo(Category::class);
    } 

    // belongs to users
    public function user(){
            return $this->belongsTo(User::class);
    }

    // belongs to album
    public function album(){
            return $this->belongsTo(Album::class);
    }

    // has many to photo
    public function favorite() {
            return $this->hasMany(Favorite::class);
    }
}
