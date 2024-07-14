
@extends('adminContant.adminLayout.adminlLayout')

@section('contant')
<div class="w-1/2 p-6 bg-white border  border-gray-200 rounded-lg">


    <div class="flex justify-between ">
        <div>
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Add Product</h5>
        </div>

          @if(session('success'))
            <div id="toast-message" data-message="{{ session('success') }}" data-type="success"></div>
        @endif

        <div>
            <a href="{{route('admin.all.product')}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Back

            </a>
        </div>


    </div>


    <div class="container mx-auto p-4">


        <form  action="{{route('admin.store.product')}}" class=" mx-auto" method="post" enctype="multipart/form-data">

        @csrf
        @method('post')
            <div class="mb-5">
                <label for="username-success" class="block mb-2 text-sm font-medium text-green-700 dark:text-green-500">Product Name Name</label>
                <input type="text" name="product_name" value="{{ old('product_name') }}" id="username-success" class=" border text-green-900 dark:text-green-400 placeholder-green-700text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-green-500" placeholder="Product Name">
                     @error('product_name')

                      <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    
                @enderror


               
            </div>
            <div class="mb-5">
                <label for="username-success" class="block mb-2 text-sm font-medium text-green-700 dark:text-green-500">Product Price</label>
                <input type="number" name="product_price" value="{{ old('product_price') }}" id="username-success" class=" border-500  text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 " placeholder="Enter Product Price">
                @error('product_price')

                      <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    
                @enderror
            </div>



            <div class="mb-5">
             
               
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload iamge</label>
                    <input name="product_image" value="{{ old('product_image') }}" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">


                    @error('product_image')

                      <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    
                @enderror
            </div>


            







            <div>
              
                <label for="categorie" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Categorie</label>
                <select name="categorie_id" id="categorie" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 select">
                <option disabled selected>Choose a Categorie</option>
              @forelse($Categories as $key => $Categorie)
            
      



                   
                    <option value="{{$Categorie->id}}">{{$Categorie->categorie_name}}</option>
                    

                      @empty
                    <option disabled selected>Categorie not found</option>

                  @endforelse
                </select>
                    @error('categorie_id')

                      <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    
                @enderror
               
            </div>

            <div>
              
                <label for="subcategorie" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select SubCategorie</label>
                <select name="subcategorie_id"  id="subcategorie" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500    ">

                </select>

             @error('subcategorie_id')

                      <p class="mt-2 text-sm text-red-600 dark:text-red-500">{{ $message }}</p>
                    
                @enderror
            </div>

            <button type="submit" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Add</button>
        </form>


    </div>




</div>
@endsection


@push('customjs')



<script>
    $(document).ready(function(){



        $('.select').change(function(){


            $.ajax({
                url:`{{route('admin.select.categorie')}}`,
                type:'GET',
                data:{
                    category_id:$(this).val(),
                },
                success:function(response){

                    
                    let array=[];

            
                     if(response.length==0){
                        let option = `<option disabled selected>no Category found</option>`

                        $('#subcategorie').html(option);
                        return false;

                    }
                        response.forEach(element => {
                            let option = `<option value="${element.id}">${element.subcategorie_name}</option>`
                            array.push(option);
                          
                            
                     }); 
                    
                     $('#subcategorie').html(array); 

                }
            })
    
         })

    })


         var toastMessage = $('#toast-message');
            if (toastMessage.length) {
                var message = toastMessage.data('message');
                var type = toastMessage.data('type') || 'success';

                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer);
                        toast.addEventListener('mouseleave', Swal.resumeTimer);
                    }
                });

                Toast.fire({
                    icon: type,
                    title: message
                });
            }



 
</script>
    
@endpush
