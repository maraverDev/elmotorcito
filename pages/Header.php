<?php
// Reporta todos los errores excepto E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>elmotorcito.es🛵</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      var isLoggedIn = <?php echo isset($_SESSION['logged_in']) && $_SESSION['logged_in'] ? 'true' : 'false'; ?>;
      // console.log("isLoggedIn: ", isLoggedIn); //Hola david
      if (isLoggedIn) {
        $(".cuenta-img").attr("src", "/elmotorcito/images/close-square-svgrepo-com.svg");
        $(".cuenta").attr("href", "/elmotorcito/php_forms/Logout.php");
      }
    });
  </script>
  <link rel="stylesheet" href="/elmotorcito/css/styles.css?v=<?php echo time(); ?>" />
  
</head>

<body>
<div class="sidebar" id="sidebar">
    <div class="sidebarHeader">
      <img class="retroceder" id="retroceder" src="/elmotorcito/images/arrow-right-circle-svgrepo-com.svg" alt="" width="35px" />
    </div>
    <div class="container-sidebar">
      <div class="elemento">
        <img src="/elmotorcito/images/motorcycle-svgrepo-com.svg" alt="Motos R" width="30px" />
        <span>Ciclomotores R</span>
      </div>
      <hr class="custom-hr" />
      <div class="elemento">
        <img src="/elmotorcito/images/motorbike-side-view-svgrepo-com.svg" alt="MotoCross" width="30px" />
        <span>Moto Cross</span>
      </div>
      <hr class="custom-hr" />
      <div class="elemento">
        <img src="/elmotorcito/images/scooter-svgrepo-com.svg" alt="Scooter" width="30px" />
        <span>Scooter</span>
      </div>
    </div>
  </div>
  <div class="left">
    <div class="menu" id="menu">
      <img src="/elmotorcito/images/menu-burger-horizontal-svgrepo-com.svg" alt="Logo de menu" width="45px" />
      <span>Menú</span>
    </div>
    <div class="logo">
      <a href="/elmotorcito/Index.php"><img src="/elmotorcito/images/logo_empresa.png" alt="logo de la empresa" width="100px" /></a>
    </div>
  </div>
  <div class="center">
    <div class="barraBusqueda">
      <input class="inputBusqueda" type="text" placeholder="Busca en elmotorcito.es" />
      <button class="searcher">
        <img src="/elmotorcito/images/search-svgrepo-com.svg" alt="" width="20px" />
      </button>
    </div>
  </div>
  <div class="right">
    <nav>
      <a class="cuenta" href="/elmotorcito/pages/Login.php">
        <img src="/elmotorcito/images/account-svgrepo-com.svg" width="50px" class="cuenta-img <?php echo isset($_SESSION['logged_in']) && $_SESSION['logged_in'] ? 'logged-in' : ''; ?>" alt="Imagen de cuenta">
      </a>
      <a href="#"><img src="/elmotorcito/images/shopping-cart-svgrepo-com.svg" alt="Carrito" width="50px" /></a>
    </nav>
  </div>
  <script src="/elmotorcito/scripts/Sidebar.js"></script>

</body>

</html>