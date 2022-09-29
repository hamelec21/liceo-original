<html lang="es">
  <head>
    <title>Noticias</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">

    <link rel="stylesheet" href="/assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/animate.css">
    
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">

    

    <link rel="stylesheet" href="/assets/css/aos.css">

    <link rel="stylesheet" href="/assets/css/ionicons.min.css">
    
    <link rel="stylesheet" href="/assets/css/flaticon.css">
    <link rel="stylesheet" href="/assets/css/icomoon.css">
    <link rel="stylesheet" href="/assets/css/style.css">
  </head>
  <body>
	  <!--headere-->
      @include('header')
    
      <section class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/bg_22.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
              <h1 class="mb-2 bread">Noticia</h1>
               <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-2"><a href="index.html">Noticia<i class="ion-ios-arrow-forward"></i></a></span> <span>Single <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
          </div>
        </div>
      </section>
      
      <section class="ftco-section">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 ftco-animate ">
              <h2 class="mb-3">{{$note->titulo}}</h2>
                <img src="/{{$note->foto}}" alt="" class="img-fluid">
              <div class="single text-justify">{!!$note->contenido!!}</div>
            </div> <!-- .col-md-8 -->
  
            <div class="col-lg-4 sidebar ftco-animate">
              <div class="sidebar-box ftco-animate">
                <h3>Ultimas Noticias</h3>
                @foreach ($noti as $notis)
                <div class="block-21 mb-4 d-flex">
                  <a class="blog-img mr-4" style="background-image: url(/{{$notis->foto}});"></a>
                  <div class="text">
                    <h3 class="heading"><a href="{{ route('single',$notis->id) }}">{{$notis->titulo}}</a></h3>
                  </div>
                </div>
                @endforeach
                
                
              </div>
              
            </div><!-- END COL -->
          </div>
        </div>
      </section>
  
      
	<!--Fin de Contenido-->

		<!--inicio footer-->

        @include('footer')
        <!--fin footer-->
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#006627"/></svg></div>


  <script src="/assets/js/jquery.min.js"></script>
  <script src="/assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="/assets/js/popper.min.js"></script>
  <script src="/assets/js/bootstrap.min.js"></script>
  <script src="/assets/js/jquery.easing.1.3.js"></script>
  <script src="/assets/js/jquery.waypoints.min.js"></script>
  <script src="/assets/js/jquery.stellar.min.js"></script>
  <script src="/assets/js/owl.carousel.min.js"></script>
  <script src="/assets/js/jquery.magnific-popup.min.js"></script>
  <script src="/assets/js/aos.js"></script>
  <script src="/assets/js/jquery.animateNumber.min.js"></script>
  <script src="/assets/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="/assets/js/google-map.js"></script>
  <script src="/assets/js/main.js"></script>
 

    
  </body>
</html>