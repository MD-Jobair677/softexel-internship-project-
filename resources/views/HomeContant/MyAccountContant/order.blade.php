@extends('HomeContant.MyAccountContant.MyaccountLayout.accountLayout')

@section('title')

your order

@endsection

@section('accountcontant')



<div class="bg-white shadow-md col-span-2   rounded-lg p-6">
    <h2 class="text-2xl font-semibold mb-4">Your Orders</h2>
    <div class="space-y-4">




        <div class="p-4 bg-gray-100 rounded-lg">
            <div class="bg-white shadow-md rounded-lg p-6">

                <table class="min-w-full bg-white">
                    <thead>
                        <tr>
                            <th class="w-1/6 py-2">Tansectoin Id</th>
                            <th class="w-1/6 py-2">Product Image</th>
                            <th class="w-1/3 py-2">Product Name</th>
                            <th class="w-1/6 py-2">Price</th>
                            <th class="w-1/6 py-2">Status</th>
                        </tr>
                    </thead>
                    <tbody>


                        @forelse($UserOrders as $key => $UserOrder)




                        <!-- Example order row -->
                        <tr class="border-b">
                            <td class="py-2 px-4">{{$UserOrder->id}}</td>


                           
                            <td class="py-2 px-4">
                                <img class="w-16 h-16 object-cover" src="{{asset('storage/productimage/'.$UserOrder->product->product_image)}}" alt="Product Image">
                            </td>

                            

                            <td class="py-2 px-4">{{$UserOrder->product->product_name}}</td>
                            <td class="py-2 px-4">${{number_format($UserOrder->product->product_price)}}</td>

                                @if($UserOrder->product->status=='pending')
                                    <td class="py-2 px-4">
                                <span class="text-green-500">pending</span>
                            </td>

                                @elseif($UserOrder->product->status=='shipped')
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


                        <h1>Order Not Found</h1>
                        @endforelse

                        <!-- Add more rows as needed -->
                    </tbody>
                </table>

                {{$UserOrders->links()}}
            </div>
        </div>





    </div>
    
</div>



@endsection
