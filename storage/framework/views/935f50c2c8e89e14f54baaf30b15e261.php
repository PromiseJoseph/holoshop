<?php $__env->startSection('headLink'); ?>
<title>Holopals.login</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('bodyContent'); ?>

<main class="main  border-rounded shadow-sm bg-dark bg-transparent " >
  <div class="forms">
  <form method="post" action="<?php echo e(route('login')); ?>" enctype="multipart/form-data">
  <?php echo csrf_field(); ?>
  <p class="fs-2 col-lg-auto me-lg-3">HOLO<span>PALS</span></p>
    <h1 class="h3 mb-3 fw-normal fs-5">Please login </h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" value="<?php echo e(old('email')); ?>" >
      <label for="floatingInput">Email address</label>
    </div>
    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <li class="error text-danger "  style="list-style-type:none;">    
      <?php echo e($message); ?>

      </li>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
      <label for="floatingPassword">Password</label>
    </div>

    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <li class="error text-danger "  style="list-style-type:none;">    
      <?php echo e($message); ?>

      </li>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

    <ul>
      <!-- error   -->
      <?php if($error= Session::get("error")): ?>
      <li class="error text-danger mt-2"  style="list-style-type:none;">    
      <?php echo e($error); ?>

      </li>
      <?php endif; ?> 

      <!-- success -->
      <?php if($sucess = Session::get("sucess")): ?>
      <li class="error text-sucess mt-2 "  style="list-style-type:none;">    
      <?php echo e($sucess); ?>

      </li>
      <?php endif; ?> 
       
       
    </ul>

    <button class="w-100 btn btn-lg btn-danger mt-4" type="submit" name="submit">	
    	Login
    </button>

    
  
        <div class=" offset-md-1 mb-2 mt-2">
                <div class="form-check">
                    <input class="form-check-input " type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                    <label class="form-check-label " for="remember">
                        <?php echo e(__('Remember Me')); ?>

                    </label>
                </div>
            </div>
        


    	<p class="mb-3 mt-3 text-muted">Do not have an account
    	<a class="login-text fs-6 fw-normal  " href="<?php echo e(route('register')); ?>">Signup</a> </p> 
         
      <?php if(Route::has('password.request')): ?>
            <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                <?php echo e(__('Forgot Your Password?')); ?>

            </a>
        <?php endif; ?>

        <p class="copyright mt-5 mb-3 text-muted" ></p>
  </form>
  </div>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.logslayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\Holoshop\resources\views/auth/login.blade.php ENDPATH**/ ?>