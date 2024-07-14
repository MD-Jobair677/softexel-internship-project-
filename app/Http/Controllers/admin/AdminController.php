<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dasbord(){

        return view('adminContant.admin_dasbord');
    }

    // ALL CATEGORIE

    function Categorie(){


        return view('adminContant.Categorie');
    }


    // CREATE CTEAGORIE

    function createCategorie(){


            return view('adminContant.create_categorie');
    }
}
