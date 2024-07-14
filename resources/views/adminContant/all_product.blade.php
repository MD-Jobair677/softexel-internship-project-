@extends('adminContant.adminLayout.adminlLayout')

@section('title')
all product
@endsection
@section('contant')
<div class="w-2xl p-6 bg-white border  border-gray-200 rounded-lg">


    <div class="flex justify-between ">
        <div>
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">All Product</h5>
        </div>

        <div>
            <a href="{{route('admin.create.product')}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Add

            </a>
        </div>


    </div>


    

<div class=" overflow-x-auto shadow-md sm:rounded-lg z-40" >
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class=" py-3">
                    #
                </th>
                <th scope="col" class=" py-3">
                    Image
                </th>
                <th scope="col" class="py-3">
                    Product name
                </th>
                 <th scope="col" class=" py-3">
                    Categorie
                </th>
                <th scope="col" class=" py-3">
                    Subcategorie
                </th>
               
                <th scope="col" class=" py-3">
                    Price
                </th>
                <th scope="col" class=" py-3">
                    Action
                </th>
               
            </tr>
        </thead>
        <tbody>
    @forelse($Products as $key => $Product)
        
   

            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50">

            <td class=" font-semibold text-gray-900 ">
                   {{$Products->firstItem()+$key}}
                </td>
                <td class="">
                    <img src="{{asset('storage/productimage/'.$Product->product_image)}}" alt="Apple Watch">
                </td>
                <td class="py-4 font-semibold text-gray-900 dark:text-white">
                    {{$Product->product_name}}
                </td>
                <td class="py-4 font-semibold text-gray-900 dark:text-white">
                    {{$Product->categorie->categorie_name}}
                </td>
                <td class="py-4 font-semibold text-gray-900 dark:text-white">
                    {{$Product->subcategorie->subcategorie_name}}
                </td>
                
                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                    {{$Product->product_price}}
                </td>



                <td class="px-6 py-4">

                    <div>
                        <a href="{{route('admin.edite.product',$Product->id)}}" class="font-medium p-4 text-green hover:underline"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline"><i class="fa-solid fa-trash"></i></a>
                    </div>

                   



                </td>









            </tr>
        @empty
        
    @endforelse



            



        </tbody>
        
    </table>

    {{$Products->links()}}
</div>





</div>
@endsection
