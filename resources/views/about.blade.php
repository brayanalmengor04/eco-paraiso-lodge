@extends("template.sectiontemplate") 
@section("title","Hotel EcoParaíso Lodge - Sobre Nosotros")   
@section("title-section","Sobre Nosotros")
@section("actual-section","Sobre Nosotros")
@section("content")
 <!-- About Start -->
<div class="container-fluid about py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="about-img rounded h-100">
                    <img src="{{ asset('img/hospedajes.jpg') }}" class="img-fluid rounded h-100 w-100" style="object-fit: cover;" alt="Ecoparaiso Lodge">
                    <div class="about-exp"><span>Hotel Eco Paraiso Lodge</span></div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.2s">
                <div class="about-item">
                    <h4 class="text-primary text-uppercase">Sobre Nosotros</h4>
                    <h1 class="display-3 mb-3">Conectando con la Naturaleza de Forma Sustentable</h1>
                    <p class="mb-4">En Ecoparaiso Lodge, hemos dedicado más de dos décadas a brindar experiencias únicas de turismo ecológico, donde el confort se encuentra con la naturaleza. Nos comprometemos a ofrecer un refugio donde cada huésped pueda disfrutar de la belleza natural sin comprometer el medio ambiente.</p>
                    <div class="bg-light rounded p-4 mb-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="pe-4">
                                        <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;"><i class="fas fa-leaf text-white fa-2x"></i></div>
                                    </div>
                                    <div>
                                        <a href="#" class="h4 d-inline-block mb-3">Clientes Satisfechos</a>
                                        <p class="mb-0">Nuestra prioridad es ofrecer una experiencia inolvidable, donde cada detalle cuida tanto del huésped como de la naturaleza que nos rodea.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-light rounded p-4 mb-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="pe-4">
                                        <div class="rounded-circle bg-primary d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;"><i class="fas fa-seedling text-white fa-2x"></i></div>
                                    </div>
                                    <div>
                                        <a href="#" class="h4 d-inline-block mb-3">Prácticas Sostenibles</a>
                                        <p class="mb-0">Desde el diseño de nuestras instalaciones hasta las actividades que ofrecemos, cada aspecto de nuestro lodge está enfocado en la sostenibilidad.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn btn-secondary rounded-pill py-3 px-5">Leer Más</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

@stop