<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <!--
    Proyecto Web U-TIC – Universidad Pública de El Alto (UPEA)
    Versión 1: Desarrollada por CAARLOZ
    Versión 2 (actual): Rediseñada y desarrollada por ACMQ
    Año: 2025
    Comentario técnico: Esta es la segunda versión del sitio, con mejoras de diseño, estructura y funcionalidades respecto a la versión inicial.
-->

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>U-TIC</title>
    <meta name="description" content="Medilix - Healthcare & Medical Bootstrap HTML5 Template">
    <meta name="author" content="ahmmedsabbirbd">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/favicon.svg">
    <!-- CSS here -->
    <link rel="stylesheet" href="https://utic.upea.bo/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="https://utic.upea.bo/assets/css/vendor/animate.min.css">
    <link rel="stylesheet" href="https://utic.upea.bo/assets/css/plugins/swiper.min.css">
    <link rel="stylesheet" href="https://utic.upea.bo/assets/css/vendor/magnific-popup.css">
    <link rel="stylesheet" href="https://utic.upea.bo/assets/css/vendor/fontawesome-pro.css">
    <link rel="stylesheet" href="https://utic.upea.bo/assets/css/contacto.css">
    <link rel="stylesheet" href="https://utic.upea.bo/assets/css/carreras.css">
    <link rel="stylesheet" href="https://utic.upea.bo/assets/css/vendor/spacing.css">
    <link rel="stylesheet" href="https://utic.upea.bo/assets/css/plugins/odometer-theme-default.css">
    <link rel="stylesheet" href="https://utic.upea.bo/assets/css/main.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=location_on,phone,mail" />




</head>



<link rel="modulepreload" href="https://utic.upea.bo/build/assets/app-Cs0QkU1O.js" />
<script type="module" src="https://utic.upea.bo/build/assets/app-Cs0QkU1O.js"></script>

<!-- Offcanvas area start -->
<div class="fix">
    <div class="offcanvas__area">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo">
                        <a href="index.html">
                            <img src="assets/imgs/logo/UTICC.png" alt="logo not found">
                        </a>
                    </div>
                    <div class="offcanvas__close">
                        <button class="offcanvas-close-icon animation--flip">
                            <span class="offcanvas-m-lines">
                                <span class="offcanvas-m-line line--1"></span><span
                                    class="offcanvas-m-line line--2"></span><span
                                    class="offcanvas-m-line line--3"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="mobile-menu fix"></div>
                <div class="offcanvas__social ">

                    <p class="mb-30 text-justify">
                        "U-TIC, la Unidad de Tecnologías de Información y Comunicación de la UPEA, garantizando
                        innovación y eficiencia en nuestros servicios tecnológicos."
                    </p>

                    <ul class="header-top-socail-menu d-flex">
                        <li><a href="https://www.facebook.com/profile.php?id=61559761230176" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UCLCYwzbR3eYujDyBnLhTjFQ" target="_blank"><i
                                    class="fa-brands fa-youtube"></i></a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="offcanvas__overlay"></div>
<div class="offcanvas__overlay-white"></div>
<!-- Offcanvas area start -->

<!-- Header area start -->
<header>
    <div id="header-sticky" class="header__area header-2">
        <div class="container">
            <div class="mega__menu-wrapper p-relative">
                <div class="header__main">
                    <div class="header__left d-flex align-items-center">
                        <div class="header__logo">
                            <a href="index.html">
                                <div class="logo">
                                    <div class="logo-container">
                                        <a href="https://utic.upea.bo/">
                                            <img src="https://utic.upea.bo/assets/imgs/UTICC.png" alt="Logo UTICCs">
                                        </a>
                                    </div>


                                </div>
                                <style>
                                    .logo-container {
                                        position: relative;
                                        display: inline-block;
                                    }

                                    .logo-container img {
                                        width: 140px;
                                        height: 80px;
                                        filter: drop-shadow(3px 3px 0px rgb(255, 255, 255));
                                        transition: filter 0.3s ease-in-out;
                                    }

                                    .logo-container:hover img {
                                        filter: drop-shadow(0 5px 10px rgba(255, 0, 0, 0.7)) drop-shadow(0 5px 10px rgba(0, 255, 0, 0.7)) drop-shadow(0 5px 10px rgba(0, 0, 255, 0.7));
                                    }

                                    .botonn.button {
                                        width: 150%;
                                        /* Aumenté el ancho */
                                        padding: 16px 0;
                                        /* Aumenté el padding para más altura */
                                        color: #fff;
                                        background: linear-gradient(to right, #77ebe3, #11295b);
                                        border-radius: 10px;
                                        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
                                        transition: all 0.3s ease-in-out;
                                        font-weight: bold;
                                        text-transform: uppercase;
                                        font-size: 16px;
                                        margin: 10px 0;
                                        /* Espacio arriba y abajo del botón */

                                        /* Centramos el texto */
                                        display: inline-block;
                                        /* Hacemos que el link sea como un bloque en línea */
                                        text-align: center;
                                        /* Alineamos el texto al centro */
                                        line-height: 1.2;
                                        /* Ajustamos la altura de línea para asegurar que el texto quede centrado verticalmente */
                                    }



                                    .botonn.button:hover {
                                        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.25);
                                        transform: translateY(-2px);
                                    }

                                    .text-justify {
                                        text-align: justify;
                                    }
                                </style>
                            </a>
                        </div>
                    </div>

                    <div class="header__action d-flex align-items-center">

                        <div class="mean__menu-wrapper d-none d-xl-block">
                            <div class="main-menu main-menu-2">
                                <nav id="mobile-menu">
                                    <ul>


                                        <li><a href="#personal">PROFESIONALES</a></li>
                                        <li><a href="#anuncios">CURSOS</a></li>
                                        <li><a href="#paginas">PAGINAS</a></li>
                                        <li><a href="#documentos">DOCUMENTOS</a></li>
                                        <li><a href="#carreras">CARRERAS3</a></li>

                                        @if (Route::has('login'))

                                        @auth
                                        <li> <a
                                                href="{{ url('/dashboard') }}"
                                                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                                                Dashboard
                                            </a>
                                        </li>
                                        @else
                                        <li>
                                            <a
                                                href="{{ route('login') }}"
                                                class="botonn button">
                                                Log in
                                            </a>
                                        </li>

                                        @if (Route::has('register'))
                                        <li><a
                                                href="{{ route('register') }}"
                                                class="botonn button">
                                                Register
                                            </a>
                                        </li>
                                        @endif
                                        @endauth

                                        @endif
                                        <li><a href="/galeria">GALERIAS</a></li>
                                        <!-- <li><a href="https://utic.upea.bo/dashboard" class="botonn button">INGRESAR</a> -->
                                        </li>

                                        <script>
                                            document.addEventListener('DOMContentLoaded', function() {
                                                const menuItems = document.querySelectorAll('.main-menu ul li a');
                                                const sections = Array.from(document.querySelectorAll('section')).filter(section =>
                                                    Array.from(menuItems).some(item => item.getAttribute('href') === '#' + section.id)
                                                );

                                                function setActiveMenuItem() {
                                                    let currentSectionIndex = sections.length;

                                                    while (--currentSectionIndex && window.scrollY + 50 < sections[currentSectionIndex].offsetTop) {}

                                                    menuItems.forEach((item) => item.parentElement.classList.remove('active'));

                                                    const currentSection = sections[currentSectionIndex];
                                                    const correspondingMenuItem = document.querySelector(
                                                        `.main-menu ul li a[href="#${currentSection.id}"]`);

                                                    if (correspondingMenuItem) {
                                                        correspondingMenuItem.parentElement.classList.add('active');
                                                    }
                                                }

                                                setActiveMenuItem();
                                                window.addEventListener('scroll', setActiveMenuItem);

                                                menuItems.forEach(item => {
                                                    item.addEventListener('click', function(e) {
                                                        const href = this.getAttribute('href');

                                                        // Si el href no comienza con '#', es un enlace externo (como login)
                                                        if (!href.startsWith('#')) {
                                                            return; // Permite que el enlace funcione normalmente
                                                        }

                                                        e.preventDefault();
                                                        menuItems.forEach(i => i.parentElement.classList.remove('active'));
                                                        this.parentElement.classList.add('active');

                                                        const targetSection = document.querySelector(href);
                                                        if (targetSection) {
                                                            window.scrollTo({
                                                                top: targetSection.offsetTop,
                                                                behavior: 'smooth'
                                                            });
                                                        }
                                                    });
                                                });
                                            });
                                        </script>
                                    </ul>
                                </nav>
                            </div>

                        </div>
                        <div class="header__hamburger ml-30 d-xl-none">
                            <div class="sidebar__toggle">
                                <a class="bar-icon" href="javascript:void(0)">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<main class="home-2__background">
    <section id="inicio"
        style="background: linear-gradient(to right, #11295b, #77ebe3),
           url('image/po.png');
           background-size: cover; 
           background-repeat: no-repeat; 
           background-position: center center;
           padding: 6px 20px 50px; 
           position: relative; 
           overflow: hidden;">

        <div
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; 
               background: url('image/po.png') center/cover no-repeat;
               opacity: 0.5;">
        </div>

        <div class="container" style="position: relative; z-index: 1;">
            <div class="banner-2__shape"></div>
            <div class="row align-items-center" style="margin-top: 100px;">

                <div class="col-lg-7">
                    <div class="animacion2 w-[12rem]">
                        <h1 class="mb-40 mb-xs-40 max-w-[10rem] color-white title-animation glitch"
                            data-text="UNIDAD DE TECNOLOGÍAS DE INFORMACIÓN Y COMUNICACIONES"
                            style="color: #fff; text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5);">
                            UNIDAD DE TECNOLOGÍAS DE INFORMACIÓN Y COMUNICACIONES
                        </h1>
                        <p class="mb-50 mb-xs-40 color-white"
                            style="color: #fff; text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5); font-size: 20px; text-align: justify;">
                            "U-TIC, Unidad de Tecnologías de Información y Comunicaciones de la UPEA, garantizando
                            innovación y eficiencia en nuestros servicios tecnológicos."
                        </p>


                        <div class="rr-btn__wrapper d-flex align-items-sm-center align-items-start flex-column flex-sm-row">

                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="banner-2__media">
                        <div class="banner-2__media-shape upDown"></div>
                        <div class="imagen-container">
                            <img class="imagen-primaria"
                                src="assets/imgs/contactos/1720548691_16113322_1368696399816254_8467174968519653581_o.jpg"
                                alt="icon not found">
                            <img class="imagen-secundaria"
                                src="https://scontent.flpb3-2.fna.fbcdn.net/v/t1.6435-9/115684651_101021901710931_4787433587965043089_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=127cfc&_nc_ohc=V8lZnU3MkaUQ7kNvgEkByU-&_nc_oc=AdgXtKCPf8_Ap2oqmWOnUeJRkIch0WMUfYIWT8dKNz_hw0nNKbppEoKUGV5i24eTslQ&_nc_zt=23&_nc_ht=scontent.flpb3-2.fna&_nc_gid=KfYO_sEDgQZ4zRGL5drneQ&oh=00_AYG0W0YFTookMUDiVzMkmvLkqKs2V-f2WQ8t9hAcZ9Xbfw&oe=67FBEA1B"
                                alt="hover image">
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <style>
        .imagen-container {
            margin-left: 35px;
            width: 469px;
            height: 496px;
            overflow: hidden;
            border-radius: 20px;
            transition: transform 0.7s ease, box-shadow 0.7s ease;
            position: relative;

            /* Sombra para todo el contenedor */
        }

        /* Aumenta el tamaño al hacer hover */
        .imagen-container:hover {
            transform: scale(1.35) translateY(-10px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.4);
        }

        /* Estilo para ambas imágenes */
        .imagen-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            transition: opacity 0.7s ease;
        }

        /* Oculta la imagen primaria al hacer hover */
        .imagen-container:hover .imagen-primaria {
            opacity: 0;
        }

        /* Imagen secundaria */
        .imagen-secundaria {
            opacity: 0;
            transition: opacity 0.7s ease;
        }

        /* Muestra la secundaria al hacer hover */
        .imagen-container:hover .imagen-secundaria {
            opacity: 1;
        }
    </style>
    <!-- about-us-2 start -->
    <section class="about-us-2 about-us-2__space"
        style="position: relative; padding: 120px 0; overflow: hidden; background-color: rgba(216, 242, 244, 0.8);">
        <!-- Capa semitransparente encima de la imagen de fondo -->
        <div
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: url('image/uno.png') center/cover no-repeat; opacity: 0.2; z-index: 0;">
        </div>

        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6">
                    <div class="about-us-2__media">
                        <div class="about-us-2__media-image-1">
                            <a href="https://www.youtube.com/watch?v=HI3O3nI8esk" class="popup-video"
                                data-effect="mfp-move-from-top vertical-middle">
                                <i class="fa-solid fa-play zooming"></i>
                            </a>
                            <img src="assets/imgs/about-us-2/universidad.jpg" class="img-fluid" width="273"
                                height="611" alt="Universidad">
                        </div>
                        <div class="about-us-2__media-image-2">
                            <img src="assets/imgs/about-us-2/utic.jpg" class="img-fluid" width="273" height="611"
                                alt="UTIC">
                            <div class="circle upDown">
                                <svg width="111" height="111" viewBox="0 0 111 111" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.2" fill-rule="evenodd" clip-rule="evenodd"
                                        d="M110.785 60.6122L0.517544 60.6122C..." fill="#185EC8" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-us-2__main-content">
                        <div class="section__title-wrapper about-us-2__content mb-60 mb-xs-50">
                            <h5 class="section__subtitle color-theme-primary mb-15 mb-xs-10 title-animation">
                                <img src="assets/imgs/ask-quesiton/heart.png" alt="icon" class="img-fluid"> Quienes
                                somos?
                            </h5>
                            <h2 class="section__title mb-20" style="font-weight: bold;">
                                <i class="fas fa-history"
                                    style="background: linear-gradient(to right,#77ebe3, #11295b,#77ebe3); -webkit-background-clip: text; color: transparent; display: inline-block; padding: 8px; border-radius: 8px;"></i>
                                HISTORIA DE U-TIC
                            </h2>
                            <p class="mb-0" style="text-align: justify;">
                                En mayo de 2009, la Asamblea de la carrera de Ingeniería de Sistemas de la UPEA acordó crear
                                la Unidad de Sistemas de Información (SIE) para desarrollar áreas de sistemas, bases de
                                datos y servicios telemáticos. El Honorable Consejo Universitario respaldó esta decisión en
                                junio de 2009, estableciendo la SIE con el objetivo de implementar sistemas de información
                                académicos y administrativos. Este proyecto fue promovido por estudiantes de la carrera
                                durante la gestión 2009.
                            </p>
                        </div>
                        <div class="about-us-2__main-content__list" style="position: relative; z-index: 2;">
                            <img src="assets/imgs/banner-2/UTICC.png" alt="sie" width="400px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-us-2 end -->
    <!-- Doctor start -->
    <section id="personal" class="doctor doctor__background" style="position: relative; overflow: hidden;">
        <div
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;
                background: url('image/dos.png') center/cover no-repeat;
                opacity: 0.2; /* Opacidad para suavizar la imagen */
                z-index: -1;">
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section__title-wrapper doctor__content text-center mb-60 mb-xs-30">
                        <h5 class="section__subtitle color-theme-primary mb-15 mb-xs-10 title-animation"><img
                                src="assets/imgs/ask-quesiton/heart.png" alt="icon not found" class="img-fluid">Nuestro
                            Personal
                        </h5>
                        <h2 class="section__title mb-0 " style="font-weight: bold;">
                            <i class="fas fa-briefcase"
                                style="background: linear-gradient(to right, #77ebe3, #11295b); 
                               -webkit-background-clip: text; 
                               color: transparent;
                               display: inline-block;
                               padding: 8px;
                               border-radius: 8px;">
                            </i>

                            Profesionales U-TIC
                        </h2>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="swiper doctor__slider">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="doctor__item position-relative overflow-hidden">

                                    <div class="doctor__item-media">






                                        <img src="https://utic.upea.bo/./assets/imgs/prof/1739334601.png"
                                            class="img-fluid" alt="image not found">
                                    </div>
                                    <div class="doctor__item-content">
                                        <div class="doctor__item-content-text text-center">
                                            <p>AREA-DESARROLLO DE SOFTWARE</p>
                                            <h4><a href="about-us.html">Jhonny
                                                    Apaza Chambi</a></h4>
                                        </div>
                                        <div class="doctor__item-content-share" style="visibility: hidden;">
                                            <a href="https://wa.me/61134530"><i
                                                    class="fa-brands fa-whatsapp"></i></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="doctor__item position-relative overflow-hidden">

                                    <div class="doctor__item-media">






                                        <img src="https://utic.upea.bo/./assets/imgs/prof/1739334787.jpeg"
                                            class="img-fluid" alt="image not found">
                                    </div>
                                    <div class="doctor__item-content">
                                        <div class="doctor__item-content-text text-center">
                                            <p>AREA-DESARROLLO DE SOFTWARE</p>
                                            <h4><a href="about-us.html">Wilson
                                                    Gonzales Sanchez</a></h4>
                                        </div>
                                        <div class="doctor__item-content-share" style="visibility: hidden;">
                                            <a href="https://wa.me/60176010"><i
                                                    class="fa-brands fa-whatsapp"></i></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="doctor__item position-relative overflow-hidden">

                                    <div class="doctor__item-media">






                                        <img src="https://utic.upea.bo/./assets/imgs/prof/1739335330.png"
                                            class="img-fluid" alt="image not found">
                                    </div>
                                    <div class="doctor__item-content">
                                        <div class="doctor__item-content-text text-center">
                                            <p>ADMINISTRADOR DE BASE DE DATOS</p>
                                            <h4><a href="about-us.html">Santos
                                                    Limachi Monzon</a></h4>
                                        </div>
                                        <div class="doctor__item-content-share" style="visibility: hidden;">
                                            <a href="https://wa.me/74074032"><i
                                                    class="fa-brands fa-whatsapp"></i></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="doctor__item position-relative overflow-hidden">

                                    <div class="doctor__item-media">






                                        <img src="https://utic.upea.bo/./assets/imgs/prof/1739805499.png"
                                            class="img-fluid" alt="image not found">
                                    </div>
                                    <div class="doctor__item-content">
                                        <div class="doctor__item-content-text text-center">
                                            <p>AREA DE SOPORTE Y MANTENIMIENTO</p>
                                            <h4><a href="about-us.html">Luis Angel
                                                    Mamani Villca</a></h4>
                                        </div>
                                        <div class="doctor__item-content-share" style="visibility: hidden;">
                                            <a href="https://wa.me/77250240"><i
                                                    class="fa-brands fa-whatsapp"></i></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="doctor__item position-relative overflow-hidden">

                                    <div class="doctor__item-media">






                                        <img src="https://utic.upea.bo/./assets/imgs/prof/1739806942.jpeg"
                                            class="img-fluid" alt="image not found">
                                    </div>
                                    <div class="doctor__item-content">
                                        <div class="doctor__item-content-text text-center">
                                            <p>AREA DE TESTER Y SEGURIDAD DE SOFTWARE</p>
                                            <h4><a href="about-us.html">Gabriela
                                                    Luque Arteaga</a></h4>
                                        </div>
                                        <div class="doctor__item-content-share" style="visibility: hidden;">
                                            <a href="https://wa.me/60620172"><i
                                                    class="fa-brands fa-whatsapp"></i></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="doctor__item position-relative overflow-hidden">

                                    <div class="doctor__item-media">






                                        <img src="https://utic.upea.bo/./assets/imgs/prof/1739807065.jpeg"
                                            class="img-fluid" alt="image not found">
                                    </div>
                                    <div class="doctor__item-content">
                                        <div class="doctor__item-content-text text-center">
                                            <p>AREA DE SERVIDORES</p>
                                            <h4><a href="about-us.html">Javier
                                                    Perez Siñani</a></h4>
                                        </div>
                                        <div class="doctor__item-content-share" style="visibility: hidden;">
                                            <a href="https://wa.me/76569959"><i
                                                    class="fa-brands fa-whatsapp"></i></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="doctor__item position-relative overflow-hidden">

                                    <div class="doctor__item-media">






                                        <img src="https://utic.upea.bo/./assets/imgs/prof/1739916632.jpg"
                                            class="img-fluid" alt="image not found">
                                    </div>
                                    <div class="doctor__item-content">
                                        <div class="doctor__item-content-text text-center">
                                            <p>AREA DE REDES</p>
                                            <h4><a href="about-us.html">Marcial
                                                    Fernandez Cachi</a></h4>
                                        </div>
                                        <div class="doctor__item-content-share" style="visibility: hidden;">
                                            <a href="https://wa.me/71249215"><i
                                                    class="fa-brands fa-whatsapp"></i></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="doctor__item position-relative overflow-hidden">

                                    <div class="doctor__item-media">






                                        <img src="https://utic.upea.bo/./assets/imgs/prof/1739916705.jpg"
                                            class="img-fluid" alt="image not found">
                                    </div>
                                    <div class="doctor__item-content">
                                        <div class="doctor__item-content-text text-center">
                                            <p>TECNICO-UTIC</p>
                                            <h4><a href="about-us.html">Edyr Elisban
                                                    Cruz Callisaya</a></h4>
                                        </div>
                                        <div class="doctor__item-content-share" style="visibility: hidden;">
                                            <a href="https://wa.me/73308791"><i
                                                    class="fa-brands fa-whatsapp"></i></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="doctor__item position-relative overflow-hidden">

                                    <div class="doctor__item-media">






                                        <img src="https://utic.upea.bo/./assets/imgs/prof/1744362186.jpeg"
                                            class="img-fluid" alt="image not found">
                                    </div>
                                    <div class="doctor__item-content">
                                        <div class="doctor__item-content-text text-center">
                                            <p>JEFE DE UNIDAD</p>
                                            <h4><a href="about-us.html">Msc. Juan Regis Muñez Sirpa
                                                    Muñez Sirpa</a></h4>
                                        </div>
                                        <div class="doctor__item-content-share" style="visibility: hidden;">
                                            <a href="https://wa.me/77777777"><i
                                                    class="fa-brands fa-whatsapp"></i></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="doctor__slider-dot mt-80 mt-lg-50 mt-md-40 mt-sm-35 mt-xs-30"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Doctor start -->
    <section class="anuncios_back" id="anuncios"
        style="padding: 120px 0; position: relative; overflow: hidden; background-color: rgba(216, 242, 244, 0.8);">

        <!-- Capa semitransparente encima de la imagen de fondo -->
        <div
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;
        background: url('image/uno.png') center/cover no-repeat;
        opacity: 0.2; z-index: 0;">
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-60 mb-xs-30">
                    <h5 class="section__subtitle color-theme-primary mb-15 mb-xs-10 title-animation">
                        <i class="fas fa-bullhorn"></i> Anuncios U-TIC
                    </h5>
                    <h2 class="section__title mb-0" style="font-weight: bold;">
                        <i class="fas fa-book-open"
                            style="background: linear-gradient(to right, #77ebe3, #11295b); 
                        -webkit-background-clip: text; color: transparent;">
                        </i>
                        Nuestros Cursos
                    </h2>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="swiper doctor__slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="video-wrapper">
                                    <div class="image-container">
                                        <div class="image-wrapper">
                                            <div class="anuncio-label">Curso</div>
                                            <img src="https://utic.upea.bo/assets/imgs/anuncios/1720474407.jpg"
                                                alt="Descripción de la imagen" onclick="openModal(this.src)"
                                                style="cursor: pointer;">
                                            <div class="number-circle">
                                                <div class="number-day">18
                                                </div>
                                                <div class="number-month">
                                                    Jul</div>
                                            </div>
                                        </div>
                                        <div class="image-description">
                                            Curso de laravel 1
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="video-wrapper">
                                    <div class="image-container">
                                        <div class="image-wrapper">
                                            <div class="anuncio-label">Curso</div>
                                            <img src="https://utic.upea.bo/assets/imgs/anuncios/1720474440.jpg"
                                                alt="Descripción de la imagen" onclick="openModal(this.src)"
                                                style="cursor: pointer;">
                                            <div class="number-circle">
                                                <div class="number-day">14
                                                </div>
                                                <div class="number-month">
                                                    Jul</div>
                                            </div>
                                        </div>
                                        <div class="image-description">
                                            Administración de Router1
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="video-wrapper">
                                    <div class="image-container">
                                        <div class="image-wrapper">
                                            <div class="anuncio-label">Curso</div>
                                            <img src="https://utic.upea.bo/assets/imgs/anuncios/1720474465.jpg"
                                                alt="Descripción de la imagen" onclick="openModal(this.src)"
                                                style="cursor: pointer;">
                                            <div class="number-circle">
                                                <div class="number-day">14
                                                </div>
                                                <div class="number-month">
                                                    Jul</div>
                                            </div>
                                        </div>
                                        <div class="image-description">
                                            Curso de VoIP
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="video-wrapper">
                                    <div class="image-container">
                                        <div class="image-wrapper">
                                            <div class="anuncio-label">Curso</div>
                                            <img src="https://utic.upea.bo/assets/imgs/anuncios/1741627203.jpg"
                                                alt="Descripción de la imagen" onclick="openModal(this.src)"
                                                style="cursor: pointer;">
                                            <div class="number-circle">
                                                <div class="number-day">07
                                                </div>
                                                <div class="number-month">
                                                    Dec</div>
                                            </div>
                                        </div>
                                        <div class="image-description">
                                            SOFTWARE LIBRE
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="video-wrapper">
                                    <div class="image-container">
                                        <div class="image-wrapper">
                                            <div class="anuncio-label">Curso</div>
                                            <img src="https://utic.upea.bo/assets/imgs/anuncios/1741634801.jpg"
                                                alt="Descripción de la imagen" onclick="openModal(this.src)"
                                                style="cursor: pointer;">
                                            <div class="number-circle">
                                                <div class="number-day">05
                                                </div>
                                                <div class="number-month">
                                                    Dec</div>
                                            </div>
                                        </div>
                                        <div class="image-description">
                                            NODE
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="video-wrapper">
                                    <div class="image-container">
                                        <div class="image-wrapper">
                                            <div class="anuncio-label">Curso</div>
                                            <img src="https://utic.upea.bo/assets/imgs/anuncios/1741634847.jpg"
                                                alt="Descripción de la imagen" onclick="openModal(this.src)"
                                                style="cursor: pointer;">
                                            <div class="number-circle">
                                                <div class="number-day">28
                                                </div>
                                                <div class="number-month">
                                                    Dec</div>
                                            </div>
                                        </div>
                                        <div class="image-description">
                                            ADM. WEBS
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="video-wrapper">
                                    <div class="image-container">
                                        <div class="image-wrapper">
                                            <div class="anuncio-label">Curso</div>
                                            <img src="https://utic.upea.bo/assets/imgs/anuncios/1741634906.jpg"
                                                alt="Descripción de la imagen" onclick="openModal(this.src)"
                                                style="cursor: pointer;">
                                            <div class="number-circle">
                                                <div class="number-day">27
                                                </div>
                                                <div class="number-month">
                                                    Nov</div>
                                            </div>
                                        </div>
                                        <div class="image-description">
                                            INST. SERVIDORES
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="video-wrapper">
                                    <div class="image-container">
                                        <div class="image-wrapper">
                                            <div class="anuncio-label">Curso</div>
                                            <img src="https://utic.upea.bo/assets/imgs/anuncios/1761125250.jpg"
                                                alt="Descripción de la imagen" onclick="openModal(this.src)"
                                                style="cursor: pointer;">
                                            <div class="number-circle">
                                                <div class="number-day">20
                                                </div>
                                                <div class="number-month">
                                                    Oct</div>
                                            </div>
                                        </div>
                                        <div class="image-description">
                                            BOOTCAMP DEVSECOPS
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="doctor__slider-dot mt-80"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal para Vista Previa de Imágenes -->
        <div id="imageModal" class="modal">
            <span class="close" onclick="closeModal()">&times;</span>
            <img class="modal-content" id="modalImage">
        </div>
    </section>

    <!-- Estilos CSS -->
    <style>
        .anuncios_back {
            background: #f6fbff;
            color: #333;
            padding: 80px 0;
        }

        .image-container {
            text-align: center;
            margin-bottom: 20px;
            margin: 20px;

            position: relative;
        }

        .image-wrapper {
            position: relative;
            display: inline-block;
            max-width: 39rem;
            /* Ajuste solicitado para que no se sobrepase el ancho */
            border: 1px solid #ddd;
            border-radius: 8px 8px 0 0;
            overflow: hidden;
            background-color: #f0f0f0;
            transition: transform 0.3s ease, opacity 0.3s ease;
        }

        .image-wrapper img {
            width: 39rem;
            height: 45rem;
            /* Manteniendo el ajuste solicitado */
            object-fit: cover;
            border-radius: 8px 8px 0 0;
            margin-bottom: 20px;
            box-shadow: 0 0 15px rgba(21, 21, 21, 0.5);
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }


        .anuncio-label {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: rgba(0, 0, 0, 0.6);
            color: white;
            padding: 5px 10px;
            border-radius: 3px;
            font-size: 14px;
        }

        .number-circle {
            position: absolute;
            bottom: 10px;
            right: 10px;
            width: 60px;
            height: 60px;
            background-color: red;
            color: white;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: bold;
        }

        .image-description {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 10px;
            border-radius: 0 0 8px 8px;
            max-width: 370px;
            font-weight: bold;
        }

        /* Estilos para el Modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 9999;
            padding-top: 60px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            animation: fadeIn 0.3s ease;
        }

        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 600px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            animation: zoomIn 0.3s ease;
        }

        .close {
            position: absolute;
            top: 30px;
            right: 40px;
            color: #fff;
            font-size: 40px;
            cursor: pointer;
        }

        .close:hover {
            color: #f0f0f0;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes zoomIn {
            from {
                transform: scale(0.7);
            }

            to {
                transform: scale(1);
            }
        }
    </style>

    <!-- JavaScript para abrir y cerrar el Modal -->
    <script>
        // Abre el modal con la imagen seleccionada
        function openModal(imageSrc) {
            const modal = document.getElementById("imageModal");
            const modalImage = document.getElementById("modalImage");
            modalImage.src = imageSrc;
            modal.style.display = "block";
        }

        // Cierra el modal
        function closeModal() {
            const modal = document.getElementById("imageModal");
            modal.style.display = "none";
        }

        // Cierra el modal si se hace clic fuera de la imagen
        window.onclick = function(event) {
            const modal = document.getElementById("imageModal");
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    <style>
        .scrolling-image {
            height: 400px;
            /* Altura deseada del contenedor */
            position: relative;
            /* Posición relativa para que los elementos absolutos se posicionen respecto a este */
            overflow: hidden;
            /* Oculta el desbordamiento para evitar que el texto salga del contenedor */
        }

        .scrolling-image::before {
            content: "";
            /* Elemento vacío para aplicar la imagen de fondo */
            position: absolute;
            /* Posición absoluta para que ocupe todo el contenedor */
            top: 0;
            left: 0;
            width: 100%;
            /* Ancho completo del contenedor */
            height: 100%;
            /* Altura completa del contenedor */
            /* background-image: url('https://serviciopagina.upea.bo/InstitucionUpea/Portada/38da5e35-85c8-411e-9052-ecc14ef6627a.jpg'); */
            background-image: url('https://serviciopagina.upea.bo/InstitucionUpea/Portada/38da5e35-85c8-411e-9052-ecc14ef6627a.jpg');

            background-size: cover;
            /* Ajusta el tamaño de la imagen */
            background-position: center;
            /* Centra la imagen */
            background-attachment: fixed;
            /* Fija la imagen para que se mueva con el scroll */
            z-index: -1;
            /* Coloca la imagen detrás del contenido */
            filter: blur(0px);
            /* Aplica un desenfoque a la imagen */
        }

        .scrolling-image::after {
            content: "";
            /* Elemento vacío para aplicar el degradado oscuro */
            position: absolute;
            /* Posición absoluta para que ocupe todo el contenedor */
            top: 0;
            left: 0;
            width: 100%;
            /* Ancho completo del contenedor */
            height: 100%;
            /* Altura completa del contenedor */
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.5));
            /* Degradado oscuro */
            z-index: 0;
            /* Coloca el degradado sobre la imagen pero debajo del contenido */
        }

        .contenta {
            position: relative;
            /* Posición relativa para que los elementos absolutos se posicionen respecto a este */
            z-index: 1;
            /* Coloca el contenido sobre la imagen de fondo */
            color: white;
            /* Color del texto */
            text-align: center;
            /* Centra el texto horizontalmente */
            padding: 20px;
            /* Espaciado interno */
            display: flex;
            /* Usa flexbox para centrar el contenido */
            flex-direction: column;
            /* Coloca los elementos en una columna */
            justify-content: center;
            /* Centra el contenido verticalmente */
            align-items: center;
            /* Centra el contenido horizontalmente */
            height: 100%;
            /* Altura completa del contenedor */
        }



        .contenta h1 {
            font-size: 5rem;
            /* Tamaño de fuente más grande */
            margin-bottom: 20px;
            /* Espaciado inferior más amplio */
            color: var(--rr-color-900) !important;
            /* Color personalizado */
            font-weight: 900;
            /* Fuente en negrita extrema */
            letter-spacing: 2px;
            /* Mayor espaciado entre letras */
            line-height: 1.2;
            /* Mejora la legibilidad */
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1), 0 0 25px rgba(255, 255, 255, 0.2);
            /* Sombra suave y sutil */
            transition: transform 0.3s ease, text-shadow 0.3s ease;
            /* Transiciones suaves para efectos */
        }

        .contenta h1:hover {
            transform: scale(1.1);
            /* Aumenta el zoom al pasar el mouse */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3), 0 0 35px rgba(255, 255, 255, 0.5);
            /* Sombra más fuerte en el hover */
        }






        .contenta h1 .highlight {
            color: #ff6347;
            /* Color destacado para la palabra "tecnologías" */
        }

        .contenta p {
            font-size: 2rem;
            /* Tamaño de la fuente del párrafo */
            line-height: 1.6;
            /* Altura de línea del párrafo */
            color: white;
            /* Color blanco para el resto del texto */
        }

        /* Estilos responsivos para móviles */
        @media (max-width: 468px) {
            .contenta h1 {
                font-size: 2.5rem;
                /* Tamaño de la fuente del título para pantallas pequeñas */
            }

            .contenta p {
                font-size: 1rem;
                /* Tamaño de la fuente del párrafo para pantallas pequeñas */
            }
        }

        @media (max-width: 180px) {
            .contenta h1 {
                font-size: 2rem;
                /* Tamaño de la fuente del título para pantallas muy pequeñas */
            }

            .contenta p {
                font-size: 0.9rem;
                /* Tamaño de la fuente del párrafo para pantallas muy pequeñas */
            }
        }
    </style>

    <div class="scrolling-image">
        <div class="contenta">
            <h1>UNIDAD DE <span class="highlight">TECNOLOGÍAS</span> DE INFORMACIÓN Y COMUNICACIONES</h1>
            <p>Innovando servicios tecnológicos para nuestra comunidad universitaria</p>
        </div>
    </div>

    <!-- Filter area end -->

    <section class="doctor doctor__background" id="paginas" style="position: relative; overflow: hidden;">
        <div
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;
                background: url('image/dos.png') center/cover no-repeat;
                opacity: 0.2; /* Opacidad para suavizar la imagen */
                z-index: -1;">
        </div>>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section__title-wrapper doctor__content text-center mb-60 mb-xs-30">
                        <h5 class="section__subtitle color-theme-primary mb-15 mb-xs-10 title-animation">
                            <img src="assets/imgs/ask-quesiton/heart.png" alt="icon not found" class="img-fluid">Sistemas
                            Webs
                        </h5>
                        <h2 class="section__title mb-0" style="font-weight: bold; perspective: 100px;">
                            <div
                                style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform-origin: 124.609px 25px; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                                Sistemas
                            </div>
                            <div
                                style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform-origin: 50.6562px 25px; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                                y sitios
                            </div>
                            <div
                                style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform-origin: 50.6562px 25px; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                                web a nivel
                            </div>
                            <div
                                style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform-origin: 50.6562px 25px; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                                Universidad
                            </div>
                        </h2>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="swiper doctor__slider">
                        <div class="swiper-wrapper som">
                            <div class="swiper-slide">
                                <div class="carde">
                                    <div class="covere">
                                        <img src="https://utic.upea.bo/assets/imgs/paginas/1720381494.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <p>Vicerrectorado </p>
                                        <p><a href="https://vicerrectorado.upea.bo/l" target="_blank"
                                                rel="noopener noreferrer">Visitar</a></p>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="carde">
                                    <div class="covere">
                                        <img src="https://utic.upea.bo/assets/imgs/paginas/1720381534.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <p>Registro y Admisiones1 </p>
                                        <p><a href="https://registrosadmisiones.upea.bo/" target="_blank"
                                                rel="noopener noreferrer">Visitar</a></p>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="carde">
                                    <div class="covere">
                                        <img src="https://utic.upea.bo/assets/imgs/paginas/1720381564.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <p>Biblioteca Central </p>
                                        <p><a href="https://biblioteca.upea.bo/" target="_blank"
                                                rel="noopener noreferrer">Visitar</a></p>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="carde">
                                    <div class="covere">
                                        <img src="https://utic.upea.bo/assets/imgs/paginas/1720381589.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <p>SIACOP-BOLETA </p>
                                        <p><a href="https://siacop2.upea.bo/index.php/publico/boleta_comision" target="_blank"
                                                rel="noopener noreferrer">Visitar</a></p>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="carde">
                                    <div class="covere">
                                        <img src="https://utic.upea.bo/assets/imgs/paginas/1720441411.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <p>Títulos y Diplomas </p>
                                        <p><a href="https://titulos.upea.bo/" target="_blank"
                                                rel="noopener noreferrer">Visitar</a></p>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="carde">
                                    <div class="covere">
                                        <img src="https://utic.upea.bo/assets/imgs/paginas/1739810073.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <p>E-mail_Upea </p>
                                        <p><a href="https://micuenta.upea.edu.bo/" target="_blank"
                                                rel="noopener noreferrer">Visitar</a></p>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="carde">
                                    <div class="covere">
                                        <img src="https://utic.upea.bo/assets/imgs/paginas/1741625959.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <p>SI@DI </p>
                                        <p><a href="https://idiomas.upea.bo/" target="_blank"
                                                rel="noopener noreferrer">Visitar</a></p>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="carde">
                                    <div class="covere">
                                        <img src="https://utic.upea.bo/assets/imgs/paginas/1741626200.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <p>Portal Web Convenios Nacionales e Internacionales </p>
                                        <p><a href="https://rrnnii.upea.bo/" target="_blank"
                                                rel="noopener noreferrer">Visitar</a></p>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="carde">
                                    <div class="covere">
                                        <img src="https://utic.upea.bo/assets/imgs/paginas/1741626280.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <p>Sistema Repositorio Institucional UPEA </p>
                                        <p><a href="https://repositorio.upea.bo/" target="_blank"
                                                rel="noopener noreferrer">Visitar</a></p>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="carde">
                                    <div class="covere">
                                        <img src="https://utic.upea.bo/assets/imgs/paginas/1741626397.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <p>Pre-universitario </p>
                                        <p><a href="https://preuniversitario.upea.bo/" target="_blank"
                                                rel="noopener noreferrer">Visitar</a></p>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="carde">
                                    <div class="covere">
                                        <img src="https://utic.upea.bo/assets/imgs/paginas/1741626560.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <p>Root </p>
                                        <p><a href="https://root.upea.bo/" target="_blank"
                                                rel="noopener noreferrer">Visitar</a></p>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="carde">
                                    <div class="covere">
                                        <img src="https://utic.upea.bo/assets/imgs/paginas/1761082200.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <p>GAME UTIC </p>
                                        <p><a href="https://gameutic.upea.edu.bo/" target="_blank"
                                                rel="noopener noreferrer">Visitar</a></p>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="carde">
                                    <div class="covere">
                                        <img src="https://utic.upea.bo/assets/imgs/paginas/1761120318.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <p>TRAYECTORIA DE TITULADOS </p>
                                        <p><a href="https://trayectoria.upea.bo/" target="_blank"
                                                rel="noopener noreferrer">Visitar</a></p>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="carde">
                                    <div class="covere">
                                        <img src="https://utic.upea.bo/assets/imgs/paginas/1761120539.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <p>ARCHIVOS SECRETARIA GENERAL </p>
                                        <p><a href="https://archivosecretariageneral.upea.bo/" target="_blank"
                                                rel="noopener noreferrer">Visitar</a></p>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="carde">
                                    <div class="covere">
                                        <img src="https://utic.upea.bo/assets/imgs/paginas/1761120987.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <p>MOODLE </p>
                                        <p><a href="https://virtual.upea.bo/" target="_blank"
                                                rel="noopener noreferrer">Visitar</a></p>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="carde">
                                    <div class="covere">
                                        <img src="https://utic.upea.bo/assets/imgs/paginas/1761121616.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <p>PASANTIA </p>
                                        <p><a href="https://pasantia.upea.bo/paginaInicio" target="_blank"
                                                rel="noopener noreferrer">Visitar</a></p>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="carde">
                                    <div class="covere">
                                        <img src="https://utic.upea.bo/assets/imgs/paginas/1761121860.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <p>Sistema de Control y Certificación - Vicerrectorado </p>
                                        <p><a href="https://sicc.upea.bo/lo" target="_blank"
                                                rel="noopener noreferrer">Visitar</a></p>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="carde">
                                    <div class="covere">
                                        <img src="https://utic.upea.bo/assets/imgs/paginas/1761122198.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <p>SISTEMA DE ACREDITACIÓN Y PLANILLAS </p>
                                        <p><a href="https://sayp.upea.bo/log" target="_blank"
                                                rel="noopener noreferrer">Visitar</a></p>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="carde">
                                    <div class="covere">
                                        <img src="https://utic.upea.bo/assets/imgs/paginas/1761122751.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <p>SISTEMA DE LOGEO SILOG </p>
                                        <p><a href="https://silog.upea.bo/lo" target="_blank"
                                                rel="noopener noreferrer">Visitar</a></p>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="carde">
                                    <div class="covere">
                                        <img src="https://utic.upea.bo/assets/imgs/paginas/1761122980.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <p>MATRICULACION-MAE </p>
                                        <p><a href="https://matriculacion.upea.bo/6e56c5c3766bda500b0c353c32bfa6d36fc48c6e" target="_blank"
                                                rel="noopener noreferrer">Visitar</a></p>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="carde">
                                    <div class="covere">
                                        <img src="https://utic.upea.bo/assets/imgs/paginas/1761123359.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <p>EVALUACION DOCENTE </p>
                                        <p><a href="https://evaluaciondocente.upea.bo/" target="_blank"
                                                rel="noopener noreferrer">Visitar</a></p>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="carde">
                                    <div class="covere">
                                        <img src="https://utic.upea.bo/assets/imgs/paginas/1761123521.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <p>SAF- ENOC </p>
                                        <p><a href="https://enoc.upea.bo/" target="_blank"
                                                rel="noopener noreferrer">Visitar</a></p>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="carde">
                                    <div class="covere">
                                        <img src="https://utic.upea.bo/assets/imgs/paginas/1761123946.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <p>SISTEMA DE TESORERIA &amp; UNINET </p>
                                        <p><a href="https://tesoro.upea.bo/auth/login?redirect=%2F" target="_blank"
                                                rel="noopener noreferrer">Visitar</a></p>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="carde">
                                    <div class="covere">
                                        <img src="https://utic.upea.bo/assets/imgs/paginas/1761124200.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <p>UPEA TOKEN </p>
                                        <p><a href="https://play.google.com/store/apps/details?id=com.upea.upea_token&amp;hl=es_BO" target="_blank"
                                                rel="noopener noreferrer">Visitar</a></p>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="carde">
                                    <div class="covere">
                                        <img src="https://utic.upea.bo/assets/imgs/paginas/1761124606.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <p>SISTEMA DE ARCHIVO DE KARDEX </p>
                                        <p><a href="https://archivodocente.upea.bo/9MDx2XVa6Z1JLPIav57oyn3pY" target="_blank"
                                                rel="noopener noreferrer">Visitar</a></p>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="carde">
                                    <div class="covere">
                                        <img src="https://utic.upea.bo/assets/imgs/paginas/1761124762.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <p>RADIO UPEA </p>
                                        <p><a href="https://play.google.com/store/apps/details?id=com.upea.radio_upea&amp;hl=es_BO" target="_blank"
                                                rel="noopener noreferrer">Visitar</a></p>
                                    </div>

                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="carde">
                                    <div class="covere">
                                        <img src="https://utic.upea.bo/assets/imgs/paginas/1761125015.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <p>SEGUIMIENTO DE TRAMITES AJAYU </p>
                                        <p><a href="https://ajayu.upea.bo/" target="_blank"
                                                rel="noopener noreferrer">Visitar</a></p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="doctor__slider-dot mt-80 mt-lg-50 mt-md-40 mt-sm-35 mt-xs-30"></div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .carde {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                text-align: center;
            }

            .carde .covere {
                position: relative;
                width: 200px;
                height: 200px;
                margin-bottom: 10px;
                border-radius: 50%;
                /* Hace el borde circular */
                /* overflow: hidden; */
                transition: all 0.3s ease;
                /* Suaviza las transiciones */
                box-shadow: none;
                /* Elimina cualquier sombra */
                background-color: transparent;
                /* Fondo transparente */
                cursor: pointer;
                /* Indica que es interactivo */
            }


            /* Efecto cuando el usuario pasa el cursor */
            .carde .covere:hover {
                animation: pulse 1s infinite;
                /* Activar la animación de pulso */
                box-shadow: 0 0 20px rgba(255, 255, 255, 0.8), 0 0 40px rgba(0, 0, 0, 0.5);
                /* Sombra más brillante */
                background-color: rgba(255, 255, 255, 0.2);
                /* Fondo con más brillo */
            }

            /* Animación pulsante para darle un efecto de brillo */
            @keyframes pulse {
                0% {
                    box-shadow: 0 0 10px rgba(255, 255, 255, 0.3), 0 0 15px rgba(0, 0, 0, 0.3);
                    transform: scale(1);
                }

                50% {
                    box-shadow: 0 0 20px rgba(255, 255, 255, 0.7), 0 0 30px rgba(0, 0, 0, 0.4);
                    transform: scale(1.05);
                    /* Suave expansión */
                }

                100% {
                    box-shadow: 0 0 10px rgba(255, 255, 255, 0.3), 0 0 15px rgba(0, 0, 0, 0.3);
                    transform: scale(1);
                }
            }

            /* Efecto para el contenido dentro del contenedor */
            .carde .covere img {
                transition: transform 0.3s ease;
            }

            /* Cuando se pasa el mouse sobre el contenedor, la imagen mantiene su tamaño pero con un suave cambio de brillo */
            .carde .covere:hover img {
                filter: brightness(1.3);
                /* Aumenta el brillo de la imagen */
            }





            .carde .covere img {
                display: block;
                width: 100%;
                height: 100%;
                object-fit: cover;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
                border-radius: 50%;
                /* Opcional: Si quieres las imágenes en forma de círculo */
            }

            .carde .covere .img__back {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                border-radius: 50%;
                /* Opcional: Si quieres la sombra en forma de círculo */
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
                pointer-events: none;
                /* Para que no interfiera con el hover de la imagen */
            }

            .carde .description {
                padding: 10px;
                background-color: #f8f8f8;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .carde .description p {
                margin: 0;
                color: #333;
            }

            .carde .description a {
                display: inline-block;
                padding: 5px 10px;
                margin-top: 5px;
                background-color: #00244a;
                color: #fff;
                text-decoration: none;
                border-radius: 5px;
                transition: background-color 0.3s ease;
            }

            .carde .description a:hover {
                background-color: #0056b3;
            }


            @media (max-width: 768px) {
                .carde {
                    left: 0px;
                }
            }

            .som {
                padding-top: 30px;

            }
        </style>
    </section>
    <section id="documentos" class="blog-2 blog-2__space-top section-space__bottom"
        style="padding: 120px 0;
                   position: relative; /* Necesario para colocar la capa encima */
                   overflow: hidden;
                   background-color: rgba(216, 242, 244, 0.8); /* Fondo blanco con opacidad (80%) */">


        <!-- Capa semitransparente encima de la imagen de fondo -->
        <div
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;
    background: url('image/uno.png') center/cover no-repeat;
    opacity: 0.2; z-index: -1;">
        </div>
        < <div class="container">
            <div class="row mb-60 mb-xs-50 align-items-lg-end align-items-center">
                <div class="col-lg-6">
                    <div class="section__title-wrapper blog-2__content">
                        <h5 class="section__subtitle color-theme-primary mb-15 mb-xs-10 title-animation">
                            <img src="https://utic.upea.bo/assets/imgs/ask-quesiton/heart.png" alt="icon not found"
                                class="img-fluid">
                            Documentos
                        </h5>
                        <h2 class="section__title mb-0 "
                            style="font-weight: bold; white-space: nowrap; display: inline-flex; align-items: center;">
                            <i class="fas fa-file-alt"
                                style="background: linear-gradient(to right, #77ebe3, #11295b); 
                        -webkit-background-clip: text; color: transparent; margin-right: 8px;">
                            </i>
                            DOCUMENTOS <span style="margin: 0 7px;">U-TIC</span> UPEA
                        </h2>





                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="blog-2__slider__arrow d-flex justify-content-lg-end justify-content-start">
                        <button class="blog-2__slider__arrow-prev d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-arrow-left"></i>
                        </button>
                        <button class="blog-2__slider__arrow-next d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="swiper blog-2__slider mb-minus-60">
                        <div class="swiper-wrapper tam">
                            <div class="swiper-slide">
                                <div class="doctor__item position-relative overflow-hidden">
                                    <div class="doctor__item-media">
                                        <a href="https://utic.upea.bo/assets/doc/PISI-UPEA.pdf" target="_blank">
                                            <div id="pdf-render-container-1">
                                                <canvas id="pdf-render-1" class="pdf-canvas"></canvas>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="doctor__item position-relative overflow-hidden">
                                    <div class="doctor__item-media">
                                        <a href="https://utic.upea.bo/assets/doc/4_MANUAL_PROCPROCED-AREA-CAPACITACION (1).pdf" target="_blank">
                                            <div id="pdf-render-container-2">
                                                <canvas id="pdf-render-2" class="pdf-canvas"></canvas>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="doctor__item position-relative overflow-hidden">
                                    <div class="doctor__item-media">
                                        <a href="https://utic.upea.bo/assets/doc/1_MANUAL_PROCPROCED-CICLO-D-VIDAAPLIC-INF.pdf" target="_blank">
                                            <div id="pdf-render-container-3">
                                                <canvas id="pdf-render-3" class="pdf-canvas"></canvas>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="doctor__item position-relative overflow-hidden">
                                    <div class="doctor__item-media">
                                        <a href="https://utic.upea.bo/assets/doc/FORMULARIO-02- luchex.pdf" target="_blank">
                                            <div id="pdf-render-container-4">
                                                <canvas id="pdf-render-4" class="pdf-canvas"></canvas>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="doctor__item position-relative overflow-hidden">
                                    <div class="doctor__item-media">
                                        <a href="https://utic.upea.bo/assets/doc/FORMULARIO  DBA .pdf" target="_blank">
                                            <div id="pdf-render-container-5">
                                                <canvas id="pdf-render-5" class="pdf-canvas"></canvas>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="doctor__item position-relative overflow-hidden">
                                    <div class="doctor__item-media">
                                        <a href="https://utic.upea.bo/assets/doc/PRINCIPALES FACTORES QUE INFLUYEN EN LA FIJACION PRECIOS.pdf" target="_blank">
                                            <div id="pdf-render-container-6">
                                                <canvas id="pdf-render-6" class="pdf-canvas"></canvas>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.5.207/pdf.min.js"></script>

    <script>
        const documentos = [{
            "id_documento": 1,
            "nombre_documento": "PISI-UPEA",
            "descripcion": "PISI-UPEA documento",
            "ruta": "assets\/doc\/PISI-UPEA.pdf",
            "created_at": "2024-07-09T19:45:27.000000Z",
            "updated_at": "2024-07-09T19:45:27.000000Z"
        }, {
            "id_documento": 18,
            "nombre_documento": "MANUAL DE PROCEDIMIENTOS",
            "descripcion": "Establecer los procesos y procedimientos, que especifique de manera clara,\r\nordenada y secuencial, la realizaci\u00f3n de Cursos y\/o Talleres de Capacitaciones de la\r\nUnidad Sistemas de Informaci\u00f3n y Estad\u00edstica de la Universidad P\u00fablica de El Alto.",
            "ruta": "assets\/doc\/4_MANUAL_PROCPROCED-AREA-CAPACITACION (1).pdf",
            "created_at": "2025-03-10T13:34:22.000000Z",
            "updated_at": "2025-03-10T13:34:22.000000Z"
        }, {
            "id_documento": 19,
            "nombre_documento": "MANUAL DE PROCEDIMIENTOS",
            "descripcion": "Establecer los procesos y procedimientos que especifique de manera clara,\r\nordenada y secuencial la gesti\u00f3n de ciclo de vida de las aplicaciones inform\u00e1ticas de\r\nla Universidad P\u00fablica de El Alto.",
            "ruta": "assets\/doc\/1_MANUAL_PROCPROCED-CICLO-D-VIDAAPLIC-INF.pdf",
            "created_at": "2025-03-10T13:36:34.000000Z",
            "updated_at": "2025-03-10T13:36:34.000000Z"
        }, {
            "id_documento": 20,
            "nombre_documento": "FORMULARIO 02",
            "descripcion": "SOPORTE EN INFRAESTRUCTURA DE RED DE DATOS Y COMUNICACI\u00d3N",
            "ruta": "assets\/doc\/FORMULARIO-02- luchex.pdf",
            "created_at": "2025-03-10T13:37:46.000000Z",
            "updated_at": "2025-03-10T13:37:46.000000Z"
        }, {
            "id_documento": 22,
            "nombre_documento": "FORMULARIO DE CORRECCI\u00d3N  DE DATOS",
            "descripcion": "FORMULARIO DE CORRECCI\u00d3N  DE DATOS",
            "ruta": "assets\/doc\/FORMULARIO  DBA .pdf",
            "created_at": "2025-03-10T13:45:27.000000Z",
            "updated_at": "2025-03-10T13:45:27.000000Z"
        }, {
            "id_documento": 25,
            "nombre_documento": "FORMULARIOS UTIC",
            "descripcion": "FORMULARIO",
            "ruta": "assets\/doc\/PRINCIPALES FACTORES QUE INFLUYEN EN LA FIJACION PRECIOS.pdf",
            "created_at": "2025-03-21T14:22:15.000000Z",
            "updated_at": "2025-03-21T14:22:15.000000Z"
        }];
        const pdfUrls = documentos.map(doc => "https://utic.upea.bo/" + doc.ruta);

        let rendered = Array(documentos.length).fill(false);

        function renderPDF(url, canvasId, index) {
            const canvas = document.getElementById(canvasId);
            if (!canvas || rendered[index]) return;

            const context = canvas.getContext('2d');
            context.clearRect(0, 0, canvas.width, canvas.height);

            pdfjsLib.getDocument(url).promise.then(pdf => {
                pdf.getPage(1).then(page => {
                    const viewport = page.getViewport({
                        scale: 0.8
                    });
                    canvas.width = viewport.width;
                    canvas.height = viewport.height;
                    page.render({
                        canvasContext: context,
                        viewport: viewport
                    });

                    rendered[index] = true;
                }).catch(error => {
                    console.error("Error al obtener la página del PDF:", error);
                });
            }).catch(error => {
                console.error("Error al cargar el PDF:", error);
            });
        }

        documentos.forEach((doc, index) => {
            renderPDF(pdfUrls[index], `pdf-render-${index + 1}`, index);
        });

        var swiper = new Swiper('.blog-2__slider', {
            loop: false, // Deshabilitar loop para que no se repitan los documentos
            slidesPerView: 3, // Mostrar 3 documentos inicialmente
            spaceBetween: 10,
            navigation: {
                nextEl: '.blog-2__slider__arrow-next',
                prevEl: '.blog-2__slider__arrow-prev',
            },
            autoplay: false, // Deshabilitar el movimiento automático
            initialSlide: 0, // Comenzar desde el primer documento (índice 0)
            slidesPerGroup: 3, // Asegura que se muestren tres documentos a la vez
            on: {
                init: function() {
                    console.log('Swiper ha sido inicializado');
                    setTimeout(() => {
                        const slides = document.querySelectorAll(
                            '.swiper-slide.swiper-slide-duplicate');
                        slides.forEach(slide => {
                            slide.style.opacity = '0'; // Totalmente invisibles
                            slide.style.transform = 'scale(0)'; // Elimina su tamaño
                        });
                    }, 0);
                },
                slideChange: function() {
                    console.log('Cambio de diapositiva');
                }
            }
        });
    </script>

    <style>
        /* Ajustar el estilo del carrusel */
        #carouselDocumentos {
            max-width: 420px;
            margin: auto;
        }

        /* Estilo para los canvases (documentos PDF) */
        .pdf-canvas {
            width: 100%;
            height: auto;
            max-width: 400px;
            border-radius: 10px;
            border: 1px solid #ddd;
        }

        /* Estilo para ocultar visualmente los duplicados */
        .swiper-slide.swiper-slide-duplicate {
            opacity: 0;
            /* Totalmente invisibles */
            transform: scale(0);
            /* Elimina su tamaño */
        }

        /* Evitar elementos invisibles con overflow */
        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Ajustar márgenes del contenedor */
        #pdf-render-container-6 {
            display: block;
        }

        .tam {
            width: 39rem;
            height: 50rem;
        }
    </style>
    <!-- Doctor start -->
    <section class="doctor doctor__background" id="carreras" style="position: relative; overflow: hidden;">
        <div
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;
                background: url('image/dos.png') center/cover no-repeat;
                opacity: 0.2; /* Opacidad para suavizar la imagen */
                z-index: -1;">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section__title-wrapper doctor__content text-center mb-60 mb-xs-30">
                        <h5 class="section__subtitle color-theme-primary mb-15 mb-xs-10 title-animation">
                            <img src="assets/imgs/ask-quesiton/heart.png" alt="icon not found" class="img-fluid">Carreras
                        </h5>
                        <h2 class="section__title mb-0"
                            style="font-weight: bold; white-space: nowrap; display: inline-flex; align-items: center;">
                            <i class="fas fa-laptop-code"
                                style="background: linear-gradient(to right, #77ebe3, #11295b); -webkit-background-clip: text; color: transparent; margin-right: 8px;">
                            </i>
                            PLATAFORMAS <span style="margin: 0 5px;">POR</span> CARRERAS
                        </h2>



                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="swiper doctor__slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="cover">
                                        <img src="https://utic.upea.bo/assets/imgs/carreras/1720384400.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <a href="https://inscripcionessistemas.upea.bo/" target="_blank">Sistema de
                                            Inscripcion</a>
                                        <a href="https://sistemas.upea.edu.bo/" target="_blank">Plataforma Virtual</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="cover">
                                        <img src="https://utic.upea.bo/assets/imgs/carreras/1720384449.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <a href="https://inscripcioneselectrica.upea.bo/" target="_blank">Sistema de
                                            Inscripcion</a>
                                        <a href="https://electrica.upea.edu.bo/" target="_blank">Plataforma Virtual</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="cover">
                                        <img src="https://utic.upea.bo/assets/imgs/carreras/1720384514.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <a href="https://inscripcioneselectronica.upea.bo/" target="_blank">Sistema de
                                            Inscripcion</a>
                                        <a href="https://electronica.upea.edu.bo/" target="_blank">Plataforma Virtual</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="cover">
                                        <img src="https://utic.upea.bo/assets/imgs/carreras/1741618675.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <a href="https://inscripcionderecho.upea.bo/" target="_blank">Sistema de
                                            Inscripcion</a>
                                        <a href="https://derecho.upea.edu.bo/" target="_blank">Plataforma Virtual</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="cover">
                                        <img src="https://utic.upea.bo/assets/imgs/carreras/1741618766.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <a href="https://inscripcionpoliticas.upea.bo/" target="_blank">Sistema de
                                            Inscripcion</a>
                                        <a href="https://cienciaspoliticas.upea.edu.bo/" target="_blank">Plataforma Virtual</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="cover">
                                        <img src="https://utic.upea.bo/assets/imgs/carreras/1741619631.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <a href="https://inscripcionesenergiasalternativas.upea.bo/" target="_blank">Sistema de
                                            Inscripcion</a>
                                        <a href="https://fisicasyalternativas.upea.edu.bo/" target="_blank">Plataforma Virtual</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="cover">
                                        <img src="https://utic.upea.bo/assets/imgs/carreras/1741620338.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <a href="https://inscripcionescivil.upea.bo/" target="_blank">Sistema de
                                            Inscripcion</a>
                                        <a href="https://civil.upea.edu.bo/" target="_blank">Plataforma Virtual</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="cover">
                                        <img src="https://utic.upea.bo/assets/imgs/carreras/1741620426.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <a href="https://inscripcionesgaspetroquimica.upea.bo/" target="_blank">Sistema de
                                            Inscripcion</a>
                                        <a href="https://petroquimica.upea.edu.bo/" target="_blank">Plataforma Virtual</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="cover">
                                        <img src="https://utic.upea.bo/assets/imgs/carreras/1741620514.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <a href="https://inscripcionesartes.upea.bo/" target="_blank">Sistema de
                                            Inscripcion</a>
                                        <a href="https://artesplasticas.upea.edu.bo/" target="_blank">Plataforma Virtual</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="cover">
                                        <img src="https://utic.upea.bo/assets/imgs/carreras/1741620684.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <a href="https://inscripcionesarquitectura.upea.bo/" target="_blank">Sistema de
                                            Inscripcion</a>
                                        <a href="https://arquitectura.upea.edu.bo/" target="_blank">Plataforma Virtual</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="cover">
                                        <img src="https://utic.upea.bo/assets/imgs/carreras/1741620792.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <a href="https://inscripcionespsicomotricidad.upea.bo/" target="_blank">Sistema de
                                            Inscripcion</a>
                                        <a href="https://psicomotricidad.upea.edu.bo/" target="_blank">Plataforma Virtual</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="cover">
                                        <img src="https://utic.upea.bo/assets/imgs/carreras/1741621008.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <a href="https://inscripcioneseducacion.upea.bo/" target="_blank">Sistema de
                                            Inscripcion</a>
                                        <a href="https://parvularia.upea.edu.bo/" target="_blank">Plataforma Virtual</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="cover">
                                        <img src="https://utic.upea.bo/assets/imgs/carreras/1741621216.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <a href="https://inscripcioneseducacion.upea.bo/#" target="_blank">Sistema de
                                            Inscripcion</a>
                                        <a href="https://educacion.upea.edu.b" target="_blank">Plataforma Virtual</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="cover">
                                        <img src="https://utic.upea.bo/assets/imgs/carreras/1741621331.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <a href="https://inscripcioneslinguistica.upea.bo/" target="_blank">Sistema de
                                            Inscripcion</a>
                                        <a href="https://linguistica.upea.edu.bo/" target="_blank">Plataforma Virtual</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="cover">
                                        <img src="https://utic.upea.bo/assets/imgs/carreras/1741621440.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <a href="https://inscripcioneshistoria.upea.bo/" target="_blank">Sistema de
                                            Inscripcion</a>
                                        <a href="https://historia.upea.edu.bo/" target="_blank">Plataforma Virtual</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="cover">
                                        <img src="https://utic.upea.bo/assets/imgs/carreras/1741621595.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <a href="https://inscripcionesdesarrollo.upea.bo/" target="_blank">Sistema de
                                            Inscripcion</a>
                                        <a href="https://desarrollo.upea.edu.bo/" target="_blank">Plataforma Virtual</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="cover">
                                        <img src="https://utic.upea.bo/assets/imgs/carreras/1741621757.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <a href="https://inscripcionespsicologia.upea.bo/" target="_blank">Sistema de
                                            Inscripcion</a>
                                        <a href="https://psicologia.upea.edu.bo/" target="_blank">Plataforma Virtual</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="cover">
                                        <img src="https://utic.upea.bo/assets/imgs/carreras/1741621917.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <a href="https://inscripcionescomunicacion.upea.bo/" target="_blank">Sistema de
                                            Inscripcion</a>
                                        <a href="https://comunicacionsocial.upea.edu.bo/" target="_blank">Plataforma Virtual</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="cover">
                                        <img src="https://utic.upea.bo/assets/imgs/carreras/1741622043.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <a href="https://inscripcionestrabajosocial.upea.bo/" target="_blank">Sistema de
                                            Inscripcion</a>
                                        <a href="https://trabajosocial.upea.edu.bo/" target="_blank">Plataforma Virtual</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="cover">
                                        <img src="https://utic.upea.bo/assets/imgs/carreras/1741622294.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <a href="https://inscripcionessociologia.upea.bo/" target="_blank">Sistema de
                                            Inscripcion</a>
                                        <a href="https://sociologia.upea.edu.bo/" target="_blank">Plataforma Virtual</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="cover">
                                        <img src="https://utic.upea.bo/assets/imgs/carreras/1741622395.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <a href="https://inscripcionesagronomia.upea.bo/" target="_blank">Sistema de
                                            Inscripcion</a>
                                        <a href="https://agronomia.upea.edu.bo/" target="_blank">Plataforma Virtual</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="cover">
                                        <img src="https://utic.upea.bo/assets/imgs/carreras/1741622624.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <a href="https://inscripcioneszootecnia.upea.bo/" target="_blank">Sistema de
                                            Inscripcion</a>
                                        <a href="https://industriapecuaria.upea.edu.bo/" target="_blank">Plataforma Virtual</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="cover">
                                        <img src="https://utic.upea.bo/assets/imgs/carreras/1741622704.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <a href="https://inscripcioneszootecnia.upea.bo/" target="_blank">Sistema de
                                            Inscripcion</a>
                                        <a href="https://veterinaria.upea.edu.bo/" target="_blank">Plataforma Virtual</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="cover">
                                        <img src="https://utic.upea.bo/assets/imgs/carreras/1741622906.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <a href="https://inscripcionescomercio.upea.bo/" target="_blank">Sistema de
                                            Inscripcion</a>
                                        <a href="https://comerciointernacional.upea.edu.bo/" target="_blank">Plataforma Virtual</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="cover">
                                        <img src="https://utic.upea.bo/assets/imgs/carreras/1741623115.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <a href="https://inscripcionesgestion.upea.bo/" target="_blank">Sistema de
                                            Inscripcion</a>
                                        <a href="https://turismo.upea.edu.bo/" target="_blank">Plataforma Virtual</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="cover">
                                        <img src="https://utic.upea.bo/assets/imgs/carreras/1741623255.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <a href="https://inscripcionesadministracion.upea.bo/" target="_blank">Sistema de
                                            Inscripcion</a>
                                        <a href="https://admemp.upea.edu.bo/" target="_blank">Plataforma Virtual</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="cover">
                                        <img src="https://utic.upea.bo/assets/imgs/carreras/1741623408.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <a href="https://inscripcionescontaduria.upea.bo/" target="_blank">Sistema de
                                            Inscripcion</a>
                                        <a href="https://contaduria.upea.edu.bo/" target="_blank">Plataforma Virtual</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="cover">
                                        <img src="https://utic.upea.bo/assets/imgs/carreras/1741623476.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <a href="https://inscripcioneseconomia.upea.bo/" target="_blank">Sistema de
                                            Inscripcion</a>
                                        <a href="https://economia.upea.edu.bo/" target="_blank">Plataforma Virtual</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="cover">
                                        <img src="https://utic.upea.bo/assets/imgs/carreras/1741623547.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <a href="https://inscripcionesambiental.upea.bo/" target="_blank">Sistema de
                                            Inscripcion</a>
                                        <a href="https://ambiental.upea.edu.bo/" target="_blank">Plataforma Virtual</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="cover">
                                        <img src="https://utic.upea.bo/assets/imgs/carreras/1741623648.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <a href="https://inscripcionestextil.upea.bo/" target="_blank">Sistema de
                                            Inscripcion</a>
                                        <a href="https://textil.upea.edu.bo/" target="_blank">Plataforma Virtual</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="cover">
                                        <img src="https://utic.upea.bo/assets/imgs/carreras/1741623981.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <a href="https://inscripcionesautotronica.upea.bo/" target="_blank">Sistema de
                                            Inscripcion</a>
                                        <a href="https://autotronica.upea.edu.bo/" target="_blank">Plataforma Virtual</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="cover">
                                        <img src="https://utic.upea.bo/assets/imgs/carreras/1741624129.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <a href="https://inscripcionesproduccion.upea.bo/" target="_blank">Sistema de
                                            Inscripcion</a>
                                        <a href="https://empresarial.upea.edu.bo/" target="_blank">Plataforma Virtual</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="cover">
                                        <img src="https://utic.upea.bo/assets/imgs/carreras/1741624252.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <a href="https://inscripcioneslaboratoriodental.upea.bo/" target="_blank">Sistema de
                                            Inscripcion</a>
                                        <a href="https://laboratoriodental.upea.edu.bo/" target="_blank">Plataforma Virtual</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="cover">
                                        <img src="https://utic.upea.bo/assets/imgs/carreras/1741624490.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <a href="https://inscripciones.upea.bo/" target="_blank">Sistema de
                                            Inscripcion</a>
                                        <a href="https://nutricion.upea.edu.bo/" target="_blank">Plataforma Virtual</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="cover">
                                        <img src="https://utic.upea.bo/assets/imgs/carreras/1741624702.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <a href="https://inscripciones.upea.bo/" target="_blank">Sistema de
                                            Inscripcion</a>
                                        <a href="https://enfermeria.upea.edu.bo/" target="_blank">Plataforma Virtual</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="cover">
                                        <img src="https://utic.upea.bo/assets/imgs/carreras/1741624801.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <a href="https://inscripcionesodontologia.upea.bo/" target="_blank">Sistema de
                                            Inscripcion</a>
                                        <a href="https://odontologia.upea.edu.bo/" target="_blank">Plataforma Virtual</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="cover">
                                        <img src="https://utic.upea.bo/assets/imgs/carreras/1741624920.png">
                                        <div class="img__back"></div>
                                    </div>
                                    <div class="description">
                                        <a href="https://inscripciones.upea.bo/" target="_blank">Sistema de
                                            Inscripcion</a>
                                        <a href="https://medicina.upea.edu.bo/" target="_blank">Plataforma Virtual</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="doctor__slider-dot mt-80 mt-lg-50 mt-md-40 mt-sm-35 mt-xs-30"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Doctor start -->
    <section class="doctor doctor__background"
        id="carreras" style="padding: 120px 0; position: relative; overflow: hidden; background-color: rgba(216, 242, 244, 0.8);">

        <!-- Capa semitransparente encima de la imagen de fondo -->
        <div
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;
        background: url('image/uno.png') center/cover no-repeat;
        opacity: 0.2; z-index: 0;">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section__title-wrapper doctor__content text-center mb-60 mb-xs-30">
                        <h5 class="section__subtitle color-theme-primary mb-15 mb-xs-10 title-animation">
                            <i class="fab fa-youtube"></i> videos U-TIC
                        </h5>
                        <h2 class="section__title mb-0 " style="font-weight: bold;">
                            <i class="fas fa-video"
                                style="background: linear-gradient(to right, #77ebe3, #11295b); 
                        -webkit-background-clip: text; color: transparent;"></i>
                            NUESTROS VIDEOS
                        </h2>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="swiper doctor__slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="video-wrapper">
                                    <div class="video-container">
                                        <iframe src="https://www.youtube.com/embed/YaR_swyMi0o" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                    <div class="video-description">
                                        <p>Area de desarrollo</p>
                                    </div>
                                </div>


                            </div>
                            <div class="swiper-slide">
                                <div class="video-wrapper">
                                    <div class="video-container">
                                        <iframe src="https://www.youtube.com/embed/wwZY0E1XfNI" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                    <div class="video-description">
                                        <p>Área de Redes</p>
                                    </div>
                                </div>


                            </div>
                            <div class="swiper-slide">
                                <div class="video-wrapper">
                                    <div class="video-container">
                                        <iframe src="https://www.youtube.com/embed/aYdqyj7qq-Y" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                    <div class="video-description">
                                        <p>Área de data Center</p>
                                    </div>
                                </div>


                            </div>
                            <div class="swiper-slide">
                                <div class="video-wrapper">
                                    <div class="video-container">
                                        <iframe src="https://www.youtube.com/embed/biabkS0g_y8" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                    <div class="video-description">
                                        <p>Oficinas de UTIC Universidad Pública De El Alto</p>
                                    </div>
                                </div>


                            </div>
                            <div class="swiper-slide">
                                <div class="video-wrapper">
                                    <div class="video-container">
                                        <iframe src="https://www.youtube.com/embed/0S26Sy9xDD8" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                    <div class="video-description">
                                        <p>Moodle 4.5</p>
                                    </div>
                                </div>


                            </div>
                            <div class="swiper-slide">
                                <div class="video-wrapper">
                                    <div class="video-container">
                                        <iframe src="https://www.youtube.com/embed/jaCq63NJ-QQ" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                    <div class="video-description">
                                        <p>GAME UTIC</p>
                                    </div>
                                </div>


                            </div>
                            <div class="swiper-slide">
                                <div class="video-wrapper">
                                    <div class="video-container">
                                        <iframe src="https://www.youtube.com/embed/nMMagW1SMlA" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                    <div class="video-description">
                                        <p>OPTIMIZACIÓN Y CONTROL DE EQUIPOS</p>
                                    </div>
                                </div>


                            </div>
                            <div class="swiper-slide">
                                <div class="video-wrapper">
                                    <div class="video-container">
                                        <iframe src="https://www.youtube.com/embed/rQFHH9fXkpA" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                    <div class="video-description">
                                        <p>SISTEMA PUNTUAL.UPEA.BO</p>
                                    </div>
                                </div>


                            </div>
                            <div class="swiper-slide">
                                <div class="video-wrapper">
                                    <div class="video-container">
                                        <iframe src="https://www.youtube.com/embed/i7omeLNS38Q" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                    <div class="video-description">
                                        <p>zona WiFi para la carrera de medicina.</p>
                                    </div>
                                </div>


                            </div>
                            <div class="swiper-slide">
                                <div class="video-wrapper">
                                    <div class="video-container">
                                        <iframe src="https://www.youtube.com/embed/K7OjgEb0R2s" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                    <div class="video-description">
                                        <p>UTIC</p>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="doctor__slider-dot mt-80 mt-lg-50 mt-md-40 mt-sm-35 mt-xs-30"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .video-wrapper {
            text-align: center;
            margin: 10px;
            margin-top: 30px !important;
            /* Espacio arriba */
            margin-bottom: 30px !important;
            /* Espacio abajo */
            margin-left: 20px !important;
            /* Espacio a la izquierda */
            margin-right: 20px !important;
            /* Espacio a la derecha */
            position: relative;
            /* Para permitir que los elementos hijos se muevan fuera del contenedor */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        @keyframes zoomIn {
            0% {
                transform: scale(0.8);
                opacity: 0;
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        .video-container {
            position: relative;
            width: 400px;
            height: 300px;
            max-width: 100%;
            margin: 0 auto;
            overflow: hidden;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #fff;
            animation: zoomIn 1.5s ease-in-out;
            transition: transform 0.3s ease;
        }

        .video-wrapper:hover .video-container {
            transform: scale(1.2);
            /* Aumenta el tamaño del video fuera de su contenedor */
            z-index: 10;
            /* Pone el video encima de otros elementos */
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
            /* Sombra al pasar el mouse */
        }

        .video-container iframe {
            width: 100%;
            height: 100%;
            border-radius: 8px;
        }

        .video-description {
            margin-top: 10px;
            padding: 10px;
            font-weight: bold;
            background: linear-gradient(to right, #77ebe3, #11295b);
            border-radius: 8px;
            box-shadow: 0 3px 4px rgba(0, 0, 0, 0.1);
        }

        .video-description p {
            font-weight: bold;
            margin: 0;
            font-size: 1em;
            color: #fff;
        }
    </style>
    <section class="contact" style="position: relative; overflow: hidden;">
        <!-- Capa semitransparente encima de la imagen de fondo -->
        <div
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;
                background: url('image/dos.png') center/cover no-repeat;
                opacity: 0.2; /* Opacidad para suavizar la imagen */
                z-index: -1;">
        </div>
        <div class="content" style="display: flex; align-items: center; justify-content: center; margin-bottom: 20px;">
            <!-- Icono de ubicación al lado del título -->
            <img src="image/icons.gif" alt="Icono de ubicación" style="width: 50px; height: 50px; margin-right: 10px;">
            <h2>DATOS DE CONTACTO</h2>
        </div>

        <p style="font-family: 'Pattanakarn', sans-serif; font-weight: 100; text-align: center; font-size: 2rem;">
            En U-TIC, nos dedicamos a proporcionar soluciones tecnológicas avanzadas y servicios de comunicación eficientes
            para satisfacer las necesidades de nuestra comunidad. Nos comprometemos a ofrecer un entorno seguro y accesible
            para el intercambio de información, promoviendo la innovación y la colaboración.
        </p>

        <div class="containere">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon">
                        <span class="material-symbols-outlined">location_on</span>
                    </div>
                    <div class="text">
                        <h3>Dirección</h3>
                        <p>Villa Esperanza Av. Sucre A - Edificio Tecnológico Torre &quot;A&quot; Segundo Piso</p>
                    </div>
                </div>

                <div class="box">
                    <div class="icon">
                        <!-- Icono de teléfono -->
                        <span class="material-symbols-outlined">phone</span>
                    </div>

                    <div class="text">
                        <h3>Teléfono</h3>
                        <p>75232232</p>
                    </div>
                </div>

                <div class="box">
                    <div class="icon">
                        <!-- Icono de email -->
                        <span class="material-symbols-outlined">mail</span>
                    </div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>utic@upea.edu.bo</p>
                    </div>
                </div>

                <div class="social">
                    <ul>
                        <li><a href="https://www.facebook.com/uticupea" target="_blank">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a></li>
                        <li><a href="" target="_blank">
                                <i class="fa-brands fa-instagram"></i>
                            </a></li>
                        <li><a href="" target="_blank">
                                <i class="fa-brands fa-tiktok"></i>
                            </a></li>
                        <li><a href="https://wa.me/59177728645" target="_blank">
                                <i class="fa-brands fa-whatsapp"></i>
                            </a></li>
                    </ul>
                </div>
            </div>
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d956.4127373120543!2d-68.19365072506798!3d-16.49320279071786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915edf53a9c8ea57%3A0x1a3fe3118e4703f8!2sEdificio%20Tecnol%C3%B3gico%20Torre%20A%20(Carrera%20de%20Ingenier%C3%ADa%20de%20Sistemas)!5e0!3m2!1ses!2sbo!4v1719496124572!5m2!1ses!2sbo"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <!-- Link de Google Fonts para iconos -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined&display=swap" />

    <style>
        .icon {
            display: inline-flex;
            align-items: center;
        }

        .material-symbols-outlined {
            font-size: 36px;
            background: linear-gradient(to right, #77ebe3, #11295b);
            -webkit-background-clip: text;
            color: transparent;
            margin-right: 8px;
        }

        .social ul {
            list-style-type: none;
            display: flex;
            gap: 20px;
        }

        .social li {
            display: inline-block;
            position: relative;
        }

        .social i {
            font-size: 36px;
            padding: 10px;
            border-radius: 50%;
            /* Mantiene la forma circular */
            background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><radialGradient id="a11" cx=".66" fx=".66" cy=".3125" fy=".3125" gradientTransform="scale(1.5)"><stop offset="0" stop-color="%2358EFFF"></stop><stop offset=".3" stop-color="%2358EFFF" stop-opacity=".9"></stop><stop offset=".6" stop-color="%2358EFFF" stop-opacity=".6"></stop><stop offset=".8" stop-color="%2358EFFF" stop-opacity=".3"></stop><stop offset="1" stop-color="%2358EFFF" stop-opacity="0"></stop></radialGradient><circle transform-origin="center" fill="none" stroke="url(%23a11)" stroke-width="15" stroke-linecap="round" stroke-dasharray="200 1000" stroke-dashoffset="0" cx="100" cy="100" r="70"><animateTransform type="rotate" attributeName="transform" calcMode="spline" dur="2" values="360;0" keyTimes="0;1" keySplines="0 0 1 1" repeatCount="indefinite"></animateTransform></circle><circle transform-origin="center" fill="none" opacity=".2" stroke="%2358EFFF" stroke-width="15" stroke-linecap="round" cx="100" cy="100" r="70"></circle></svg>');
            background-size: 30px 30px;
            border: 4px solid white;
            /* Borde blanco alrededor del ícono */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.6);
            /* Sombra negra para resaltar */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .social i:hover {
            transform: scale(1.2);
            /* Efecto de escala al pasar el ratón */
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.8);
            /* Aumenta la sombra cuando el ícono se resalta */
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const socialIcons = document.querySelectorAll('.social i');
            socialIcons.forEach(icon => {
                // Animación para el fondo SVG
                icon.addEventListener('click', () => {
                    icon.style.backgroundImage =
                        "url('data:image/svg+xml,<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 200 200\"><radialGradient id=\"a11\" cx=\".66\" fx=\".66\" cy=\".3125\" fy=\".3125\" gradientTransform=\"scale(1.5)\"><stop offset=\"0\" stop-color=\"%2358EFFF\"></stop><stop offset=\".3\" stop-color=\"%2358EFFF\" stop-opacity=\".9\"></stop><stop offset=\".6\" stop-color=\"%2358EFFF\" stop-opacity=\".6\"></stop><stop offset=\".8\" stop-color=\"%2358EFFF\" stop-opacity=\".3\"></stop><stop offset=\"1\" stop-color=\"%2358EFFF\" stop-opacity=\"0\"></stop></radialGradient><circle transform-origin=\"center\" fill=\"none\" stroke=\"url(%23a11)\" stroke-width=\"15\" stroke-linecap=\"round\" stroke-dasharray=\"200 1000\" stroke-dashoffset=\"0\" cx=\"100\" cy=\"100\" r=\"70\"><animateTransform type=\"rotate\" attributeName=\"transform\" calcMode=\"spline\" dur=\"2\" values=\"360;0\" keyTimes=\"0;1\" keySplines=\"0 0 1 1\" repeatCount=\"indefinite\"></animateTransform></circle><circle transform-origin=\"center\" fill=\"none\" opacity=\".2\" stroke=\"%2358EFFF\" stroke-width=\"15\" stroke-linecap=\"round\" cx=\"100\" cy=\"100\" r=\"70\"></circle></svg>')";
                });
            });
        });
    </script>
    <!-- Footer area start -->
    <footer>
        <section class="footer-2__area-common theme-bg-color-900 overflow-hidden"
            style="padding: 120px 0; position: relative; overflow: hidden; background-color: rgba(216, 242, 244, 0.8);"
            data-background="assets/imgs/footer-2/background.png">
            <!-- Capa semitransparente encima de la imagen de fondo -->
            <div
                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;
            background: url('image/uno.png') center/cover no-repeat;
            opacity: 0.2; z-index: -1;">
            </div>
            <div class="container">
                <div class="row mb-minus-50">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-2__widget footer-2__widget-item-1">
                            <div class="footer-2__logo mb-30 mb-xs-25">
                                <a href="index.html">
                                    <img class="img-fluid" src="assets/imgs/logo/logo-upea.png" alt="logo not found">
                                </a>
                                <a href="index.html">
                                    <img class="img-fluid" src="assets/imgs/logo/UTICC.png" alt="logo not found">
                                </a>
                            </div>


                            <div class="footer-2__content">
                                <p class="mb-0" style="text-align: justify;">
                                    "U-TIC, la Unidad de Tecnologías de Información y Comunicación de la
                                    UPEA, garantizando innovación y eficiencia en nuestros servicios tecnológicos."
                                </p>

                            </div>

                        </div>
                    </div>

                    <div class="col-lg-2 col-6">
                        <div class="footer-2__widget footer-2__widget-item-2">
                            <div class="footer-2__widget-title">
                                <h4>Servicios</h4>
                            </div>
                            <div class="footer-2__link">
                                <ul>
                                    <li><a href="#personal">Profesionales</a></li>
                                    <li><a href="#anuncios">Cursos</a></li>
                                    <li><a href="#paginas">Páginas</a></li>
                                    <li><a href="#documentos">Documentos</a></li>
                                    <li><a href="#carreras">Carreras</a></li>
                                    <li><a href="#galerias">Galerías</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <div class="footer-2__widget footer-2__widget-item-3">
                            <div class="footer-2__widget-title">
                                <h4>Más</h4>
                            </div>
                            <div class="footer-2__link footer-2__link-location">
                                <ul>
                                    <!-- Enlace para abrir Gmail -->
                                    <li><a href="https://mail.google.com/mail/?view=cm&fs=1&to=utic@upea.edu.bo"
                                            target="_blank">
                                            <i class="fa-solid fa-envelope"></i> utic@upea.edu.bo</a></li>

                                    <!-- Enlace para abrir ubicación en Google Maps -->
                                    <li><a href="https://www.google.com/maps?q=Villa+Esperanza+Av.+Sucre+A+-+Edificio+Tecnol%C3%B3gico+Torre+%22A%22+Segundo+Piso"
                                            target="_blank">
                                            <i class="fa-solid fa-location-dot"></i> Villa Esperanza Av. Sucre A - Edificio Tecnológico Torre &quot;A&quot; Segundo Piso</a>
                                    </li>
                                </ul>
                            </div>


                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-2__widget footer-2__widget-item-4">
                            <div class="footer-2__widget-title">
                                <h4>Comunícate con Nosotros</h4>
                            </div>

                            <div class="footer-2__subscribe-content">
                                <p class="mb-30 mb-xs-25 color-white">Obtén mas información sobre nosotros con
                                    en nuestras redes sociales para mas información acerca de la U-TIC</p>



                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-2__bottom-wrapper">
                <div class="container">
                    <div class="footer-2__bottom">
                        <div class="row">
                            <div class="col-12"> <!-- Cambié col-lg-6 por col-12 para que ocupe todo el ancho -->
                                <div class="footer-2__copyright"
                                    style="display: flex; justify-content: center; align-items: center; width: 100%; position: relative;">
                                    <p class="mb-0" style="font-weight: bold; text-align: center; margin: 0;">
                                        © <a href="index.html"
                                            style="font-weight: bold; text-decoration: none; color: inherit;">
                                            Universidad Pública de El Alto 2025
                                        </a> | U-TIC – Web Developers: CAARLOZ (v1) &
                                        <a href="https://www.linkedin.com/in/ana-cristina-mamani-quispe-6a5296331/"
                                            target="_blank"
                                            style="font-weight: bold; text-decoration: none; color: inherit;">
                                            ACMQ (v2)
                                        </a>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </footer>
    <!-- Footer area end -->
</main>


<style>
    .circles {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    .circles li {
        position: absolute;
        display: block;
        list-style: none;
        width: 20px;
        height: 20px;
        background: rgba(255, 255, 255, 0.2);
        animation: animate 25s linear infinite;
        bottom: -150px;
    }

    /* Estilos para cada círculo individual */
    .circles li:nth-child(1) {
        left: 25%;
        width: 80px;
        height: 80px;
        animation-delay: 0s;
    }

    .circles li:nth-child(2) {
        left: 10%;
        width: 20px;
        height: 20px;
        animation-delay: 2s;
        animation-duration: 12s;
    }

    .circles li:nth-child(3) {
        left: 70%;
        width: 20px;
        height: 20px;
        animation-delay: 4s;
    }

    .circles li:nth-child(4) {
        left: 40%;
        width: 60px;
        height: 60px;
        animation-delay: 0s;
        animation-duration: 18s;
    }

    .circles li:nth-child(5) {
        left: 65%;
        width: 20px;
        height: 20px;
        animation-delay: 0s;
    }

    .circles li:nth-child(6) {
        left: 75%;
        width: 110px;
        height: 110px;
        animation-delay: 3s;
    }

    .circles li:nth-child(7) {
        left: 35%;
        width: 150px;
        height: 150px;
        animation-delay: 7s;
    }

    .circles li:nth-child(8) {
        left: 50%;
        width: 25px;
        height: 25px;
        animation-delay: 15s;
        animation-duration: 45s;
    }

    .circles li:nth-child(9) {
        left: 20%;
        width: 15px;
        height: 15px;
        animation-delay: 2s;
        animation-duration: 35s;
    }

    .circles li:nth-child(10) {
        left: 85%;
        width: 150px;
        height: 150px;
        animation-delay: 0s;
        animation-duration: 11s;
    }

    @keyframes animate {
        0% {
            transform: translateY(0) rotate(0deg);
            opacity: 1;
            border-radius: 0;
        }

        100% {
            transform: translateY(-1000px) rotate(720deg);
            opacity: 0;
            border-radius: 50%;
        }
    }
</style>
<ul class="circles">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
</ul>
<!-- JS here -->
<script src="https://utic.upea.bo/assets/js/vendor/jquery-3.7.1.min.js"></script>
<script src="https://utic.upea.bo/assets/js/plugins/waypoints.min.js"></script>
<script src="https://utic.upea.bo/assets/js/vendor/bootstrap.bundle.min.js"></script>
<script src="https://utic.upea.bo/assets/js/plugins/meanmenu.min.js"></script>
<script src="https://utic.upea.bo/assets/js/plugins/odometer.min.js"></script>
<script src="https://utic.upea.bo/assets/js/plugins/swiper.min.js"></script>
<script src="https://utic.upea.bo/assets/js/plugins/wow.js"></script>
<script src="https://utic.upea.bo/assets/js/vendor/magnific-popup.min.js"></script>
<script src="https://utic.upea.bo/assets/js/vendor/type.js"></script>
<script src="https://utic.upea.bo/assets/js/plugins/nice-select.min.js"></script>
<script src="https://utic.upea.bo/assets/js/vendor/jquery-ui.min.js"></script>
<script src="https://utic.upea.bo/assets/js/vendor/jquery.appear.js"></script>
<script src="https://utic.upea.bo/assets/js/plugins/parallax.min.js"></script>
<script src="https://utic.upea.bo/assets/js/plugins/parallax-scroll.js"></script>
<script src="https://utic.upea.bo/assets/js/plugins/gsap.min.js"></script>
<script src="https://utic.upea.bo/assets/js/plugins/ScrollTrigger.min.js"></script>
<script src="https://utic.upea.bo/assets/js/plugins/SplitText.js"></script>
<script src="https://utic.upea.bo/assets/js/plugins/tween-max.min.js"></script>
<script src="https://utic.upea.bo/assets/js/plugins/draggable.min.js"></script>
<script src="https://utic.upea.bo/assets/js/plugins/smoothscroll.js"></script>
<script src="https://utic.upea.bo/assets/js/vendor/ajax-form.js"></script>
<script src="https://utic.upea.bo/assets/js/main.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/mo-js@0.288.1/dist/mo.min.js"></script>






</body>

</html>