<head>
  <link rel="stylesheet" href="/elmotorcito/css/forms.css?v=<?php echo time(); ?>" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>
  <link rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css?v=<?php echo time(); ?>" />
</head>
<style>
  .footerimg {
    width: 100px;
  }

  .inputBusqueda {
    height: 32px;
  }
</style>

<header>
  <?php
  require_once('Header.php');
  ?>
</header>
<div class="container mt-3 w-50 m-auto">
  <div class="row">
    <div class="col-lg-12">
      <h1 class="text-center">Contáctanos</h1>
      <p class="lead text-center">Por favor, déjanos tus comentarios.</p>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16176572.446395446!2d-99.75414738134248!3d8.166588938167207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91cd1939c612b413%3A0x4beaa6fc669217a2!2sEl%20motorcito!5e0!3m2!1ses!2ses!4v1716130973106!5m2!1ses!2ses" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</div>

<div class="container mt-3 mb-5  w-50 m-auto">
  <div class="row">
    <div class="col-lg-12">
      <form class="contacto-form" action="mailto:tienda@elmotorcito.com" method="post" enctype="text/plain">
        <div class="form-group">
          <label for="nombre">Nombre:</label>
          <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
          <label for="email">Correo electrónico:</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="mensaje">Mensaje:</label>
          <textarea class="form-control" id="mensaje" name="mensaje" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-success bg-success text-white fw-bold">Enviar mensaje</button>
      </form>
    </div>
  </div>
</div>

<footer>
  <?php
  require_once('Footer.php');
  ?>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>