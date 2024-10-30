import React from 'react';

const FeatureSection = () => {
    const features = [
        {
            icon: 'fas fa-hand-holding-water',
            title: 'Mision Empresa',
            description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero repellat deleniti necessitatibus',
            delay: '0.2s'
        },
        {
            icon: 'fas fa-filter',
            title: 'Vision Empresa',
            description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero repellat deleniti necessitatibus',
            delay: '0.4s'
        },
        {
            icon: 'fas fa-recycle',
            title: 'Objectivo',
            description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero repellat deleniti necessitatibus',
            delay: '0.6s'
        },
        {
            icon: 'fas fa-microscope',
            title: 'Lab Control',
            description: 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero repellat deleniti necessitatibus',
            delay: '0.8s'
        }
    ];

    return (
        <div className="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" >
            <h4 className="text-uppercase text-primary">Mision y Vision de la Empresa</h4>
            <h1 className="display-3 text-capitalize mb-3">lorembla bla bla
            </h1>
            <div className="row g-4">
                {features.map((feature, index) => (
                    <div key={index} className="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay={feature.delay}>
                        <div className="feature-item p-4">
                            <div className="feature-icon mb-3">
                                <i className={`${feature.icon} text-white fa-3x`}></i>
                            </div>
                            <a href="#" className="h4 mb-3">{feature.title}</a>
                            <p className="mb-3">{feature.description}</p>
                            <a href="#" className="btn text-secondary">
                                Read More <i className="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                ))}
            </div>
        </div>
    );
};

export default FeatureSection;
