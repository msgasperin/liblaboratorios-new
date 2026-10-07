let arrSucursales = [
   {
      id: 1,
      sucursal: 'Córdoba - Matriz',
      dirección: 'Calle 18 avenida 21 No. 2113 Col. Lomas',
      maps: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.895448439414!2d-96.95095042419685!3d18.8917188577307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c4e5161a2f0d3b%3A0x9217af1fb93fd20b!2sLIB%20Laboratorios.!5e0!3m2!1ses!2smx!4v1719530184695!5m2!1ses!2smx',
      horarios: 'Lunes a Viernes 07:30 a 19:00.<br>Sábado 07:30 a 14:30.',
      foto: 'lib.webp',
      contacto: '2717149391',
      contacto2: '2717140663'
   },
   {
      id: 2,
      sucursal: 'Córdoba - SaludCor',
      dirección: 'Avenida 1 entre calles 32 y 34 No. 3219 Col. Dos Caminos',
      maps: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.6664756212294!2d-96.95445952419678!3d18.9018717574147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c4e5106a8003e3%3A0x8a34ffccb2661530!2sCl%C3%ADnica%20De%20Especialidades%20SaludCor!5e0!3m2!1ses!2smx!4v1719531356483!5m2!1ses!2smx',
      horarios: 'Lunes a Viernes 08:00 a 14:00 y 16:00 a 18:00<br>Sábado 08:30 a 13:00. <br>	Entrega de resultados a partir de las 16:00.',
      foto: 'saludcor.webp',
      contacto: '2717140663',
      contacto2: ''
   },
   {
      id: 3,
      sucursal: 'Córdoba - AMEC',
      dirección: 'Calle 20 Avenida Esquina 9 BIS No. 914, Col. San José',
      maps: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1334.602029261173!2d-96.94434373731899!3d18.8948617883401!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c4e5152a0c0493%3A0xf5db37117c72a579!2sAv%209-bis%2020%2C%20San%20Jose%2C%2094500%20C%C3%B3rdoba%2C%20Ver.!5e0!3m2!1ses!2smx!4v1720028472911!5m2!1ses!2smx',
      horarios: 'Lunes a Sábado 08:30 a 15:30.',
      foto: 'amec.webp',
      contacto: '2711699586',
      contacto2: ''
   },
   {
      id: 4,
      sucursal: 'Córdoba - Centro',
      dirección: 'Av 2, No. 718 (A un costado de RAICO)',
      maps: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.8671289808317!2d-96.93478602419688!3d18.89297485769172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c4e568059e0c7d%3A0x49d6f5df0b5fc79e!2sAv%202%20718%2C%20Centro%2C%2094500%20C%C3%B3rdoba%2C%20Ver.!5e0!3m2!1ses!2smx!4v1720029224917!5m2!1ses!2smx',
      horarios: 'Lunes a Sábado 07:30 a 16:00.',
      foto: 'c_centro.webp',
      contacto: '2717298227',
      contacto2: ''
   },
   {
      id: 5,
      sucursal: 'Córdoba - Plaza Palmas',
      dirección: 'Carretera Córdoba - Fortín, Plaza frente al Bola de Oro',
      maps: 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d280.55538528891276!2d-96.95928128283025!3d18.90090496309134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2smx!4v1729099616931!5m2!1ses!2smx',
      horarios: 'Lunes a Viernes 07:00 a 16:00.',
      foto: 'plaza_palmas.webp',
      contacto: '2717298227',
      contacto2: ''
   },
   {
      id: 6,
      sucursal: 'Córdoba - Gómez Urrutia',
      dirección: 'Calle 22 No. 1702 Esq. Avenida 17. Colonia San Dimas, Córdoba, Ver',
      maps: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.829740458929!2d-96.94280072419683!3d18.894632957640088!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c4e5f5fcb58c3d%3A0xa342007e8431b921!2sDr.%20Juan%20Manuel%20Gomez%20Urrutia%20%2F%20Gastroenter%C3%B3logo%20en%20Cordoba%20Ver.!5e0!3m2!1ses!2smx!4v1754325300069!5m2!1ses!2smx',
      horarios: 'Lunes a Sábado 07:30 a 19:00.',
      foto: 'gomez_urrutia.webp',
      contacto: '2717298227',
      contacto2: ''
   },
   {
      id: 7,
      sucursal: 'Orizaba - Real',
      dirección: 'Sur 5 entre oriente 4 y 6 junto a la gasolinera Roji',
      maps: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d471.98879396911667!2d-97.10275965938128!3d18.84665351509393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c502a4e9b663b1%3A0xd2f8408823e7f960!2sGasolinera%20Roji%20Sur%205!5e0!3m2!1ses!2smx!4v1720029760403!5m2!1ses!2smx',
      horarios: 'Lunes a Viernes 07:00 a 15:30<br>	Sábado 07:00 a 14:00.',
      foto: 'suc_real.webp',
      contacto: '2722018196',
      contacto2: ''
   },
   {
      id: 8,
      sucursal: 'Orizaba - Sanatorio Rebeca',
      dirección: 'Oriente 6 No. 1888 entre Sur 35 y 37 Col. Centro',
      maps: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3775.838195056593!2d-97.0900490241976!3d18.849860959031805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c4fd5a1e2dbf5f%3A0x60c958dca2bf60fc!2sSanatorio%20Rebeca!5e0!3m2!1ses!2smx!4v1720030401681!5m2!1ses!2smx',
      horarios: 'Lunes a Viernes 07:00 a 18:00<br>Sábado 07:30 a 14:00.',
      foto: 'rebeca.webp',
      contacto: '2721069459',
      contacto2: ''
   },
   {
      id: 9,
      sucursal: 'Orizaba - Sanatorio Rebeca',
      dirección: 'Oriente 6 No. 1888 entre Sur 35 y 37 Col. Centro',
      maps: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3775.838195056593!2d-97.0900490241976!3d18.849860959031805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c4fd5a1e2dbf5f%3A0x60c958dca2bf60fc!2sSanatorio%20Rebeca!5e0!3m2!1ses!2smx!4v1720030401681!5m2!1ses!2smx',
      horarios: 'Lunes a Viernes 07:00 a 18:00<br>Sábado 07:30 a 14:00.',
      foto: 'rebeca.webp',
      contacto: '2721069459',
      contacto2: ''
   },
   {
      id: 9,
      sucursal: 'Fortín - Centro de atención',
      dirección: 'Av. 2 Poniente Calle 6 Norte esquina 401–A Col. Centro',
      maps: 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235.9188532628824!2d-97.00238728240124!3d18.900312331641025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c4e49cbc85cd55%3A0xfc6d29b5e0346e58!2sLIB%20Laboratorios!5e0!3m2!1ses!2smx!4v1720030742785!5m2!1ses!2smx',
      horarios: 'Lunes a Viernes 07:00 a 15:30<br>Sábado 07:30 a 15:00.',
      foto: 'fortin.webp',
      contacto: '2717133653',
      contacto2: ''
   },
   {
      id: 10,
      sucursal: 'Zongolica - Centro de atención',
      dirección: 'Calle José María Morelos y Pavón No. 1 Barrio de la Virgen de Guadalupe (Frente al IMSS)',
      maps: 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d334.1063361436412!2d-96.99689725036804!3d18.66481739981375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2smx!4v1720031870092!5m2!1ses!2smx',
      horarios: 'Lunes a Viernes 07:30 a 16:00.',
      foto: 'zongolica.webp',
      contacto: '2717298227',
      contacto2: ''
   }
];