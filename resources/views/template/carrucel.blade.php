
<div class="carousel-header">
                <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                    <!-- adentro metemos los componentes de react -->
                    <div class="carousel-item active">
                    <img src="{{ asset('img/empresa.jpeg') }}" class="img-fluid w-100" alt="Ecoturismo en Ecoparaiso Lodge" style="max-height: 1000px;">
                        <div class="carousel-caption-1">
                            <div class="carousel-caption-1-content" style="max-width: 900px;">
                                <h4 class="text-white text-uppercase fw-bold mb-4 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s" style="animation-delay: 1s;" style="letter-spacing: 3px;">Vive la Naturaleza</h4>
                                <h1 class="display-2 text-capitalize text-white mb-4 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1.3s" style="animation-delay: 1.3s;">Tu Escapada Perfecta en Ecoparaiso Lodge</h1>
                            <p class="mb-5 fs-5 text-white fadeInLeft animated" data-animation="fadeInLeft" data-delay="1.5s" style="animation-delay: 1.5s;">
                                En Ecoparaiso Lodge, la armonía con la naturaleza es nuestra prioridad. Disfruta de un entorno sostenible y relajante, donde cada rincón está diseñado para ofrecerte comodidad y tranquilidad, mientras preservamos el ecosistema local.
                            </p>
                            <div class="carousel-caption-1-content-btn fadeInLeft animated" data-animation="fadeInLeft" data-delay="1.7s" style="animation-delay: 1.7s;">
                                <a class="btn btn-primary rounded-pill flex-shrink-0 py-3 px-5 me-2" href="#">Reserva Ahora</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/empresa3.jpeg') }}" class="img-fluid w-100" style="max-height: 1000px;" alt="Aventura en Ecoparaiso Lodge">
                <div class="carousel-caption-2">
                    <div class="carousel-caption-2-content" style="max-width: 900px;">
                        <h4 class="text-white text-uppercase fw-bold mb-4 fadeInRight animated" data-animation="fadeInRight" data-delay="1s" style="animation-delay: 1s;" style="letter-spacing: 3px;">Conexión con la Naturaleza</h4>
                        <h1 class="display-2 text-capitalize text-white mb-4 fadeInRight animated" data-animation="fadeInRight" data-delay="1.3s" style="animation-delay: 1.3s;">Descubre Aventuras Inolvidables</h1>
                        <p class="mb-5 fs-5 text-white fadeInRight animated" data-animation="fadeInRight" data-delay="1.5s" style="animation-delay: 1.5s;">
                            En Ecoparaiso Lodge, te invitamos a vivir experiencias únicas rodeado de la belleza natural. Desde excursiones guiadas hasta actividades de ecoturismo, cada momento está diseñado para que te conectes con la tierra y disfrutes de la serenidad que solo la naturaleza puede ofrecer.
                        </p>
                        <div class="carousel-caption-2-content-btn fadeInRight animated" data-animation="fadeInRight" data-delay="1.7s" style="animation-delay: 1.7s;">
                            <a class="btn btn-primary rounded-pill flex-shrink-0 py-3 px-5 me-2" href="#">Reserva Ya</a>
                        </div>
                    </div>
                </div>   

            </div>
                    <!-- boton de preview y next carrucel -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon btn btn-primary fadeInLeft animated" aria-hidden="true" data-animation="fadeInLeft" data-delay="1.1s" style="animation-delay: 1.3s;"> <i class="fa fa-angle-left fa-3x"></i></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                        <span class="carousel-control-next-icon btn btn-primary fadeInRight animated" aria-hidden="true" data-animation="fadeInLeft" data-delay="1.1s" style="animation-delay: 1.3s;"><i class="fa fa-angle-right fa-3x"></i></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <!-- Carousel End --> 


            