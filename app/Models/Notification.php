<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Notification extends Model
{
    use HasFactory;
    protected $guarded = [];


    // belongs To user
    public function userFrom(){
        return $this->belongsTo(User::class, 'from', 'id');
    }
    public function userTo(){
        return $this->belongsTo(User::class, 'to', 'id');
    }
}
