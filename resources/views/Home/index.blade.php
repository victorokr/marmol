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
                <div class="carousel-caption d-none d-md-block">
                    <div class="borde_purple w-50 ">
                       <h2 class="styletext">Mármoles Atenea</h2>
                       <p class="fs-6 ">Mármol, Granito y otros materiales premium importados.</p>
                       <div class="aling_btn gap-2 ">
                          <div class="dropdown">
                            <a class="btn btn-sm dropdown-toggle dropdown-toggle-split" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Catálogos
                            </a>

                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../downloads/CATALOGO_DE_MATERIALES_MARMOLES_ATENEA_SAS.pdf" target="_blank">Catálogo de Materiales</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="../downloads/CATALOGO_SINTERIZADO_MARMOLES_ATENEA_SAS.pdf" target="_blank">Catálogo Sinterizado</a></li>
                            </ul>
                          </div>
                            <a href="#contacto" class="btn  btn-sm" tabindex="-1" role="button" aria-disabled="true">Contáctanos</a>
                       </div>
                    </div>   
                </div>
            </div>
            <div class="carousel-item">
                <img src="uploads/slider-02.jpg" class="d-block img_baner w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <div class="borde_purple w-50">
                       <h2 class="styletext">Mármoles Atenea</h2>
                       <p class="fs-6">Servicio integral de mantenimineto y restauración. </p>
                       <div class="aling_btn gap-2">
                            <div class="dropdown">
                            <a class="btn btn-sm dropdown-toggle dropdown-toggle-split" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Catálogos
                            </a>

                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../downloads/CATALOGO_DE_MATERIALES_MARMOLES_ATENEA_SAS.pdf" target="_blank">Catálogo de Materiales</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="../downloads/CATALOGO_SINTERIZADO_MARMOLES_ATENEA_SAS.pdf" target="_blank">Catálogo Sinterizado</a></li>
                            </ul>
                          </div>
                            <a href="#contacto" class="btn  btn-sm" tabindex="-1" role="button" aria-disabled="true">Contáctanos</a>
                       </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="uploads/slider-03.jpg" class="d-block img_baner w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <div class="borde_purple w-50">
                       <h2 class="styletext">Mármoles Atenea</h2>
                       <p class="fs-6">Descubre la excelencia en encímeras y revestimientos.</p>
                       <div class="aling_btn gap-2">
                            <div class="dropdown">
                            <a class="btn btn-sm dropdown-toggle dropdown-toggle-split" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Catálogos
                            </a>

                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../downloads/CATALOGO_DE_MATERIALES_MARMOLES_ATENEA_SAS.pdf" target="_blank">Catálogo de Materiales</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="../downloads/CATALOGO_SINTERIZADO_MARMOLES_ATENEA_SAS.pdf" target="_blank">Catálogo Sinterizado</a></li>
                            </ul>
                          </div>
                            <a href="#contacto" class="btn  btn-sm" tabindex="-1" role="button" aria-disabled="true">Contáctanos</a>
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
<section id="quienes">
    <h3>quienes</h3>
</section>
<section id="servicios">
    <h3>servicios</h3>
</section>
<section id="productos">
    <h3>productos</h3>
</section>
<section id="contacto">
    <h3>contactanos</h3>
</section>

@endsection