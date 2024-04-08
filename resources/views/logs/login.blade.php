@extends('layouts.logslayout')
@section('headLink')
<title>Holopals.login</title>
@endsection
@section('bodyContent')

<main class="main  border-rounded shadow-sm bg-dark bg-transparent " >
  <div class="forms">
  <form method="post" action="{{route('login.verification')}}" enctype="multipart/form-data">
  @csrf
  <p class="fs-2 col-lg-auto me-lg-3">HOLO<span>PALS</span></p>
    <h1 class="h3 mb-3 fw-normal fs-5">Please login </h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" value="{{old('email')}}" >
      <label for="floatingInput">Email address</label>
    </div>
    @error('email')
    <li class="error text-danger "  style="list-style-type:none;">    
      {{$message}}
      </li>
    @enderror

    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
      <label for="floatingPassword">Password</label>
    </div>

    @error('password')
    <li class="error text-danger "  style="list-style-type:none;">    
      {{$message}}
      </li>
    @enderror
    <ul>
      <!-- error   -->
      @if($error= Session::get("error"))
      <li class="error text-danger mt-2"  style="list-style-type:none;">    
      {{$error}}
      </li>
      @endif 

      <!-- success -->
      @if($sucess = Session::get("sucess"))
      <li class="error text-sucess mt-2 "  style="list-style-type:none;">    
      {{$sucess}}
      </li>
      @endif 
       
       
    </ul>

    <button class="w-100 btn btn-lg btn-danger mt-4" type="submit" name="submit">	
    	Login
    </button>
    	<p class="mb-3 mt-3 text-muted">Do not have an account
    	<a class="login-text fs-6 fw-normal  " href="{{ route('register')}}">Signup</a> </p>
        <p class="copyright mt-5 mb-3 text-muted" ></p>
  </form>
  </div>
</main>
@endsection