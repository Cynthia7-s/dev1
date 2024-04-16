<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inicio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url(RECURSOS_LOGIN_CSS.'style.css') ?>">

</head>
<body>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
               <!-- <h2 class="heading-section">Login</h2>-->
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="wrap d-md-flex">
                    <div class="login-wrap p-4 p-md-5">
                        <div class="d-flex">
                            <div class="w-100">
                                <h3 class="mb-4">Inicio</h3>
                            </div>
                        </div>
                        <?= form_open('validar_usuario', ["class" => ""]) ?>

                        <div class="form-group mt-3">
                            <label class="label" for="email">Correo electrónico</label>
                            <?php
                            $data = [
                                'type'  => 'email',
                                'class' => 'form-control',
                                'placeholder'  => '',
                                'id' => 'email', // Añadido el atributo id
                                'name'=>'correo_electronico',
                                'required' => true,
                            ];
                            echo form_input($data);
                            ?>
                        </div>
                        <div class="form-group mb-3">
                            <label class="label" for="password">Contraseña</label>
                            <?php
                            $data = [
                                'class'  => 'form-control',
                                'type'  => 'password',
                                'placeholder' => '*********',
                                'id' => 'password', // Añadido el atributo id
                                'name'=>'password',
                                'required' => true,
                            ];
                            echo form_password($data);
                            ?>
                        </div>
                        <div class="form-group">
                            <?php
                            echo form_submit('btn-enviar', "INICIAR SESIÓN", ['class' => 'form-control btn btn-primary rounded submit px-3'])
                            ?>
                        </div>
                        <div class="form-group d-md-flex">
                            <div class="w-50 text-left">
                                <label class="checkbox-wrap checkbox-primary mb-0">Recordarme
                                    <input type="checkbox" checked>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="w-50 text-md-right">
                                <a href="#">¿Olvidó su contraseña?</a>
                            </div>
                        </div>
                        <?= form_close()?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="<?php echo base_url(RECURSOS_LOGIN_JS.'/jquery.min.js'); ?>"></script>
<script src="<?= base_url(RECURSOS_LOGIN_JS.'/popper.js') ?>"></script>
<script src="<?= base_url(RECURSOS_LOGIN_JS.'bootstrap.min.js') ?> "></script>
<script src="<?= base_url(RECURSOS_LOGIN_JS.'main.js') ?>"></script>
</body>
</html>
