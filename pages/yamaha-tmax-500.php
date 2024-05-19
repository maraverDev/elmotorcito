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

<div id="carouselExampleCaptions" class="carousel slide text-danger m-5">

  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active bg-success-subtle" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" class="bg-success-subtle" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" class="bg-success-subtle" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" class="bg-success-subtle" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" class="bg-success-subtle" aria-label="Slide 5"></button>
  </div>
  <div class="carousel-inner">
  <h2 class="d-flex justify-content-center text-dark">Yamaha T-MAX 530</h2>
    <div class="carousel-item active w-2-">
      <img src="/elmotorcito/images/carrousel-images/tmax/001-yamaha-tmax-tech-max-2024-estudio-bronce-01.jpg" class="d-block w-50 m-auto" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/elmotorcito/images/carrousel-images/tmax/001-yamaha-tmax-tech-max-2024-estudio-bronce-02.jpg" class="d-block w-50 m-auto" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/elmotorcito/images/carrousel-images/tmax/001-yamaha-tmax-tech-max-2024-estudio-bronce-04.jpg" class="d-block w-50 m-auto" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/elmotorcito/images/carrousel-images/tmax/yamaha-tmax-tech-max-2022-accion-04.jpg" class="d-block w-50 m-auto" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/elmotorcito/images/carrousel-images/tmax/yamaha-tmax-tech-max-2022-accion-05.jpg" class="d-block w-50 m-auto" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon bg-success" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon bg-success" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<footer>

  <?php
  require_once('Footer.php');
  ?>
</footer>