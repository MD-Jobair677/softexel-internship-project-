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
            <a href="{{route('admin.all.product')}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Back

            </a>
        </div>


    </div>


    

<div class=" overflow-x-auto shadow-md sm:rounded-lg z-40" >
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class=" py-3">
                    Transectoin Id
                </th>
                <th scope="col" class=" py-3">
                    Image
                </th>
                <th scope="col" class="py-3">
                    Product name
                </th>
                 <th scope="col" class=" py-3">
                    User Name
                </th>
                <th scope="col" class=" py-3">
                   User Address
                </th>
                <th scope="col" class=" py-3">
                   Zip Code
                </th>
               
                <th scope="col" class=" py-3">
                    Price
                </th>
                <th scope="col" class=" py-3">
                    status
                </th>
               
            </tr>
        </thead>
        <tbody>
    @forelse($allOrders as $key => $allOrder)
        
   

            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50">

            <td class=" font-semibold text-gray-900 ">
                   {{$allOrder->id}}
                </td>
                <td class="">
                    <img src="{{asset('storage/productimage/'.$allOrder->product->product_image)}}" alt="Apple Watch">
                </td>
                <td class="py-4 font-semibold text-gray-900 dark:text-white">
                    {{$allOrder->product->product_name}}
                </td>
                <td class="py-4 font-semibold text-gray-900 dark:text-white">
                    {{$allOrder->user->name}}
                </td>
                <td class="py-4 font-semibold text-gray-900 dark:text-white">
                    {{$allOrder->useraddresse->user_address}}
                </td>
                <td class="py-4 font-semibold text-gray-900 dark:text-white">
                    {{$allOrder->useraddresse->zip_code}}
                </td>
                <td class="py-4 font-semibold text-gray-900 dark:text-white">
                    {{$allOrder->product->product_price}}
                </td>


                



                    @if($allOrder->product->status=='pending')
                                    <td class="py-2 px-4">
                                <span class="text-green-500">pending</span>
                            </td>

                                @elseif($allOrder->product->status=='shipped')
                                     <td class="py-2 px-4">
                                <span class="text-green-500">shipped</span>
                            </td>
                                @else
                                     <td class="py-2 px-4">
                                <span class="text-green-500">delivered</span>
                            </td>
                                

                                @endif









            </tr>
        @empty
        
    @endforelse



            



        </tbody>
        
    </table>

    {{$allOrders->links()}}
</div>





</div>
@endsection
