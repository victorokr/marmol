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
    
    

    <div id="about" class="section lb">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="message-box">                        
                        <h2>Bienvenidos.</h2>
                        <p> Queremos dar a conocer nuestra empresa hasta ser la primera opción cuando los clientes piensen en remodelar o construir, y así brindarles los mejores productos para todo tipo de uso.  </p>
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
                        <img src="uploads/quienes.png" alt="" class="img-fluid img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
    
    <!-- <div class="section cont-box">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="inner-cont-box">
                        <i class="flaticon-projector-screen"></i>
                        <h3 class="counter-number">500</h3>
                        <h4>Proyectos realizados</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="inner-cont-box">
                        <i class="flaticon-alarm-clock"></i>
                        <h3 class="counter-number">10</h3>
                        <h4>Años de experiencia</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="inner-cont-box">
                        <i class="flaticon-idea"></i>
                        <h3 class="counter-number">500</h3>
                        <h4>Ideas</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="inner-cont-box">
                        <i class="flaticon-review"></i>
                        <h3 class="counter-number">200</h3>
                        <h4>Clientes</h4>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    
    <div id="services" class="section lb">
        <div class="container-fluid">
            <div class="section-title text-center">
                <h3>Servicios</h3>
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
        <div class="container-fluid">
            <div class="section-title text-center">
                <h3>Productos</h3>
                <p>Nuestros proyectos estan a la altura de tus exigencias.</p>
            </div><!-- end title -->
            
            <div class="gallery-menu row">
                <div class="col-md-12">
                    <div class="button-group filter-button-group text-center">
                        <button class="hvr-rectangle-out active" data-filter="*">Todo</button>
                        <button class="hvr-rectangle-out" data-filter=".gal_a">Baños</button>
                        <button class="hvr-rectangle-out" data-filter=".gal_b">Cocina</button>
                        <button class="hvr-rectangle-out" data-filter=".gal_c">Enchapes </button>
                        <button class="hvr-rectangle-out" data-filter=".gal_d">Exteriores</button>
                        <button class="hvr-rectangle-out" data-filter=".gal_e">Chimeneas</button>
                    </div>
                </div>
            </div>
            
            <div class="gallery-list row">
                <div class="col-md-4 col-sm-6 gallery-grid gal_a">
                    <div class="gallery-single fix">
                        <img src="uploads/MarmolBlancoSeus.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Marmol Blanco Seus</h3>
                            <a href="uploads/MarmolBlancoSeus.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6 gallery-grid gal_a ">
                    <div class="gallery-single fix">
                        <img src="uploads/MarmolCafeFaraon.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Marmol Cafe Faraon</h3>
                            <a href="uploads/MarmolCafeFaraon.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6 gallery-grid gal_a">
                    <div class="gallery-single fix">
                        <img src="uploads/MarmolKraken.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Marmol Kraken</h3>
                            <a href="uploads/MarmolKraken.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6 gallery-grid gal_a">
                    <div class="gallery-single fix">
                        <img src="uploads/QuarztoneBlancoPolar.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Quarztone Blanco Polar</h3>
                            <a href="uploads/QuarztoneBlancoPolar.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6 gallery-grid gal_a">
                    <div class="gallery-single fix">
                        <img src="uploads/QuarztoneKeniaBlack.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Quarztone Kenia Black </h3>
                            <a href="uploads/QuarztoneKeniaBlack.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6 gallery-grid gal_a">
                    <div class="gallery-single fix">
                        <img src="uploads/MarmolCrema Sienna.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Marmol Crema Sienna</h3>
                            <a href="uploads/MarmolCrema Sienna.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6 gallery-grid gal_b">
                    <div class="gallery-single fix">
                        <img src="uploads/GranisotNegroAbsoluto.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Granisot Negro Absoluto </h3>
                            <a href="uploads/GranisotNegroAbsoluto.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6 gallery-grid gal_b">
                    <div class="gallery-single fix">
                        <img src="uploads/GranitoAmarilloAtlantico.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Granito Amarillo Atlantico </h3>
                            <a href="uploads/GranitoAmarilloAtlantico.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6 gallery-grid gal_b">
                    <div class="gallery-single fix">
                        <img src="uploads/GranitoTurronChino.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>GranitoTurron Chino </h3>
                            <a href="uploads/GranitoTurronChino.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 gallery-grid gal_b">
                    <div class="gallery-single fix">
                        <img src="uploads/QuarztoneBlancoPolar1.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Quarztone Blanco Polar  </h3>
                            <a href="uploads/QuarztoneBlancoPolar1.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 gallery-grid gal_b">
                    <div class="gallery-single fix">
                        <img src="uploads/GramarstonDucalGold.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Gramarston Ducal Gold  </h3>
                            <a href="uploads/GramarstonDucalGold.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 gallery-grid gal_b">
                    <div class="gallery-single fix">
                        <img src="uploads/GramarstonToranoEstatuario.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Gramarston Torano Estatuario  </h3>
                            <a href="uploads/GramarstonToranoEstatuario.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 gallery-grid gal_c">
                    <div class="gallery-single fix">
                        <img src="uploads/MarmolCalacata.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Marmol Calacata  </h3>
                            <a href="uploads/MarmolCalacata.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 gallery-grid gal_c">
                    <div class="gallery-single fix">
                        <img src="uploads/MarmolCremaMarfil.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Marmol Crema Marfil  </h3>
                            <a href="uploads/MarmolCremaMarfil.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 gallery-grid gal_c">
                    <div class="gallery-single fix">
                        <img src="uploads/MarmolCremaSienna.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Marmol Crema Sienna  </h3>
                            <a href="uploads/MarmolCremaSienna.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 gallery-grid gal_c">
                    <div class="gallery-single fix">
                        <img src="uploads/MarmolVainilla.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Marmol Vainilla  </h3>
                            <a href="uploads/MarmolVainilla.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 gallery-grid gal_c">
                    <div class="gallery-single fix">
                        <img src="uploads/MarmolSilverBlue.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Marmol Silver Blue  </h3>
                            <a href="uploads/MarmolSilverBlue.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 gallery-grid gal_c">
                    <div class="gallery-single fix">
                        <img src="uploads/GranitoTitaniumGold.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Granito Titanium Gold  </h3>
                            <a href="uploads/GranitoTitaniumGold.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 gallery-grid gal_d">
                    <div class="gallery-single fix">
                        <img src="uploads/Pizarra.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Pizarra  </h3>
                            <a href="uploads/Pizarra.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 gallery-grid gal_d">
                    <div class="gallery-single fix">
                        <img src="uploads/PiedraBlanca.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Piedra Blanca  </h3>
                            <a href="uploads/PiedraBlanca.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 gallery-grid gal_d">
                    <div class="gallery-single fix">
                        <img src="uploads/GranitoNatural.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Granito Natural  </h3>
                            <a href="uploads/GranitoNatural.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 gallery-grid gal_d">
                    <div class="gallery-single fix">
                        <img src="uploads/GramarstonCrotonePupisMate.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Gramarston Crotone Pupis Mate  </h3>
                            <a href="uploads/GramarstonCrotonePupisMate.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 gallery-grid gal_d">
                    <div class="gallery-single fix">
                        <img src="uploads/GranitoAntiqueBrown.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Granito Antique Brown  </h3>
                            <a href="uploads/GranitoAntiqueBrown.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 gallery-grid gal_d">
                    <div class="gallery-single fix">
                        <img src="uploads/MarmolCafeFaraonExterior.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Marmol Cafe Faraon Exterior </h3>
                            <a href="uploads/MarmolCafeFaraonExterior.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 gallery-grid gal_e">
                    <div class="gallery-single fix">
                        <img src="uploads/GramarstonToranoEstatuario1.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Gramarston Torano Estatuario </h3>
                            <a href="uploads/GramarstonToranoEstatuario1.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 gallery-grid gal_e">
                    <div class="gallery-single fix">
                        <img src="uploads/GranitoBlancoSelecto.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Granito Blanco Selecto </h3>
                            <a href="uploads/GranitoBlancoSelecto.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 gallery-grid gal_e">
                    <div class="gallery-single fix">
                        <img src="uploads/MagnificBrownChimenea.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Magnific Brown Chimenea </h3>
                            <a href="uploads/MagnificBrownChimenea.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 gallery-grid gal_e">
                    <div class="gallery-single fix">
                        <img src="uploads/MarmolCremaSienna1.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Marmol Crema Sienna </h3>
                            <a href="uploads/MarmolCremaSienna1.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 gallery-grid gal_e">
                    <div class="gallery-single fix">
                        <img src="uploads/MarmolGreyBLueWave.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Marmol Grey BLue Wave </h3>
                            <a href="uploads/MarmolGreyBLueWave.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 gallery-grid gal_e">
                    <div class="gallery-single fix">
                        <img src="uploads/MosaicoCrema.jpg" class="img-fluid" alt="Image">
                        <div class="img-overlay">
                            <h3>Mosaico Crema </h3>
                            <a href="uploads/MosaicoCrema.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="fa fa-picture-o"></i></a>
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
                        <div id="message"></div>
                        <form id="contactForm" name="sentMessage" novalidate="novalidate">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="name" type="text" placeholder="Tu nombre" required="required" data-validation-required-message="Por favor ingresa tu nombre.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" type="email" placeholder="Tu correo electronico" required="required" data-validation-required-message="Por favor ingresa tu correo electronico.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" type="tel" placeholder="Tu numero de telefono" required="required" data-validation-required-message="Por favor ingresa tu numero de telefono.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="message" placeholder="Tu mensaje" required="required" data-validation-required-message="Por favor ingresa un mensaje."></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-12 text-center">
                                    <div id="success"></div>
                                    <button id="sendMessageButton" class="sim-btn hvr-rectangle-out" data-text="Send Message" type="submit">Enviar mensaje</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="section-title text-center mt-2">
                      <p><i class="fab fa-whatsapp"></i> 3133808771</p>

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
data-href="https://marmolesatenea.test" 
data-layout="button_count">
</div> 

<!-- boton siguenos en instagram -->
<div class=" mt-2" title="Siguenos en Instagram">
    <a href="https://instagram.com/marmolesatenea">
    <span style="font-size: 1.5rem;">
        <span style="color: white;">
            <i class="fab fa-instagram"></i>
        </span>
    </span>
    </a>
</div>                    </div><!-- end title -->
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
                        <a href="#pricing">Precios</a>
                        <a href="#contact">Contacto</a>
                    </p>
                    <p class="footer-company-name">Todos los derechos reservados.  &copy; 2021 Softcode sas.   Design By : 
                    <a href="https://html.design/">html design</a></p>
                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end copyrights -->

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>


@endsection