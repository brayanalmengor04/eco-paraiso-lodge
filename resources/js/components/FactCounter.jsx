import React from 'react';

const FactCounter = () => {
  const counters = [
    { icon: "fas fa-thumbs-up", label: "Clientes Felices", count: 100 },
    { icon: "fas fa-truck", label: "Transporte", count: 10 },
    { icon: "fas fa-users", label: "Empleados", count: 10 },
    { icon: "fas fa-heart", label: "Experiencia", count: 1 }
  ];

  return (
    <div className="container-fluid counter py-5" >
      <div className="container-fluid py-5">
        <div className="row g-5">
          {counters.map((counter, index) => (
            <div className="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay={`${(index + 1) * 0.2}s`} key={index}>
              <div className="counter-item">
                <div className="counter-item-icon mx-auto">
                  <i className={`${counter.icon} fa-3x text-white`}></i>
                </div>
                <h4 className="text-white my-4">{counter.label}</h4>
                <div className="counter-counting">
                  <span className="text-white fs-2 fw-bold" data-toggle="counter-up">{counter.count}</span>
                  <span className="h1 fw-bold text-white">+</span>
                </div>
              </div>
            </div>
          ))}
        </div>
      </div>
    </div>
  );
};

export default FactCounter;
