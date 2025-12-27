<?php

?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Portafolio - Antonio de Jesús Gonzaga Cruz</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700;900&display=swap" rel="stylesheet">

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Estilos personalizados -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

  <?php include 'includes/header.php'; ?>

  <!-- HERO Fullscreen -->
  <header id="hero" class="hero d-flex align-items-center justify-content-center text-center">
    <div class="hero-overlay"></div>
    <div class="container position-relative">
      <h1 class="hero-title">HOLA, SOY <span class="text-highlight">ANTONIO</span></h1>
      <p class="hero-sublead">Lic. en Ingeniería en Desarrollo de Software — Cédula profesional: <strong>15305040</strong></p>
      <a href="#about" class="hero-down" aria-label="bajar"><span></span></a>
    </div>
  </header>

  <main class="container py-5">
    <!-- About -->
<section id="about" class="section">
  <div class="container">
    <h2 class="section-title">UN POCO SOBRE MÍ</h2>

    <!-- Avatar -->
    <img src="assets/img/perfil.png" alt="Avatar Antonio" class="avatar-circle">

    <div class="section-center">
      <p>¡Hola! Mi nombre es <strong>Antonio de Jesús</strong> soy Licenciado en Ingeniería en Desarrollo Software 
      Me enfoco en analizar, resolver y optimizar problemas de desarrollo, buscando siempre alternativas eficientes y funcionales que se adapten a las necesidades de cada proyecto.

      Actualmente trabajo en el desarrollo de plataformas digitales y sistemas administrativos, aportando soluciones prácticas, escalables y bien estructuradas. También cuento con experiencia en soporte técnico y mantenimiento de equipos de cómputo, lo que me permite tener una visión completa del funcionamiento de los sistemas.</p>

      <p>Fuera del entorno de desarrollo, disfruto aprender sobre producción musical, experimentar con visualizaciones creativas y crear contenido digital para mi comunidad, combinando lógica y creatividad.</p>
    </div>
  </div>
</section>

<!-- Pasion -->
<section class="services section-padding" id="pasion">
    <div class="container">
        <h2 class="section-title text-center mb-5">LO QUE HAGO</h2>
        <div class="row g-4">
<!-- Diseño -->
<div class="col-md-4">
    <div class="service-card text-center p-4">
        <div class="icon-wrapper mb-3">
            <i class="bi bi-laptop icon-lg icon-rotate"></i>
        </div>
        <h5 class="fw-bold mb-3">Diseño</h5>
        <p class="pasion-text">
            El diseño no se trata solo de lo visual.
            Implica cómo funciona un producto, cómo se entiende y cómo se siente al usarse. 
            Me esfuerzo por crear interfaces claras y funcionales, cuidando cada detalle para ofrecer una experiencia completa y agradable en entornos digitales.
        </p>
    </div>
</div>


            <!-- Desarrollo -->
            <div class="col-md-4">
                <div class="service-card text-center p-4">
                    <div class="icon-wrapper mb-3">
                        <i class="bi bi-code-slash icon-lg icon-rotate"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Desarrollo</h5>
                    <p>
                      Me enfoco en el desarrollo de sitios web y aplicaciones modernas, 
                      aplicando buenas prácticas.
                      Me motiva crear proyectos sólidos y seguir creciendo como desarrollador, 
                      aportando soluciones que generen valor y puedan evolucionar con el tiempo.
                    </p>
                </div>
            </div>

            <!-- Implicación -->
            <div class="col-md-4">
                <div class="service-card text-center p-4">
                    <div class="icon-wrapper mb-3">
                        <i class="bi bi-lightbulb-fill icon-lg icon-rotate"></i>
                    </div>
                    <h5 class="fw-bold mb-3">Implicación</h5>
                    <p>
                     Me involucro en cada proyecto con dedicación, asegurando calidad, comunicación constante y resultados profesionales alineados a los objetivos del proyecto.
                     Trabajo de forma organizada y responsable, adaptándome a las necesidades de cada cliente.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
    </div>
  </div>
</section>

<!-- EXPERIENCE -->
<section id="experiencie" class="section">
    <div class="container">
        <h2 class="section-title">EXPERIENCIA</h2>
        <p class="section-subtitle">Tecnologías con las que desarrollo</p>

        <div class="row justify-content-center g-4 pt-4">

            <!-- PHP -->
            <div class="col-6 col-md-3">
                <div class="skill-card">
                    <i class="devicon-php-plain colored"></i>
                    <p>PHP</p>
                </div>
            </div>

            <!-- JavaScript -->
            <div class="col-6 col-md-3">
                <div class="skill-card">
                    <i class="devicon-javascript-plain colored"></i>
                    <p>JavaScript</p>
                </div>
            </div>

            <!-- Python -->
            <div class="col-6 col-md-3">
                <div class="skill-card">
                    <i class="devicon-python-plain colored"></i>
                    <p>Python</p>
                </div>
            </div>

            <!-- CSS -->
            <div class="col-6 col-md-3">
                <div class="skill-card">
                    <i class="devicon-css3-plain colored"></i>
                    <p>CSS</p>
                </div>
            </div>

            <!-- Java -->
            <div class="col-6 col-md-3">
                <div class="skill-card">
                    <i class="devicon-java-plain colored"></i>
                    <p>Java</p>
                </div>
            </div>

            <!-- C# -->
            <div class="col-6 col-md-3">
                <div class="skill-card">
                    <i class="devicon-csharp-plain colored"></i>
                    <p>C#</p>
                </div>
            </div>

            <!-- jQuery -->
            <div class="col-6 col-md-3">
                <div class="skill-card">
                    <i class="devicon-jquery-plain colored"></i>
                    <p>jQuery</p>
                </div>
            </div>

            <!-- Bootstrap -->
            <div class="col-6 col-md-3">
                <div class="skill-card">
                    <i class="devicon-bootstrap-plain colored"></i>
                    <p>Bootstrap</p>
                </div>
            </div>

            <!-- Node.js -->
            <div class="col-6 col-md-3">
                <div class="skill-card">
                    <i class="devicon-nodejs-plain colored"></i>
                    <p>Node.js</p>
                </div>
            </div>

            <!-- Android Studio -->
            <div class="col-6 col-md-3">
                <div class="skill-card">
                    <i class="devicon-androidstudio-plain colored"></i>
                    <p>Android Studio</p>
                </div>
            </div>

            <!-- MySQL -->
            <div class="col-6 col-md-3">
                <div class="skill-card">
                    <i class="devicon-mysql-plain colored"></i>
                    <p>MySQL</p>
                </div>
            </div>

            <!-- SQL Server -->
            <div class="col-6 col-md-3">
                <div class="skill-card">
                    <i class="devicon-microsoftsqlserver-plain colored"></i>
                    <p>SQL Server</p>
                </div>
            </div>

            <!-- WAMP -->
            <div class="col-6 col-md-3">
                <div class="skill-card">
                    <img src="assets/img/wamp.png" alt="WampServer" class="skill-img">
                    <p>WAMP Server</p>
                </div>
            </div>

            <!-- Photoshop -->
            <div class="col-6 col-md-3">
                <div class="skill-card">
                    <i class="devicon-photoshop-plain colored"></i>
                    <p>Photoshop</p>
                </div>
            </div>

            <!-- Illustrator -->
            <div class="col-6 col-md-3">
                <div class="skill-card">
                    <i class="devicon-illustrator-plain colored"></i>
                    <p>Illustrator</p>
                </div>
            </div>

            <!-- Linux -->
            <div class="col-6 col-md-3">
                <div class="skill-card">
                    <i class="devicon-linux-plain colored"></i>
                    <p>Linux</p>
                </div>
            </div>
        </div>
    </div>

    <!-- BOTÓN DESCARGAR CV -->
<div class="row justify-content-center pt-5">
    <div class="col-auto">
        <a 
            href="assets/docs/Antonio_Gonzaga_CV.pdf" 
            class="btn btn-outline-primary btn-lg btn-cv"
            download
            target="_blank"
        >
            <i class=""></i>
            ¡Hecha un vistazo a mi CV!
        </a>
    </div>
</div>
</section>
</div>

<!-- Projects -->

<!-- =======================
  SECCIÓN: PROYECTOS DESTACADOS (con modales + carrusel)
  ======================= -->
<section id="projects" class="section" style="padding-top:40px;">
  <div class="container">
    <h2 class="section-title">PROYECTOS REALIZADOS</h2>
    <p class="section-subtitle"></p>
    <div class="row g-4">

      <!-- Proyecto 1 -->
       <div class="col-md-4">
        <div class="project-card" data-bs-toggle="modal" data-bs-target="#modalBiblioteca" role="button" aria-label="Abrir Biblioteca Virtual">
          <img src="assets/img/proyectos/biblioteca/preview1.png" alt="Biblioteca Virtual">
          <div class="overlay">
            <div class="icon"><i class="bi bi-search"></i></div>
            <div class="project-name">Biblioteca virtual</div>
          </div>
        </div>
      </div>

      <!-- Proyecto 2 -->
      <div class="col-md-4">
        <div class="project-card" data-bs-toggle="modal" data-bs-target="#modalPortfolio" role="button" aria-label="Abrir Portfolio Web">
          <img src="assets/img/proyectos/portafolio/preview1.png" alt="Portfolio Web">
          <div class="overlay">
            <div class="icon"><i class="bi bi-search"></i></div>
            <div class="project-name">Portafolio web</div>
          </div>
        </div>
      </div>

      <!-- Proyecto 3 -->
             <div class="col-md-4">
        <div class="project-card" data-bs-toggle="modal" data-bs-target="#modalMusicDashboard" role="button" aria-label="Abrir Music Dashboard">
          <img src="assets/img/proyectos/music-dashboard/preview1.png" alt="Music Dashboard">
          <div class="overlay">
            <div class="icon"><i class="bi bi-search"></i></div>
            <div class="project-name">Music dashboard</div>
          </div>
        </div>
      </div>

      <!-- Proyecto 4 -->
      <div class="col-md-4">
        <div class="project-card" data-bs-toggle="modal" data-bs-target="#modalAccesos" role="button" aria-label="Abrir Sistema de Accesos">
          <img src="assets/img/proyectos/accesos/preview1.png" alt="Sistema de Accesos">
          <div class="overlay">
            <div class="icon"><i class="bi bi-search"></i></div>
            <div class="project-name">Sistema de accesos</div>
          </div>
        </div>
      </div>

      <!-- Proyecto 5 -->
      <div class="col-md-4">
        <div class="project-card" data-bs-toggle="modal" data-bs-target="#modalAppMedicion" role="button" aria-label="Abrir App de Medición">
          <img src="assets/img/proyectos/App-Medicion/preview1.jpg" alt="Medicion de Tiempos">
          <div class="overlay">
            <div class="icon"><i class="bi bi-search"></i></div>
            <div class="project-name">App de control de tiempos</div>
          </div>
        </div>
      </div>

      <!-- Proyecto 6 -->
      <div class="col-md-4">
        <div class="project-card" data-bs-toggle="modal" data-bs-target="#modalMejoraImagenes" role="button" aria-label="Abrir AI Mejora Imágenes">
          <img src="assets/img/proyectos/Mejora-Imagenes/preview1.png" alt="Mejora de Imagenes">
          <div class="overlay">
            <div class="icon"><i class="bi bi-search"></i></div>
            <div class="project-name">Sistema para mejorar imágenes</div>
          </div>
        </div>
      </div>

    </div> <!-- /row -->
  </div> <!-- /container -->
</section>

 
<!-- =======================
  MODALES (carrusel dentro)
  ======================= -->

  <!-- Modal: Biblioteca Virtual -->
<div class="modal" id="modalBiblioteca" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-fullscreen-sm-down">
    <div class="modal-content" style="background:#0f1113; border-radius:12px; overflow:hidden;">
      <h4 class="mb-1 text-center fw-bold">Biblioteca virtual</h4>
            <button type="button"
              class="btn-close btn-close-white position-absolute"
              data-bs-dismiss="modal"
              aria-label="Cerrar"
              style="top:5px; right:15px; z-index:10;">
      </button>
      <div class="modal-body p-0">
        <div id="carouselBiblioteca" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-img-wrapper">
              <img src="assets/img/proyectos/biblioteca/preview1.png" class="d-block w-100" alt="Biblioteca - 1">
              </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-img-wrapper">
              <img src="assets/img/proyectos/biblioteca/preview2.png" class="d-block w-100" alt="Biblioteca - 2">
              </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-img-wrapper">
              <img src="assets/img/proyectos/biblioteca/preview3.png" class="d-block w-100" alt="Biblioteca - 3">
              </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-img-wrapper">
              <img src="assets/img/proyectos/biblioteca/preview4.png" class="d-block w-100" alt="Biblioteca - 4">
              </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-img-wrapper">
              <img src="assets/img/proyectos/biblioteca/preview5.png" class="d-block w-100" alt="Biblioteca - 5">
              </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-img-wrapper">
              <img src="assets/img/proyectos/biblioteca/preview6.png" class="d-block w-100" alt="Biblioteca - 6">
              </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-img-wrapper">
              <img src="assets/img/proyectos/biblioteca/preview7.png" class="d-block w-100" alt="Biblioteca - 7">
              </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-img-wrapper">
              <img src="assets/img/proyectos/biblioteca/preview8.png" class="d-block w-100" alt="Biblioteca - 8">
              </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-img-wrapper">
              <img src="assets/img/proyectos/biblioteca/preview9.png" class="d-block w-100" alt="Biblioteca - 9">
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselBiblioteca" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselBiblioteca" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
          </button>
        </div>
      </div>
      <div class="modal-footer d-flex flex-column flex-md-row align-items-start gap-3 justify-content-between" style="background:#0b0d0f; border-top: 1px solid rgba(255,255,255,0.03);">
        <div>
          
          <p class="mb-0 text-fino">Este proyecto se desarrolló como trabajo final universitario para una escuela primaria, con el objetivo de digitalizar y mejorar la gestión de su material bibliográfico.
            Surgió ante la necesidad de organizar los libros y facilitar el acceso a la información de manera sencilla y eficiente.
            La solución fue una biblioteca virtual desarrollada con lenguajes de programación puros y base de datos relacional, sin el uso de frameworks, enfocada en comprender y aplicar los fundamentos del desarrollo web.
            Su objetivo principal es optimizar la gestión bibliotecaria y fomentar el hábito de la lectura en la comunidad escolar.
          </p>
          <p class="mb-0"><strong>Tecnologías:</strong> PHP, HTML, CSS, JavaScript, MySQL.</p>
        </div>
        <div class="ms-auto text-end">
          <a href="#" class="btn btn-outline-light me-2" role="button" aria-disabled="true" data-bs-toggle="tooltip" data-bs-placement="top" title="Proyecto no alojado (sin hosting)">Ver proyecto</a>
          <a href="https://github.com/Antonio012-web/biblioteca-virtual-php" class="btn btn-primary" target="_blank" rel="noopener">Ver código</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal: Portfolio -->
<div class="modal" id="modalPortfolio" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-fullscreen-sm-down">
    <div class="modal-content" style="background:#0f1113; border-radius:12px; overflow:hidden;">
      <h4 class="mb-1 text-center fw-bold">Portafolio personal</h4>
              <button type="button"
              class="btn-close btn-close-white position-absolute"
              data-bs-dismiss="modal"
              aria-label="Cerrar"
              style="top:5px; right:15px; z-index:10;">
      </button>
      <div class="modal-body p-0">
        <div id="carouselPortfolio" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-img-wrapper">
              <img src="assets/img/proyectos/portafolio/preview1.png" class="d-block w-100" alt="Portfolio - 1">
              </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-img-wrapper">
              <img src="assets/img/proyectos/portafolio/preview2.png" class="d-block w-100" alt="Portfolio - 2">
              </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-img-wrapper">
              <img src="assets/img/proyectos/portafolio/preview3.png" class="d-block w-100" alt="Portfolio - 3">
              </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-img-wrapper">
              <img src="assets/img/proyectos/portafolio/preview4.png" class="d-block w-100" alt="Portfolio - 4">
              </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-img-wrapper">
              <img src="assets/img/proyectos/portafolio/preview5.png" class="d-block w-100" alt="Portfolio - 5">
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselPortfolio" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselPortfolio" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
          </button>
        </div>
      </div>

      <div class="modal-footer d-flex flex-column flex-md-row align-items-start gap-3 justify-content-between" style="background:#0b0d0f; border-top: 1px solid rgba(255,255,255,0.03);">
        <div>
          
          <p class="mb-0 text-fino">Este portafolio se desarrolló con el propósito de dar a conocer mi perfil como Licenciado en Ingeniería en Desarrollo de Software y presentar de forma clara los proyectos en los que he trabajado.
             Surgió ante la necesidad de contar con un espacio profesional donde mostrar mi experiencia inicial, habilidades y enfoque de trabajo.
            La solución fue crear un sitio web personal que integra proyectos reales y académicos, destacando el proceso y los resultados obtenidos.
            Su objetivo es mostrar mis capacidades, evolución profesional y facilitar oportunidades de colaboración o empleo.</p>
          <p class="mb-0"><strong>Tecnologías:</strong> HTML, CSS, JS, PHP.</p>
        </div>
        <div class="ms-auto text-end">
          <a href="#" class="btn btn-outline-light me-2" role="button" aria-disabled="true" data-bs-toggle="tooltip" data-bs-placement="top" title="Proyecto no alojado (sin hosting)">Ver proyecto</a>
          <a href="#" class="btn btn-primary" target="_blank" rel="noopener">Ver código</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal: Music Dashboard -->
<div class="modal" id="modalMusicDashboard" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-fullscreen-sm-down">
    <div class="modal-content" style="background:#0f1113; border-radius:12px; overflow:hidden;">
      <h4 class="mb-1 text-center fw-bold">Music dashboard</h4>
              <button type="button"
              class="btn-close btn-close-white position-absolute"
              data-bs-dismiss="modal"
              aria-label="Cerrar"
              style="top:5px; right:15px; z-index:10;">
      </button>
      <div class="modal-body p-0">

        <!-- Carousel -->
        <div id="carouselMusicDashboard" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-img-wrapper">
              <img src="assets/img/proyectos/music-dashboard/preview1.png" class="d-block w-100" alt="Music Dashboard - 1">
              </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-img-wrapper">
              <img src="assets/img/proyectos/music-dashboard/preview2.png" class="d-block w-100" alt="Music Dashboard - 2">
              </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-img-wrapper">
              <img src="assets/img/proyectos/music-dashboard/preview3.png" class="d-block w-100" alt="Music Dashboard - 3">
              </div>
            </div>
          </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#carouselMusicDashboard" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselMusicDashboard" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
          </button>
        </div>

      </div>

      <div class="modal-footer d-flex flex-column flex-md-row align-items-start gap-3 justify-content-between" style="background:#0b0d0f; border-top: 1px solid rgba(255,255,255,0.03);">
        <div>
          
          <p class="mb-0 text-fino">Este proyecto se desarrolló con la finalidad de gestionar y compartir mis ediciones musicales con mi comunidad, facilitando la organización y reproducción del contenido.
          Surgió ante la necesidad de centralizar mis ediciones y ofrecer un espacio donde los usuarios pudieran interactuar y escucharlas fácilmente.
          La solución fue crear un panel de gestión musical que permite administrar contenido y reproducir ediciones de forma directa.
          Actualmente se encuentra en desarrollo, y su objetivo es mejorar la interacción con la comunidad y consolidar una plataforma musical propia.</p>
          <p class="mb-0"><strong>Tecnologías:</strong> PHP, MySQL, AJAX, Bootstrap.</p>
        </div>

        <div class="ms-auto text-end">
          <!-- Si no tienes URL activa deja el href="#" y el atributo disabled -->
          <a href="#" class="btn btn-outline-light me-2" role="button" aria-disabled="true" data-bs-toggle="tooltip" data-bs-placement="top" title="Proyecto no alojado (sin hosting)">Ver proyecto</a>
          <a href="#" class="btn btn-primary" target="_blank" rel="noopener">Ver código</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal: Sistema de Accesos -->
<div class="modal" id="modalAccesos" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-fullscreen-sm-down">
    <div class="modal-content" style="background:#0f1113; border-radius:12px; overflow:hidden;">
       <h4 class="mb-1 text-center fw-bold">Sistema de accesos</h4>
              <button type="button"
              class="btn-close btn-close-white position-absolute"
              data-bs-dismiss="modal"
              aria-label="Cerrar"
              style="top:5px; right:15px; z-index:10;">
      </button>
      <div class="modal-body p-0">
        <div id="carouselAccesos" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-img-wrapper">
              <img src="assets/img/proyectos/accesos/preview1.png" class="d-block w-100" alt="Accesos - 1">
              </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-img-wrapper">
              <img src="assets/img/proyectos/accesos/preview2.png" class="d-block w-100" alt="Accesos - 2">
              </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-img-wrapper">
              <img src="assets/img/proyectos/accesos/preview3.png" class="d-block w-100" alt="Accesos - 3">
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselAccesos" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselAccesos" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
          </button>
        </div>
      </div>

      <div class="modal-footer d-flex flex-column flex-md-row align-items-start gap-3 justify-content-between" style="background:#0b0d0f; border-top: 1px solid rgba(255,255,255,0.03);">
        <div>
         
          <p class="mb-0 text-fino">Este proyecto se desarrolló como segunda opción de proyecto universitario, pensado para una escuela de la comunidad.
           Surgió ante la necesidad de registrar y controlar las entradas y salidas de alumnos y docentes de forma organizada.
           La solución fue crear un sistema de control de accesos que permite llevar un registro claro y confiable de los movimientos diarios.
           Su objetivo es mejorar la seguridad y el control administrativo, facilitando la gestión de accesos dentro de la institución educativa.</p>
          <p class="mb-0"><strong>Tecnologías:</strong> PHP, MySQL, CSS, HTML, JavaScript.</p>
        </div>
        <div class="ms-auto text-end">
          <a href="#" class="btn btn-outline-light me-2" role="button" aria-disabled="true" data-bs-toggle="tooltip" data-bs-placement="top" title="Proyecto no alojado (sin hosting)">Ver proyecto</a>
          <a href="#" class="btn btn-primary" target="_blank" rel="noopener">Ver código</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal: App de Medición -->
<div class="modal" id="modalAppMedicion" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-fullscreen-sm-down">
    <div class="modal-content" style="background:#0f1113; border-radius:12px; overflow:hidden;">
      <h4 class="mb-1 text-center fw-bold">App de control de tiempos</h4>
              <button type="button"
              class="btn-close btn-close-white position-absolute"
              data-bs-dismiss="modal"
              aria-label="Cerrar"
              style="top:5px; right:15px; z-index:10;">
      </button>
      <div class="modal-body p-0">
        <div id="carouselAppMedicion" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="carousel-img-wrapper">
              <img src="assets/img/proyectos/App-Medicion/preview1.jpg" class="d-block w-100" alt="App Medicion - 1">
              </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-img-wrapper">
              <img src="assets/img/proyectos/App-Medicion/preview2.jpg" class="d-block w-100" alt="App Medicion - 2">
              </div>
            </div>
            <div class="carousel-item">
              <div class="carousel-img-wrapper">
              <img src="assets/img/proyectos/App-Medicion/preview3.jpg" class="d-block w-100" alt="App Medicion - 3">
              </div>
            </div>
            <div class="carousel-item">
              <div class="carousel-img-wrapper">
              <img src="assets/img/proyectos/App-Medicion/preview4.jpg" class="d-block w-100" alt="App Medicion - 4">
              </div>
            </div>
            <div class="carousel-item">
              <div class="carousel-img-wrapper">
              <img src="assets/img/proyectos/App-Medicion/preview5.jpg" class="d-block w-100" alt="App Medicion - 5">
              </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-img-wrapper">
               <img src="assets/img/proyectos/App-Medicion/preview6.jpg" class="d-block w-100" alt="App Medicion - 6">
               </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-img-wrapper">
               <img src="assets/img/proyectos/App-Medicion/preview7.jpg" class="d-block w-100" alt="App-Medicion - 7">
               </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-img-wrapper">
               <img src="assets/img/proyectos/App-Medicion/preview8.jpg" class="d-block w-100" alt="App Medicion - 8">
               </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-img-wrapper">
                <img src="assets/img/proyectos/App-Medicion/preview9.png" class="d-block w-100" alt="App Medicion - 9">
                </div>
            </div>
         </div> 
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselAppMedicion" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselAppMedicion" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
          </button>
        </div>
      </div>

      <div class="modal-footer d-flex flex-column flex-md-row align-items-start gap-3 justify-content-between" style="background:#0b0d0f; border-top: 1px solid rgba(255,255,255,0.03);">
        <div>
          
          <p class="mb-0 text-fino">Este proyecto se desarrolló con el objetivo de mejorar los procesos de producción y optimizar los tiempos de trabajo asignados a cada colaborador.
         Surgió ante la falta de coherencia en los tiempos estimados de los procesos, lo que generaba desfases de horas o tiempos ociosos durante la operación.
         La solución fue crear una aplicación de control y medición de tiempos que registra el tiempo real de cada proceso, permite definir pasos de trabajo y documentar los recursos utilizados.
         Su objetivo es analizar el desempeño de los colaboradores, optimizar la planeación de tiempos y apoyar la toma de decisiones mediante reportes exportables.</p>
          <p class="mb-0"><strong>Tecnologías:</strong> Node.js, SQLite, JavaScript.</p>
        </div>
        <div class="ms-auto text-end">
          <a href="#" class="btn btn-outline-light me-2" role="button" aria-disabled="true" data-bs-toggle="tooltip" data-bs-placement="top" title="Proyecto no alojado (sin hosting)">Ver proyecto</a>
          <a href="#" class="btn btn-primary" target="_blank" rel="noopener">Ver código</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal: Mejora de Imágenes (AI) -->
<div class="modal" id="modalMejoraImagenes" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-fullscreen-sm-down">
    <div class="modal-content" style="background:#0f1113; border-radius:12px; overflow:hidden;">
      <h4 class="mb-1 text-center fw-bold">Sistema para mejorar imágenes</h4>
              <button type="button"
              class="btn-close btn-close-white position-absolute"
              data-bs-dismiss="modal"
              aria-label="Cerrar"
              style="top:5px; right:15px; z-index:10;">
      </button>
      <div class="modal-body p-0">
        <div id="carouselMejoraImagenes" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-img-wrapper">
              <img src="assets/img/proyectos/Mejora-Imagenes/preview1.png" class="d-block w-100" alt="Mejora - 1">
              </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-img-wrapper">
              <img src="assets/img/proyectos/Mejora-Imagenes/preview2.png" class="d-block w-100" alt="Mejora - 2">
              </div>
            </div>
              <div class="carousel-item">
                <div class="carousel-img-wrapper">
              <img src="assets/img/proyectos/Mejora-Imagenes/preview3.png" class="d-block w-100" alt="Mejora - 3">
              </div>
            </div>
              <div class="carousel-item">
                <div class="carousel-img-wrapper">
              <img src="assets/img/proyectos/Mejora-Imagenes/preview4.png" class="d-block w-100" alt="Mejora - 4">
              </div>
            </div>
              <div class="carousel-item">
                <div class="carousel-img-wrapper">
              <img src="assets/img/proyectos/Mejora-Imagenes/preview5.png" class="d-block w-100" alt="Mejora - 5">
              </div>
            </div>
              <div class="carousel-item">
                <div class="carousel-img-wrapper">
              <img src="assets/img/proyectos/Mejora-Imagenes/preview6.png" class="d-block w-100" alt="Mejora - 6">
              </div>
            </div>
              <div class="carousel-item">
                <div class="carousel-img-wrapper">
              <img src="assets/img/proyectos/Mejora-Imagenes/preview7.png" class="d-block w-100" alt="Mejora - 7">
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselMejoraImagenes" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselMejoraImagenes" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
          </button>
        </div>
      </div>

      <div class="modal-footer d-flex flex-column flex-md-row align-items-start gap-3 justify-content-between" style="background:#0b0d0f; border-top: 1px solid rgba(255,255,255,0.03);">
        <div>
          
          <p class="mb-0 text-fino">Este proyecto se desarrolló con el objetivo de mejorar y transformar imágenes mediante inteligencia artificial, aplicando mis conocimientos en desarrollo de software para crear una solución propia.
          Surgió ante la necesidad de contar con una herramienta personalizada para mejorar la calidad visual y vectorizar imágenes de forma sencilla.
          La solución fue crear un sistema de IA funcional que permite aplicar mejoras a las imágenes y exportarlas en múltiples formatos.
          Actualmente se encuentra en desarrollo, y su objetivo es ampliar las opciones de edición, optimizar los resultados y ofrecer una herramienta completa de mejora de imágenes.</p>
          <p class="mb-0"><strong>Tecnologías:</strong> Python con Flask, OpenCV-contrib, Pillow (PIL) y NumPy, HTML, CSS, JavaScript.</p>
        </div>
        <div class="ms-auto text-end">
          <a href="#" class="btn btn-outline-light me-2" role="button" aria-disabled="true" data-bs-toggle="tooltip" data-bs-placement="top" title="Proyecto no alojado (sin hosting)">Ver proyecto</a>
          <a href="#" class="btn btn-primary" target="_blank" rel="noopener">Ver código</a>
        </div>
      </div>
    </div>
  </div>
</div>


    <!-- Contact -->
    <section id="contact" class="section" style="padding-top:50px;">
  <div class="container">
    <h2 class="section-title">CONTACTO</h2>
    <p class="section-subtitle">¿Te interesa colaborar en un proyecto o conocer mis servicios? Con gusto podemos ponernos en contacto.</p>
    <div class="contact-wrap">
      <form id="contactForm" action="contact.php" method="POST" class="row g-3 needs-validation" novalidate>
        <div class="col-12 col-md-6">
          <label for="name" class="form-label">Nombre</label>
          <input type="text" name="name" id="name" class="form-control" autocomplete="off" required>
        </div>
        <div class="col-12 col-md-6">
          <label for="email" class="form-label">Correo</label>
          <input type="email" name="email" id="email" class="form-control" autocomplete="off">
        </div>
        <div class="col-12">
          <label for="message" class="form-label">Mensaje</label>
          <textarea name="message" id="message" rows="5" class="form-control" required></textarea>
        </div>

        <div class="col-12">
        <div class="g-recaptcha" data-sitekey="6Ld4BjQsAAAAAKd4WnzaMjTgu9tNHggOn5ZTNs8H"></div>
        </div>

        <div class="col-12 text-end btn-submit-wrapper">
        <button type="submit" id="btnEnviar" class="btn btn-primary">
        <span class="btn-text">Enviar</span>
        <span class="spinner d-none"></span>
        </button>

        </div>
      </form>
      <div id="formResponse" class="mt-3"></div>
    </div>
  </div>
</section>

  </main>

  <?php include 'includes/footer.php'; ?>
</div>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <div id="blurOverlay" class="blur-overlay"></div>
  <script src="assets/js/main.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>
</html>
