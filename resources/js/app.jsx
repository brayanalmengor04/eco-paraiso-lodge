import React from 'react';
import ReactDOM from 'react-dom/client';
import AboutSection from './components/AboutSection';
import Team from './components/TeamSection';
import HotelReservations from './components/HotelReservation';
import Services from './components/ServicesSection';
import FactCounter from './components/FactCounter';
// Prueba valores estaticos 
const hotels = [
  {
    name: 'Hotel Costa Azul',
    roomType: 'Habitación Doble',
    price: 120.00,
    imageUrl: 'img/hospedajes.jpg',
  },
  {
    name: 'Hotel Gran Vista',
    roomType: 'Suite Ejecutiva',
    price: 200.00,
    imageUrl: 'img/hospedajes.jpg',
  },
  {
    name: 'Resort Playa Serena',
    roomType: 'Habitación Familiar',
    price: 150.00,
    imageUrl: 'img/hospedajes.jpg',
  },
];
// Obtener valor de la base de datos HotelReservations ()
function App() {
  return (
    <>
      <div class="container-fluid feature bg-light py-5">
        <div class="container py-5">
          <AboutSection />
        </div>
      </div>
      < Team />
      <FactCounter />
      <Services />
      <HotelReservations hotels={hotels} />
    </>
  );
}
ReactDOM.createRoot(document.getElementById('app')).render(<App />);
