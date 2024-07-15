@extends('HomeContant.MyAccountContant.MyaccountLayout.accountLayout')

@section('accountcontant')


<div class="  p-4">
    <h2 class="text-2xl font-semibold mb-4">Profile Details</h2>
    <div class="mb-4">
        <label class="block text-gray-700">Name</label>
        <input type="text" class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" value="{{auth()->user()->name}}">
    </div>
    <div class="mb-4">
        <label class="block text-gray-700">Email</label>
        <input type="email" class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" value="{{auth()->user()->email}}">
    </div>
    <div class="mb-4">
        <label class="block text-gray-700">Phone</label>
        <input type="tel" class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" value="123-456-7890">
    </div>
    <div class="mb-4">
        <label class="block text-gray-700">Address</label>
        <input type="text" class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" value="123 Main St, Anytown, USA">
    </div>
    <button class="bg-green-500 text-white px-4 py-2 rounded">Save Changes</button>
</div>
</div>


@endsection
