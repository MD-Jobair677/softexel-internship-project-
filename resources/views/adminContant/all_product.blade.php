@extends('adminContant.adminLayout.adminlLayout')

@section('title')
all product
@endsection
@section('contant')

<div class="flex ">
  <div class="flex-none w-14">

 
    
<button type="button" onclick="window.location.href='{{route('admin.all.product')}}' " class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Reset</button>




  </div>
  
  <div class="flex-1 w-32 ">
   <form class="max-w-md mx-auto my-3" method="get">   
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
        </div>


        <input type="search" id="default-search" value="{{ Request::get('keyword') }}" name="keyword" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required />
        <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
    </div>
</form>

  </div>
</div>










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


                        <a href="#" class="delete font-medium text-red-600 dark:text-red-500 hover:underline"><i class="fa-solid fa-trash"></i></a>

                        <form action=" {{route('admin.delete.product',$Product->id)}}" method="post">
															@csrf
															@method('DELETE')
														
														
														
														</form>
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

@push('customjs')
 <script>

 $(document).ready(function(){
    

    $('.delete').click(function(e){
						e.preventDefault();
						// "Confirm"-button

							// Try me!
							Swal.fire({
							title: "Are you sure?",
							text: "You won't be able to revert this!",
							icon: "warning",
							showCancelButton: true,
							confirmButtonColor: "#3085d6",
							cancelButtonColor: "#d33",
							confirmButtonText: "Yes, delete it!"
							}).then((result) => {
							if (result.isConfirmed) {
								let nextForm = $(this).next("form");
        						nextForm.submit().prev;




								Swal.fire({
								title: "Deleted!",
								text: "Your file has been deleted.",
								icon: "success"
								});
							}
							});
					})
						







 })
 
 
 </script>   
@endpush
