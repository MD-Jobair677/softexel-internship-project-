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
                            <th class="w-1/6 py-2">Order ID</th>
                            <th class="w-1/6 py-2">Product Image</th>
                            <th class="w-1/3 py-2">Product Name</th>
                            <th class="w-1/6 py-2">Price</th>
                            <th class="w-1/6 py-2">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Example order row -->
                        <tr class="border-b">
                            <td class="py-2 px-4">12345</td>
                            <td class="py-2 px-4">
                                <img class="w-16 h-16 object-cover" src="https://via.placeholder.com/100" alt="Product Image">
                            </td>
                            <td class="py-2 px-4">Product Name Example</td>
                            <td class="py-2 px-4">$50.00</td>
                            <td class="py-2 px-4">
                                <span class="text-green-500">Shipped</span>
                            </td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>





    </div>
    <div class="mt-4">
        <button class="bg-green-500 text-white px-4 py-2 rounded">View All Orders</button>
    </div>
</div>

@endsection
