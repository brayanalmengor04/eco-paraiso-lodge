import React from 'react';

const AboutSection = () => {
    const about = [
        {
            icon: 'fas fa-hand-holding-water',
            title: 'Misión',
            description: 'Proporcionar una experiencia de alojamiento única que combine el lujo y la comodidad con la sostenibilidad y responsabilidad ambiental, promoviendo la conservación del entorno natural.',
            delay: '0.2s'
        },
        {
            icon: 'fas fa-filter',
            title: 'Visión',
            description: 'Ser el hotel ecológico de referencia en Panamá y América Latina, liderando en prácticas sostenibles y promoviendo una experiencia regenerativa para los huéspedes y la comunidad local.',
            delay: '0.4s'
        },
        {
            icon: 'fas fa-recycle',
            title: 'Objetivo',
            description: 'Ofrecer una experiencia turística en Panamá Oeste enfocada en turismo sostenible y educación ambiental, equilibrando confort y conservación de la biodiversidad local.',
            delay: '0.6s'
        } ,
        {
            icon: 'fas fa-leaf',
            title: 'Compromiso Ambiental',
            description: 'EcoParaíso Lodge se dedica a minimizar su impacto ecológico mediante prácticas de eficiencia energética, reducción de residuos y conservación de los recursos naturales locales.',
            delay: '0.8s'
        }
    ];
    return (
        <div className="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s">
            <h4 className="text-uppercase text-primary">EcoParaíso Lodge</h4>
            <h1 className="display-3 text-capitalize mb-3">Compromiso con la Sostenibilidad y el Confort</h1>
            <div className="row g-4">
                {about.map((about, index) => (
                    <div key={index} className="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay={about.delay}>
                        <div className="feature-item p-4">
                            <div className="feature-icon mb-3">
                                <i className={`${about.icon} text-white fa-3x`}></i>
                            </div>
                            <h4 className="mb-3">{about.title}</h4>
                            <p className="mb-3">{about.description}</p>
                            <a href="#" className="btn text-secondary">
                                Leer Más <i className="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                ))}
            </div>
        </div>
    );
};

export default AboutSection;
