<?php

namespace App\Http\Controllers\admin;

use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Traits\Traits;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{

    use Traits;
    public function dasbord(){

        return view('adminContant.admin_dasbord');
    }

    // ALL CATEGORIE

    function Categorie(){


        return view('adminContant.all_Categorie');
    }


    // CREATE CTEAGORIE

    function createCategorie(){


            return view('adminContant.create_categorie');
    }


    // STORE CATEGORIE

    function storeCategorie( Request $request){

        $valodate  = validator::make($request->all(),[
            'categorie'=>'required|max:30|unique:Categories,categorie_name',
            'status'=>'required',
          
    
        ]);

        if($valodate->passes()){

            $category= new Categorie();
            $category->categorie_name = $request->categorie;
            $category->slug = $this->slug(Categorie::class,$request->categorie);
            $category->status = $request->status;
            
            $category->save();
            Session::flash('success', 'The data has been saved successfully.');
    
    
            return response()->json([
                'status'=>true,
                'message'=>'successfully added Categorie',
                
                
            ]);
    
        }else{
            return response()->json([
                'status'=>false,
                'erorrs'=>$valodate->errors(),
            ]);
        }




    }
}
