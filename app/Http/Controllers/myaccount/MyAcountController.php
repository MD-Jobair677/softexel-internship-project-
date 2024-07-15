<?php

namespace App\Http\Controllers\myaccount;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use App\Models\Useraddresse;
use Illuminate\Http\Request;

class MyAcountController extends Controller
{
    
    // MY ACCOUNT

    function myAccount(){


        return view('HomeContant.MyAccountContant.account');
    }

    // MY ORDER
    function myOrder(){
         return view('HomeContant.MyAccountContant.order');
    }
    


        // PROCESS TO CHECK OUT

        function processToCheckout(Request $request ,$id){

            $product = Product::where('id', $id)->select('id', 'product_name','slug','product_image','product_price')->first();

        
            return view('HomeContant.MyAccountContant.processCheckOut',compact('product'));

        }

        // STORE USER ADDDRESS AND checkout

        function Checkout(Request $request){


            $request->validate([
                'user_name' => 'required|string|max:20',
                'user_email' => 'required|email', 
                'user_address' => 'required|string|max:150', 
                'city' => 'required|string',
                'zip_code' => 'required|numeric',
               
            ]);

            // dd($request->product_id);

            $product_id = $request->product_id;

            $product = Product::find($product_id);

          
            // dd($product_id);

            $userAddress = Useraddresse::updateOrCreate(
                [
                    'user_id' => auth()->user()->id,
                    'product_id' => $request->product_id,
                    
                ],

                [

                    'user_id' => auth()->user()->id,
                    'product_id' => $product_id,
                    'user_name' => $request->user_name,
                    'user_email' => $request->user_email,
                    'user_address' => $request->user_address,
                    'city' => $request->city,
                    'zip_code' => $request->zip_code,

                ]
                // Data to update or create the record with
            );

            $userAddress_id = $userAddress->id;

                $Order = new Order();
                $Order->user_id = auth()->user()->id;
                $Order->product_id = $product_id ;
                $Order->useraddresse_id = $userAddress_id;
                $Order->product_price = $product->product_price;

                $Order->save();


                $Order_id = $Order->id;
                
                return  view('HomeContant.MyAccountContant.thanks',compact('product','Order_id'));



            

    



            

        }



}
