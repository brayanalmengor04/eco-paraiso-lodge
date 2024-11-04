import React, { useEffect, useState } from 'react';

const HotelReservations = () => {
  const [rooms, setRooms] = useState([]);

  useEffect(() => {
    // Cargar las habitaciones desde la API de Laravel
    fetch('/api/rooms')
      .then(response => response.json())
      .then(data => {
        // Filtrar solo las habitaciones disponibles (is_available true)
        const availableRooms = data.filter(room => room.is_available === 1);
        setRooms(availableRooms);
      })
      .catch(error => console.error('Error al cargar los datos:', error));
  }, []);

  const handleReserveRoom = (room) => { 
    window.location.href = `/reservations/create?room_id=${room.id}`;
  };

  return (
    <div className="container-fluid reservas py-5">
      <div className="container py-5">
        <div className="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style={{ maxWidth: '800px' }}>
          <h4 className="text-uppercase text-primary">Nuestras Reservas</h4>
          <h1 className="display-3 text-capitalize mb-3">Encuentra la Mejor Experiencia de Hospedaje.</h1>
        </div>
        <div className="row g-4 justify-content-center">
          {rooms.length > 0 ? (
            rooms.map((room, index) => (
              <div key={room.id} className="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay={`${0.2 + index * 0.2}s`}>
                <div className="reserva-item">
                  <img src="img/hospedajes.jpg" className="img-fluid w-100 rounded-top" alt={room.hotel?.name || 'Hotel sin nombre'} />
                  <div className="reserva-content bg-light text-center rounded-bottom p-4">
                    <p>Habitaciones Disponibles</p>
                    <a href="#" className="h4 d-inline-block mb-3">
                      {room.hotel?.name || 'Hotel desconocido'}
                    </a>
                    <p className="fs-4 text-primary mb-3">${parseFloat(room.price).toFixed(2)} por noche</p>
                    <button
                      onClick={() => handleReserveRoom(room)} 
                      className="btn btn-secondary rounded-pill py-2 px-4"
                    >
                      Reservar Habitación
                    </button>
                  </div>
                </div>
              </div>
            ))
          ) : (
            <p className="text-center">No hay habitaciones disponibles en este momento.</p>
          )}
        </div>
      </div>
    </div>
  );
};

export default HotelReservations;
