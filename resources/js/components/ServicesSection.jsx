import React from 'react';

const Services = () => {
    return (
        <div className="container-fluid service bg-light overflow-hidden py-5">
            <div className="container py-5">
                <div className="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style={{ maxWidth: '800px' }}>
                    <h4 className="text-uppercase text-primary">Nuestros Servicios</h4>
                    <h1 className="display-3 text-capitalize mb-3">Descubre la tranquilidad de EcoParaiso Lodge</h1>
                </div>
                <div className="row gx-0 gy-4 align-items-center">
                    <div className="col-lg-6 col-xl-4 wow fadeInLeft" data-wow-delay="0.2s">
                        <div className="service-item rounded p-4 mb-4">
                            <div className="row">
                                <div className="col-12">
                                    <div className="d-flex">
                                        <div className="service-content text-end">
                                            <a href="#" className="h4 d-inline-block mb-3">Habitaciones Ecológicas</a>
                                            <p className="mb-0">Disfruta de cómodas habitaciones construidas con materiales sostenibles y vistas únicas a la naturaleza.</p>
                                        </div>
                                        <div className="ps-4">
                                            <div className="service-btn"><i className="fas fa-leaf text-white fa-2x"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="service-item rounded p-4 mb-4">
                            <div className="row">
                                <div className="col-12">
                                    <div className="d-flex">
                                        <div className="service-content text-end">
                                            <a href="#" className="h4 d-inline-block mb-3">Tours Guiados</a>
                                            <p className="mb-0">Explora la belleza natural a través de nuestros tours guiados en senderos ecológicos.</p>
                                        </div>
                                        <div className="ps-4">
                                            <div className="service-btn"><i className="fas fa-hiking text-white fa-2x"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="service-item rounded p-4 mb-0">
                            <div className="row">
                                <div className="col-12">
                                    <div className="d-flex">
                                        <div className="service-content text-end">
                                            <a href="#" className="h4 d-inline-block mb-3">Restaurante Orgánico</a>
                                            <p className="mb-0">Saborea platos hechos con ingredientes locales y orgánicos, respetando el medio ambiente.</p>
                                        </div>
                                        <div className="ps-4">
                                            <div className="service-btn"><i className="fas fa-seedling text-white fa-2x"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div className="bg-transparent">
                            <iframe
                                src="https://lottie.host/embed/3718ce94-b330-4c6e-862b-1feaec42a7b4/PxSVZ1BAeC.json"
                                style={{ width: '100%', height: '500px', border: 'none' }}
                                allowFullScreen
                            ></iframe>
                        </div>
                    </div>
                    <div className="col-lg-6 col-xl-4 wow fadeInRight" data-wow-delay="0.2s">
                        <div className="service-item rounded p-4 mb-4">
                            <div className="row">
                                <div className="col-12">
                                    <div className="d-flex">
                                        <div className="pe-4">
                                            <div className="service-btn"><i className="fas fa-tree text-white fa-2x"></i></div>
                                        </div>
                                        <div className="service-content">
                                            <a href="#" className="h4 d-inline-block mb-3">Conservación Ambiental</a>
                                            <p className="mb-0">Apoyamos prácticas de conservación para preservar la flora y fauna local.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="service-item rounded p-4 mb-4">
                            <div className="row">
                                <div className="col-12">
                                    <div className="d-flex">
                                        <div className="pe-4">
                                            <div className="service-btn"><i className="fas fa-water text-white fa-2x"></i></div>
                                        </div>
                                        <div className="service-content">
                                            <a href="#" className="h4 d-inline-block mb-3">Piscina Natural</a>
                                            <p className="mb-0">Relájate en una piscina natural diseñada para armonizar con el entorno.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="service-item rounded p-4 mb-0">
                            <div className="row">
                                <div className="col-12">
                                    <div className="d-flex">
                                        <div className="pe-4">
                                            <div className="service-btn"><i className="fas fa-spa text-white fa-2x"></i></div>
                                        </div>
                                        <div className="service-content">
                                            <a href="#" className="h4 d-inline-block mb-3">Zona de Bienestar</a>
                                            <p className="mb-0">Disfruta de sesiones de yoga y bienestar rodeado de la serenidad de la naturaleza.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
};

export default Services;
