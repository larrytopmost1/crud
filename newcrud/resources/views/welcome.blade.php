@extends('layout.main')

@section('content')
<h1>Create Page</h1>

@if(session('successMsg'))

<div class="alert alert-success" role="alert">
    {{session('successMsg')}}
</div>

@endif


<div class="container">
<table class="table">
    <thead class="black white-text">
        <tr>
            <th scope="col">#</th>
            <th scope="col">FirstName</th>
            <th scope="col">LastName</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Action</th>

    <!--@foreach($students as $student)-->
        </tr>
      </thead>
       <tbody>
       <tr>
           <th scope="row">id</th>
        <th scope="row">first_name</th>
        <th scope="row">last_name</th>
        <th scope="row">email</th>
        <th scope="row">phone</th>
        <th scope="col">Edit || Delete</th>

        <!-- <th scope="row">{{$student-> id}}</th>
        <th scope="row">{{$student-> first_name}}</th>
        <th scope="row">{{$student-> last_name}}</th>
        <th scope="row">{{$student-> email}}</th>
        <th scope="row">{{$student-> phone}}</th>
        <th scope="col">Edit || Delete</th>-->
    </tr>
  </tbody>
</table>
</div>

@endsection
