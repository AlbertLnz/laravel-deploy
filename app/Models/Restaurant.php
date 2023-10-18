<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'photo', 'street', 'borough', 'cuisine', 'tables_number', 'telephone', 'latitude', 'longitud'];


    //One To Many Inverse Relationship
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    

}
