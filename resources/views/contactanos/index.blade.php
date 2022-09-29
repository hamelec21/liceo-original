<html lang="es">
  <head>
    <title>Contacto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    

    <link rel="stylesheet" href="assets/css/aos.css">

    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
	  <!--headere-->
      @include('header')
    
	  <section class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/bg_22.jpg');">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<h1 class="mb-2 t1 ">Noticias</h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Noticias <i class="ion-ios-arrow-forward"></i></span></p>
				</div>
			</div>
		</div>
	
    </section>
<!--Inicio de Contenido-->
	<section>
    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">Direcciòn</h3>
	            <p>Pasaje Antonio Spillarie n16 Catemu.</p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">Telefono</h3>
	            <p><a href="tel://1234567920">+56 34-2631699.</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">Correo</h3>
	            <p><a href="mailto:contactos@fernandosilvacastellon.cl">contactos@fernandosilvacastellon.cl
              </a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="bg-light align-self-stretch box p-4 text-center">
          		<h3 class="mb-4">Web</h3>
	            <p><a href="www.fernandosilvacastellon.cl"  target="blank">www.Fernandosilvacastellon.cl</a></p>
	          </div>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
			<div class="container">
				<div class="row d-flex align-items-stretch no-gutters">
					<div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
						<form action="{{route('contactanos.store')}}" method="POST">
              @csrf
              <div class="form-group">
                <input type="text" class="form-control" name="nombre" placeholder="Nombre">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="correo" placeholder="Correo">
              </div>
              <div class="form-group">
                <textarea  cols="30" rows="7" class="form-control" name="mensaje" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="Enviar Mendaje" class="btn btn-primary py-3 px-5">
              </div>
            </form>
					</div>
          @if(session('info'))
    <script>
        alert("{{session('info')}}");
    </script>


    @endif
					<div class="col-md-6 d-flex align-items-stretch">
						<div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13417.47557111056!2d-70.97020175912103!3d-32.782476705307886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x96883a38611613f1%3A0x71a3e4b201e4a168!2sCatemu%2C%20Valpara%C3%ADso!5e0!3m2!1ses!2scl!4v1627009210002!5m2!1ses!2scl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
            
					</div>
				</div>
			</div>
		</section>






	</section>
	<!--Fin de Contenido-->

		<!--inicio footer-->

        @include('footer')
        <!--fin footer-->
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#006627"/></svg></div>

  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/jquery.waypoints.min.js"></script>
  <script src="assets/js/jquery.stellar.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/aos.js"></script>
  <script src="assets/js/jquery.animateNumber.min.js"></script>
  <script src="assets/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="assets/js/google-map.js"></script>
  <script src="assets/js/main.js"></script>
 

    
  </body>
</html>