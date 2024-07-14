@extends('HomeContant.layout.homeLayout')



@section('homeContant')

<div class="container mx-auto py-8">
    <div class="grid grid-cols-3 md:grid-cols-3 gap-6">
        <!-- Your Profile Card -->
        <div class="bg-white   shadow-md rounded-lg p-6">

            <div class="bg-white shadow-md rounded-lg p-6">
                <a href="{{ route('profile.account') }}" class="flex items-center text-blue-500 hover:text-blue-700 font-semibold">
                    <!-- Profile Icon -->
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A11.955 11.955 0 0112 15c2.485 0 4.794.81 6.879 2.171m-13.758 0A11.955 11.955 0 0012 15c2.485 0 4.794.81 6.879 2.171M5.121 17.804A11.955 11.955 0 0112 21c2.485 0 4.794-.81 6.879-2.171m-13.758 0A11.955 11.955 0 0012 21c2.485 0 4.794-.81 6.879-2.171M12 12a4 4 0 110-8 4 4 0 010 8zm0 0a11.955 11.955 0 00-6.879 2.171m13.758 0A11.955 11.955 0 0012 12z"></path>
                    </svg>
                    Your Profile
                </a>
            </div>

            <div class="bg-white shadow-md rounded-lg p-6 my-3">
                <a href="{{ route('profile.myorder') }}" class="flex items-center text-blue-500 hover:text-blue-700 font-semibold">
                    <!-- Orders Icon -->
                    <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h18M3 12h18m-7 5h7"></path>
                    </svg>
                    Your Orders
                </a>
            </div>


        </div>

        <!-- Your Orders Card -->
       @yield('accountcontant')



    </div>
</div>




{{-- <div class="container mx-auto py-8">
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <div class="md:flex">
            <!-- Profile Section -->
            <div class="w-full md:w-1/3 p-4 bg-gray-200">
                <div class="flex flex-col items-center">
                    <img class="w-24 h-24 rounded-full mx-auto" src="https://via.placeholder.com/150" alt="Profile Image">
                    <h2 class="text-xl mt-4">John Doe</h2>
                    <p class="text-gray-600">johndoe@example.com</p>
                    <button class="mt-4 bg-blue-500 text-white px-4 py-2 rounded">Edit Profile</button>
                </div>
            </div>

            <!-- Profile Details Section -->
            <div class="w-full md:w-2/3 p-4">
                <h2 class="text-2xl font-semibold mb-4">Profile Details</h2>
                <div class="mb-4">
                    <label class="block text-gray-700">Name</label>
                    <input type="text" class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" value="John Doe">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700">Email</label>
                    <input type="email" class="w-full px-4 py-2 mt-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent" value="johndoe@example.com">
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
    </div>
 --}}


@endsection
