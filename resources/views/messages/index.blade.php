@extends('layouts.app')

@section('content')


    <section id="home" class="main-banner">

        <div class="slider-new-2 owl-carousel owl-theme">
                
            <div class="item slider-screen">
                <div class="slider-img-full">
                    <img src="uploads/slider-01.jpg" alt="" />
                </div>
                <div class="container">
                    <div class="slider-content text-white">
                        <div class="in-box">
                            <h2>INTERIORES Y EXTERIORES</h2>
                            <p>Especializados en instalación de marmoles.</p>
                            <a class="btn-slider hvr-rectangle-out" href="#about">Leer mas</a>
                        </div>
                    </div>
                </div>
            </div>  
            
            <div class="item slider-screen">
                <div class="slider-img-full">
                    <img src="uploads/slider-02.jpg" alt="" />
                </div>
                <div class="container">
                    <div class="slider-content text-white">
                        <div class="in-box">
                            <h2>INTERIORES Y EXTERIORES</h2>
                            <p>Especializados en instalación de marmoles.</p>
                            <a class="btn-slider hvr-rectangle-out" href="#about">Leer mas</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="item slider-screen">
                <div class="slider-img-full">
                    <img src="uploads/slider-03.jpg" alt="" />
                </div>
                <div class="container">
                    <div class="slider-content text-white">
                        <div class="in-box">
                            <h2>INTERIORES Y EXTERIORES</h2>
                            <p>Especializados en instalación de marmoles.</p>
                            <a class="btn-slider hvr-rectangle-out" href="#about">Leer mas</a>
                        </div>
                    </div>
                </div>
            </div>

            
            
        </div>
        
    </section>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto">
                @if (session()->has('infoEmail'))
                <div class="alert alert-success mt-1 text-center" style="width: 900px" id="alerta" >
                    <strong>Aviso: </strong>{{ session('infoEmail') }}
                        <button type="button" class="close" data-dismiss="alert" arial-label="cerrar" >
                            <span arial-hidden="true"> &times; </span>
                        </button>
                </div>
                @endif
            </div>	
        </div>
    </div>
    

    <div id="about" class="section lb">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">                        
                        <h2>Bienvenidos.</h2>
                        <p> Queremos dar a conocer nuestra empresa con mas de 10 años de experiencia, la primera opción cuando los clientes piensen en remodelar o construir, y así brindarles los mejores productos para todo tipo de uso.  </p>
                        <p> No solo por manejar los mejores precios del mercado si no también por ofrecer al cliente un acompañamiento indeterminado para que sus mármoles siempre permanezcan impecables.</p>
                        
                        <ul>
                            <li>Ofrecer a nuestros clientes un variado portafolio de piedras naturales y artificiales.</li>
                            <li>Con los mejores estándares de calidad en terminados para sus proyectos de remodelación.</li>
                            <li>Acompañamiento desde el principio de la obra, y a futuro brindar nuestro servicio de mantenimiento, restauración de su producto para que su casa, Local u Oficina siempre luzcan como nuevos.</li>
                            
                        </ul>
                        <a href="#contact" class="sim-btn hvr-rectangle-out"><span>Contáctanos</span></a>
                    </div><!-- end messagebox -->
                </div><!-- end col -->

                <div class="col-md-6">
                    <div class="right-box-pro wow fadeIn">
                        <img src="uploads/quienes.jpg" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
    
    
    
    <div id="services" class="section lb">
        <div class="container-fluid">
            <div class="section-title text-center">
                <h3>Nuestros Servicios</h3>
                <p>Conozca nuestras soluciones y servicos en marmol para construir, remodelar interiores y exteriores de tu hogar, local u oficina </p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-4">
                    <div class="services-inner-box">
                        <div class="ser-icon">
                            <i class="flaticon-seoo"><i class="fas fa-dolly-flatbed"></i></i>
                        </div>
                        <h2>Suministro</h2>
                        <p> Suministro de Piedras naturales y artificiales.</p>
                    </div>
                </div><!-- end col -->
                <div class="col-md-4">
                    <div class="services-inner-box">
                        <div class="ser-icon">
                            <i class="flaticon-developmentt"><i class="fas fa-people-carry"></i></i>
                        </div>
                        <h2> Instalación</h2>
                        <p>Todo tipo de Piedras para uso en interior y exterior. Pisos, Muros fachadas y demás elementos de la construcción.</p>
                    </div>
                </div><!-- end col -->
                <div class="col-md-4">
                    <div class="services-inner-box">
                        <div class="ser-icon">
                            <i class="flaticon-processs"><i class="fas fa-drafting-compass"></i></i>
                        </div>
                        <h2> Transformación</h2>
                        <p> Transformación e instalación de Mesones.</p>
                    </div>
                </div><!-- end col -->
                <div class="col-md-4">
                    <div class="services-inner-box">
                        <div class="ser-icon">
                            <i class="flaticon-discuss-issuee"><i class="fas fa-users-cog"></i></i>
                        </div>
                        <h2> Mantenimiento</h2>
                        <p> Mantenimiento Periodico para sus Piedras Naturales como Mármol o granito natural.</p>
                    </div>
                </div><!-- end col -->

                <div class="col-md-4 ">
                    <div class="services-inner-box">
                        <div class="ser-icon">
                            <i class="flaticon-ideaa-1"><i class="fas fa-question"></i></i>
                        </div>
                        <h2> Soporte</h2>
                        <p>¿Inquietudes? Descarga en los siguientes enlaces nuestros manuales de mantenimiento para cada uno de los productos.

                        <a href="../downloads/MANUAL_DE_MANENIMIENTO_DE_GRAMARSTON.pdf" download="MANUAL_DE_MANENIMIENTO_DE_GRAMARSTON">
                        Gramarston...
                        </a>
                        <a href="../downloads/MANUAL_DE_MANENIMIENTO_DE_GRANITOS_NATURALES.pdf" download="MANUAL_DE_MANENIMIENTO_DE_GRANITOS_NATURALES">
                        Granitos naturales...
                        </a>
                        <a href="../downloads/MANUAL_DE_MANENIMIENTO_DE_MARMOLES.pdf" download="MANUAL_DE_MANENIMIENTO_DE_MARMOLES">
                        Marmoles...
                        </a>
                        <a href="../downloads/MANUAL_DE_MANENIMIENTO_DE_QUARZTONE.pdf" download="MANUAL_DE_MANENIMIENTO_DE_QUARZTONE">
                        Quarztone...
                        </a></p>

                    </div>
                </div><!-- end col -->

                <div class="col-md-4 ">
                    <div class="services-inner-box">
                        <div class="ser-icon">
                            <i class="flaticon-ideaa-1"><i class="fas fa-clone"></i></i>
                        </div>
                        <h2> Restauración</h2>
                        <p>Restauración de mármoles en todo tipo de aplicaciones, pisos, muros, mesones Etc.</p>
                    </div>
                </div><!-- end col -->

                
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
    
    <div id="products" class="section wb">
        <div class="container-fluid"><!-- quitar fluid si el responsive falla -->
            <div class="section-title text-center">
                <h3>Productos</h3>
                <p>Nuestros proyectos estan a la altura de tus exigencias.</p>
            </div><!-- end title -->
            
            <div class="gallery-menu row">
                <div class="col-md-12">
                    <div id="myBtnContainer" class="button-group filter-button-group " >
                        <button class="btn active hvr-rectangle-out " onclick="filterSelection('all')">Todo</button>
                        <button class="btn hvr-rectangle-out" onclick="filterSelection('GranitoNatural')" >Granito Natural</button>
                        <button class="btn hvr-rectangle-out" onclick="filterSelection('marmol')" >Marmol</button>
                        <button class="btn hvr-rectangle-out" onclick="filterSelection('PiedraSinterizada')" >Piedra Sinterizada</button>
                        <button class="btn hvr-rectangle-out" onclick="filterSelection('Quarztone')" >Quarztone</button>
                        <button class="btn hvr-rectangle-out" onclick="filterSelection('Restauraciones')" >Restauraciones</button>
                    </div>
                </div>
            </div>
            
            <div class="galeria row">
                <div class="column GranitoNatural col-md-4 col-sm-6 col-lg-4 ">
                    <div class="gallery-single fix">
                        <img src="uploads/NegroSanGabriel.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Negro San Gabriel</h3>
                            <a href="uploads/NegroSanGabriel.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="column GranitoNatural col-md-4 col-sm-6 col-lg-4  ">
                    <div class="gallery-single fix">
                        <img src="uploads/GranitoBlancoMediterraneo.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Blanco Mediterraneo</h3>
                            <a href="uploads/GranitoBlancoMediterraneo.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="column GranitoNatural col-md-4 col-sm-6 col-lg-4 ">
                    <div class="gallery-single fix">
                        <img src="uploads/AmarilloAtlantico.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Amarillo Atlantico</h3>
                            <a href="uploads/AmarilloAtlantico.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="column GranitoNatural col-md-4 col-sm-6 col-lg-4 gallery-grid gal_a">
                    <div class="gallery-single fix">
                        <img src="uploads/CosmicBlack.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Cosmic Black</h3>
                            <a href="uploads/CosmicBlack.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="column GranitoNatural col-md-4 col-sm-6 col-lg-4 gallery-grid gal_a">
                    <div class="gallery-single fix">
                        <img src="uploads/CoffeBrown.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Coffe Brown </h3>
                            <a href="uploads/CoffeBrown.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="column GranitoNatural col-md-4 col-sm-6 col-lg-4 gallery-grid gal_a">
                    <div class="gallery-single fix">
                        <img src="uploads/NegroAbsoluto1.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Negro Absoluto</h3>
                            <a href="uploads/NegroAbsoluto1.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="column marmol col-md-4 col-sm-6 gallery-grid gal_b">
                    <div class="gallery-single fix">
                        <img src="uploads/PiedraMuneca.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Piedra Muñeca </h3>
                            <a href="uploads/PiedraMuneca.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="column marmol col-md-4 col-sm-6 gallery-grid gal_b">
                    <div class="gallery-single fix">
                        <img src="uploads/MarmolVolakas.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Volakas </h3>
                            <a href="uploads/MarmolVolakas.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="column marmol col-md-4 col-sm-6 gallery-grid gal_b">
                    <div class="gallery-single fix">
                        <img src="uploads/MarmolNegroMarkina.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Negro Markina </h3>
                            <a href="uploads/MarmolNegroMarkina.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="column marmol col-md-4 col-sm-6 gallery-grid gal_b">
                    <div class="gallery-single fix">
                        <img src="uploads/MarmolCafeFaraon.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Cafe Faraon  </h3>
                            <a href="uploads/MarmolCafeFaraon.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="column marmol col-md-4 col-sm-6 gallery-grid gal_b">
                    <div class="gallery-single fix">
                        <img src="uploads/CremaSienna1.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Crema Sienna  </h3>
                            <a href="uploads/CremaSienna1.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="column marmol col-md-4 col-sm-6 gallery-grid gal_b">
                    <div class="gallery-single fix">
                        <img src="uploads/NegroMarkinaySilverBlue.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Negro Markina y Silver Blue  </h3>
                            <a href="uploads/NegroMarkinaySilverBlue.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="column PiedraSinterizada col-md-4 col-sm-6 gallery-grid gal_c">
                    <div class="gallery-single fix">
                        <img src="uploads/SinterizadoCalacataMachiaVechia.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Calacata Machia Vechia  </h3>
                            <a href="uploads/SinterizadoCalacataMachiaVechia.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="column PiedraSinterizada col-md-4 col-sm-6 gallery-grid gal_c">
                    <div class="gallery-single fix">
                        <img src="uploads/SinterizadoCardosoGrey.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Cardoso Grey  </h3>
                            <a href="uploads/SinterizadoCardosoGrey.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="column PiedraSinterizada col-md-4 col-sm-6 gallery-grid gal_c">
                    <div class="gallery-single fix">
                        <img src="uploads/SinterizadoEstatuario.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Estatuario  </h3>
                            <a href="uploads/SinterizadoEstatuario.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="column PiedraSinterizada col-md-4 col-sm-6 gallery-grid gal_c">
                    <div class="gallery-single fix">
                        <img src="uploads/SinterizadoSaharaNoirBrillado.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Sahara Noir Brillado  </h3>
                            <a href="uploads/SinterizadoSaharaNoirBrillado.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="column PiedraSinterizada col-md-4 col-sm-6 gallery-grid gal_c">
                    <div class="gallery-single fix">
                        <img src="uploads/SinterizadoSaharaNoirMate.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Sahara Noir Mate  </h3>
                            <a href="uploads/SinterizadoSaharaNoirMate.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="column PiedraSinterizada col-md-4 col-sm-6 gallery-grid gal_c">
                    <div class="gallery-single fix">
                        <img src="uploads/SinterizadoVareceOnixyPulpisGrey.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Varece Onixy Pulpis Grey  </h3>
                            <a href="uploads/SinterizadoVareceOnixyPulpisGrey.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="column Quarztone col-md-4 col-sm-6 gallery-grid gal_d">
                    <div class="gallery-single fix">
                        <img src="uploads/Polar.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Polar  </h3>
                            <a href="uploads/Polar.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="column Quarztone col-md-4 col-sm-6 gallery-grid gal_d">
                    <div class="gallery-single fix">
                        <img src="uploads/NewBlancoPolar.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>New Blanco Polar  </h3>
                            <a href="uploads/NewBlancoPolar.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="column Quarztone col-md-4 col-sm-6 gallery-grid gal_d">
                    <div class="gallery-single fix">
                        <img src="uploads/KeniaBlack.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Kenia Black  </h3>
                            <a href="uploads/KeniaBlack.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="column Quarztone col-md-4 col-sm-6 gallery-grid gal_d">
                    <div class="gallery-single fix">
                        <img src="uploads/QuarztoneBlancoPolarr.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Blanco Polar  </h3>
                            <a href="uploads/QuarztoneBlancoPolarr.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="column Quarztone col-md-4 col-sm-6 gallery-grid gal_d">
                    <div class="gallery-single fix">
                        <img src="uploads/QuaratoneBlancoPolar.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Blanco Polar  </h3>
                            <a href="uploads/QuaratoneBlancoPolar.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="column Quarztone col-md-4 col-sm-6 gallery-grid gal_d">
                    <div class="gallery-single fix">
                        <img src="uploads/Calacata2.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Calacata </h3>
                            <a href="uploads/Calacata2.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="column Restauraciones col-md-4 col-sm-6 gallery-grid gal_e">
                    <div class="gallery-single fix">
                        <img src="uploads/restauracion6.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Restauraciones </h3>
                            <a href="uploads/restauracion6.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="column Restauraciones col-md-4 col-sm-6 gallery-grid gal_e">
                    <div class="gallery-single fix">
                        <img src="uploads/restauracion5.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Restauraciones </h3>
                            <a href="uploads/restauracion5.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="column Restauraciones col-md-4 col-sm-6 gallery-grid gal_e">
                    <div class="gallery-single fix">
                        <img src="uploads/restauracion4.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Restauraciones </h3>
                            <a href="uploads/restauracion4.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="column Restauraciones col-md-4 col-sm-6 gallery-grid gal_e">
                    <div class="gallery-single fix">
                        <img src="uploads/restauracion3.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Restauraciones </h3>
                            <a href="uploads/restauracion3.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="column Restauraciones col-md-4 col-sm-6 gallery-grid gal_e">
                    <div class="gallery-single fix">
                        <img src="uploads/restauracion2.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Restauraciones </h3>
                            <a href="uploads/restauracion2.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="column Restauraciones col-md-4 col-sm-6 gallery-grid gal_e">
                    <div class="gallery-single fix">
                        <img src="uploads/restauracion1.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Restauraciones </h3>
                            <a href="uploads/restauracion1.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
    
    
    
    
    

    <div id="contact" class="section db">
        <div class="container-fluid">
            <div class="section-title text-center">
                <h3>Contáctanos</h3>
                <p>Dejanos saber tus inquietudes, nos pondremos en contácto el menor tiempo posible.</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-12">
                    <div class="contact_form">
                        <div id="messagee"></div>
                        <form method="POST" action="{{ route('emails.store') }}" id="contactFormm" name="sentMessagee">
                        {!!csrf_field() !!}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="namee" name="nombre" type="text" placeholder="Tu nombre" required>
                                        {!!$errors->first('nombre','<span class=error>:message</span>')!!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="emaill" name="email" type="email" placeholder="Tu correo electronico" required>
                                        {!!$errors->first('email','<span class=error>:message</span>')!!}
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" id="phonee" name="phone" type="tel" placeholder="Tu numero de telefono" required>
                                        {!!$errors->first('phone','<span class=error>:message</span>')!!}
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="messagee" name="mensaje" placeholder="Tu mensaje" required></textarea>
                                        {!!$errors->first('mensaje','<span class=error>:message</span>')!!}
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-12 text-center">
                                    <div id="successs"></div>
                                    <button type="submit" class="sim-btn hvr-rectangle-out" >Enviar mensaje</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    
                    <div class="section-title text-center mt-2">
                      <p>comunicate al <i class="fab fa-whatsapp"></i> 3133808771</p>

                       <!-- Load Facebook SDK for JavaScript -->
                        <div id="fb-root"></div>
                            <script>(function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s); js.id = id;
                            js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
                            fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));</script>

                            <!-- Your share button code -->
                            <div class="fb-share-button mt-5" 
                            data-href="https://marmolesatenea.com.co" 
                            data-layout="button_count">
                        </div> 

                       
                    </div><!-- end title -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div class="copyrights">
        <div class="container-fluid">
            <div class="footer-distributed">
                <div class="footer-left">
                    <p class="footer-links">
                        <a href="#home">Inicio</a>
                        <a href="#about">Quienes somos</a>
                        <a href="#services">Servicios</a>
                        <a href="#produts">Productos</a>
                        <a href="#contact">Contacto</a>
                    </p>
                    <p class="footer-company-name">Todos los derechos reservados.  &copy; 2021 Softcode. Para Marmoles Atenea s.a.s.  Design By : 
                    <a href="https://html.design/">html design.</a></p>

                    <p class="footer-company-name">cotizaciones@marmolesatenea.com.co</p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>


@endsection