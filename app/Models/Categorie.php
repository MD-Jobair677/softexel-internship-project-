<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;


    public function subcategorie(){

        return $this->hasMany(Subcategorie::class);

    }

    public function product(){

        return $this->hasMany(Product::class);

    }



}
