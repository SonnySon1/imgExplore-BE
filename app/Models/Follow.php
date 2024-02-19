<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    use HasFactory;
    protected $guarded = [];

    // be longto
    public function userTo(){
        return $this->belongsTo(User::class, 'to', 'id');
    }

    public function userFrom(){
        return $this->belongsTo(User::class, 'from', 'id');
    }
}
