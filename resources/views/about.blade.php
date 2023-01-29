<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Yovan R. Y. Enovore</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="icon" href=" {{ url('img/YNV_LOGO_V2.svg') }} " type="image/icon type">

		<link rel="stylesheet" type="text/css" href="{{ url('css/botn-fijo.css')}}">
		
 <style>
      .banner-image {
        background-image: url('img/about-fondo.png');
        background-size: cover;
      }
    </style>

	</head>
	<body> <!-- Navbar  -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
      <div class="container">
	<a class="navbar-brand" href=" {{url('login')}} ">
		<img src=" {{ url('img/yovan.png') }} " width="300" height="70">
	</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mx-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-white" href=" {{ url('about') }} ">Sobre mi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="https://yvnservices.blogspot.com/">Blog</a>
            </li>
            <li class="nav-item">
                
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href=" {{ url('contact') }} ">Contactos</a>
            </li>
	<li class="nav-item">
              <a class="nav-link text-white" href=" {{ url('proyecto') }} ">Proyectos</a>
            </li>
          </ul>
        </div>
      </div> 
    </nav>

    <!-- Banner Image  -->
    <div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
      <div class="content text-center">
        <h1 class="text-white"></h1>
      </div>
    </div>

<a id="btn-fixed" href="#"><img src="https://cdn.pixabay.com/photo/2015/08/03/13/58/soon-873316_960_720.png" alt="Whatsapp" width="50" height="50"/></a>
<footer class="text-center text-white">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: #000203;">
    Yovan Ramon Yaune Enovore © 2023 Todos los derechos reservados
    <a class="text-white" href="http://ynv-servis.tech/">YNV</a>
  </div>
  <!-- Copyright -->
</footer>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script type="text/javascript">
      var nav = document.querySelector('nav');

      window.addEventListener('scroll', function () {
        if (window.pageYOffset > 100) {
          nav.classList.add('bg-dark', 'shadow');
        } else {
          nav.classList.remove('bg-dark', 'shadow');
        }
      });
    </script>
    </body>
</html>



