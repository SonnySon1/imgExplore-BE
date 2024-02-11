<?php

namespace App\Models;

use App\Models\Photo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Album extends Model
{
    use HasFactory;
    protected $guarded = [];

    // hasMany To Photo
        public function photo(){
            return $this->hasMany(Photo::class);
        }
}
