<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Iniciar sesion</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link href="/recursos_login/css/login.css" rel="stylesheet" type="text/css" />
<script src="/recursos_login/js/login.js"></script>



</head>

<body>
 

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
</body>

</html>


