@extends('HomeContant.layout.homeLayout')

@section('homeContant')
<div class="container mx-auto py-8">
    <div class="grid grid-cols-5 md:grid-cols-5 gap-6">
        <!--  Profile Card -->
        <div class="bg-white col-span-3 shadow-md rounded-lg p-6">
            <h2 class="text-2xl font-semibold mb-4">Your Address</h2>


           
    <form>
    <div class="mb-4">
        <label class="block text-gray-700">Name</label>
        <input type="text" class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" value="John Doe">
    </div>
    <div class="mb-4">
        <label class="block text-gray-700">Name</label>
        <input type="text" class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" value="John Doe">
    </div>
    <div class="mb-4">
        <label class="block text-gray-700">Name</label>
        <input type="text" class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" value="John Doe">
    </div>
    <div class="mb-4">
        <label class="block text-gray-700">Name</label>
        <input type="text" class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" value="John Doe">
    </div>
    <div class="mb-4">
        <label class="block text-gray-700">Name</label>
        <input type="text" class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" value="John Doe">
    </div>

   <button type="submit" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Process To Checkout</button>

    
    </form>
               
               
            

    </div>

    <!-- product Card -->
    <div class="bg-white col-span-2 shadow-md rounded-lg p-6">
        <h2 class="text-2xl font-semibold mb-4">Your Product</h2>
        <div class="space-y-4">
            <div class="p-4 bg-gray-100 rounded-lg">


                <table class="min-w-full bg-white">
                    <thead>
                        <tr>
                            <th class="w-1/6 py-2">Order ID</th>
                            <th class="w-1/6 py-2">Product Image</th>
                            <th class="w-1/3 py-2">Product Name</th>
                            <th class="w-1/6 py-2">Price</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                       
                        <tr class="border-b">
                            <td class="py-2 px-4">12345</td>
                            <td class="py-2 px-4">
                                <img class="w-16 h-16 object-cover" src="https://via.placeholder.com/100" alt="Product Image">
                            </td>
                            <td class="py-2 px-4">Product Name Example</td>
                            <td class="py-2 px-4">$50.00</td>
                            
                        </tr>
                        
                    </tbody>
                </table>


            </div>


            
        </div>
        
    </div>
</div>
</div>

@endsection
