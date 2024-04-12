<?php
// dd(base_url(recursos_login_JS."/"));
// base_url(); : http://localhost:9
?>

<!doctype html>
<html lang="en">

<head>
<<<<<<< Updated upstream
    <title>Login 04</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?php echo base_url('recursos_login/css/style.css'); ?>">
=======
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Iniciar sesion</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link href="/recursos_login/css/login.css" rel="stylesheet" type="text/css" />
<script src="/recursos_login/js/login.js"></script>
>>>>>>> Stashed changes



</head>

<body>
<<<<<<< Updated upstream
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Login #04</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="img" style="background-image: url('<?php echo base_url('img/bg-1.jpg')?>');">
                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Sign In</h3>
                                </div>
                                <div class="w-100">
                                    <p class="social-media d-flex justify-content-end">
                                        <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                                        <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                                    </p>
                                </div>
                            </div>
                            <?= form_open('ruta', ["class"=> "signin-form"]) ?>
    
                            <div class="form-group mb-3">
        <label class="label" for="name">Username</label>
        <?php
        $attributes=array(
            'type'=>'username',
            'class'=>'form-control',
            'placeholder'=>'@gmail.com',
            'required'=>'',
        );
        echo form_input($attributes);
        ?>
    </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                    <?php
        $attributes=array(
            'type'=>'password',
            'class'=>'form-control',
            'placeholder'=>'*********',
            'required'=>'true',
        );
        echo form_password($attributes);
        ?>
                                </div>
                                <div class="form-group">
                                
                                   
                                
                                    <?php
                                    echo form_submit('btn-enviar', 'iniciar sesion', ['class' => 'form-control btn btn-primary rounded submit px-3' ])
                                    ?>
                                </div>
                                <div class="form-group d-md-flex">
                                    <div class="w-50 text-left">
                                        <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                            <input type="checkbox" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="w-50 text-md-right">
                                        <a href="#">Forgot Password</a>
                                    </div>
                                </div>
                            <?= form_close() ?>
                            <p class="text-center">Not a member? <a data-toggle="tab" href="#signup">Sign Up</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="<?php echo base_url('recursos_login_JS/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('recursos_login_JS/popper.js') ?>"></script>
    <script src="<?= base_url('recursos_login_JS/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('recursos_login_JS/main.js') ?>"></script>

=======
 

  <div class="container right-panel-active">
    <!-- Sign Up -->
    <div class="container__form container--signup">
      <form action="#" class="form" id="form1">
        <h2 class="form__title">Adminstrador</h2>
        <input type="text" placeholder="User" class="input" />
        <input type="password" placeholder="Password" class="input" />
        <button class="btn">Iniciar</button>
      </form>
    </div>

    <!-- Sign In -->
    <div class="container__form container--signin">
      <form action="#" class="form" id="form2">
        <h2 class="form__title">Profesor</h2>
        <input type="text" placeholder="User" class="input" />
        <input type="password" placeholder="Password" class="input" />
        <button class="btn">Iniciar</button>
      </form>
    </div>

    <!-- Overlay -->
    <div class="container__overlay">
      <div class="overlay">
        <div class="overlay__panel overlay--left">
          <button class="btn" id="signIn">Profesor</button>
        </div>
        <div class="overlay__panel overlay--right">
          <button class="btn" id="signUp">Adminstardor</button>
        </div>
      </div>
    </div>
  </div>
  <script src="script.js"></script>
>>>>>>> Stashed changes
</body>

</html>