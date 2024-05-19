<head>
  <link rel="stylesheet" href="/elmotorcito/css/forms.css?v=<?php echo time(); ?>" />
</head>
<header>
  <?php
  require_once('Header.php');
  ?>
</header>
<div class="cont">
  <h2>Inicia sesión para acceder a tu cuenta</h2>
  <div class="loginContainer">
    <div class="logform">
      <form action="/elmotorcito/php_forms/Login.php" method="POST">
        <div class="userN"> <label for="username" class="labelSpace"></label>
          <input type="text" id="username" name="user_name" placeholder="Nombre de Usuario">
        </div>
        <div class="passw"> <label for="password"></label>
          <input type="password" id="password" name="pass" placeholder="Contraseña">
        </div>
        <button type="submit" class="acceder">Acceder</button>
      </form>
      <a href="#" class="olvidar">¿Tienes problemas para acceder?</a>
      <a href="Registro.php" class="olvidar"><span class="nostyle">Si eres nuevo</span>, regístrate</a>
      <img class="logoparaLogin" src="/elmotorcito/images/anotherlOGO.png" alt="Logo del login" width="90px">
    </div>

  </div>

</div>
<footer>
  <?php
  require_once('Footer.php');
  ?>
</footer>