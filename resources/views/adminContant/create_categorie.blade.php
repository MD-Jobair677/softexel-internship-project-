@extends('adminContant.adminLayout.adminlLayout')

@section('contant')
<div class="max-w-2xl p-6 bg-white border  border-gray-200 rounded-lg">


    <div class="flex justify-between ">
        <div>
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Add Categorie</h5>
        </div>

        <div>
            <a href="{{route('admin.categorie')}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Back

            </a>
        </div>


    </div>


    <div class="container mx-auto p-4">


        <form class=" mx-auto">
            <div class="mb-5">
                <label for="username-success" class="block mb-2 text-sm font-medium text-green-700 dark:text-green-500">Your name</label>
                <input type="text" id="username-success" class="bg-green-50 border border-green-500 text-green-900 dark:text-green-400 placeholder-green-700 dark:placeholder-green-500 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-green-500" placeholder="Bonnie Green">
                <p class="mt-2 text-sm text-green-600 dark:text-green-500"><span class="font-medium">Alright!</span> Username available!</p>
            </div>
            <div>
                <label for="username-error" class="block mb-2 text-sm font-medium text-red-700 dark:text-red-500">Your name</label>
                <input type="text" id="username-error" class="bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 dark:bg-gray-700 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500" placeholder="Bonnie Green">
                <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> Username already taken!</p>
            </div>

            <button type="submit" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Dark</button>
        </form>


    </div>




</div>
@endsection
