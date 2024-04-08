<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=5, initial-scale=1.0">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link href="{{ URL('storage/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ URL('storage/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ URL('storage/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <link href="{{ asset('storage/css/rest_Dash.css')}}" rel="stylesheet">
    <link href="{{ asset('storage/css/logs.css')}}" rel="stylesheet">
     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  

 @yield('headLink') <!-- + title etc -->
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (max-width: 1400px){
        .forms{
        /* text-align: center; */
        margin-top: 5rem;
        margin-right: 15rem;
        margin-left: 15rem;
        }
      }
      @media (max-width: 1100px){
        .forms{
      
        margin-top: 5rem;
        margin-right: 10rem;
        margin-left: 10rem;
        }
      }

      @media (max-width: 900px )
      {
        .forms{
        /* text-align: center; */
        margin-top: 5rem;
        margin-right: 7rem;
        margin-left: 7rem;
        }
        .main{
          margin:7rem;
        }
      }
    
    
      @media (max-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      
      }

      @media (max-width: 700px )
      {
        .forms{
     
        margin-top: 5rem;
        margin-right: 5rem;
        margin-left: 5rem;
        }
        .main{
          margin:5rem;
        }
      }
      
      @media (max-width: 500px )
      {
        .forms{
     
        margin-top: 5rem;
        margin-right: 2rem;
        margin-left: 2rem;
        }
        .main{
          margin:2rem;
        }
      }
      
    </style>

  </head>

  <body class="text-center ">
    @yield('bodyContent')
 </body>
</html>