import React from 'react';

const HotelReservations = ({ hotels }) => {
  return (
    <div className="container-fluid reservas py-5">
      <div className="container py-5">
        <div
          className="text-center mx-auto pb-5 wow fadeInUp"
          data-wow-delay="0.2s"
          style={{ maxWidth: '800px' }}
        >
          <h4 className="text-uppercase text-primary">Nuestras Reservas</h4>
          <h1 className="display-3 text-capitalize mb-3">
            Encuentra la Mejor Experiencia de Hospedaje.
          </h1>
        </div>
        <div className="row g-4 justify-content-center">
          {hotels.map((hotel, index) => (
            <div
              key={index}
              className="col-lg-6 col-xl-4 wow fadeInUp"
              data-wow-delay={`${0.2 + index * 0.2}s`}
            >
              <div className="reserva-item">
                <img
                  src={hotel.imageUrl}
                  className="img-fluid w-100 rounded-top"
                  alt={hotel.name}
                />
                <div className="reserva-content bg-light text-center rounded-bottom p-4">
                  <p>{hotel.roomType}</p>
                  <a href="#" className="h4 d-inline-block mb-3">
                    {hotel.name}
                  </a>
                  <p className="fs-4 text-primary mb-3">${hotel.price} por noche</p>
                  <a href="#" className="btn btn-secondary rounded-pill py-2 px-4">
                    Reservar Habitacion
                  </a>
                </div>
              </div>
            </div>
          ))}
        </div>
      </div>
    </div>
  );
};
export default HotelReservations;
