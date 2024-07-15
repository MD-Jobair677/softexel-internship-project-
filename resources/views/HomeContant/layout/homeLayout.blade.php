    <!doctype html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./output.css" rel="stylesheet">
        @vite(['resources/css/app.css','resources/js/app.js'])



    </head>
    <body>



        {{-- nav bar --}}





        <nav class="bg-white border-gray-200 dark:bg-gray-900">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Logo</span>
                </a>


                @guest

                <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">


                    <a href="{{ route('login') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">LogIn</a>


                </div>



                @endguest

                @auth

                <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <button type="button" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                        <span class="sr-only">Open user menu</span>
                        <img class="w-8 h-8 rounded-full" src="https://api.dicebear.com/9.x/big-ears-neutral/svg?flip=false" alt="user photo">
                    </button>
                    <!-- Dropdown menu -->
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
                        <div class="px-4 py-3">
                            <span class="block text-sm text-gray-900 dark:text-white">{{auth()->user()->name}}</span>
                            <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{auth()->user()->email}}</span>
                        </div>
                        <ul class="py-2" aria-labelledby="user-menu-button">

                            @role('writter')

                             <li>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">You are writter</a>
                            </li>
                             <li>
                                <a href="{{route('profile.account')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">My account</a>
                            </li>
                            <li>
                                <a href="{{route('admin.dashbord')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                            </li>

                              <li>


                                <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">

                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                        @csrf

                                        <input type="submit" value="Sign out">
                                    </form>

                                </a>

                            </li>

                           @endrole




                            @role('admin')

                             <li>
                                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">You are admin</a>
                            </li>
                             <li>
                                <a href="{{route('profile.account')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">My account</a>
                            </li>
                            <li>
                                <a href="{{route('admin.dashbord')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                            </li>

                              <li>


                                <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">

                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                        @csrf

                                        <input type="submit" value="Sign out">
                                    </form>

                                </a>

                            </li>

                                 @endrole


                                 
                            @role('user')

                            
                             <li>
                                <a href="{{route('profile.account')}}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">My account</a>
                            </li>
                            <li>
                                
                            </li>

                              <li>


                                <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">

                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                        @csrf

                                        <input type="submit" value="Sign out">
                                    </form>

                                </a>

                            </li>

                                 @endrole



                            


                          


                        </ul>
                    </div>
                    

                    









                    <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>


                @endauth










                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
                    <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">

                    <li>
                            <a href="{{route('home.page')}}" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Home</a>
                        </li>

                    @forelse($Categorie as $key => $Categori)
                     <li>
                            <a href="#" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">{{ $Categori->categorie_name}}</a>
                        </li>

                        
                    @empty
                        
                    @endforelse

                       





                        





                    </ul>
                </div>





            </div>
        </nav>




        {{-- main section satrt --}}
        <main>





            @yield('homeContant')


           





        </main>



        <footer class="bg-white rounded-lg shadow dark:bg-gray-900 m-4  xl:h-full xl:w-full">
            <div class="w-full max-w-screen-2xl mx-auto p-4 md:py-8">
                <div class="sm:flex sm:items-center sm:justify-between">
                    <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                       
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Logo</span>
                    </a>
                    <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                        <li>
                            <a href="#" class="hover:underline me-4 md:me-6">About</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Contact</a>
                        </li>
                    </ul>
                </div>
                <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
                <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">Md Jobair hossain</a>. All Rights Reserved.</span>
            </div>
        </footer>















        {{-- main section end --}}





        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>

    </body>
    </html>
