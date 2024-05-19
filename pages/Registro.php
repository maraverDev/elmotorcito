<head>
  <link rel="stylesheet" href="/elmotorcito/css/forms.css?v=<?php echo time(); ?>" />
  <script src="/elmotorcito/scripts/Index.js?v=<?php echo time(); ?>"></script>


</head>
<header>
  <?php
  require_once('Header.php');
  ?>
</header>
<div class="cont">
  <h2>Regístrate para crear una cuenta</h2>
  <div class="loginContainer">
    <div class="logform">
      <form action="/elmotorcito/php_forms/Registro.php" method="POST">
        <div class="input"> <label for="username"></label>
          <input required type="text" id="username" name="user_name" placeholder="Nombre de Usuario">
        </div>

        <div class="input"> <label for="email"></label>
          <input required type="email" id="email" name="email" placeholder="Email">
        </div>

        <div class="input"> <label for="password"></label>
          <input required type="password" id="password" name="pass" placeholder="Contraseña">
        </div>

        <div class="input"> <label for="repeat-password"></label>
          <input required type="password" id="repeat-password" name="repeat-password" placeholder="Confirma tu contraseña">
        </div>

        <button type="submit" class="acceder">Acceder</button>
      </form>
      <a href="#" class="olvidar">¿Tienes problemas para acceder?</a>
      <a href="/elmotorcito/pages/Login.php" class="olvidar"><span class="nostyle">Si ya eres usuario</span>, inicia sesión.</a>
      <img class="logoparaLogin" src="/elmotorcito/images/anotherlOGO.png" alt="Logo del login" width="90px">
    </div>

  </div>

</div>
<footer>
  <?php
  require_once('Footer.php');
  ?>
</footer>
