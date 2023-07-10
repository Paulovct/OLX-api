<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ad;

class Category extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ["name" , "slug"];


    public function ads(){
        return $this->hasMany(Ad::class);
    }
}
