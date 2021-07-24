<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public function sender(){
        return $this->hasOne(User::class,'id','sender_id');
    }

    public function receiver(){
        return $this->hasOne(User::class,'id','receiver_id');
    }
}
