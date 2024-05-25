@extends('layouts.app')

@section('content')


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
                       <h3 class="fw-bolder">Mármoles Atenea</h3>
                       <p class="fs-5 fw-light">Mármol, Granito y otros materiales premium importados.</p>
                    </div>
                    
                </div>
            </div>
            <div class="carousel-item">
                <img src="uploads/slider-02.jpg" class="d-block img_baner w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <div class="borde_purple w-50">
                       <h3 class="fw-bolder">Mármoles Atenea</h3>
                       <p class="fs-5 fw-light">Servicio integral de mantenimineto y restauración. </p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="uploads/slider-03.jpg" class="d-block img_baner w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <div class="borde_purple w-50">
                       <h3 class="fw-bolder">Mármoles Atenea</h3>
                       <p class="fs-5 fw-light">Descubre la excelencia en encímeras y revestimientos.</p>
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


@endsection