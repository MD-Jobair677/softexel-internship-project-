<?php
namespace App\Http\Traits;




trait Traits
{
   public function slug($model,$slug){

        $slugCount = $model::where('slug','Like','%'.$slug.'%')->count();


        if($slugCount > 0){
            $slugCount++;

            $slug = $slug."-".$slugCount;
           return    $slug;


        }else{
            return  $slug;

        }







    }
}
