<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
       
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
         <!-- csrf-token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta charset="UTF-8">
        <meta name="viewport"             content="width=device-width, initial-scale=1">
        <title>Mármoles Atenea S.A.S | Mármol y Granito de Alta Calidad para Tu Hogar</title>
        <meta name="description"          content="En Mármoles Atenea S.A.S, ofrecemos mármol y granito de alta calidad para transformar tus espacios. ¡Descubre nuestros productos exclusivos!">
        <meta name="author"               content="softcode Colombia">
        <meta name="keywords"             content="mármol, granito natural, encimeras de cocina, superficies de baño, Mármoles Atenea,
         piedras naturales y sintetizada, quarztone, cuarzo, restauraciones, remodelación, pisos,
         baños y enchape de superficies, escaleras en mármol y granito, ambientes y decoracion,
         acabados, mesones, revestimientos duros, baños con paredes de mármol de gran formato, acabados de lujo,
         encimera de baño, decoracion de interiores, materiales de construcción">
        <meta name="robots"               content="index, follow">
        <link rel="canonical"             href   ="https://marmolesatenea.com.co">
         <!-- sharing/social media -->
        <meta property="og:title"         content="Mármoles Atenea S.A.S - Calidad en Mármol y Granito para Tus Espacios" />
        <meta property="og:description"   content="Descubre la elegancia y durabilidad de nuestros productos de mármol y granito. Transformamos tus espacios con calidad y estilo." />
        <meta property="og:image"         content="https://marmolesatenea.com.co/public_html/uploads/slider-01.jpg" />
        <meta property="og:url"           content="https://marmolesatenea.com.co" />
        <meta property="og:type"          content="website" />
        
        
        <meta name="twitter:card"         content="summary_large_image" />
        <meta name="twitter:title"        content="Mármoles Atenea S.A.S - Calidad en Mármol y Granito para Tus Espacios" />
        <meta name="twitter:description"  content="En Mármoles Atenea S.A.S, ofrecemos mármol y granito de alta calidad para transformar tus espacios. ¡Descubre nuestros productos exclusivos!" />
        <meta name="twitter:image"        content="https://marmolesatenea.com.co/public_html/uploads/slider-01.jpg" />
        <meta name="twitter:site"         content="@marmolesAtenea">
        <meta name="twitter:creator"      content="@faroox" />
        <meta name="theme-color"          content="#43149A">




 


        <!-- bootstrap css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <!--iconos desde internet font Awesome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

        <link rel="shortcut icon" href="/images/marmolicono1.PNG">

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body >

            <!-- Navigation -->
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                        <a class="navbar-brand js-scroll-trigger" href="#">
                            <img class="img-fluid" src="images/logo4.png" alt="" />
                        </a>
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                            <a class="hoverlink nav-link" href="#">Inicio</a>
                            </li>
                            <li class="nav-item">
                            <a class="hoverlink nav-link" href="#">Quienes somos</a>
                            </li>
                            <li class="nav-item">
                            <a class="hoverlink nav-link" href="#">Servicios</a>
                            </li>
                            <li class="nav-item">
                            <a class="hoverlink nav-link" href="#">Productos</a>
                            </li>
                            <li class="nav-item">
                            <a class="hoverlink nav-link" href="#">Contáctanos</a>
                            </li>
                           
                        </ul>
                    
                    </div>
                </div>
            </nav>

    

            <div class="social">
            <ul>
                <li><a class="btn-face" title="siguenos en facebook"   target="_blank"  href="https://www.facebook.com/Marmoles-Atenea-101161752057205/?ref=page_internal"><i class="face fab fa-facebook"></i></a>  </li>
                <li><a class="btn-insta" title="siguenos en instagram" target="_blank"  href="https://instagram.com/marmolesatenea" role="button"><i class="insta fab fa-instagram"></i></a>  </li>
                <li><a class="btn-twitt" title="contáctanos por whatsapp"   target="_blank"  href="https://api.whatsapp.com/send?phone=573133808771" role="button"><i class="whatsapp fab fa-whatsapp"></i></a>  </li>
            </ul>  
            </div>


            <main class="">
                @yield('content')
            </main>	
           
    <!-- <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script> -->


    
  
  

            <!-- gallery filter -->
  


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>