<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ad;
use App\Models\User;


class State extends Model
{
    use HasFactory;
    
    public $timestamps = false;
    
    protected $fillable = ["name" , "slug"];

    public function ads(){
        return $this->hasMany(Ad::class);
    }

    public function users(){
        return $this->hasMany(User::class);
    }
}
