<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>elmotorcito.es🛵</title>
  <link rel="stylesheet" href="/elmotorcito/css/styles.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Jersey+25&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet" />
</head>

<body>
  <header>
    
    <?php
    require_once('pages/Header.php');
    ?>

  </header>
  <div class="container">
    <div class="welcomeContainer">
      <div class="welcome">
        <h2 class="titlePage">Tu tienda de motos de segunda mano.</h2>
        <p>
          Encontrarás esa moto que tanto llevas esperando y soñando a un
          precio irresistible. Vivirás ese sueño a dos ruedas, visita nuestra
          web para ver la disponibilidad de nuestros productos. <br /><b>¡GAS!</b>
        </p>
      </div>
    </div>
  </div>
  <?php
  require_once('pages/Top.php');
  ?>
  <div class="button">
    <button class="visitarcatalogo">
      <a style="text-decoration: none; color: black" href="/elmotorcito/pages/Top.php">ver el catálogo</a>
    </button>
  </div>
  <footer>
    <?php
    require_once('pages/Footer.php');
    ?>
  </footer>

</body>


</html>