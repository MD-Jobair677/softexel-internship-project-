<?php

namespace App\Http\Controllers\admin;

use App\Models\Product;
use App\Models\Categorie;
use App\Models\Order;
use App\Http\Traits\Traits;
use Illuminate\Support\Str;
use App\Models\Subcategorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{


    use Traits;
    // ALL PRODUCT
    function allProduct(Request $request){


        if($request->keyword){

            $Products= Product::where('product_name','Like','%'.$request->keyword.'%')
            
             ->paginate(5);
            
           

        }else{
            $Products = Product::with('categorie')->with('subcategorie')->paginate(5);
           
        };

       

        

        // dd($Products);
        return view('adminContant.all_product',compact('Products'));
    }


    // CREATE PRODUCT


 function createProduct(){

        $Categories = Categorie::select(['id','categorie_name'])->get(); 
        return view('adminContant.create_product',compact('Categories'));
    }



    // STORE PRODUCT

    function storeProduct(Request $request){

        $request->validate([
            'product_name' => 'required|string|max:255',
            'product_image' => 'required|image|mimes:jpeg,png,jpg|max:2048', 
            'product_price' => 'required|numeric|min:0',
            'categorie_id' => 'required',
            'subcategorie_id' => 'required',
        ]);

        $slugname = $request->product_name;
        
        $slug = Str::slug(Product::class,$slugname);


        if($request->hasFile('product_image')){
            $imagename = str::uuid()->toString().'-'.$request->title.'.'.$request->product_image->extension();
            $request->product_image->storeAs('productimage',$imagename,'public');


            $product = new Product();
            $product->product_name = $request->product_name;
            $product->slug = $slug ;
            
            $product->product_image = $imagename ;
            $product->product_price = $request->product_price ;

            $product->categorie_id = $request->categorie_id ;
            
            $product->subcategorie_id = $request->subcategorie_id;
            $product->save();
           
            //  $products =  Product::latest()->paginate(50);
              return back()->with('success','successfully added product' );
            
        }


    }


    // SELECT SUBCATEGORY WHEN CHANGE CATEGORIE
        function selectCategorie(Request $request){

            $subcategorie  = Subcategorie::where('categorie_id',$request->category_id)->get();
        return $subcategorie;
            
        }


        // EDITE PRODUCT

        function editeProduct(Request $request, $id){
            $Categories = Categorie::with('subcategorie') ->get(); 

               $Product = Product::find($id) ;

            //    dd($Categories);

            return view('adminContant.edite_product',compact('Categories','Product'));
        }

        // UPDATE PRODUCT

        function updateProduct(Request $request,$id){

            


            $request->validate([
                'product_name' => 'required|string|max:255',
                'product_image' => 'required|image|mimes:jpeg,png,jpg|max:2048', 
                'product_price' => 'required|numeric|min:0',
                'categorie_id' => 'required',
                'subcategorie_id' => 'required',
            ]); 
            
            
            $slugname = $request->product_name;
        
            $slug = Str::slug(Product::class,$slugname);
            if($request->hasFile('product_image')){
                $updateProduct = Product::find($id);

                // $filePath = storage_path('storage/productimage/'.$updateProduct->product_image);
                // unlink($filePath);



                $imagename = str::uuid()->toString().'-'.$request->title.'.'.$request->product_image->extension();
                $request->product_image->storeAs('productimage',$imagename,'public');
    
    
                
                $updateProduct->product_name = $request->product_name;
                $updateProduct->slug = $slug ;
                $updateProduct->product_image = $imagename ;
                $updateProduct->product_price = $request->product_price ;
                $updateProduct->categorie_id = $request->categorie_id ;
                $updateProduct->subcategorie_id = $request->subcategorie_id;
                $updateProduct->save();
                //  $products =  Product::latest()->paginate(50);
                  return back()->with('success','successfully added product' );
                
            }

            
            

        }


        
        // SHOW ALL ORFDER ONLY ADMIN

        function showAllOrder(){

                $allOrders = Order::with('product')->with('useraddresse')->with('user')->paginate(5);

                // dd($allOrders);
            return view('adminContant.show_all_order',compact('allOrders'));

        }

        //  DELETE PRODUCT

        function delete($id){

            $delete = Product::findOrFail($id);
            $delete->delete();
            return back();



        }




}
