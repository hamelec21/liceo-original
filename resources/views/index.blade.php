<html lang="es">

<head>
    <title>Liceo Polivalente Fernando Silva Castellon</title>
    <meta name = "description" content = "Liceo Bicentenario Polivalente Fernando Silva Castellón Dirección:Pasaje Antonio Spillarie N°16 Catemu Fono :34-2631699 Correo:lchagres2011@gmail.com " />
    <meta name="twitter:description" content="Liceo Bicentenario Polivalente Fernando Silva Castellón ">
    <meta name="twitter:title" content="Liceo Bicentenario Polivalente Fernando Silva Castellón">
    <meta property="og:image" content="/assets/images/logo.png">
    <meta name="keywords" content="liceo chagres, catemu, daem catemu, franco nunez,modelo pionero,bicentenario, educacion,polivalente ,fernando silva castellon ,ABP"/>
    <meta name = "robots" content = "index, follow">
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

    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image:url(assets/images/sl_1.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-center"
                    data-scrollax-parent="true">
                    <div class="col-md-8 text-center ftco-animate">
                        <h1 class="mb-4">Estudiantes Protagonistas de sus Aprendizajes.<span></span></h1>

                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image:url(assets/images/sl_2.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-center"
                    data-scrollax-parent="true">
                    <div class="col-md-8 text-center ftco-animate">
                        <h1 class="mb-4">Desarrollo de Habilidades del Siglo XXI. <span></span></h1>

                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image:url(assets/images/sl_3.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-center"
                    data-scrollax-parent="true">
                    <div class="col-md-8 text-center ftco-animate">
                        <h1 class="mb-4">Formación Profesional.<span></span></h1>

                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image:url(assets/images/sl_4.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-center"
                    data-scrollax-parent="true">
                    <div class="col-md-8 text-center ftco-animate">
                        <h1 class="mb-4">Investigación Sostenida.<span></span></h1>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--secuencia-->
    @foreach ($info1 as $info1s)
    @endforeach
    @foreach ($info2 as $info2s)
    @endforeach
    @foreach ($info3 as $info3s)
    @endforeach
    @foreach ($info4 as $info4s)
    @endforeach
    <!--secuencia-->


    <section class="ftco-services ftco-no-pb">
        <div class="container-wrap">
            <div class="row no-gutters">
                <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-primary">
                    <div class="media block-6 d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-teacher"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">{{ $info1s->titulo }}</h3>
                            <p class="text-justify">{!! $info1s->contenido !!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-tertiary">
                    <div class="media block-6 d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-reading"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">{{ $info2s->titulo }}</h3>
                            <p>{!! $info2s->contenido !!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-fifth">
                    <div class="media block-6 d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-books"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">{{ $info3s->titulo }}</h3>
                            <p>{!! $info3s->contenido !!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-quarternary">
                    <div class="media block-6 d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-diploma"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">{{ $info4s->titulo }}</h3>
                            <p>{!! $info4s->contenido !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--INICIO DE SECCION DE LINK DE INTERES-->

    <div class="container-fluid">

        <div class="row bg-warning p-4  text-center   ">
        @foreach ($link as $links)

            <div class="col-12 col-sm-6 col-lg-3 col-xl-3 p-2 ">
                <div class="card-deck">
                    <div class="card border-primary">
                        <a href="{{ $links->url }}" target="blank"><img src="{{ $links->foto }}"
                                class="img-fluids"  alt="Responsive image"></a>
                    </div>
                </div>
            </div>

         @endforeach

        </div>
    </div>

<!---->



        <!--FIN DE SECCION DE LINK DE INTERES-->
        @foreach ($noso as $nosos)

        @endforeach
        <section class="ftco-section ftco-no-pt ftc-no-pb">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 order-md-last wrap-about py-5 wrap-about ">
                        <br> <br> <br> <br>
                        <div class="text px-4 ftco-animate ">
                            <img src="{{$nosos->foto}}"    class="img-fluid" alt="Responsive image">
                            <div class="text-center">
                                <h6></h6>
                            </div>
                            <!--<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/kUd5njGJov4" width="100%" height="300" allowfullscreen></iframe>-->
                        </div>
                    </div>
                    <div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate">
                        <h3>Palabra del Director </h3>
                        <p class="text-justify">{!! $nosos->contenido !!}</p>
                        <div class="row mt-5">

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="ftco-intro" style="background-image: url(assets/images/bg_3.jpg);"
            data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <h2>Aprendizaje Basado en Proyecto</h2>
                        <p class="mb-0 text-justify">Nuestro enfoque educativo se basa en Modelo Pionero que, con sus distintos sistemas, permite el aprendizaje activo a través del trabajo especializado de los profesores y el desarrollo de proyecto como base para la investigación sostenida y el desarrollo de las habilidades del sigloXXI de los y las estudiantes.</p>
                    </div>

                </div>
            </div>
        </section>


        <section class="ftco-section ftco-no-pb">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-2">
                    <div class="col-md-8 text-center heading-section ftco-animate">
                        <h2 class="mb-4"><span>Nuestro</span> Equipo Impulsor </h2>
                        <p>Esta compuesto por 6 profesionales, que serán los encargados de coordinar los 4 sistemas del Modelo Pionero y propiciar junto con los profesionales del liceo, la transformación hacia un Centro de Innovación.
                        </p>
                    </div>
                </div>
                <div class="row">
                    @foreach ($equipo as $equipos)
                        <div class="col-md-6 col-lg-4 ftco-animate">
                            <div class="staff">
                                <div class="img-wrap d-flex align-items-stretch">
                                    <div class="img align-self-stretch"
                                        style="background-image: url({{ $equipos->foto }});"></div>
                                </div>
                                <div class="text pt-3 text-center">
                                    <h3>{{ $equipos->nombre }}</h3>
                                    <span class="position mb-2"><b>{{ $equipos->cargo }}</b></span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-2">
                    <div class="col-md-8 text-center heading-section ftco-animate">
                        <h2 class="mb-4"><span>Oferta </span>Educativa</h2>
                        <p>El Liceo es Polivalente, es decir que tiene dentro de sus áreas de enseñanzas la Formación Técnico Profesional y también la Formación Humanista Científico, entregando una gran posibilidad a los y las estudiantes.</p>
                    </div>

                </div>

                <!--revisar ectracto aca -->
                <div>
                    <div class="row">
                        @foreach ($espe as $espes)
                            <div class="col-md-6 course d-lg-flex ftco-animate">
                                <div class="img" style="background-image: url({{ $espes->foto }});"></div>
                                <div class="text  bg-light p-4 ">
                                    <h3>{{ $espes->nombre }}</h3>
                                    <label
                                        class="extracto1">{!!$espes->extracto!!}</label>
                                        <br>
                                        <p class="mb-0"><a href="{{$espes->url}}"
                                            class="btn btn-secondary">Más Información <span
                                                class="ion-ios-arrow-round-forward"></span></a></p>
                                </div>

                            </div>
                        @endforeach
                    </div>

                </div>
                <!--revisar ectracto aca -->
            </div>

        </section>

        <section class="ftco-section ftco-counter img" id="section-counter"
            style="background-image: url(assets/images/bg_4.jpg);" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-2">
                    <div class="col-md-8 text-center heading-section heading-section-black ftco-animate">
                        <h2 class="mb-4"><span>38 años al </span> Servicio de la Comunidad</h2>
                        <p>Años de trayectoria avalan nuestro trabajo, seguiremos aportando nuevos profesionales para el desarrollo del país.
                        </p>
                    </div>
                </div>
                <div class="row d-md-flex align-items-center justify-content-center">
                    <div class="col-lg-10">
                        <div class="row d-md-flex align-items-center">
                            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                                <div class="block-18">
                                    <div class="icon"><span class="flaticon-doctor"></span></div>
                                    <div class="text">
                                        <strong class="number" data-number="30">0</strong>
                                        <span>Certificado en ABP</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                                <div class="block-18">
                                    <div class="icon"><span class="flaticon-doctor"></span></div>
                                    <div class="text">
                                        <strong class="number" data-number="4000">0</strong>
                                        <span>Egresados</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                                <div class="block-18">
                                    <div class="icon"><span class="flaticon-doctor"></span></div>
                                    <div class="text">
                                        <strong class="number" data-number="3000">0</strong>
                                        <span>Titulados</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                                <div class="block-18">
                                    <div class="icon"><span class="flaticon-doctor"></span></div>
                                    <div class="text">
                                        <strong class="number" data-number="3">0</strong>
                                        <span>Años en Modelo Pionero</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ftco-section testimony-section bg-light">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-2">
                    <div class="col-md-8 text-center heading-section ftco-animate">
                        <h2 class="mb-4"><span>Ex</span>Alumnos</h2>
                        <p>Después de tantos años formando profesionales, nuestra cartera de exalumnos(as) es muy extensa, con jóvenes que se han destacado en distintas áreas y que actualmente son profesionales destacados y agradecidos de su paso por nuestras aulas.  A continuación, compartimos algunos testimonios.</p>
                    </div>
                </div>
                <div class="row ftco-animate justify-content-center">
                    <div class="col-md-12">
                        <div class="carousel-testimony owl-carousel">
                            @foreach ($exalumno as $exalumnos)
                                <div class="item">
                                    <div class="testimony-wrap d-flex">
                                        <div class="user-img mr-4"
                                            style="background-image: url({{ $exalumnos->foto }})">
                                        </div>
                                        <div class="text ml-2 bg-light">
                                            <span class="quote d-flex align-items-center justify-content-center">
                                                <i class="icon-quote-left"></i>
                                            </span>
                                            {!! $exalumnos->contenido !!}
                                            <p class="name">{{ $exalumnos->nombre }}</p>
                                            <span class="position">{{ $exalumnos->profesion }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

{{--section  noticias--}}
        <section class="ftco-section bg-light">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-2">
                    <div class="col-md-8 text-center heading-section ftco-animate">
                        <h2 class="mb-4"><span>Noticias </span>Recientes</h2>

                    </div>
                </div>
                <div class="row">
                    @foreach ($noti as $notis)
                        <div class="col-md-6 col-lg-4 ftco-animate">

                            <div class="blog-entry">
                                <a href="blog-single.html" class="block-20 d-flex align-items-end"
                                    style="background-image: url({{ $notis->foto}});">
                                    <div class="meta-date text-center p-2">
                                        <span class="day">{{ \Carbon\Carbon::parse($notis->created_at)->format('d') }}</span>
                                        <span class="mos">{{ \Carbon\Carbon::parse($notis->created_at)->format('m') }}</span>
                                        <span class="yr">{{ \Carbon\Carbon::parse($notis->created_at)->format('Y') }} </span>

                                    </div>
                                </a>
                                <div class="text bg-white p-4">
                                    <h3 class="heading"><a href="#">{{ $notis->titulo }}</a></h3>
                                    <div class="extracto"> {!! $notis->extracto !!}</div>
                                    <div class="d-flex align-items-center mt-4">
                                        <p class="mb-0"><a href="{{ route('single', $notis->id) }}"
                                                class="btn btn-secondary">Leer Más <span
                                                    class="ion-ios-arrow-round-forward"></span></a></p>
                                        <p class="ml-auto mb-0">

                                        </p>
                                    </div>
                                </div>

                            </div>

                        </div>
                    @endforeach
                </div>
        </section>

        <section class="ftco-gallery">
            <div class="container-wrap">
                <div class="row no-gutters">
                    @foreach ($foto as $fotos)
                        <div class="col-md-3 ftco-animate">
                            <a href="{{ asset($fotos->foto) }}"
                                class="gallery image-popup img d-flex align-items-center"
                                style="background-image: url({{ asset($fotos->foto) }});">
                                <div class="icon mb-4 d-flex align-items-center justify-content-center">
                                    <span class="icon-instagram"></span>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!--inicio footer-->

        @include('footer')
        <!--fin footer-->



        <!-- loader -->
        <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
                <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
                <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                    stroke="#006627" />
            </svg></div>


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
