<?php

namespace App\Http\Controllers\admin;

use App\Models\Categorie;
use App\Http\Traits\Traits;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Subcategorie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class SubCategorieController extends Controller
{

    use Traits;
    // SHOW SUBCATEGORIE

    function allSubcategorie (){

            $allsubcategories = Subcategorie::with('categorie')->paginate(4);
            
        return view('adminContant.all_subcategorie',compact('allsubcategories'));

    }


    // CREATE SUBCATEGORIE
    
    function createSubCategorie (){

        $allSubCategoris  =Categorie::select(['id','categorie_name'])->latest()->get();
        return view('adminContant.create_sub_categorie',compact('allSubCategoris'));
    }

    // STORE SUBCATEGORIE

    function storeSubCategorie(Request $request){
        
        $valodate  = validator::make($request->all(),[
            'subcategorie_name'=>'required|max:30',
            'categorie_id'=>'required',
          
    
        ]);


        if($valodate->passes()){

            $subcategory= new Subcategorie();
            $subcategory->subcategorie_name = $request->subcategorie_name;
            $subcategory->categorie_id = $request->categorie_id;
            $subcategory->slug = $this->slug(Subcategorie::class,$request->subcategorie_name);
            
            
            $subcategory->save();
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
