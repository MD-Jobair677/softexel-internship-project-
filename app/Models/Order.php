<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function user(){

        return $this->belongsTo(User::class);

    }

    // PRODUCT
    public function product(){

        return $this->belongsTo(Product::class);

    }
    public function useraddresse(){

        return $this->belongsTo(Useraddresse::class);

    }

}
