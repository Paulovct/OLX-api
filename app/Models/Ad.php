<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\State;
use App\Models\User;


class Ad extends Model
{
    use HasFactory;

    protected $fillable= ["title" , "price" , "negotiable" , "description" , "user_id" , "category_id" , "state_id"];


    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function state(){
        return $this->belongsTo(State::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
