@extends('HomeContant.layout.homeLayout')

@section('homeContant')
<div class="container mx-auto py-8">
    <div class="grid grid-cols-5 md:grid-cols-5 gap-6">
        <!--  Profile Card -->
        <div class="bg-white col-span-3 shadow-md rounded-lg p-6">
            <h2 class="text-2xl font-semibold mb-4">Your Address</h2>


           
    <form action="{{route('profile.checkout')}}" method="post">
    @csrf
    @method('post')
    <div class="mb-4">
        <label class="block text-gray-700">Name</label>
        <input type="text" name="user_name" class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" value="{{ old('user_name') }}" placeholder="Enter Your Name">

        @error('user_name')

                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>

                @enderror
    </div>


    <div class="mb-4">
        <label class="block text-gray-700">Email</label>
        <input type="text" name="user_email" class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" value="{{ old('user_email') }}" placeholder="Enter Your Email">
        @error('user_email')

                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>

                @enderror
    </div>

    <div class="mb-4">
        <label class="block text-gray-700">Address</label>
        <input type="text" name="user_address" class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" value="{{ old('user_address') }}"placeholder="Enter Your Address">
        @error('user_address')

                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>

                @enderror
    </div>

    <div class="mb-4">
        <label class="block text-gray-700">City</label>
        <input type="text" name="city" class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" value="{{ old('city') }}"placeholder="Enter Your City">
        @error('city')

                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>

                @enderror
    </div>



    <div class="mb-4">
        <label class="block text-gray-700">Zip Code</label>
        <input type="number"  name="zip_code" class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" value="{{ old('zip_code') }}" placeholder="Enter Your Zip Code">
        @error('zip_code')

                <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>

                @enderror
    </div>

        
        <input name="product_id" type="hidden" value="{{ number_format($product->id) }}">
    

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
                            <th class="w-1/6 py-2">Item</th>
                            <th class="w-1/6 py-2">Product Image</th>
                            <th class="w-1/3 py-2">Product Name</th>
                            <th class="w-1/6 py-2">Price</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                       
                        <tr class="border-b">
                            <td class="py-2 px-4 font-bold ">1</td>
                            <td class="py-2 px-4">
                                <img class="w-16 h-16 object-cover" src="{{asset('storage/productimage/'.$product->product_image)}}" alt="Product Image">
                            </td>
                            <td class="py-2 px-4 font-bold ">{{$product->product_name}}</td>
                            <td class="py-2 px-4 font-bold  ">${{$product->product_price}}</td>
                            
                        </tr>
                        
                    </tbody>
                </table>


            </div>


            
        </div>
        
    </div>
</div>
</div>

@endsection
