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
        <!-- <meta name="twitter:site"         content="@marmolesAtenea">
        <meta name="twitter:creator"      content="@faroox" /> -->
        <meta name="theme-color"          content="#43149A">

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-CH95TQSRMF"></script>
        <!-- <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-CH95TQSRMF');
        </script> -->
 
        <!-- bootstrap css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        
        

        <link rel="shortcut icon" href="/images/marmolicono1.PNG">

        @vite(['resources/css/app.css'])
    </head>
    <!-- se le pasa el id del nav y la clase de bootstrap: data-bs-spy="scroll" -->
    <body data-bs-spy="scroll" data-bs-target="#scrolspyNavigationActiveBotton" data-bs-offset="0"  tabindex="0" >

            <!-- Navigation. fixed-top mantiene el nav visible en todo momento al hacer scroll -->
            <nav class="navbar navbar-expand-lg  fixed-top"  id="scrolspyNavigationActiveBotton">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                        <a class="navbar-brand js-scroll-trigger" href="#">
                            <img class="img-fluid" src="images/logo2.png" alt="" />
                        </a>
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                            <a class="hoverlink nav-link" href="#inicio">Inicio</a>
                            </li>
                            <li class="nav-item">
                            <a class="hoverlink nav-link" href="#quienes">Quienes somos</a>
                            </li>
                            <li class="nav-item">
                            <a class="hoverlink nav-link" href="#servicios">Servicios</a>
                            </li>
                            <li class="nav-item">
                            <a class="hoverlink nav-link" href="#productos">Productos</a>
                            </li>
                            <li class="nav-item">
                            <a class="hoverlink nav-link" href="#contacto">Contáctanos</a>
                            </li>
                           
                        </ul>
                    
                    </div>
                </div>
            </nav>

            <!-- loading spinner -->
            <div id="loader" class="spinner-div d-flex justify-content-center align-items-center ">
                <div class="spinner-border  text-light spinner-custom"  role="status">
                    <!-- <span class="visually-hidden">Loading...</span> -->
                </div>
            </div>

            <div class="social">
            <ul>
                <li><a class="btn-face" title="siguenos en facebook"   target="_blank"  href="https://www.facebook.com/Marmoles-Atenea-101161752057205/?ref=page_internal"><img class="img_social" src="images/face.png" alt="" /></a>  </li>
                <li><a class="btn-insta" title="siguenos en instagram" target="_blank"  href="https://instagram.com/marmolesatenea" role="button"><img class="img_social" src="images/insta.png" alt="" /></a>  </li>
                <li><a class="btn-whats" title="contáctanos por whatsapp"   target="_blank"  href="https://api.whatsapp.com/send?phone=573133808771" role="button"><img class="img_social" src="images/whats.png" alt="" /></a>  </li>
                <li><a class="btn-linke" title="contáctanos por linkedin"   target="_blank"  href="https://www.linkedin.com/company/marmoles-atenea/" role="button"><img class="img_social" src="images/linkedin.png" alt="" /></a>  </li>
            </ul>  
            </div>


            <main class="">
                @yield('content')
            </main>	
           
    <!-- <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script> -->


    
  
  

            <!-- gallery filter -->
  


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
            @vite(['resources/js/app.js'])
    </body>
</html>
