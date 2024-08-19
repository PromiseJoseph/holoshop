<?php $__env->startSection('headLink'); ?>
<title>Holopals.SignUp</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('bodyContent'); ?>
<main class="main border-transparent shadow-sm  bg-transparent">
  <div class="forms">
  <form method="post" action="<?php echo e(route('register')); ?>" enctype="multipart/form-data">
  <?php echo csrf_field(); ?>
  <p class="fs-2 col-lg-auto me-lg-3">HOLO<span>PALS</span></p>
    <h1 class="h3 mb-3 fw-normal fs-5">Please sign up</h1>
   
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="first-name" name="firstname" value="<?php echo e(old('firstname')); ?>">
      <label for="floatingInput">Firstname</label>
    </div>

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="last-name" name="lastname" value="<?php echo e(old('lastname')); ?>">
      <label for="floatingInput">Lastname</label>
    </div>

     <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="user-name" name="name" value="<?php echo e(old('username')); ?>">
      <label for="floatingInput">Username</label>
    </div>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" value="<?php echo e(old('email')); ?>" >
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
      <?php if($errors = Session::get("errors")): ?>
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li class="error text-danger mt-2"  style="list-style-type:none;">    
      <?php echo e($error); ?>

      </li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endif; ?>

      <!-- success -->
      <?php if($sucess = Session::get("sucess")): ?>
      <li class="error text-success mt-2 "  style="list-style-type:none;" >    
      <?php echo e($sucess); ?>

      </li>
      <?php endif; ?>
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
    	<a class="login-text fs-6 fw-normal  " href="<?php echo e(route('login')); ?>">Login</a> </p>
        <p class="copyright mt-5 mb-3 text-muted" ></p>
<script type="text/javascript" src="js/info.js"></script>
  </form>
  </div>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.logslayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\Holoshop\resources\views/auth/register.blade.php ENDPATH**/ ?>