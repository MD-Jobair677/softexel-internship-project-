<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    // ALL PRODUCT
    function allProduct(){
        return view('adminContant.all_product');
    }


    // CREATE PRODUCT


 function createProduct(){


        return view('adminContant.create_product');
    }





}
