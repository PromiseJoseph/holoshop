<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Holoshop')); ?></title>
    <link href="assets/img/favicon.png" rel="icon">


  <!-- Vendor CSS Files -->
  <link href="<?php echo e(URL('storage/vendor/animate.css/animate.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(URL('storage/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(URL('storage/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(URL('storage/vendor/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="<?php echo e(URL('storage/css/style.css')); ?>" rel="stylesheet">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

     <!-- Scripts -->
     <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL('storage/css/index.css')); ?>" rel="stylesheet">

    <style>
     #cartquantity{
        color:white;
        background:#ac241a;
        width: auto;
        border-radius:5px ;
        margin:0.5px;
        margin-top: -10px;
        position:absolute;
        text-align: center;

     }
    </style>
</head>
<body>
    <?php if(auth()->guard()->check()): ?>
    <!-- ======= Product Search Section ======= -->
  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Search Property</h3>
    </div>
    <span class="close-box-collapse right-boxed bi bi-x"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label class="pb-2" for="Type">Keyword</label>
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="Keyword">
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="Type">Category</label>
              <select class="form-control form-select form-control-a" id="Type">
                <option>All Type</option>
                <option>Phones and Gadgets</option>
                <option>wears</option>
                <option>Electronics</option>
                <option>Shoes</option>

              </select>
            </div>
          </div>
            <div class="col-md-12">
            <button type="submit" class="btn btn-b">Search </button>
          </div>
        </div>
      </form>
    </div>
  </div><!-- End Property Search Section -->>
<?php endif; ?>
  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="<?php echo e(route('index.auth')); ?>">
                     Holo<span class="color-c">Shop</span>
    </a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link mx-1 " aria-expanded="false" href="<?php echo e(route('index.auth')); ?>"> <i class="bi bi-house-fill " ></i>  Home</a>
          </li>

          <li class="nav-item d-flex ">
            <a  class="nav-link  mx-1" aria-expanded="false" href="<?php echo e(route('cart.index')); ?>">  <i class="bi bi-cart4 " ></i>  Cart <span id="cartquantity">0</span> </a> 
          </li>

         

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle mx-1"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="bi bi-view-stacked" ></i>  Categories</a>
              <div class="dropdown-menu">
                <?php if(auth()->guard()->check()): ?>
                <a class="dropdown-item " href="<?php echo e(route('categories',[ 'category' => 'phones and gadgets' ])); ?>" >Phones and Gadgets</a>
                <a class="dropdown-item " href="<?php echo e(route('categories',[ 'category' => 'wears' ])); ?>">Wears</a>
                <a class="dropdown-item " href="<?php echo e(route('categories',[ 'category' => 'electronics' ])); ?>">Electronics</a>
                <a class="dropdown-item " href="<?php echo e(route('categories',[ 'category' => 'shoes' ])); ?>">Shoes</a>
                <?php endif; ?>
                <?php if(auth()->guard()->guest()): ?>
                <a class="dropdown-item text-muted"> please login </a>
                <?php endif; ?>
              </div>
          </li>

          <li class="nav-item">
            <a class="nav-link mx-1  " aria-expanded="false" href="blog-grid.html"> <i class="bi bi-person-badge " ></i>  portfolio</a>
          </li>

          <li class="nav-item">
            <a class="nav-link "  aria-expanded="false" href="contact.html"><i class="bi bi-telephone-fill " ></i>  Contact</a>
          </li>
 
          <!-- user id  -->
          <?php if(auth()->guard()->check()): ?>
          <p class="hidden" id="idIdentifier" data-id="<?php echo e(Auth::user()->id); ?>"></p>
          <?php endif; ?> 

          <?php if(auth()->guard()->guest()): ?>
          <p class="hidden" id="idIdentifier" data-id="null"></p>
          <?php endif; ?>
          <!-- user id  -->

           
        <!-- Right Side Of Navbar -->
                        <!-- Authentication Links -->
            <div class="d-flex " id="logs" style="margin-left: 9rem;">
                        <?php if(auth()->guard()->guest()): ?>
                            <?php if(Route::has('login')): ?>
                                <li class="flex-item">
                                    <a class=" nav-link " href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                                </li>
                            <?php endif; ?>

                            <?php if(Route::has('register')): ?>
                                <li class="flex-item mx-3">
                                    <a class="nav-link " href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php if(auth()->guard()->check()): ?>
                             <!-- <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle mx-1"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="bi bi-view-stacked" ></i>  Categories</a>
                                <div class="dropdown-menu">
                                  <?php if(auth()->guard()->check()): ?>
                                  <a class="dropdown-item " href="<?php echo e(route('categories',[ 'category' => 'phones and gadgets' ])); ?>" >Phones and Gadgets</a>
                                  <a class="dropdown-item " href="<?php echo e(route('categories',[ 'category' => 'wears' ])); ?>">Wears</a>
                                  <a class="dropdown-item " href="<?php echo e(route('categories',[ 'category' => 'electronics' ])); ?>">Electronics</a>
                                  <a class="dropdown-item " href="<?php echo e(route('categories',[ 'category' => 'shoes' ])); ?>">Shoes</a>
                                  <?php endif; ?>
                                  <?php if(auth()->guard()->guest()): ?>
                                  <a class="dropdown-item text-muted"> please login </a>
                                  <?php endif; ?>
                                </div>
                            </li> -->
                            <li class="flex-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true" v-pre>
                                    <?php echo e(Auth::user()->name); ?>

                                </a>
                                
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                   
                                
                                  <a class="dropdown-item" href="#">
                                       <i class="bi bi-person-circle" ></i>
                                        <?php echo e(__('Profile')); ?>

                                    </a>

                                    <a class="dropdown-item" href="#"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                     <i class="bi bi-box-arrow-right " ></i>
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('userlogout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                       <?php endif; ?>
            </div>
        </ul>
      </div>
        <?php if(auth()->guard()->check()): ?>
      <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
        <i class="bi bi-search"></i>
      </button>
      <?php endif; ?>

    </div>
  </nav><!-- End Header/Navbar -->

  <?php if(auth()->guard()->guest()): ?>
  
  <?php echo $__env->yieldContent('headswiper'); ?>
  
  <?php endif; ?>

         <!-- ======= Hardcoded products with js , alt--- Api js ======= -->
        <main class="py-4 mt-5" id="main">
         
            <?php echo $__env->yieldContent('content'); ?>
        </main>
         <!-- ======= End of hardcoded products ======= -->
         
         <!-- ======= Footer ======= -->
  <section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand"><?php echo e(config('app.name', 'Holoshop')); ?></h3>
            </div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a">
                Enim minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat duis
                sed aute irure.
              </p>
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                  <span class="color-text-a">Phone .</span> contact@example.com
                </li>
                <li class="color-a">
                  <span class="color-text-a">Email .</span> +54 356 945234
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">The Company</h3>
            </div>
            <div class="w-body-a">
              <div class="w-body-a">
                <ul class="list-unstyled">
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Site Map</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Legal</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Agent Admin</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Careers</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Affiliate</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Privacy Policy</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">International sites</h3>
            </div>
            <div class="w-body-a">
              <ul class="list-unstyled">
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="#">Venezuela</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="#">China</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="#">Hong Kong</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="#">Argentina</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="#">Singapore</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="#">Philippines</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="nav-footer">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">Home</a>
              </li>
              <li class="list-inline-item">
                <a href="#">About</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Property</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Blog</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Contact</a>
              </li>
            </ul>
          </nav>
          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-linkedin" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Copyright
              <span class="color-a"><?php echo e(config('app.name', 'Holoshop')); ?></span> All Rights Reserved.
            </p>
          </div>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
          -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
          <!-- Vendor JS Files -->
        <script src="<?php echo e(URL('storage/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
        <script src="<?php echo e(URL('storage/vendor/swiper/swiper-bundle.min.js')); ?>"></script>

        <!-- Template Main JS File -->
        <script  src="<?php echo e(URL('storage/js/shop.js')); ?>"></script>
        <script src="<?php echo e(URL('storage/js/main.js')); ?>"></script>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel\Holoshop\resources\views/layouts/app.blade.php ENDPATH**/ ?>