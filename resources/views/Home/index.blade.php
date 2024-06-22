@extends('layouts.app')

@section('content')

    <section id="inicio">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="uploads/slider-01.jpg" class="d-block img_baner w-100" alt="...">
                    <div class="carousel-caption ">
                        <div class="borde_purple w-50 ">
                        <h2 class="styletext">Mármoles Atenea</h2>
                        <p class="fs-6 carousel__sub-title ">Mármol, Granito y otros materiales premium importados.</p>
                        <div class="aling_btn  ">
                            <div class="dropdown">
                                <a class="btn btn-sm  carousel__btn-custom dropdown-toggle dropdown-toggle-split" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Catálogos
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="../downloads/CATALOGO_DE_MATERIALES_MARMOLES_ATENEA_SAS.pdf" target="_blank">Catálogo de Materiales</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="../downloads/CATALOGO_SINTERIZADO_MARMOLES_ATENEA_SAS.pdf" target="_blank">Catálogo Sinterizado</a></li>
                                </ul>
                            </div>
                                <a href="#contacto" class="btn  btn-sm carousel__btn-custom " tabindex="-1" role="button" aria-disabled="true">Contáctanos</a>
                        </div>
                        </div>   
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="uploads/slider-02.jpg" class="d-block img_baner w-100" alt="...">
                    <div class="carousel-caption ">
                        <div class="borde_purple w-50">
                        <h2 class="styletext">Mármoles Atenea</h2>
                        <p class="fs-6 carousel__sub-title">Servicio integral de mantenimineto y restauración. </p>
                        <div class="aling_btn ">
                                <div class="dropdown">
                                <a class="btn btn-sm carousel__btn-custom dropdown-toggle dropdown-toggle-split" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Catálogos
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="../downloads/CATALOGO_DE_MATERIALES_MARMOLES_ATENEA_SAS.pdf" target="_blank">Catálogo de Materiales</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="../downloads/CATALOGO_SINTERIZADO_MARMOLES_ATENEA_SAS.pdf" target="_blank">Catálogo Sinterizado</a></li>
                                </ul>
                            </div>
                                <a href="#contacto" class="btn  btn-sm carousel__btn-custom" tabindex="-1" role="button" aria-disabled="true">Contáctanos</a>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="uploads/slider-03.jpg" class="d-block img_baner w-100" alt="...">
                    <div class="carousel-caption ">
                        <div class="borde_purple w-50">
                        <h2 class="styletext">Mármoles Atenea</h2>
                        <p class="fs-6 carousel__sub-title">Descubre la excelencia en encímeras y revestimientos.</p>
                        <div class="aling_btn ">
                                <div class="dropdown">
                                <a class="btn btn-sm carousel__btn-custom dropdown-toggle dropdown-toggle-split" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Catálogos
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="../downloads/CATALOGO_DE_MATERIALES_MARMOLES_ATENEA_SAS.pdf" target="_blank">Catálogo de Materiales</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="../downloads/CATALOGO_SINTERIZADO_MARMOLES_ATENEA_SAS.pdf" target="_blank">Catálogo Sinterizado</a></li>
                                </ul>
                            </div>
                                <a href="#contacto" class="btn  btn-sm carousel__btn-custom" tabindex="-1" role="button" aria-disabled="true">Contáctanos</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon control_icono" aria-hidden="true"></span>
                <span class="visually-hidden ">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon control_icono" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

<div class="container-fluid px-3 px-sm-4 px-md-5 px-lg-custom ">
    <section class="py-5"  id="quienes">
        <div class="row">
          <div class="card-group p-0">
            <div class="col col-md-12 col-sm-12 col-lg-6  p-1">
                <div class="card card_color_white border-0 custom_border_card  ">
                    <div class="card-body py-4 px-5  ">
                        <h3 class="card-title titleBlack py-2  fs-1">Bienvenidos.</h3>
                        <p class="parrafo_text line-height-custom  fs-xs-6-custom fs-sm-5-custom fs-md-4-custom fs-lg-3-custom fs-2-xl-custom fs-xxl-1-custom">Queremos dar a conocer nuestra empresa con mas de 10 años de experiencia, la primera opción cuando los clientes piensen en remodelar o construir, y así brindarles los mejores productos para todo tipo de uso..</p>
                        <h5 class="card-title titlePurple py-0   fs-3">Servicio a domicilio.</h5>
                        <h5 class="card-title titleBlack py-0  fs-3 ">Cotización.</h5>
                        <p class="parrafo_text line-height-custom   fs-xs-6-custom fs-sm-5-custom  fs-md-4-custom fs-lg-3-custom fs-2-xl-custom fs-xxl-1-custom">Nuestro equipo brinda una cotización personalizada deacuerdo a tus necesidades.</p>
                        <h5 class="card-title titleBlack py-0  fs-3">Programación.</h5>
                        <p class="parrafo_text line-height-custom  fs-xs-6-custom fs-sm-5-custom  fs-md-4-custom fs-lg-3-custom fs-2-xl-custom fs-xxl-1-custom">Acordamos una fecha de instalación que se acomode a tu agenda.</p>
                        <h5 class="card-title titleBlack py-0  fs-3">Instalación.</h5>
                        <p class="parrafo_text line-height-custom  fs-xs-6-custom fs-sm-5-custom  fs-md-4-custom fs-lg-3-custom fs-2-xl-custom fs-xxl-1-custom">Nuestros expertos realizan una instalación impecable con el mayor cuidado.</p>
                        <a href="#contacto" class="btn btn-sm text-nowrap btn_custom">Contáctanos</a>
                    </div>
                </div>
            </div>
            <div class="col col-md-12 col-sm-12 col-lg-6">
                <div class="card card_color_white border-0  ">
                        <img src="uploads/quienes2.jpg" class="img_shadow card-img-center  " alt="...">
                        <div class="card-body ">
            
                        </div>
                </div>
            </div>
          </div>  
        </div>
    </section>
    <section id="servicios">
            <div class="row ">
                <h3 class="card-title styletext_title2 text-center py-1 px-4 fs-1">Nuestros Servicios.</h3>
                <p class="parrafo_text text-center py-2 px-5 fs-xs-6-custom fs-sm-5-custom  fs-md-4-custom fs-lg-3-custom fs-2-xl-custom fs-xxl-1-custom">Conozca nuestras soluciones y servicos en marmol para construir, remodelar interiores y exteriores de tu hogar, local u oficina</p>
                <div class="card-group servicios__card-group   ">
                    <div class="col col-md-12 col-sm-12 col-lg-4 pt-4">
                        <div class="card servicios_card border-0">
                            <div class=" iconos text-center ">
                               <img src="images/encimera2.png" class="photo card-img-top" alt="...">
                            </div>
                            <div class="card-body px-5">
                            <h4 class="card-title text-center pt-2">Encimeras de Cocina</h4>
                            <p class="parrafo_text text-start"><small class="text-body-secondary">Encimeras de mármol, granito y materiales innovadores, diseñadas para complementar cualquier estilo de cocina.</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-12 col-sm-12 col-lg-4 pt-4">
                        <div class="card servicios_card border-0 ">
                            <div class=" iconos text-center ">
                               <img src="images/revestimiento.png" class="photo card-img-top" alt="...">
                            </div>
                            <div class="card-body px-5">
                            <h4 class="card-title text-center pt-2">Revestimientos  Pisos y Muros</h4>
                            <p class="parrafo_text text-start"><small class="text-body-secondary">Revestimientos de alta calidad que transforman los espacios, aportando elegancia y durabilidad.</small></p>
                            </div>
                        </div>
                    </div>    
                    <div class="col col-md-12 col-sm-12 col-lg-4 pt-4">
                        <div class="card servicios_card border-0">
                            <div class=" iconos text-center ">
                               <img src="images/espacios.png" class="photo card-img-top" alt="...">
                            </div>
                            <div class="card-body px-5">
                            <h4 class="card-title text-center pt-2">Otros Espacios</h4>
                            <p class="parrafo_text text-start"><small class="text-body-secondary">Nuestros materiales se adaptan a todo tipo de proyectos, desde salas de estar hasta áreas exteriores.</small></p>
                            </div>
                        </div>
                    </div>           
                </div>
            </div>
            <div class="row pt-3">
                <div class="card-group servicios__card-group">
                    <div class="col col-md-12 col-sm-12 col-lg-4  pt-4">
                        <div class="card servicios_card border-0">
                            <div class=" iconos text-center ">
                               <img src="images/mantenimiento.png" class="photo card-img-top" alt="...">
                            </div>
                            <div class="card-body px-5">
                            <h4 class="card-title text-center pt-2">Mantenimiento</h4>
                            <p class="parrafo_text text-start"><small class="text-body-secondary">Utilizamos técnicas y productos especializados para devolver el brillo y la protección a tus materiales.</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="col col-md-12 col-sm-12 col-lg-4  pt-4">
                        <div class="card servicios_card border-0">
                            <div class=" iconos text-center ">
                               <img src="images/soporte.png" class="photo card-img-top" alt="...">
                            </div>
                            <div class="card-body px-5">
                                <h4 class="card-title text-center pt-2">Soporte</h4>
                                <p class="parrafo_text text-start"><small class="text-body-secondary">¿Inquietudes? Descarga en los siguientes enlaces nuestros manuales de mantenimiento para cada uno de los productos.
                                <a class="parrafo_text servicios_linkStyle link-primary" href="../downloads/MANUAL_DE MANTENIMIENTO_SINTERIZADO.pdf" download="MANUAL_DE_MANENIMIENTO_DE_SINTERIZADO">
                                    Sinterizado     
                                </a>
                                <a class="parrafo_text servicios_linkStyle link-primary" href="../downloads/MANUAL_DE_MANTENIMIENTO_MARMOLES_Y_GRANITOS_NATURALES.pdf" download="MANUAL_DE_MANENIMIENTO_MARMOLES_Y_GRANITOS_NATURALES">
                                    Marmoles_y_Granitos     
                                </a>
                                <a class="parrafo_text servicios_linkStyle link-primary" href="../downloads/POLITICAS_DE_GARANTIA.pdf" download="POLITICAS_DE_GARANTIA">
                                    Garantia     
                                </a>
                                <a class="parrafo_text servicios_linkStyle link-primary" href="../downloads/MANUAL_DE_MANTENIMIENTO_QUARZTONE.pdf" download="MANUAL_DE_MANENIMIENTO_DE_QUARZTONE">
                                    Quarztone     
                                </a>
                                </small></p>
                            </div>
                        </div>
                    </div>    
                    <div class="col col-md-12 col-sm-12 col-lg-4  pt-4">
                        <div class="card servicios_card border-0">
                            <div class=" iconos text-center ">
                               <img src="images/restaurar.png" class="photo card-img-top" alt="...">
                            </div>
                            <div class="card-body px-5">
                            <h4 class="card-title text-center pt-2">Restauración</h4>
                            <p class="parrafo_text text-start"><small class="text-body-secondary">Si es necesario, realizamos trabajos de reparación y pulido para dejar tus superficies como nuevas.</small></p>
                            </div>
                        </div>
                    </div>           
                </div>  
            </div>    
    </section>
    
</div>
    <section class="productos__section" id="productos">
        <div class="container-fluid productos__container  ">
            <div class="row row_after">
                <h3 class="card-title styletext_title2 text-center pt-5 px-4 fs-1">Productos.</h3>
                <p class="productos__text-subtitle text-center text-wrap fs-xs-6-custom fs-sm-5-custom  fs-md-4-custom fs-lg-3-custom fs-2-xl-custom fs-xxl-1-custom">Nuestros proyectos estan a la altura de tus exigencias.</p>
                <div class="gallery-menu row pb-4 px-0">
                    <div class="col-md-12 p-0">
                        <div id="myBtnContainer" class="button-group mx-0 text-center  d-flex flex-column flex-sm-column flex-md-colum flex-lg-colum flex-xl-row filter-button-group " >
                            <button class="btn active  productos__btn-gallery" onclick="filterSelection('all')">TODO</button>
                            <button class="btn productos__btn-gallery" onclick="filterSelection('GranitoNatural')" >GRANITO NATURAL</button>
                            <button class="btn productos__btn-gallery" onclick="filterSelection('marmol')" >MARMOL</button>
                            <button class="btn productos__btn-gallery" onclick="filterSelection('PiedraSinterizada')" >PIEDRA SINTERIZADA</button>
                            <button class="btn productos__btn-gallery" onclick="filterSelection('Quarztone')" >QUARZTONE</button>
                            <button class="btn productos__btn-gallery" onclick="filterSelection('Restauraciones')" >RESTAURACIONES</button>
                        </div>
                    </div>
                </div>
                <div class="card-group p-0">
                    <div class="column GranitoNatural col col-md-12 col-sm-12 col-lg-4 ">
                        <div class="card productos__card border-0 ">
                            <img src="uploads/NegroSanGabriel.jpg" class="card-img-top" alt="Negro San Gabriel"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Negro San Gabriel" data-img="uploads/NegroSanGabriel.jpg" >
                            <div class="overlay  ">
                                <p class="productos__text pb-5 fs-xs-6-custom fs-sm-5-custom  fs-md-4-custom fs-lg-3-custom fs-2-xl-custom fs-xxl-1-custom">Negro San Gabriel</p>
                                <a href="#" class="productos__btn_custom  d-none d-lg-block"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Negro San Gabriel" data-img="uploads/NegroSanGabriel.jpg">
                                    <img src="images/icono_img_galeria3.png" class="" alt="Icon">
                                </a>
                            </div>
                        </div>
                    </div>    
                    <div class="column GranitoNatural col col-md-12 col-sm-12 col-lg-4 ">
                        <div class="card productos__card border-0 ">
                            <img src="uploads/GranitoBlancoMediterraneo.jpg" class="card-img-top" alt="Blanco Mediterraneo"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Blanco Mediterraneo" data-img="uploads/GranitoBlancoMediterraneo.jpg" >
                            <div class="overlay  ">
                                <p class="productos__text pb-5 fs-xs-6-custom fs-sm-5-custom  fs-md-4-custom fs-lg-3-custom fs-2-xl-custom fs-xxl-1-custom">Blanco Mediterraneo</p>
                                <a href="#" class="productos__btn_custom  d-none d-lg-block"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Blanco Mediterraneo" data-img="uploads/GranitoBlancoMediterraneo.jpg">
                                    <img src="images/icono_img_galeria3.png" class="" alt="Icon">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="column GranitoNatural col col-md-12 col-sm-12 col-lg-4 ">
                        <div class="card productos__card border-0 ">
                            <img src="uploads/AmarilloAtlantico.jpg" class="card-img-top" alt="Amarillo Atlantico"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Amarillo Atlantico" data-img="uploads/AmarilloAtlantico.jpg" >
                            <div class="overlay  ">
                                <p class="productos__text pb-5 fs-xs-6-custom fs-sm-5-custom  fs-md-4-custom fs-lg-3-custom fs-2-xl-custom fs-xxl-1-custom">Amarillo Atlantico</p>
                                <a href="#" class="productos__btn_custom  d-none d-lg-block"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Amarillo Atlantico" data-img="uploads/AmarilloAtlantico.jpg">
                                    <img src="images/icono_img_galeria3.png" class="" alt="Icon">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="column GranitoNatural col col-md-12 col-sm-12 col-lg-4 ">
                        <div class="card productos__card border-0 ">
                            <img src="uploads/CosmicBlack.jpg" class="card-img-top" alt="Cosmic Black"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Cosmic Black" data-img="uploads/CosmicBlack.jpg" >
                            <div class="overlay  ">
                                <p class="productos__text pb-5 fs-xs-6-custom fs-sm-5-custom  fs-md-4-custom fs-lg-3-custom fs-2-xl-custom fs-xxl-1-custom">Cosmic Black</p>
                                <a href="#" class="productos__btn_custom  d-none d-lg-block"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Cosmic Black" data-img="uploads/CosmicBlack.jpg">
                                    <img src="images/icono_img_galeria3.png" class="" alt="Icon">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="column GranitoNatural col col-md-12 col-sm-12 col-lg-4 ">
                        <div class="card productos__card border-0 ">
                            <img src="uploads/CoffeBrown.jpg" class="card-img-top" alt="Coffe Brown"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Coffe Brown" data-img="uploads/CoffeBrown.jpg" >
                            <div class="overlay  ">
                                <p class="productos__text pb-5 fs-xs-6-custom fs-sm-5-custom  fs-md-4-custom fs-lg-3-custom fs-2-xl-custom fs-xxl-1-custom">Coffe Brown</p>
                                <a href="#" class="productos__btn_custom  d-none d-lg-block"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Coffe Brown" data-img="uploads/CoffeBrown.jpg">
                                    <img src="images/icono_img_galeria3.png" class="" alt="Icon">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="column GranitoNatural col col-md-12 col-sm-12 col-lg-4 ">
                        <div class="card productos__card border-0 ">
                            <img src="uploads/NegroAbsoluto1.jpg" class="card-img-top" alt="Negro Absoluto"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Negro Absoluto" data-img="uploads/NegroAbsoluto1.jpg" >
                            <div class="overlay  ">
                                <p class="productos__text pb-5 fs-xs-6-custom fs-sm-5-custom  fs-md-4-custom fs-lg-3-custom fs-2-xl-custom fs-xxl-1-custom">Negro Absoluto</p>
                                <a href="#" class="productos__btn_custom  d-none d-lg-block"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Negro Absoluto" data-img="uploads/NegroAbsoluto1.jpg">
                                    <img src="images/icono_img_galeria3.png" class="" alt="Icon">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="column marmol col col-md-12 col-sm-12 col-lg-4 ">
                        <div class="card productos__card border-0 ">
                            <img src="uploads/PiedraMuneca.jpg" class="card-img-top" alt="Piedra Muñeca"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Piedra Muñeca" data-img="uploads/PiedraMuneca.jpg" >
                            <div class="overlay  ">
                                <p class="productos__text pb-5 fs-xs-6-custom fs-sm-5-custom  fs-md-4-custom fs-lg-3-custom fs-2-xl-custom fs-xxl-1-custom">Piedra Muñeca</p>
                                <a href="#" class="productos__btn_custom  d-none d-lg-block"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Piedra Muñeca" data-img="uploads/PiedraMuneca.jpg">
                                    <img src="images/icono_img_galeria3.png" class="" alt="Icon">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="column marmol col col-md-12 col-sm-12 col-lg-4 ">
                        <div class="card productos__card border-0 ">
                            <img src="uploads/MarmolVolakas.jpg" class="card-img-top" alt="Volakas"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Volakas" data-img="uploads/MarmolVolakas.jpg" >
                            <div class="overlay  ">
                                <p class="productos__text pb-5 fs-xs-6-custom fs-sm-5-custom  fs-md-4-custom fs-lg-3-custom fs-2-xl-custom fs-xxl-1-custom">Volakas</p>
                                <a href="#" class="productos__btn_custom  d-none d-lg-block"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Volakas" data-img="uploads/MarmolVolakas.jpg">
                                    <img src="images/icono_img_galeria3.png" class="" alt="Icon">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="column marmol col col-md-12 col-sm-12 col-lg-4 ">
                        <div class="card productos__card border-0 ">
                            <img src="uploads/MarmolNegroMarkina.jpg" class="card-img-top" alt="Negro Markina"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Negro Markina" data-img="uploads/MarmolNegroMarkina.jpg" >
                            <div class="overlay  ">
                                <p class="productos__text pb-5 fs-xs-6-custom fs-sm-5-custom  fs-md-4-custom fs-lg-3-custom fs-2-xl-custom fs-xxl-1-custom">Negro Markina</p>
                                <a href="#" class="productos__btn_custom  d-none d-lg-block"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Negro Markina" data-img="uploads/MarmolNegroMarkina.jpg">
                                    <img src="images/icono_img_galeria3.png" class="" alt="Icon">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="column marmol col col-md-12 col-sm-12 col-lg-4 ">
                        <div class="card productos__card border-0 ">
                            <img src="uploads/MarmolCafeFaraon.jpg" class="card-img-top" alt="Café Faraon"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Café Faraon" data-img="uploads/MarmolCafeFaraon.jpg" >
                            <div class="overlay  ">
                                <p class="productos__text pb-5 fs-xs-6-custom fs-sm-5-custom  fs-md-4-custom fs-lg-3-custom fs-2-xl-custom fs-xxl-1-custom">Café Faraon</p>
                                <a href="#" class="productos__btn_custom  d-none d-lg-block"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Café Faraon" data-img="uploads/MarmolCafeFaraon.jpg">
                                    <img src="images/icono_img_galeria3.png" class="" alt="Icon">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="column marmol col col-md-12 col-sm-12 col-lg-4 ">
                        <div class="card productos__card border-0 ">
                            <img src="uploads/CremaSienna1.jpg" class="card-img-top" alt="Crema Sienna"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Crema Sienna" data-img="uploads/CremaSienna1.jpg" >
                            <div class="overlay  ">
                                <p class="productos__text pb-5 fs-xs-6-custom fs-sm-5-custom  fs-md-4-custom fs-lg-3-custom fs-2-xl-custom fs-xxl-1-custom">Crema Sienna</p>
                                <a href="#" class="productos__btn_custom  d-none d-lg-block"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Crema Sienna" data-img="uploads/CremaSienna1.jpg">
                                    <img src="images/icono_img_galeria3.png" class="" alt="Icon">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="column marmol col col-md-12 col-sm-12 col-lg-4 ">
                        <div class="card productos__card border-0 ">
                            <img src="uploads/NegroMarkinaySilverBlue.jpg" class="card-img-top" alt="Negro Markina y Silver Blue"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Negro Markina y Silver Blue" data-img="uploads/NegroMarkinaySilverBlue.jpg" >
                            <div class="overlay  ">
                                <p class="productos__text pb-5 fs-xs-6-custom fs-sm-5-custom  fs-md-4-custom fs-lg-3-custom fs-2-xl-custom fs-xxl-1-custom">Negro Markina y Silver Blue</p>
                                <a href="#" class="productos__btn_custom  d-none d-lg-block"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Negro Markina y Silver Blue" data-img="uploads/NegroMarkinaySilverBlue.jpg">
                                    <img src="images/icono_img_galeria3.png" class="" alt="Icon">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="column PiedraSinterizada col col-md-12 col-sm-12 col-lg-4 ">
                        <div class="card productos__card border-0 ">
                            <img src="uploads/SinterizadoCalacataMachiaVechia.jpg" class="card-img-top" alt="Calacata Machia Vechia"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Calacata Machia Vechia" data-img="uploads/SinterizadoCalacataMachiaVechia.jpg" >
                            <div class="overlay  ">
                                <p class="productos__text pb-5 fs-xs-6-custom fs-sm-5-custom  fs-md-4-custom fs-lg-3-custom fs-2-xl-custom fs-xxl-1-custom">Calacata Machia Vechia</p>
                                <a href="#" class="productos__btn_custom  d-none d-lg-block"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Calacata Machia Vechia" data-img="uploads/SinterizadoCalacataMachiaVechia.jpg">
                                    <img src="images/icono_img_galeria3.png" class="" alt="Icon">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="column PiedraSinterizada col col-md-12 col-sm-12 col-lg-4 ">
                        <div class="card productos__card border-0 ">
                            <img src="uploads/SinterizadoCardosoGrey.jpg" class="card-img-top" alt="Cardoso Grey"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Cardoso Grey" data-img="uploads/SinterizadoCardosoGrey.jpg" >
                            <div class="overlay  ">
                                <p class="productos__text pb-5 fs-xs-6-custom fs-sm-5-custom  fs-md-4-custom fs-lg-3-custom fs-2-xl-custom fs-xxl-1-custom">Cardoso Grey</p>
                                <a href="#" class="productos__btn_custom  d-none d-lg-block"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Cardoso Grey" data-img="uploads/SinterizadoCardosoGrey.jpg">
                                    <img src="images/icono_img_galeria3.png" class="" alt="Icon">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="column PiedraSinterizada col col-md-12 col-sm-12 col-lg-4 ">
                        <div class="card productos__card border-0 ">
                            <img src="uploads/SinterizadoEstatuario.jpg" class="card-img-top" alt="Estatuario"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Estatuario" data-img="uploads/SinterizadoEstatuario.jpg" >
                            <div class="overlay  ">
                                <p class="productos__text pb-5 fs-xs-6-custom fs-sm-5-custom  fs-md-4-custom fs-lg-3-custom fs-2-xl-custom fs-xxl-1-custom">Estatuario</p>
                                <a href="#" class="productos__btn_custom  d-none d-lg-block"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Estatuario" data-img="uploads/SinterizadoEstatuario.jpg">
                                    <img src="images/icono_img_galeria3.png" class="" alt="Icon">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="column PiedraSinterizada col col-md-12 col-sm-12 col-lg-4 ">
                        <div class="card productos__card border-0 ">
                            <img src="uploads/SinterizadoSaharaNoirBrillado.jpg" class="card-img-top" alt="Sahara Noir Brillado"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Sahara Noir Brillado" data-img="uploads/SinterizadoSaharaNoirBrillado.jpg" >
                            <div class="overlay  ">
                                <p class="productos__text pb-5 fs-xs-6-custom fs-sm-5-custom  fs-md-4-custom fs-lg-3-custom fs-2-xl-custom fs-xxl-1-custom">Sahara Noir Brillado</p>
                                <a href="#" class="productos__btn_custom  d-none d-lg-block"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Sahara Noir Brillado" data-img="uploads/SinterizadoSaharaNoirBrillado.jpg">
                                    <img src="images/icono_img_galeria3.png" class="" alt="Icon">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="column PiedraSinterizada col col-md-12 col-sm-12 col-lg-4 ">
                        <div class="card productos__card border-0 ">
                            <img src="uploads/SinterizadoSaharaNoirMate.jpg" class="card-img-top" alt="Sahara Noir Mate"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Sahara Noir Mate" data-img="uploads/SinterizadoSaharaNoirMate.jpg" >
                            <div class="overlay  ">
                                <p class="productos__text pb-5 fs-xs-6-custom fs-sm-5-custom  fs-md-4-custom fs-lg-3-custom fs-2-xl-custom fs-xxl-1-custom">Sahara Noir Mate</p>
                                <a href="#" class="productos__btn_custom  d-none d-lg-block"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Sahara Noir Mate" data-img="uploads/SinterizadoSaharaNoirMate.jpg">
                                    <img src="images/icono_img_galeria3.png" class="" alt="Icon">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="column PiedraSinterizada col col-md-12 col-sm-12 col-lg-4 ">
                        <div class="card productos__card border-0 ">
                            <img src="uploads/SinterizadoVareceOnixyPulpisGrey.jpg" class="card-img-top" alt="Varece Onixy Pulpis Grey"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Varece Onixy Pulpis Grey" data-img="uploads/SinterizadoVareceOnixyPulpisGrey.jpg" >
                            <div class="overlay  ">
                                <p class="productos__text pb-5 fs-xs-6-custom fs-sm-5-custom  fs-md-4-custom fs-lg-3-custom fs-2-xl-custom fs-xxl-1-custom">Varece Onixy Pulpis Grey</p>
                                <a href="#" class="productos__btn_custom  d-none d-lg-block"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Varece Onixy Pulpis Grey" data-img="uploads/SinterizadoVareceOnixyPulpisGrey.jpg">
                                    <img src="images/icono_img_galeria3.png" class="" alt="Icon">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="column Quarztone col col-md-12 col-sm-12 col-lg-4 ">
                        <div class="card productos__card border-0 ">
                            <img src="uploads/Polar.jpg" class="card-img-top" alt="Polar"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Polar" data-img="uploads/Polar.jpg" >
                            <div class="overlay  ">
                                <p class="productos__text pb-5 fs-xs-6-custom fs-sm-5-custom  fs-md-4-custom fs-lg-3-custom fs-2-xl-custom fs-xxl-1-custom">Polar</p>
                                <a href="#" class="productos__btn_custom  d-none d-lg-block"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Polar" data-img="uploads/Polar.jpg">
                                    <img src="images/icono_img_galeria3.png" class="" alt="Icon">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="column Quarztone col col-md-12 col-sm-12 col-lg-4 ">
                        <div class="card productos__card border-0 ">
                            <img src="uploads/NewBlancoPolar.jpg" class="card-img-top" alt="New Blanco Polar"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="New Blanco Polar" data-img="uploads/NewBlancoPolar.jpg" >
                            <div class="overlay  ">
                                <p class="productos__text pb-5 fs-xs-6-custom fs-sm-5-custom  fs-md-4-custom fs-lg-3-custom fs-2-xl-custom fs-xxl-1-custom">New Blanco Polar</p>
                                <a href="#" class="productos__btn_custom  d-none d-lg-block"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="New Blanco Polar" data-img="uploads/NewBlancoPolar.jpg">
                                    <img src="images/icono_img_galeria3.png" class="" alt="Icon">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="column Quarztone col col-md-12 col-sm-12 col-lg-4 ">
                        <div class="card productos__card border-0 ">
                            <img src="uploads/KeniaBlack.jpg" class="card-img-top" alt="Kenia Black"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Kenia Black" data-img="uploads/KeniaBlack.jpg" >
                            <div class="overlay  ">
                                <p class="productos__text pb-5 fs-xs-6-custom fs-sm-5-custom  fs-md-4-custom fs-lg-3-custom fs-2-xl-custom fs-xxl-1-custom">Kenia Black</p>
                                <a href="#" class="productos__btn_custom  d-none d-lg-block"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Kenia Black" data-img="uploads/KeniaBlack.jpg">
                                    <img src="images/icono_img_galeria3.png" class="" alt="Icon">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="column Quarztone col col-md-12 col-sm-12 col-lg-4 ">
                        <div class="card productos__card border-0 ">
                            <img src="uploads/QuarztoneBlancoPolarr.jpg" class="card-img-top" alt="Quarztone Blanco Polar"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Blanco Polar" data-img="uploads/QuarztoneBlancoPolarr.jpg" >
                            <div class="overlay  ">
                                <p class="productos__text pb-5 fs-xs-6-custom fs-sm-5-custom  fs-md-4-custom fs-lg-3-custom fs-2-xl-custom fs-xxl-1-custom">Blanco Polar</p>
                                <a href="#" class="productos__btn_custom  d-none d-lg-block"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Blanco Polar" data-img="uploads/QuarztoneBlancoPolarr.jpg">
                                    <img src="images/icono_img_galeria3.png" class="" alt="Icon">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="column Quarztone col col-md-12 col-sm-12 col-lg-4 ">
                        <div class="card productos__card border-0 ">
                            <img src="uploads/QuaratoneBlancoPolar.jpg" class="card-img-top" alt="Blanco Polar"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Blanco Polar" data-img="uploads/QuaratoneBlancoPolar.jpg" >
                            <div class="overlay  ">
                                <p class="productos__text pb-5 fs-xs-6-custom fs-sm-5-custom  fs-md-4-custom fs-lg-3-custom fs-2-xl-custom fs-xxl-1-custom">Blanco Polar</p>
                                <a href="#" class="productos__btn_custom  d-none d-lg-block"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Blanco Polar" data-img="uploads/QuaratoneBlancoPolar.jpg">
                                    <img src="images/icono_img_galeria3.png" class="" alt="Icon">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="column Quarztone col col-md-12 col-sm-12 col-lg-4 ">
                        <div class="card productos__card border-0 ">
                            <img src="uploads/Calacata2.jpg" class="card-img-top" alt="Calacata"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Calacata" data-img="uploads/Calacata2.jpg" >
                            <div class="overlay  ">
                                <p class="productos__text pb-5 fs-xs-6-custom fs-sm-5-custom  fs-md-4-custom fs-lg-3-custom fs-2-xl-custom fs-xxl-1-custom">Calacata</p>
                                <a href="#" class="productos__btn_custom  d-none d-lg-block"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Calacata" data-img="uploads/Calacata2.jpg">
                                    <img src="images/icono_img_galeria3.png" class="" alt="Icon">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="column Restauraciones col col-md-12 col-sm-12 col-lg-4 ">
                        <div class="card productos__card border-0 ">
                            <img src="uploads/restauracion6.jpg" class="card-img-top" alt="Restauración"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Restauración" data-img="uploads/restauracion6.jpg" >
                            <div class="overlay  ">
                                <p class="productos__text pb-5 fs-xs-6-custom fs-sm-5-custom  fs-md-4-custom fs-lg-3-custom fs-2-xl-custom fs-xxl-1-custom">Restauración</p>
                                <a href="#" class="productos__btn_custom  d-none d-lg-block"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Restauración" data-img="uploads/restauracion6.jpg">
                                    <img src="images/icono_img_galeria3.png" class="" alt="Icon">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="column Restauraciones col col-md-12 col-sm-12 col-lg-4 ">
                        <div class="card productos__card border-0 ">
                            <img src="uploads/restauracion5.jpg" class="card-img-top" alt="Restauración"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Restauración" data-img="uploads/restauracion5.jpg" >
                            <div class="overlay  ">
                                <p class="productos__text pb-5 fs-xs-6-custom fs-sm-5-custom  fs-md-4-custom fs-lg-3-custom fs-2-xl-custom fs-xxl-1-custom">Restauración</p>
                                <a href="#" class="productos__btn_custom  d-none d-lg-block"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Restauración" data-img="uploads/restauracion5.jpg">
                                    <img src="images/icono_img_galeria3.png" class="" alt="Icon">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="column Restauraciones col col-md-12 col-sm-12 col-lg-4 ">
                        <div class="card productos__card border-0 ">
                            <img src="uploads/restauracion4.jpg" class="card-img-top" alt="Restauración"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Restauración" data-img="uploads/restauracion4.jpg" >
                            <div class="overlay  ">
                                <p class="productos__text pb-5 fs-xs-6-custom fs-sm-5-custom  fs-md-4-custom fs-lg-3-custom fs-2-xl-custom fs-xxl-1-custom">Restauración</p>
                                <a href="#" class="productos__btn_custom  d-none d-lg-block"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Restauración" data-img="uploads/restauracion4.jpg">
                                    <img src="images/icono_img_galeria3.png" class="" alt="Icon">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="column Restauraciones col col-md-12 col-sm-12 col-lg-4 ">
                        <div class="card productos__card border-0 ">
                            <img src="uploads/restauracion3.jpg" class="card-img-top" alt="Restauración"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Restauración" data-img="uploads/restauracion3.jpg" >
                            <div class="overlay  ">
                                <p class="productos__text pb-5 fs-xs-6-custom fs-sm-5-custom  fs-md-4-custom fs-lg-3-custom fs-2-xl-custom fs-xxl-1-custom">Restauración</p>
                                <a href="#" class="productos__btn_custom  d-none d-lg-block"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Restauración" data-img="uploads/restauracion3.jpg">
                                    <img src="images/icono_img_galeria3.png" class="" alt="Icon">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="column Restauraciones col col-md-12 col-sm-12 col-lg-4 ">
                        <div class="card productos__card border-0 ">
                            <img src="uploads/restauracion2.jpg" class="card-img-top" alt="Restauración"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Restauración" data-img="uploads/restauracion2.jpg" >
                            <div class="overlay  ">
                                <p class="productos__text pb-5 fs-xs-6-custom fs-sm-5-custom  fs-md-4-custom fs-lg-3-custom fs-2-xl-custom fs-xxl-1-custom">Restauración</p>
                                <a href="#" class="productos__btn_custom  d-none d-lg-block"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Restauración" data-img="uploads/restauracion2.jpg">
                                    <img src="images/icono_img_galeria3.png" class="" alt="Icon">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="column Restauraciones col col-md-12 col-sm-12 col-lg-4 ">
                        <div class="card productos__card border-0 ">
                            <img src="uploads/restauracion1.jpg" class="card-img-top" alt="Restauración"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Restauración" data-img="uploads/restauracion1.jpg" >
                            <div class="overlay  ">
                                <p class="productos__text pb-5 fs-xs-6-custom fs-sm-5-custom  fs-md-4-custom fs-lg-3-custom fs-2-xl-custom fs-xxl-1-custom">Restauración</p>
                                <a href="#" class="productos__btn_custom  d-none d-lg-block"   data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Restauración" data-img="uploads/restauracion1.jpg">
                                    <img src="images/icono_img_galeria3.png" class="" alt="Icon">
                                </a>
                            </div>
                        </div>
                    </div>
 
                </div>
            </div>    
        </div>    
    </section>
    <section id="contacto">
        <div class="container-fluid contacto__container  mt-0">
            <div class="row d-flex justify-content-center m-0">
            <h3 class="card-title styletext_title2 text-center py-1 pt-5 px-4 fs-1">Contáctanos.</h3>
            <p class="contacto_text-title text-center py-2 pb-5 px-5 fs-xs-6-custom fs-sm-5-custom  fs-md-4-custom fs-lg-3-custom fs-2-xl-custom fs-xxl-1-custom">Dejanos saber tus inquietudes, nos pondremos en contácto el menor tiempo posible.</p>
                <div class="col col-sm-12 col-md-12 col-lg-8 col-xl-6 p-0">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="card contacto__card border-0">
                        
                        <div class="card-body contacto__card-body ">
                            
                            <form method="POST" action="{{ route('contact.submit') }}" id="contactFormm" name="sentMessagee">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 contacto__col">
                                        <div class="contacto__formGroup-input">
                                            <input class="form-control" id="namee" name="nombre" value="{{ old('nombre') }}" type="text" placeholder="Tu nombre" required>
                                            @error('nombre') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6 contacto__col">
                                        <div class="contacto__formGroup-input">
                                            <input class="form-control" id="emaill" name="email" value="{{ old('email') }}" type="email" placeholder="Tu correo electronico" required>
                                            @error('email') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12 contacto__col">
                                        <div class="contacto__formGroup-input">
                                            <input class="form-control" id="phonee" name="phone" value="{{ old('phone') }}" type="tel" placeholder="Tu numero de telefono" required>
                                            @error('phone') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12 contacto__col">
                                        <div class="contacto__formGroup-input">
                                            <textarea class="form-control" id="messagee" name="mensaje" value="{{ old('mensaje') }}" placeholder="Tu mensaje" rows="10" required></textarea>
                                            @error('mensaje') <div class="alert alert-danger">{{ $message }}</div> @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-12 text-center">
                                        <div id="successs"></div>
                                        <button type="submit" class="btn contacto__btn" >Enviar mensaje</button>
                                    </div>
                                </div>
                            </form>
                            @if ($errors->any())
                                <script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                        window.location.hash = '#contacto';
                                    });
                                </script>
                            @endif
                        </div>   
                    </div>
                    <div class="fb-share-button d-flex justify-content-center pb-3" >
                            <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fmarmolesatenea.com.co%2F" target="_blank" class="btn btn-facebook">
                            <img class="" src="images/face_footer.png" alt="" />Compartir
                            </a>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

@endsection