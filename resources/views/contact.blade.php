@extends("template.sectiontemplate") 
@section("title","Hotel EcoParaíso Lodge - Contacto")   
@section("title-section","Contacto")
@section("actual-section","Contacto") 
@section("content")
<!-- Modal de Búsqueda Inicio -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h4 class="modal-title mb-0" id="exampleModalLabel">Buscar por palabra clave</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
            </div>
            <div class="modal-body d-flex align-items-center">
                <div class="input-group w-75 mx-auto d-flex">
                    <input type="search" class="form-control p-3" placeholder="palabras clave" aria-describedby="search-icon-1">
                    <span id="search-icon-1" class="input-group-text btn border p-3"><i class="fa fa-search text-white"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal de Búsqueda Fin -->
<!-- Contacto Inicio -->
<div class="container-fluid contacto bg-light py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 h-100 wow fadeInUp" data-wow-delay="0.2s">
                <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                    <h4 class="text-uppercase text-primary">Conectémonos</h4>
                    <h1 class="display-3 text-capitalize mb-3">Envía tu mensaje</h1>
                    <p class="mb-0">¿Tienes alguna pregunta o quieres más información sobre Ecoparaiso Lodge? ¡No dudes en contactarnos! Estamos aquí para ayudarte a planificar una experiencia inolvidable en la naturaleza. </p>
                    </div>

                <!-- agregar algo para resibir los correos -->
                <form action="" method="">
                    <div class="row g-4">
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="text" class="form-control border-0" id="name" placeholder="Su Nombre">
                                <label for="name">Su Nombre</label>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="email" class="form-control border-0" id="email" placeholder="Su Correo Electrónico">
                                <label for="email">Su Correo Electrónico</label>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="phone" class="form-control border-0" id="phone" placeholder="Teléfono">
                                <label for="phone">Su Teléfono</label>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="form-floating">
                                <input type="text" class="form-control border-0" id="subject" placeholder="Asunto">
                                <label for="subject">Asunto</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control border-0" placeholder="Escriba su mensaje aquí" id="message" style="height: 175px"></textarea>
                                <label for="message">Mensaje</label>
                            </div>
                        </div>
                        <div class="col-12">

                            <!-- enviar formulario -->
                            <button type="submit" class="btn btn-primary w-100 py-3">Enviar Mensaje</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="d-inline-flex rounded bg-white w-100 p-4">
                            <i class="fas fa-map-marker-alt fa-2x text-secondary me-4"></i>
                            <div>
                                <h4>Dirección</h4>
                                <p class="mb-0">Panamá, Capira, Corregimiento de Ciricito, en el 
Coracoral </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-6">
                        <div class="d-inline-flex rounded bg-white w-100 p-4">
                            <i class="fas fa-envelope fa-2x text-secondary me-4"></i>
                            <div>
                                <h4>Envíanos un Correo</h4>
                                <p class="mb-0">info@ecoparaiso.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-6">
                        <div class="d-inline-flex rounded bg-white w-100 p-4">
                            <i class="fa fa-phone-alt fa-2x text-secondary me-4"></i>
                            <div>
                                <h4>Teléfono</h4>
                                <p class="mb-0">(+507) 3456 7890 123</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contacto Fin -->
@stop 
