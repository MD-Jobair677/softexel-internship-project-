<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Useraddresse extends Model
{
    use HasFactory;

    protected $fillable = [
         'user_id',
         'product_id',
         'user_name',
         'user_email',
         'user_address',
         'city',
         'zip_code',
    ];

    public function order(){

        return $this->hasMany(Order::class);

    }



    
}
