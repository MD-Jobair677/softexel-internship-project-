<?php

namespace App\Http\Controllers\myaccount;

use App\Http\Controllers\Controller;
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

            return view('HomeContant.MyAccountContant.processCheckOut');

        }



}
