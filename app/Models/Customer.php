<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public $fillable = ['name', 'surname', 'email', 'phone', 'town_id'];

    public function country(){
        return $this->belongsTo('App\Models\Town');
    }

}
