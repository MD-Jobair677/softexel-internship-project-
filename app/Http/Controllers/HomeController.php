<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    


    public function HomePage(){

        // $Categorie = Categorie::with('subcategorie')->get();
        $Products = Product::select(['id','product_name','product_image','product_price','slug'])->paginate(10);
        return view('HomeContant.Home',compact('Categorie','Products'));
    }
}
