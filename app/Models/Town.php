<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    use HasFactory;

    public $fillable = ['town_title', 'distance','days','price', 'country_id'];

    public function country(){
        return $this->belongsTo('App\Models\Country');
    }

    public function customer(){
        return $this->hasMany('App\Models\Customer');
    }
}
