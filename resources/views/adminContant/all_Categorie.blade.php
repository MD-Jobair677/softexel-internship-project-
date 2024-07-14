@extends('adminContant.adminLayout.adminlLayout')
@section('title')
allCategorie
@endsection

@section('contant')
    <div class="max-w-2xl p-6 bg-white border  border-gray-200 rounded-lg">


        <div class="flex justify-between ">
            <div>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">All Categorie</h5>
            </div>

            <div>
                <a href="{{route('admin.create.categorie')}}"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Add

                </a>
            </div>


        </div>


       <div class="container mx-auto p-4">
       

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-blue-100">
        <thead class="text-xs text-white uppercase bg-black ">
            <tr>
                <th scope="col" class="px-6 py-3"> #</th>
                <th scope="col" class="px-6 py-3"> Category Name</th>
              
                <th scope="col" class="px-6 py-3">  Action </th>
            </tr>
        </thead>
        <tbody>


        @forelse($categories as $key => $categorie)
            
       
            <tr class="bg-blue-500 border-b border-blue-400">
                <th scope="row" class="px-6 py-4 font-medium text-blue-50 whitespace-nowrap dark:text-blue-100">
                 {{$categories->firstItem()+$key}} 
                </th>
                <td class="px-6 py-4">
                    {{$categorie->categorie_name}}
                </td>
                
                <td class="px-6 py-4">
                    <a href="#" class="font-medium text-white hover:underline">Edit</a>
                </td>
            </tr>
            @empty
            
        @endforelse
        </tbody>
    </table>

    {{ $categories->links() }}
</div>

    </div>




    </div>
@endsection
