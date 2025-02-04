<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function categorie(){

        return $this->belongsTo(Categorie::class);

    }
    public function subcategorie(){

        return $this->belongsTo(Subcategorie::class);

    }


    // ORDER
    public function order(){

        return $this->hasMany(Order::class);

    }



}
