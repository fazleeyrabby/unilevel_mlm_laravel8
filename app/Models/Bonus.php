<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bonus extends Model
{
    use HasFactory;
    protected $table = 'bonus';
    protected $primaryKey = 'bonus_id';

    protected $fillable = ['user_id','amount','type','reference_id','model'];

    public function reference(){
        return $this->hasOne(User::class,'id','reference_id');
    }
    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }
    
}
