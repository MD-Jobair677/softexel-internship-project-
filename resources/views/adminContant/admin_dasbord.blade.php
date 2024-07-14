@extends('adminContant.adminLayout.adminlLayout')

@section('title')
dashbord
@endsection
@section('contant')
    <div class="p-4">
        <!-- Your content goes here -->
        <h1 class="text-3xl font-bold">Welcome to the website!</h1>
        <p>hello {{auth()->user()->name}}.</p>
    </div>
@endsection
