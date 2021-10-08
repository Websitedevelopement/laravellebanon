
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo e(('loginpage/fonts/icomoon/style.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(('loginpage/css/owl.carousel.min.css')); ?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo e(('loginpage/css/bootstrap.min.css')); ?>">
    
    <!-- Style -->
    <link rel="stylesheet" href="<?php echo e(('loginpage/css/style.css')); ?>">

    <title>Login</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('<?php echo e(("loginpage/images/bg_1.jpg")); ?>');""></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3>Login to <strong>Colorlib</strong></h3>
            <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>
            <?php if(session('status')): ?>
                <div class="mb-4 font-medium text-sm text-green-600">
                    <?php echo e(session('status')); ?>

                </div>
            <?php endif; ?>

            <form method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>

              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" class="form-control" placeholder="your-email@gmail.com" id="email" name="email" value="admin@gmail.com" required autofocus>
              </div>
              <div class="form-group last mb-3">
                <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="Your Password" id="password"  name="password" value="Admin@123" required autocomplete="current-password">
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
              </div>

              <input type="submit" value="Log In" class="btn btn-block btn-primary">

            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="<?php echo e(('loginpage/js/jquery-3.3.1.min.js')); ?>"></script>
    <script src="<?php echo e(('loginpage/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(('loginpage/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(('loginpage/js/main.js')); ?>"></script>
  </body>
<?php /**PATH D:\Lebanon\phpframe\data\resources\views/auth/login.blade.php ENDPATH**/ ?>