@extends('layout.main')

@section('content')
<h1>Create Page</h1><br>

<div class="container">

  @if($errors->any())
  @foreach ($errors->all() as $error)

  <div class="alert alert-danger" role="alert">
    {{ $error }}
  </div>

  @endforeach
  @endif

<form class="text-center border border-light p-5" action="{{route('store')}}" method="POST">

  {{ csrf_field()}}

  <p class="h4 mb-4"> Add Student</p>

    <div class="form-row mb-4">
      <div class="col">
      <input type="text" id="defaultRegisterFormFirstName" class="form-control" name="firstname" placeholder="firstname">
    </div>
  <div class="col">
      <input type="text" id="defaultRegisterFormLastName" class="form-control" name="lastname" placeholder="lastname"> 
    </div>
  </div>
 <input type="email" id="defaultRegisterFormEmail" class="form-control" name="email" placeholder="E-mail"> 
  <input type="text" id="defaultRegisterFormPhone" class="form-control" name="phone" placeholder="Phone"> <br>

     <!-- <label class="form-check-label" for="invalidCheck2">
        Agree to terms and conditions
      </label>
    </div>
  </div>-->
    <button class="btn btn-primary" type="submit">Add New</button>
</form>

</div>

@endsection