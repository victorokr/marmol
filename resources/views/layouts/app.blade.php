<!DOCTYPE html>
<html lang="¨{{ str_replace('_','-', app()->getLocale()) }}">

<head>

    <!-- sharing/webmasters -->
    <meta property="og:url"           content="https://marmolesatenea.test" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Marmoles Atenea" />
    <meta property="og:description"   content="variado portafolio de piedras naturales y artificiales." />
    <meta property="og:image"         content="https://marmolesatenea.test/uploads/slide-02.jpg" />



    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- csrf-token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">	
 
     <!-- Site Metas -->
    <title>{{ config('app.name', 'Laravel') }}</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!--iconos desde internet font Awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


    <!-- Site Icons -->
  <!--   <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png"> -->
    <link rel="shortcut icon" href="/images/marmolicono1.png">


    <!-- scripts -->
    <script src="{{asset('js/app.js')}}"></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <link rel="stylesheet" href="style.css">
    
    <link rel="stylesheet" href="css/responsive.css">
    
    <link rel="stylesheet" href="css/custom.css">
	<script src="js/modernizr.js"></script>  -->

  <link rel="stylesheet" href="estilosplantilla/responsive.css">
  <link rel="stylesheet" href="estilosplantilla/custom.css">
  
  
  <script src="js/modernizr.js"></script>
    

</head>
<body id="page-top" class="politics_version">

    <!-- LOADER -->
    <div id="preloader">
        <div id="main-ld">
			<div id="loader"></div>  
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->
	
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container-fluid">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
			<img class="img-fluid" src="images/logo1.png" alt="" />
		</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger active" href="#home">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Quiénes somos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Servicios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#products">Productos</a>
            </li>
			      <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contáctanos</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	<main class="py-4">
		@yield('content')
	</main>	
  <!-- ALL JS FILES -->
  <script src="js/all.js"></script>
	<!-- Camera Slider -->
	<script src="js/jquery.mobile.customized.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script> 
	<script src="js/parallaxie.js"></script>
	<script src="js/headline.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>
  <!-- ALL PLUGINS -->
  <script src="js/custom.js"></script>
</body>
</html>