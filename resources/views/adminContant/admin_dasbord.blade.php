@extends('adminContant.adminLayout.adminlLayout')

@section('title')
dashbord
@endsection
@section('contant')
    <div class="p-4">
        <!-- Your content goes here -->
        <h1 class="text-3xl font-bold">Welcome to the website!</h1>
        <p>Hello {{auth()->user()->name}}</p>  @role('admin')

        <span>  You are admin</span>
        @endrole

      
        @role('writter')

        <span>  You are Writter</span>
        @endrole
    </div>
@endsection
