@extends('layouts.logslayout')
@section('headLink')
<title>Holopals.SignUp</title>
@endsection
@section('bodyContent')

<main class="main border-transparent shadow-sm  bg-transparent">
  <div class="forms">
  <form method="post" action="{{route('signup.verification')}}" enctype="multipart/form-data">
  @csrf
  <p class="fs-2 col-lg-auto me-lg-3">HOLO<span>PALS</span></p>
    <h1 class="h3 mb-3 fw-normal fs-5">Please sign up</h1>
   
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="first-name" name="firstname" value="{{old('firstname')}}">
      <label for="floatingInput">Firstname</label>
    </div>

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="last-name" name="lastname" value="{{old('lastname')}}">
      <label for="floatingInput">Lastname</label>
    </div>

     <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="user-name" name="name" value="{{old('username')}}">
      <label for="floatingInput">Username</label>
    </div>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" value="{{old('email')}}" >
      <label for="floatingInput">Email address</label>
    </div>
   
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingInput" placeholder="Password" name="password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="form-floating">
      <input type="password" class="form-control" id="floatingInput" placeholder="Confirm-password" name="confirm-password">
      <label for="floatingPassword">Confirm-password</label>
    </div>

    <ul>
      <!-- error -->
      @if($errors = Session::get("errors"))
      @foreach($errors->all() as $error)
      <li class="error text-danger mt-2"  style="list-style-type:none;">    
      {{$error}}
      </li>
      @endforeach
      @endif

      <!-- success -->
      @if($sucess = Session::get("sucess"))
      <li class="error text-success mt-2 "  style="list-style-type:none;" >    
      {{$sucess}}
      </li>
      @endif
        <!-- ?php 
        if( isset($_GET['err'])){
        $mssg= $_GET['err'];
        echo  $mssg;
          }
        ?>
        -->
       
    </ul>

    <button class="w-100 btn btn-lg btn-danger mt-4" type="submit" name="submit">	
    	Sign in
    </button>
    	<p class="mb-3 mt-3 text-muted">Alredy have an account 
    	<a class="login-text fs-6 fw-normal  " href="{{route('login')}}">Login</a> </p>
        <p class="copyright mt-5 mb-3 text-muted" ></p>
<script type="text/javascript" src="js/info.js"></script>
  </form>
  </div>
</main>
@endsection