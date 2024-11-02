// Team.jsx
import React from 'react';


const teamMembers = [
  {
    id: 1,
    name: 'Brayan Almengor',
    position: '(CEO / Director general)',
    img: 'img/porfile.jpg',
    socials: [
      { platform: 'facebook', icon: 'fab fa-facebook-f', link: '#' },
      { platform: 'twitter', icon: 'fab fa-twitter', link: '#' },
      { platform: 'linkedin', icon: 'fab fa-linkedin-in', link: '#' },
      { platform: 'instagram', icon: 'fab fa-instagram', link: '#' },
    ], 
    // se pueden agregar mas socials aqui 
  },
  {
    id: 2,
    name: 'Luis Veces ',
    position: ' Gerente de Operaciones',
    img: 'img/porfile.jpg',
    socials: [
      { platform: 'facebook', icon: 'fab fa-facebook-f', link: '#' },
      { platform: 'twitter', icon: 'fab fa-twitter', link: '#' },
      { platform: 'linkedin', icon: 'fab fa-linkedin-in', link: '#' },
      { platform: 'instagram', icon: 'fab fa-instagram', link: '#' },
    ],
  },
  {
    id: 3,
    name: ' Marcos Herrera',
    position: 'Gerente Financiero',
    img: 'img/porfile.jpg',
    socials: [
      { platform: 'facebook', icon: 'fab fa-facebook-f', link: '#' },
      { platform: 'twitter', icon: 'fab fa-twitter', link: '#' },
      { platform: 'linkedin', icon: 'fab fa-linkedin-in', link: '#' },
      { platform: 'instagram', icon: 'fab fa-instagram', link: '#' },
    ],
  },
  {
    id: 4,
    name: 'Edwin González',
    position: 'Gerente de Sistemas',
    img: 'img/porfile.jpg',
    socials: [
      { platform: 'facebook', icon: 'fab fa-facebook-f', link: '#' },
      { platform: 'twitter', icon: 'fab fa-twitter', link: '#' },
      { platform: 'linkedin', icon: 'fab fa-linkedin-in', link: '#' },
      { platform: 'instagram', icon: 'fab fa-instagram', link: '#' },
    ],
  },
];
const Team = () => {
  return (
    <div className="container-fluid team pb-5">
      <div className="container pb-5">
        <div className="text-center mx-auto pb-5" style={{ maxWidth: '800px' }}>
          <h4 className="text-uppercase text-primary">Nuestro Equipo</h4>
          <h1 className="display-3 text-capitalize mb-3">El Equipo de Expertos Comprometidos con Tu Éxito</h1>
        </div>
        <div className="row g-4">
          {teamMembers.map((member) => (
            <div className="col-md-6 col-lg-6 col-xl-3" key={member.id}>
              <div className="team-item p-4">
                <div className="team-inner rounded">
                  <div className="team-img">
                    <img src={member.img} className="img-fluid rounded-top w-100" alt={member.name} />
                    <div className="team-share">
                      <a className="btn btn-secondary btn-md-square rounded-pill text-white mx-1" href="#">
                        <i className="fas fa-share-alt"></i>
                      </a>
                    </div>
                    <div className="team-icon rounded-pill py-2 px-2">
                      {member.socials.map((social, index) => (
                        <a key={index} className="btn btn-secondary btn-sm-square rounded-pill mx-1" href={social.link}>
                          <i className={social.icon}></i>
                        </a>
                      ))}
                    </div>
                  </div>
                  <div className="bg-light rounded-bottom text-center py-4">
                    <h4 className="mb-3">{member.name}</h4>
                    <p className="mb-0">{member.position}</p>
                  </div>
                </div>
              </div>
            </div>
          ))}
        </div>
      </div>
    </div>
  );
};
export default Team;
