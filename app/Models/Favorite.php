<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;
    protected $guarded = [];

    // belongs To user
    public function user(){
        return $this->belongsTo(User::class);
    }

    // belongs To photo
    public function photo(){
        return $this->belongsTo(Photo::class);
    }
}
