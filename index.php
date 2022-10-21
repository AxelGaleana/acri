<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Acri | México</title>

    <meta name="keywords" content="Caremed HTML5 Responsive Template Medicine COVID-19 Corona Hospital"/>
    <meta name="description" content="Caremed - Hospital HTML5 Responsive Template">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.png">


    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/plugins/datepicker.min.css">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" href="assets/vendor/fontawesome/css/all.min.css">

    <style>
        #book {
            opacity: 0;
            z-index: 99;
            transition: 500ms ease-in-out;
        }

        #whatsapp {
            opacity: 0;
            z-index: 99;
            transition: 500ms ease-in-out;
        }

    </style>
</head>
<body>
<!------------------------------------------------
loading overlay - start
------------------------------------------------>
<div class="loading-overlay">
    <div class="bounce-loader">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>
<!------------------------------------------------
loading overlay - end
------------------------------------------------>
<div class="page-wrapper">
    <!------------------------------------------------
    navigation - start
    ------------------------------------------------>
    <div class="fixed-bottom text-right mr-5 mb-12" style="height:100px;width:70px;">
        <!--
        <div class="" id="book" style="margin-right: -8px">
            <button onclick="showApointer()" style="border: transparent;background: transparent;color: #ff594d;cursor: pointer"><img
                    src="./assets/images/icons/agenda-icon.png" width="52" height="52"></button>
        </div>
        -->
        <br>
        <!--<div class="" id="whatsapp">-->
        <div class="" id="book" style="margin-right: -8px">
            <a href="https://api.whatsapp.com/send?phone=524427200627&text=Hola,%20quiero%20una%20cita%20de%20la%20clinica%20Acri%20México"
              >
                <i class="fab fa-whatsapp fa-3x" style="color:green"></i>
            </a>
        </div>
    </div>
    <header class="header">
        <div class="header-top">
            <div class="container-fluid">
                <div class="header-left">
                    <ul class="top-menu top-link-menu">
                        <li><a href="tel:#" class="link-phone"><i class="fas fa-phone"></i>442-720-0627</a></li>
                        <li><a href="mailto:contacto@acrimexico.com?subject=Agendar cita" class="link-email"><i class="fas fa-envelope-open"></i>contacto@acrimexico.com</a>
                        </li>
                    </ul>
                </div>
                <div class="header-right">
                    <ul class="top-menu">
                        <li><a href="#" class="social-link"><i class="fab fa-twitter"></i>Twitter</a></li>
                        <li><a href="#" class="social-link"><i class="fab fa-facebook"></i>Facebook</a></li>
                        <li><a href="#" class="social-link"><i class="fab fa-youtube"></i>Youtube</a></li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="header-middle sticky-header">
            <div class="header-left">
                <a href="index.php" class="logo">
                    <br><br>
                    <h1 class="mb-0"><img src="assets/images/logo.png" alt="Caremed Logo" width="185" height="48"></h1>
                </a>
            </div>
            <div class="header-right">
                <button class="mobile-menu-toggler">
                    <span class="sr-only">Toggle mobile menu</span>
                    <i class="fal fa-bars"></i>
                </button>
                <nav class="main-nav ls-20">
                    <ul class="menu sf-arrows">
                        <li class="megamenu-container active">
                            <a href="index.php" class="sf-with-ul">Inicio<!--<i class="fas fa-caret-down">--></i></a>

                        </li>
                        <li>
                            <a href="blogs/instalaciones.html" class="sf-with-ul">Quienes Somos<!--<i class="fas fa-caret-down">--></i></a>
                            <!--<ul class="sub-menu">
                                <li><a href="about.html"><i class="fas fa-angle-right"></i>Acerca de nosotros</a></li>
                                <li class="li-with-arrow">
                                    <a href="doctores.html"><i class="fas fa-angle-right"></i>Blog<i
                                            class="far fa-caret-right"></i></a>
                                </li>
                            </ul>-->
                        </li>
                        <li>
                            <a href="blog-masonry.html">Blog</a>
                        </li>
                        <li>
                            <a href="treatments.html">Tratamientos</a>
                        </li>
                        <li>
                            <a href="shop.html">Tienda</a>
                        </li>
                    </ul><!-- End .menu -->
                </nav><!-- End .main-nav -->
                <div class="header-search">
                    <a href="#" class="search-toggle" role="button"><i class="fas fa-search"></i></a>
                    <form action="#" class="header-search-wrapper">
                        <label for="q" class="sr-only">Search</label>
                        <input type="search" class="form-control" name="q" id="q" placeholder="Search in..."
                               required="">
                        <button type="submit" class="btn-search"><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <a onclick="showApointer()" class="btn btn-sm btn-primary-color ls-0">
                    <span style="color:white">Agendar Una Cita</span>
                </a>
                <!----
                <a href="appointment-step1.html" class="icon-alt"><i class="fal fa-notes-medical"></i></a>-->
                <!--<a href="login.html" class="btn btn-sm btn-secondary-color ls-0 btn-login">
                    <span>Sign in</span>
                </a>-->
                <a onclick="showApointer()" style="color:#dc3545" class="icon-alt"><i class="far fa-calendar-alt" title="Agendar Una Cita"></i></a>
            </div>
        </div>
    </header>
    <!------------------------------------------------
    navigation - end
    ------------------------------------------------>
    <main class="main">
        <!------------------------------------------------
        hero slider - start
        ------------------------------------------------>
        <div class="intro-slider intro-slider-4 owl-carousel owl-theme owl-nav-inside bg-gradient owl-light slide-animate mb-0"
             data-toggle="owl" data-owl-options='{
                "dots": false,
                "nav": false,
                "touchDrag": false,
                "mouseDrag": false,
                "responsive": {
                    "1200": {
                        "nav": true,
                    },
                }
            }'>
            <!--
                background image is added through css and can be modified in the _sections.scss file
                the image is added to the .bg-section-19 class.
            -->
            <div class="banner intro-slide intro-slide-2 bg-section">
            <div style="position: fixed; top: 1;z-index: -1;">
                <video id="video" autoplay muted loop  style="width:100%; height:100%">
                <source src="assets/images/demos/demo-4/slide/tunel_carpiano.webm" type="video/mp4" />
                </video>
            </div>
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-6 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                                <br>
                                <br>
                                <br>
                                <br>
                                <div class="banner-content">
                                    <h2 class="banner-title" style="color:white;">
                                        Que nada detenga tu potencial…
                                    </h2>
                                    <p class="banner-info" style="color:white;">
                                        El Síndrome del túnel carpiano, el dolor de espalda baja, y el estrés son algunos de
                                        los principales problemas de salud más frecuentes en la vida laboral.
                                    </p>
                                    <div class="banner-actions">
                                        <a onclick="showApointer()" class="btn btn-secondary-color">
                                            <span style="color:white">Agendar Una Cita</span>
                                        </a>
                                        <!--
                                        <a href="appointment-step1.html" class="btn btn-secondary-color">
                                            <span>Agendar Una Cita</span>
                                        </a>-->
                                        <a href="how-it-works.html" class="btn">
                                            <span>Leer mas</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 d-lg-inline-flex justify-content-lg-end">

                                <!--
                                                                <form class="book-form book-form-4 w-100">
                                                                    <h4 class="sub-title ls-n-20 text-center">Agenda Una Cita</h4>
                                                                    <div class="input-group input-light">
                                                                        <h6 class="input-title">Nombre</h6>
                                                                        <input type="text" class="form-control" placeholder="Nombre completo">
                                                                    </div>
                                                                    <div class="input-group input-light">
                                                                        <h6 class="input-title">Email</h6>
                                                                        <input type="email" class="form-control" placeholder="contacto@acrimexico.com">
                                                                    </div>
                                                                    <div class="input-group input-light">
                                                                        <h6 class="input-title">Department</h6>
                                                                        <div class="form-control select-control">Please select<i class="far fa-angle-down"></i></div>
                                                                        <ul class="option-menu" id="option_menu_1">
                                                                            <li class="option-list"><span class="option"><i class="far fa-caret-right"></i>Most Recent</span></li>
                                                                            <li class="option-list"><span class="option"><i class="far fa-caret-right"></i>Popular</span></li>
                                                                            <li class="option-list"><span class="option"><i class="far fa-caret-right"></i>Oldest</span></li>
                                                                            <li class="option-list"><span class="option"><i class="far fa-caret-right"></i>All times</span></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="input-group input-light input-calendar-light">
                                                                        <h6 class="input-title">Date</h6>
                                                                        <input type="text" id="form-calendar-light" class="form-control" placeholder="12/21/2020">
                                                                        <i class="far fa-calendar-alt"></i>
                                                                    </div>
                                                                    <div class="input-group input-light">
                                                                        <h6 class="input-title">Time</h6>
                                                                        <div id="select_4" class="form-control select-control opacity-1">
                                                                            <div class="check-circle"><i class="fas fa-check"></i></div>
                                                                            <div class="primary-color">4:00<sup>PM</sup></div> Available
                                                                            <i class="far fa-angle-down"></i>
                                                                        </div>
                                                                        <ul class="option-menu" id="option_menu_4">
                                                                            <li class="option-list"><span class="option"><i class="far fa-caret-right"></i>5.00<sup>PM</sup></span></li>
                                                                            <li class="option-list"><span class="option"><i class="far fa-caret-right"></i>6.00<sup>PM</sup></span></li>
                                                                            <li class="option-list"><span class="option"><i class="far fa-caret-right"></i>7.00<sup>PM</sup></span></li>
                                                                            <li class="option-list"><span class="option"><i class="far fa-caret-right"></i>8.00<sup>PM</sup></span></li>
                                                                        </ul>
                                                                    </div>
                                                                    <button type="submit" class="btn btn-secondary-color btn-form">
                                                                        <span>Agenda Una Cita</span>
                                                                    </button>
                                                                </form>
                                                                -->
                                                                <!--<iframe id="ytplayer" type="text/html" width="135%" height="200%" src="assets/images/demos/demo-4/slide/productionID_4520181-converted.mp4?playlist=w9bcNGcAK38&amp;loop=1&amp;autoplay=1&amp;controls=0&amp;showinfo=0&amp;mute=1&amp;disablekb=1&amp;modestbranding=1" frameborder="0" allowfullscreen="">

                                                                </iframe>-->
                                                                <!--<video autoplay muted loop width="500" height="633">
                                                                    <source src="assets/images/demos/demo-4/slide/productionID_4520181-converted.mp4" type="video/mp4" />
                                                                </video>-->

                            </div>
                        </div>
                    </div>
            </div>
            <!--
                background image is added through css and can be modified in the _sections.scss file
                the image is added to the .bg-section-20 class.
            -->
            <div class="banner intro-slide intro-slide-2 bg-section "
                 style="background: url('assets/images/demos/demo-4/slide/bg-2.jpg'); background-size: cover">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-6 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                            <div class="banner-content">
                                <h2 class="banner-title">
                                    Que nada te detenga…
                                </h2>
                                <p class="banner-info">
                                    Que nada te detenga de hacer o estar con los que más amas… disfruta al máximo tu
                                    vida.
                                </p>
                                <div class="banner-actions">
                                    <a href="appointment-step1.html" class="btn btn-secondary-color">
                                        <span>Agendar Una Cita</span>
                                    </a>
                                    <a href="how-it-works.html" class="btn">
                                        <span>Leer mas</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 d-lg-inline-flex justify-content-lg-end">

                        </div>
                    </div>
                </div>
                <div class="foreground-img">
                    <img src="assets/images/demos/demo-4/slide/slide-2-fore.png" alt="Banner-slide">
                </div>
            </div>
            <div class="banner intro-slide intro-slide-2 bg-section ">
            <div style="position: fixed; top: 1;z-index: -1;">
                <video id="video" autoplay muted loop  style="width:100%; height:100%">
                <source src="assets/images/demos/demo-4/slide/Pasos.webm" type="video/mp4" />
                </video>
            </div>
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-6 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                            <div class="banner-content">
                            <br><br><br><br>
                                <h2 class="banner-title" style="color:white;">
                                    Contigo en cada paso...
                                </h2>
                                <p class="banner-info" style="color:white;">
                                    Te ayudamos a caminar sin dolor, nuestra misión es contribuir a que más personas
                                    caminen sin dolor…
                                </p>
                                <div class="banner-actions">
                                    <a href="appointment-step1.html" class="btn btn-secondary-color">
                                        <span>Agendar Una Cita</span>
                                    </a>
                                    <a href="how-it-works.html" class="btn">
                                        <span>Leer mas</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 d-lg-inline-flex justify-content-lg-end">

                        </div>
                    </div>
                </div>
                <div class="foreground-img">
                    <img src="assets/images/demos/demo-4/slide/slide-2-fore.png" alt="Banner-slide">
                </div>
            </div>
            <div class="banner intro-slide intro-slide-2 bg-section ">
            <div style="position: fixed; top: 1;z-index: -1;">
                <video id="video" autoplay muted loop  style="width:100%; height:100%">
                <source src="assets/images/demos/demo-4/slide/Altorendimiento.webm" type="video/mp4" />
                </video>
            </div>
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-6 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                            <br>
                            <br>
                            <br>
                            <br>
                            <div class="banner-content">
                                <h2 class="banner-title">
                                    Se imparable…
                                </h2>
                                <p class="banner-info">
                                    Se un atleta integral de alto rendimiento… lleva tu cuerpo a su máximo potencial,
                                    corregir tu postura y acelera tu recuperación.
                                </p>
                                <div class="banner-actions">
                                    <a href="appointment-step1.html" class="btn btn-secondary-color">
                                        <span>Agendar Una Cita</span>
                                    </a>
                                    <a href="how-it-works.html" class="btn">
                                        <span>Leer mas</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 d-lg-inline-flex justify-content-lg-end">

                        </div>
                    </div>
                </div>
                <div class="foreground-img">
                    <img src="assets/images/demos/demo-4/slide/slide-2-fore.png" alt="Banner-slide">
                </div>
            </div>
            <!--<div class="banner intro-slide intro-slide-2 bg-section "
                 style="background: url('assets/images/demos/demo-4/slide/'); background-size: cover">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-6 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                            <div class="banner-content">
                                <h2 class="banner-title">
                                    Por que soy imparable…
                                </h2>
                                <p class="banner-info">
                                    Se un atleta integral de alto rendimiento… lleva tu cuerpo a su máximo potencial,
                                    corregir tu postura y acelera tu recuperación.
                                </p>
                                <div class="banner-actions">
                                    <a href="appointment-step1.html" class="btn btn-secondary-color">
                                        <span>Agendar Una Cita</span>
                                    </a>
                                    <a href="how-it-works.html" class="btn">
                                        <span>Leer mas</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 d-lg-inline-flex justify-content-lg-end">

                        </div>
                    </div>
                </div>
                <div class="foreground-img">
                    <img src="assets/images/demos/demo-4/slide/slide-2-fore.png" alt="Banner-slide">
                </div>
            </div>-->
            <div class="banner intro-slide intro-slide-2 bg-section "
                 style="background: url('assets/images/demos/demo-4/slide/COVID.jpg'); background-size: cover">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-6 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1">
                            <div class="banner-content">
                                <h2 class="banner-title">
                                    Nos cuidamos todos…
                                </h2>
                                <p class="banner-info">
                                    En Clínica ACRI hemos implementado los mejores protocolos de seguridad para
                                    garantizar que cada paciente recibe el trato que necesita con las máximas garantías
                                    de higiene y prevención. 

                                </p>
                                <div class="banner-actions">
                                    <a href="appointment-step1.html" class="btn btn-secondary-color">
                                        <span>Agendar Una Cita</span>
                                    </a>
                                    <a href="how-it-works.html" class="btn">
                                        <span>Leer mas</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 offset-lg-0 col-md-8 offset-md-2 col-10 offset-1 d-lg-inline-flex justify-content-lg-end">

                        </div>
                    </div>
                </div>
                <div class="foreground-img">
                    <img src="assets/images/demos/demo-4/slide/slide-2-fore.png" alt="Banner-slide">
                </div>
            </div>
        </div>
        <!------------------------------------------------
        hero slider - end
        ------------------------------------------------>
        <!------------------------------------------------
        schedule section - start
        ------------------------------------------------>
        <div class="bg-primary-color schedule-section">
            <div class="container">
                <div class="row position-relative">
                    <div class="col-lg-5 offset-lg-0 col-md-8 col-sm-8 offset-sm-2 col-10 offset-1">
                        <div class="widget">
                            <h4 class="widget-title"><i class="far fa-clock"></i>Horario de trabajo</h4>
                            <p class="widget-desc">
                                Te invitamos a revisar nuestro horario laboral
                            </p>
                            <div class="widget-hours">
                                <span>Lunes — Viernes</span>
                                <span class="time">9:30<sup>AM</sup> — 7:30<sup>PM</sup></span>
                            </div>
                            <div class="widget-hours">
                                <span>Sábados</span>
                                <span class="time">9:30<sup>AM</sup> — 1:30<sup>PM</sup></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1 col-md-8 col-sm-8 offset-sm-2 col-10 offset-1">
                        <div class="widget">
                            <h4 class="widget-title"><i class="far fa-heart-rate"></i>
                                Disponibilidad de
                            </h4>
                            <h4 class="widget-title" style="margin-top: -20px; margin-left: 55px">
                                Especialistas
                            </h4>
                            <p class="widget-desc">
                                Agenda un espacio con nuestros especialistas.
                                Contamos con un equipo multifuncional de expertos.
                            </p>
                            <a href="doctores.html" class="btn btn-sm btn-secondary-color btn-secondary-color-1 ls-0">
                                <span>Conoce a nuestros especialistas certificados</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!------------------------------------------------
        schedule section - end
        ------------------------------------------------>
        <!------------------------------------------------
        department preview section - start
        ------------------------------------------------>
        <div class="container department-preview-section">
            <div class="row">
                <div class="col-10 offset-1 col-sm-8 offset-sm-2 col-lg-12 offset-lg-0">
                    <h2 class="ls-n-20 text-center section-heading">Brindamos atención de calidad para todas las etapas
                        de vida y estilos de vida. .</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-10 offset-1 col-sm-8 offset-sm-2 col-lg-4 offset-lg-0">
                    <div class="icon-box hover-border text-center">
                        <a href="blogs/instalaciones.html">
                            <figure>
                                <img src="assets/images/icons/foot-icon.png" alt="foot-icon">
                            </figure>
                        </a>
                        <div class="icon-box-content">
                            <a href="blogs/instalaciones.html"><h4 class="box-title">Piédica</h4></a>
                            <p class="box-desc">Nuestra tecnología nos permite analizar el ciclo de marcha de nuestros
                                pacientes, detectar y corregir el mal funcionamiento del pie, corrigiendo la pisada por
                                medio de plantillas ortopédicas personalizadas
                            </p>
                            <div class="btn-link">
                                <a href="blogs/instalaciones.html">Leer mas</a><i class="far fa-caret-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-10 offset-1 col-sm-8 offset-sm-2 col-lg-4 offset-lg-0">
                    <div class="icon-box hover-border text-center">
                        <a href="blogs/instalaciones.html">
                            <figure>
                                <img src="assets/images/icons/hand-icon.png" alt="foot-icon">
                            </figure>
                        </a>
                        <div class="icon-box-content">
                            <a href="blogs/instalaciones.html"><h4 class="box-title">Hidroterapia</h4></a>
                            <p class="box-desc">Terapia física de rehabilitación integral para diversas afecciones de
                                salud, desde casos de artritis severa hasta terapias post quirúrgicas de rodilla o
                                cadera.
                                .</p>
                            <div class="btn-link">
                                <a href="blogs/instalaciones.html">Leer mas</a><i class="far fa-caret-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-10 offset-1 col-sm-8 offset-sm-2 col-lg-4 offset-lg-0">
                    <div class="icon-box hover-border text-center">
                        <a href="blogs/instalaciones.html">
                            <figure>
                                <img src="assets/images/icons/xray-icon.png" alt="foot-icon">
                            </figure>
                        </a>
                        <div class="icon-box-content">
                            <a href="blogs/instalaciones.html"><h4 class="box-title">Radiología
                            </h4></a>
                            <p class="box-desc">Como parte de nuestro proceso integral, contamos con tecnología de rayos
                                X, que nos permiten diagnosticar lesiones  
                            </p>
                            <div class="btn-link">
                                <a href="blogs/instalaciones.html">Leer mas</a><i class="far fa-caret-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-10 offset-1 col-sm-8 offset-sm-2 col-lg-4 offset-lg-0">
                    <div class="icon-box hover-border text-center">
                        <a href="blogs/instalaciones.html">
                            <figure>
                                <img src="assets/images/icons/quiro-icon.png" alt="foot-icon">
                            </figure>
                        </a>
                        <div class="icon-box-content">
                            <a href="blogs/instalaciones.html"><h4 class="box-title">Quiropráctica</h4></a>
                            <p class="box-desc">La quiropráctica es una profesión que se encarga de diagnosticar, tratar
                                y prevenir alteraciones del sistema músculo-esquelético, y de los desórdenes que puedan
                                provocar en la función del sistema nervioso y la salud. Pone especial énfasis en la
                                relación del sistema nervioso en relación con los demás sistemas respecto al equilibrio
                                general del cuerpo. El tratamiento emplea técnicas manuales, con ajustes manuales
                                específicos.
                            </p>
                            <div class="btn-link">
                                <a href="blogs/instalaciones.html">Leer mas</a><i class="far fa-caret-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-10 offset-1 col-sm-8 offset-sm-2 col-lg-4 offset-lg-0">
                    <div class="icon-box hover-border text-center">
                        <a href="blogs/instalaciones.html">
                            <figure>
                                <img src="assets/images/icons/nutri-icon.png" alt="foot-icon">
                            </figure>
                        </a>
                        <div class="icon-box-content">
                            <a href="shop.html"><h4 class="box-title">Nutrición Especializada</h4></a>
                            <p class="box-desc">Complementa tu alimentación con las proteinas, carbohidratos, grasas, vitaminas y minerales claves para ayudar a mantener tu cuerpo en óptimas condiciones. Conoce las grandes marcas que distribuimos: <b>Metagenics y Endobalanz CBD</b>
                                .</p>
                            <div class="btn-link">
                                <a href="shop.html">Leer mas</a><i class="far fa-caret-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-10 offset-1 col-sm-8 offset-sm-2 col-lg-4 offset-lg-0">
                    <div class="icon-box hover-border text-center">
                        <a href="blogs/instalaciones.html">
                            <figure>
                                <img src="assets/images/icons/fistio-icon.png" alt="foot-icon">
                            </figure>
                        </a>
                        <div class="icon-box-content">
                            <a href="blogs/instalaciones.html"><h4 class="box-title">Fisioterapia</h4></a>
                            <p class="box-desc">La rehabilitación física es la disciplina que se encarga de sanar y
                                recuperar al máximo, todas las capacidades motrices de un individuo que ha sido afectado
                                por una lesión o enfermedad. Todo esto con el objetivo de que éste pueda reintegrarse a
                                sus actividades rutinarias y pueda ser autónomo.
                            </p>
                            <div class="btn-link">
                                <a href="blogs/instalaciones.html">Leer mas</a><i class="far fa-caret-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!------------------------------------------------
        department preview section - end
        ------------------------------------------------>
        <!------------------------------------------------
        review section - start
        ------------------------------------------------>
        <!--
            background image is added through css and can be modified in the _sections.scss file
            the image is added to the .bg-section-11 class.
        -->
        <div class="review-bg-section bg-section type-section-margin-bottom"
             style="background-image: url('assets/images/baclgrounds/comentarios.jpg') ">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-lg-7 offset-lg-0 col-sm-8 offset-sm-2 col-10 offset-1">
                        <div class="banner-content">
                            <h2 class="banner-title">
                                Escucha lo que nuestros pacientes dicen
                            </h2>
                            <div class="review-carousel owl-carousel owl-simple" data-toggle="owl" data-owl-options='{
									"nav": false,
									"dots": false,
									"margin": 35,
									"responsive": {
										"768": {
											"nav": true
										}
									}
								}'>
                                <div class="card card-review review-carousel align-items-start">
                                    <div class="card-heading align-items-start">
                                        <figure>
                                            <img src="assets/images/avatar/avatar-6.png" class="avatar customer-avatar"
                                                 alt="Avatar" width="102" height="102">
                                            <div class="card-review-quote">
                                                <span>“</span>
                                            </div>
                                        </figure>
                                        <div class="review-info">
                                            <h4 class="review-author">Jessica Blake</h4>
                                            <span class="review-city">New York, NY</span>
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 100%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-content">
                                        <p class="review-desc ls-20">
                                            “This is a wonderful service for people who are curently
                                            without Medical Insurance. The doctor was very friendly and
                                            listened to my condition thoroughly with explaination to the
                                            treatment and appropriate prescription.”
                                        </p>
                                    </div>
                                </div>
                                <div class="card card-review review-carousel align-items-start">
                                    <div class="card-heading align-items-start">
                                        <figure>
                                            <img src="assets/images/avatar/avatar-7.png" class="avatar customer-avatar"
                                                 alt="Avatar" width="102" height="102">
                                            <img src="assets/images/demos/demo-1/icons/icon-quote.png"
                                                 class="quote-icon" alt="Icon-quote" width="55" height="55">
                                        </figure>
                                        <div class="review-info">
                                            <h4 class="review-author">Jessica Blake</h4>
                                            <span class="review-city">New York, NY</span>
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 100%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-content">
                                        <p class="review-desc ls-20">
                                            “This is a wonderful service for people who are curently
                                            without Medical Insurance. The doctor was very friendly and
                                            listened to my condition thoroughly with explaination to the
                                            treatment and appropriate prescription.”
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="banner-actions">
                                <a href="reviews.html" class="btn btn-secondary-color btn-md">
                                    <span>Read All Reviews</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-rating">
                    <div class="ratings-container">
                        <div class="ratings">
                            <div class="ratings-val" style="width: 100%;"></div>
                        </div>
                    </div>
                    <p class="card-info ls-0">
                        Mas de 20 años de experiencia nos respaldan…
                    </p>
                    <div class="btn-link">
                        <a href="reviews.html">Read reviews</a><i class="far fa-caret-right"></i>
                    </div>
                </div>

            </div>
            <div class="foreground-img">
                <img src="assets/images/demos/demo-3/banner/banner-big-fore.png" alt="Banner-slide">
            </div>
        </div>
        <!------------------------------------------------
        review section - end
        ------------------------------------------------>
        <!------------------------------------------------
        doctor preview section - start
        ------------------------------------------------>
        <div class="container doctor-preview-section">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12 col-sm-8 col-10">
                    <h2 class="ls-n-20 text-center section-heading">Conoce a nuestro equipo de especialistas
                        certificados</h2>
                </div>
            </div>

            <?php 
                $array_names = array(   
                                        "David Figueroa Espinosa", 
                                        "Luisa Cal y Mayor",
                                        "Magdalena Bárcenas R.",
                                        "Diana Espinosa",
                                        "Martha Laura Ramos",
                                        "Mayra Sánchez",
                                        "Saúl Luengas Ramos",
                                        "Susana Rosales",
                                        "Valeria Pineda"
                                    );
                $array_photo_names = array(   
                                        "David_Figueroa_Espinosa.jpg", 
                                        "Luisa_Cal_y_Mayor.jpg",
                                        "Magdalena_Barcenas.jpg",
                                        "Diana_Espinosa.jpg",
                                        "Martha_Laura_Ramos.jpg",
                                        "Mayra_Sanchez.jpg",
                                        "Saul_Luengas_Ramos.jpg",
                                        "Susana_Rosales.jpg",
                                        "Valeria_Pineda.jpg"
                                    );
                $array_title = array(
                                        "Radiólogo y Operador en Piedica", 
                                        "Terapeuta en Rehabilitación Acuática",
                                        "Administrativo Contable",
                                        "LTF Asistente Médico",
                                        "Gerente Administrativo",
                                        "LTF Terapeuta Física",
                                        "Marketing",
                                        "LTF Terapeuta Física",
                                        "LTF Terapeuta Física"
                                    );
                $array_desc = array(
                                "All of our doctors are highly <br> skilled and have a minimum of <br> 15 years experience in U.S top <br> healthcare institutions.", 
                                "All of our doctors are highly <br> skilled and have a minimum of <br> 15 years experience in U.S top <br> healthcare institutions.",
                                "All of our doctors are highly <br> skilled and have a minimum of <br> 15 years experience in U.S top <br> healthcare institutions.",
                                "All of our doctors are highly <br> skilled and have a minimum of <br> 15 years experience in U.S top <br> healthcare institutions.",
                                "All of our doctors are highly <br> skilled and have a minimum of <br> 15 years experience in U.S top <br> healthcare institutions.",
                                "All of our doctors are highly <br> skilled and have a minimum of <br> 15 years experience in U.S top <br> healthcare institutions.",
                                "All of our doctors are highly <br> skilled and have a minimum of <br> 15 years experience in U.S top <br> healthcare institutions.",
                                "All of our doctors are highly <br> skilled and have a minimum of <br> 15 years experience in U.S top <br> healthcare institutions.",
                                "All of our doctors are highly <br> skilled and have a minimum of <br> 15 years experience in U.S top <br> healthcare institutions.",
                                "All of our doctors are highly <br> skilled and have a minimum of <br> 15 years experience in U.S top <br> healthcare institutions."
                );
                $employee1 = rand(0, 8);
                $employee2 = rand(0, 8);
                while ($employee2 == $employee1)
                {
                    $employee2 = rand(0, 9);
                }
            ?> 

            <div class="row d-flex justify-content-center">


                <?php
                    echo "<div class=\"image-box doctor-card col-lg-4 col-sm-8 col-10\" style=\"margin-top:10vh\">
                        <br><br>
                        <figure>
                            <a href=\"doctors-detailed.html\">
                                <img src=\"assets/images/doctors/$array_photo_names[$employee1]\" class=\"w-75\" alt=\"Doctor\" width=\"370\"
                                    height=\"407\">
                                <div class=\"hover\">
                                    <div class=\"circle\">
                                        <i class=\"fas fa-link\"></i>
                                    </div>
                                </div>
                            </a>
                        </figure>
                        <div class=\"box-content\">
                            <h4 class=\"box-title\">$array_names[$employee1]
                            </h4>
                            <p class=\"doctor-cat\">$array_title[$employee1]
                            </p>
                            <p class=\"box-desc\">
                                $array_desc[$employee1]
                            </p>
                            <a href=\"javascript:;\" class=\"btn-toggle\"><i class=\"fas fa-plus-circle\"></i></a>
                        </div>
                    </div>";
                ?>
                <div class="image-box doctor-card col-lg-4 col-sm-8 col-10">

                    <figure>
                        <a href="doctors-detailed.html">
                            <img src="assets/images/doctors/dr-saul2.jpg" class="w-100" alt="Doctor" width="370"
                                 height="407">
                            <div class="hover">
                                <div class="circle">
                                    <i class="fas fa-link"></i>
                                </div>
                            </div>
                        </a>
                    </figure>
                    <div class="box-content">
                        <h4 class="box-title">Saul Luengas Castillo
                        </h4>
                        <p class="doctor-cat"> Dr. Quiropractico</p>
                        <p class="box-desc">
                            All of our doctors are highly <br> skilled and have a minimum of <br>
                            15 years experience in U.S top <br> healthcare institutions.
                        </p>
                        <a href="javascript:;" class="btn-toggle"><i class="fas fa-plus-circle"></i></a>
                    </div>
                </div>
                <?php
                    echo "<div class=\"image-box doctor-card col-lg-4 col-sm-8 col-10\" style=\"margin-top:10vh\">
                        <br><br>
                        <figure>
                            <a href=\"doctors-detailed.html\">
                                <img src=\"assets/images/doctors/$array_photo_names[$employee2]\" class=\"w-75\" alt=\"Doctor\" width=\"370\"
                                    height=\"407\">
                                <div class=\"hover\">
                                    <div class=\"circle\">
                                        <i class=\"fas fa-link\"></i>
                                    </div>
                                </div>
                            </a>
                        </figure>
                        <div class=\"box-content\">
                            <h4 class=\"box-title\">$array_names[$employee2]
                            </h4>
                            <p class=\"doctor-cat\">$array_title[$employee2]
                            </p>
                            <p class=\"box-desc\">
                                $array_desc[$employee2]
                            </p>
                            <a href=\"javascript:;\" class=\"btn-toggle\"><i class=\"fas fa-plus-circle\"></i></a>
                        </div>
                    </div>";
                ?>
            </div>

            <div class="row btn-row">
                <div class="col-lg-12 offset-lg-0 col-sm-8 offset-sm-2 col-10 offset-1">
                    <div class="banner-actions d-flex justify-content-center">
                        <a href="doctores.html" class="btn btn-action btn-secondary-color">
                            <span>Conoce a los especialistas</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!------------------------------------------------
        doctor preview section - end
        ------------------------------------------------>
        <!------------------------------------------------
        type section - start
        ------------------------------------------------>
        <!--
            background image is added through css and can be modified in the _sections.scss file
            the image is added to the .bg-section-8 class.
        -->
        <div class="type-section bg-section"
             style="background-image: url('assets/images/baclgrounds/tipo-clientes.jpg')">
            <div class="container-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 offset-lg-0 col-md-8 col-sm-8 offset-sm-2 col-10 offset-1">
                            <div class="banner-content">
                                <div class="banner-content-wrapper">
                                    <div class="banner-heading">
                                        <h2 class="banner-title">
                                            Nosotros brindamos tratamientos de calidad
                                            Para todos…
                                        </h2>
                                        <p class="banner-info">vive sin dolor...<br>
                                            #TuSaludEnEquilibrio

                                        </p>
                                    </div>
                                </div>
                                <div class="icon-boxes">
                                    <div class="icon-box-wrapper">
                                        <div class="icon-box icon-box-1 icon-box-big text-center">
                                            <figure class="bg-secondary-color">
                                                <i class="fal fa-user-circle"></i>
                                            </figure>
                                            <div class="icon-box-content">
                                                <h4 class="box-title">Ejecutivo
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="icon-box-wrapper">
                                        <div class="icon-box icon-box-1 icon-box-big text-center">
                                            <figure class="bg-primary-color">
                                                <i class="fal fa-users"></i>
                                            </figure>
                                            <div class="icon-box-content">
                                                <h4 class="box-title">Familiar
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="icon-box-wrapper">
                                        <div class="icon-box icon-box-1 icon-box-big text-center">
                                            <figure class="bg-third-color">
                                                <i class="fal fa-medal"></i>
                                            </figure>
                                            <div class="icon-box-content">
                                                <h4 class="box-title">Atletas de alto rendimiento
                                                </h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner-actions">
                                    <a href="blogs/instalaciones.html" class="btn btn-secondary-color btn-md">
                                        <span>Conoce más</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="foreground-img">
                <img src="assets/images/demos/demo-2/banner/banner-big-fore.png" alt="image">
            </div>
        </div>
        <!------------------------------------------------
        type section - end
        ------------------------------------------------>
        <!------------------------------------------------
        blog preview section - start
        ------------------------------------------------>
        <div class="container blog-preview-section">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-12 col-md-8 col-sm-8 col-10">
                    <h2 class="ls-n-20 text-center section-heading">Lee nuestros últimos artículos.</h2>
                </div>
            </div>
            <div class="blog-slider row d-flex justify-content-center">
                <div class="post-box col-lg-4 col-md-8 col-sm-8 col-10">
                    <figure>
                        <a href="blogs/dolor_pies.html">
                            <img src="assets/images/blog/ejemplo.jpg" alt="Blog" width="370" height="257">
                            <div class="hover">
                                <div class="circle">
                                    <i class="fas fa-link"></i>
                                </div>
                            </div>
                        </a>
                    </figure>
                    <div class="box-content">
                        <h4 class="box-title"><a href="blogs/dolor_pies.html">Me duelen los pies constantemente después de caminar…¿Es normal? </a></h4>
                        <p class="post-date"><a href="#">Dec 13, 2020</a><span class="text-divider">|</span><a
                                href="blogs/dolor_pies.html">2 Comments</a></p>
                        <p class="post-desc">
                            El dolor es una señal que manda nuestro cuerpo, emitida por el sistema nervioso y se percibe como una sensación desagradable. ...
                        </p>
                    </div>
                </div>
                <div class="post-box col-lg-4 col-md-8 col-sm-8 col-10">
                    <figure>
                        <a href="blogs/instalaciones.html">
                            <img src="assets/images/blog/Instalaciones2.jpg" alt="Blog" width="370" height="257">
                            <div class="hover">
                                <div class="circle">
                                    <i class="fas fa-link"></i>
                                </div>
                            </div>
                        </a>
                    </figure>
                    <div class="box-content">
                        <h4 class="box-title"><a href="blogs/instalaciones.html">Instalaciones</a></h4>
                        <p class="post-date"><a href="#">Dec 13, 2020</a><span class="text-divider">|</span><a
                                href="blogs/instalaciones.html">2 Comments</a></p>
                        <p class="post-desc">
                            Normalizar el dolor, no está bien. Nosotros te ayudamos a recuperar el equilibrio en tu cuerpo...
                        </p>
                    </div>
                </div>
                <div class="post-box col-lg-4 col-md-8 col-sm-8 col-10">
                    <figure>
                        <a href="blogs/dolor_espalda.html">
                            <img src="assets/images/blog/dolor_espalda.jpg" alt="Blog" width="370" height="257">
                            <div class="hover">
                                <div class="circle">
                                    <i class="fas fa-link"></i>
                                </div>
                            </div>
                        </a>
                    </figure>
                    <div class="box-content">
                        <h4 class="box-title"><a href="blogs/dolor_espalda.html">Estoy cansado de tener dolor en mi espalda baja</a>
                        </h4>
                        <p class="post-date"><a href="#">Dec 13, 2020</a><span class="text-divider">|</span><a
                                href="blogs/dolor_espalda.html">2 Comments</a></p>
                        <p class="post-desc">
                        El dolor en espalda baja se conoce como lumbalgia, la cual puede ser ocasionada por diversos factores como: mantener una mala postura por tiempo prolongado, no realizar actividad física...
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!------------------------------------------------
        blog preview section - end
        ------------------------------------------------>
    </main>
    <!------------------------------------------------
    footer - start
    ------------------------------------------------>
    <footer class="footer bg-primary-color">
			<div class="container">
				<div class="footer-top">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="col-lg-6 col-sm-7 col-10">
							<a href="index.php" class="logo">
								<img src="assets/images/logo-sm.png" alt="Caremed Logo" width="185" height="48">
							</a>
						</div>
						<div class="col-lg-6 col-sm-7 col-10 d-lg-flex justify-content-lg-end">
							<div class="social-links">
								<a href="#" class="social-link"><i class="fab fa-twitter"></i><span>Twitter</span></a>
								<a href="#" class="social-link"><i class="fab fa-facebook"></i><span>Facebook</span></a>
								<a href="#" class="social-link"><i class="fab fa-youtube"></i><span>Youtube</span></a>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-bottom">
					<div class="row d-flex justify-content-center">
						<div class="col-lg-12 col-sm-7 col-10">
							<p>© GFXPARTNER</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
    <!------------------------------------------------
    footer - end
    ------------------------------------------------>
</div>
<button id="scroll-top" title="Back to Top"><i class="fal fa-angle-up"></i></button>


<div class="mobile-menu-overlay"></div>

<div class="mobile-menu-container mobile-menu-light">
    <div class="mobile-menu-wrapper">
        <span class="mobile-menu-close"><i class="fal fa-times"></i></span>

        <form class="input-group input-light input-search" action="#">
            <input type="text" class="form-control search-control" placeholder="search" required>
            <button type="submit" class="btn-search"><i class="fas fa-search"></i></button>
        </form>

        <nav class="mobile-nav mt-5">
            <ul class="mobile-menu">
                <li>
                    <a href="index.php" class="sf-with-ul">Inicio</a>
                </li>
                <li>
                    <a href="blogs/instalaciones.html" class="sf-with-ul">Quienes Somos</a>
                </li>
                <li>
                    <a href="blog-masonry.html" class="sf-with-ul">Blog</a>
                </li>
                <li>
                    <a href="treatments.html" class="sf-with-ul">Tratamientos</a>
                </li>
                <li>
                    <a href="shop.html" class="sf-with-ul">Tienda</a>
                </li>
            </ul>
        </nav><!-- End .mobile-nav -->

        <div class="social-icons mt-6">
            <a href="#" class="social-icon" title="Twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" class="social-icon" title="Facebook"><i class="fab fa-facebook"></i></a>
            <a href="#" class="social-icon" title="Youtube"><i class="fab fa-youtube"></i></a>
        </div><!-- End .social-icons -->

        <div class="mobile-actions">
            <a href="appointment.html" class="btn btn-secondary-color btn-xs">
                                            <span style="color:white">Agendar Una Cita</span>
            </a>
        </div><!-- End .mobile-actions -->
    </div><!-- End .mobile-menu-wrapper -->
</div><!-- End .mobile-menu-container -->


<form method="post" action="php/contact.php" class="book-form book-form-4 w-100" style="display: none;position: absolute;top: 16%; right:4%" id="appointment">
    <div class="callout" data-closable style="float: right;" onclick="hideApointer()">
        <button class="close-button" aria-label="Close alert" type="button" data-close>
            <i class="fa fa-times" aria-hidden="true"></i>
        </button>
    </div>
    <h4 class="sub-title ls-n-5 text-center">Agenda Una Cita</h4>
    <div class="input-group input-light">
        <h6 class="input-title">Nombre</h6>
        <input type="text" class="form-control" placeholder="Nombre completo" id="name" name="name" required>
    </div>
    <div class="input-group input-light">
        <h6 class="input-title">Teléfono</h6>
        <input type="tel" id="phone" name="phone" class="form-control" placeholder="442-222-3333" required>
        <input type="hidden" id="page" name="page" value="../index.php">
    </div>
    <div class="input-group input-light">
        <h6 class="input-title">Email</h6>
        <input id="email" name="email" type="tel" class="form-control" placeholder="contacto@acrimexico.com" required>
    </div>
    <!--<div class="input-group input-light">
        <h6 class="input-title">Department</h6>
        <div class="form-control select-control">Please select<i class="far fa-angle-down"></i></div>
        <ul class="option-menu" id="option_menu_1">
            <li class="option-list"><span class="option"><i class="far fa-caret-right"></i>Most Recent</span></li>
            <li class="option-list"><span class="option"><i class="far fa-caret-right"></i>Popular</span></li>
            <li class="option-list"><span class="option"><i class="far fa-caret-right"></i>Oldest</span></li>
            <li class="option-list"><span class="option"><i class="far fa-caret-right"></i>All times</span></li>
        </ul>
    </div>-->
    <div class="input-group input-light input-calendar-light">
        <h6 class="input-title">Fecha</h6>
        <input type="text" id="form-calendar-light" class="form-control" placeholder="12/21/2020" id="date" name="date">
        <i class="far fa-calendar-alt"></i>
    </div>
    <div class="input-group input-light">
        <h6 class="input-title">Comentarios</h6>
        <textarea class="form-control" id="message" name="message"></textarea>
    </div>
    <!--<div class="input-group input-light">
        <h6 class="input-title">Time</h6>
        <div id="select_4" class="form-control select-control opacity-1">
            <div class="check-circle"><i class="fas fa-check"></i></div>
            <div class="primary-color">4:00<sup>PM</sup></div>
            Available
            <i class="far fa-angle-down"></i>
        </div>
        <ul class="option-menu" id="option_menu_4">
            <li class="option-list"><span class="option"><i class="far fa-caret-right"></i>5.00<sup>PM</sup></span></li>
            <li class="option-list"><span class="option"><i class="far fa-caret-right"></i>6.00<sup>PM</sup></span></li>
            <li class="option-list"><span class="option"><i class="far fa-caret-right"></i>7.00<sup>PM</sup></span></li>
            <li class="option-list"><span class="option"><i class="far fa-caret-right"></i>8.00<sup>PM</sup></span></li>
        </ul>
    </div>-->
    <button type="submit" class="btn btn-secondary-color btn-form">
        <span>Agenda Una Cita</span>
    </button>
    <h6 class="input-title" id="resultMailSucess" style="display: none;color:green;font-style: italic">¡Gracias! Su petición fue enviada.</h6>
    <h6 class="input-title" id="resultMailFail" style="display: none;color:red;font-style: italic">Hubo un problema al enviar petición.</h6>
</form>

<!-- Plugins JS File -->
<script>
    var mailSent = findGetParameter("mailSend");
    console.log(mailSent);
    if(mailSent=="success") {
        document.getElementById('appointment').style.display = 'block';
        document.getElementById('resultMailSucess').style.display = 'block';
    }
    else if(mailSent=="failure") {
        document.getElementById('appointment').style.display = 'block';
        document.getElementById('resultMailFail').style.display = 'block';
    }

    function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }

    function findGetParameter(parameterName) {
        var result = null,
            tmp = [];
        location.search
            .substr(1)
            .split("&")
            .forEach(function (item) {
            tmp = item.split("=");
            if (tmp[0] === parameterName) result = decodeURIComponent(tmp[1]);
            });
        return result;
    }

    function showApointer() {
        topFunction();
        if (document.getElementById('appointment').style.display == 'none') {
            document.getElementById('appointment').style.display = 'block';
            document.getElementById('resultMailSucess').style.display = 'none';
            document.getElementById('resultMailFail').style.display = 'none';
        } else {
            document.getElementById('appointment').style.display = 'none';
            document.getElementById('resultMailSucess').style.display = 'none';
            document.getElementById('resultMailFail').style.display = 'none';
        }

    }

    function hideApointer() {
        document.getElementById('appointment').style.display = 'none';


    }

    //Get the button
    var book = document.getElementById("book");
    //var whatsapp = document.getElementById("whatsapp");
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            book.style.opacity = "1";
            //whatsapp.style.opacity = "1";
        } else {
            book.style.opacity = "0";
            //whatsapp.style.opacity = "0";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/plugins/owl.carousel.min.js"></script>
<script src="assets/js/plugins/datepicker.min.js"></script>
<script src="assets/js/plugins/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/plugins/isotope.pkgd.min.js"></script>

<!-- Main JS File -->
<script src="assets/js/main.min.js"></script>

</body>
</html>
