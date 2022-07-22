<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    public $fillable = ['title', 'season_weather'];

    public function town(){
        return $this->hasMany('App\Models\Town');
    }
}
