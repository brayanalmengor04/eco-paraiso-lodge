import React from 'react';
import ReactDOM from 'react-dom/client';
import AboutSection from './components/AboutSection';
import Team from './components/TeamSection';
import HotelReservations from './components/HotelReservation';
import Services from './components/ServicesSection';
import FactCounter from './components/FactCounter';

function App() {
  return (
    <>
      <div className="container-fluid feature bg-light py-5">
        <div className="container py-5">
          <AboutSection />
        </div>
      </div>
      <Team />
      <FactCounter />
      <Services /> 
      <HotelReservations />
    </>
  );
}

ReactDOM.createRoot(document.getElementById('app')).render(<App />);
