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


        <form method="post" name="fromdata" class=" mx-auto fromdata">


            <div class="mb-5">
                <label for="username-success" class="block mb-2 text-sm font-medium text-green-700">Categorie Name</label>
                <input type="text" id="username-success" name="categorie" class="bg-green-50 border border-green-500 text-green-900 dark:text-green-400 placeholder-green-700 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 categorie_name" placeholder="Enter Category name">


                <p class="mt-2 text-sm text-red-600 dark:text-red-500 categorie_erorr"></p>



                <div class="mb-5">
                    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">status</label>
                    <select id="countries" name="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                        <option selected value="yes"> Active</option>
                        <option value="no">Block</option>

                    </select>


                </div>










                <button type="submit" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Add</button>
        </form>


    </div>




</div>
@endsection


@push('customjs')


<script>
    $(document).ready(function() {

        $('.fromdata').submit(function(event) {
            event.preventDefault();
            var formData = $(this);
            $.ajax({
                url: "{{route('admin.store.categorie')}}"
                , type: 'POST'
                , data: formData.serializeArray(),




                dataType: 'json',

                success: function(response) {

                    if (response.status == false) {


                        if (response.erorrs.categorie != null) {

                            $('.categorie_name').addClass('bg-red-50 border border-red-500 text-red-900 placeholder-red-700')
                            $('.categorie_erorr').html(response.erorrs.categorie)
                        } else {

                            $('.categorie_name').removeClass('bg-red-50 border border-red-500 text-red-900 placeholder-red-700')
                            $('.categorie_erorr').html('')
                        }




                    } else {

                        $('.categorie_name').removeClass('bg-red-50 border border-red-500 text-red-900 placeholder-red-700')
                        $('.categorie_erorr').html('')
                         $('input[name="categorie"]').val('');

                        Toast.fire({
                            icon: "success"
                            , title: response.message
                        });

                    }





                }




            })
        })




    })

</script>
@endpush
