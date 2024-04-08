@extends('layouts.logslayout')
@section('bodyContent')
    
 
    <div class="flex m-center fs-5 mt-5" style="text-align:center;">
        <h3 class="mb-3"> Please Verify Your account</h3>

        <!-- ?php
        $userid = Session()->get('userid');
        if($userid){
          echo $userid;
        }
        echo "noId"
        ?> -->
        @if ($userid = Session::get('user'))

         <?php dd($userid)?>

        @endif

    <form method="post" action="{{route('codeVerifier',['userid' => 1 ])}}" enctype="multipart/form-data">
    @csrf
        <input class="flex-item  text-centered" type="text"  size="1" maxlength="1" name="codeOne" style="padding:15px; margin:5px;">
       
        <input class="flex-item  text-centered" type="text"  size="1" maxlength="1" name="codeTwo" style="padding:15px; margin:5px;">
      
        <input class="flex-item  text-centered" type="text"  size="1" maxlength="1" name="codeThree" style="padding:15px; margin:5px;">
       
        <input class="flex-item  text-centered" type="text"  size="1" maxlength="1" name="codeFour" style="padding:15px; margin:5px;"><br><br>
       
        <input class="btn btn-success fs-4 mt-3" type="submit" value="Verify" >

        @if ($error = Session::get('error'))
            <li class="error text-danger "  style="list-style-type:none;">    
                 {{$error}}
            </li>
        @endif
    </form>
    </div>

@endsection



