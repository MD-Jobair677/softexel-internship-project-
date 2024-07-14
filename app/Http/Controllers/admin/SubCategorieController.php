<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubCategorieController extends Controller
{
    // SHOW SUBCATEGORIE

    function allSubcategorie (){

        return view('adminContant.all_subcategorie');

    }
    function createSubCategorie (){
        return view('adminContant.create_sub_categorie');
    }


}
