<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bordes</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Yeon+Sung&display=swap" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>

        <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid page-home p-0">

            <div class="header p-1">
                <div class="row m-0">
                    <div class="col-6 col-sm-3 content-img">
                        <img src="{{ asset('assets/logo_sin_fondo.png') }}" alt="">
                    </div>

                    <div class="col-6 d-none d-sm-flex align-items-center justify-content-center">
                        <h3 class="title-header text-center m-0">Fundación Cultural <br> BORDES</h3>
                    </div>

                    <div class="col-6 col-sm-3 content-social-networks d-flex align-items-center  justify-content-end">
                        <a href=""><i class="bi bi-facebook fb"></i></a>
                        <a href=""><i class="bi bi-whatsapp wp"></i></a>
                        <a href=""><i class="bi bi-instagram ig"></i></a>
                    </div>
                </div>
            </div>

            <div class="banner">
                <img src="{{ asset('assets/banner3.jpg') }}" alt="">
                <div class="text-float d-none d-md-block">
                    <h3>Registra tu Obra!!!</h3>
                    <p>¡Anímate a participar, es fácil y totalmente gratis</p>
                    <button type="button" class="btn btn--primary btn-outline-warning">
                        Registrarme
                    </button>
                </div>
            </div>

            <div class="container-sections">

                <div class="row m-0 section-register">
                    <div class="col-12 col-md-6">
                        <div class="register-access">

                            <div class="title">
                                <i class="bi bi-film"></i>
                                <h3 class="m-0">Cineastas</h3>
                            </div>
                            
                            <p>Inscriba su obra en festivales.</p>
                            
                            <button type="button" class="btn btn--primary btn-outline-warning">
                                Registrarse
                            </button>
                        </div>

                        <div class="register-access">

                            <div class="title">
                                <i class="bi bi-camera-reels"></i>
                                <h3 class="m-0">Festivales</h3>
                            </div>
                            
                            <p>¿Eres un organizador?</p>
                            
                            <button type="button" class="btn btn--primary btn-outline-warning">
                                Acceder
                            </button>

                        </div>
                    </div>
                    
                    <div class="col-12 col-md-6 content-img">
                        <img src="{{ asset('assets/img1.jpg') }}" alt="">
                    </div>

                </div>

                <div class="separate my-4"></div>

                <div class="section-introduction my-4">
                    <div class="row m-0">
                        <div class="col-12 col-md-6 align-self-center">
                            <div class="swiper-container mt-5 mt-md-0">
                                <div class="swiper mySwiper5">
                                    <div class="swiper-wrapper">

                                        <div class="swiper-slide">
                                            <img src="{{ asset('assets/post1.jpg') }}" alt="">
                                        </div>

                                        <div class="swiper-slide">
                                            <img src="{{ asset('assets/post2.jpg') }}" alt="">
                                        </div>

                                        <div class="swiper-slide">
                                            <img src="{{ asset('assets/post3.jpg') }}" alt="">
                                        </div>

                                        <div class="swiper-slide">
                                            <img src="{{ asset('assets/post4.jpg') }}" alt="">
                                        </div>

                                        <div class="swiper-slide">
                                            <img src="{{ asset('assets/post5.jpg') }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <h3 class="mt-5 mt-md-0">El Ojo Iluso</h3>
                            <p>
                                Con el nombre <strong>Ojo Iluso</strong> se evoca al proceso óptico por el cual la animación ocurre en nuestro cerebro al generar movimiento a partir de la ilusión producida por la rapidez de exposición a imágenes en secuencia.
                                <br>
                                <br>
                                En honor a este abismo de creatividad y como una invitación a sumergirnos en él, se ha creado este espacio de encuentro para <strong>creadores, estudiosos y aficionados</strong>. Buscando mostrar no sólo su fuerza en la narrativa cinematográfica actual sino la presencia de otro tipo de discursos construidos en este medio de expresión visual: los GIFs, memes, stickers, emoticones, headers, símbolos para redes sociales, elementos de interfaz, banners, promociones, y cualquier tipo de elemento generado a partir de la ilusión de un ojo.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="section-categories my-4 py-5">
                    <h3 class="mb-5 text-center title-section">Conoce algunas de las categorias que conforman el festival</h3>

                    <div class="swiper swiper-categories">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <img src="{{asset('assets/categoria1.jpg')}}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{asset('assets/categoria2.jpg')}}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{asset('assets/categoria3.jpg')}}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{asset('assets/categoria4.jpg')}}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{asset('assets/categoria5.jpg')}}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{asset('assets/categoria6.jpg')}}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{asset('assets/categoria7.jpg')}}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{asset('assets/categoria8.jpg')}}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{asset('assets/categoria9.jpg')}}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{asset('assets/categoria10.jpg')}}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{asset('assets/categoria11.jpg')}}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{asset('assets/categoria12.jpg')}}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{asset('assets/categoria13.jpg')}}" alt="">
                            </div>

                            <div class="swiper-slide">
                                <img src="{{asset('assets/categoria14.jpg')}}" alt="">
                            </div>
                        </div>

                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>

                <div class="section-judges my-4 py-5">

                <h3 class="mb-4 text-center title-section">Conoce parte del Jurado</h3>

                    <div class="swiper swiper-judges">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{asset('assets/juez1.jpg')}}" />
                            </div>
                            
                            <div class="swiper-slide">
                                <img src="{{asset('assets/juez2.jpg')}}" />
                            </div>
                            
                            <div class="swiper-slide">
                                <img src="{{asset('assets/juez3.jpg')}}" />
                            </div>
                            
                            <div class="swiper-slide">
                                <img src="{{asset('assets/juez5.jpg')}}" />
                            </div>
                            
                            <div class="swiper-slide">
                                <img src="{{asset('assets/juez6.jpg')}}" />
                            </div>
                            
                            <div class="swiper-slide">
                                <img src="{{asset('assets/juez7.jpg')}}" />
                            </div>
                            
                            <div class="swiper-slide">
                                <img src="{{asset('assets/juez8.jpg')}}" />
                            </div>
                            
                            <div class="swiper-slide">
                                <img src="{{asset('assets/juez9.jpg')}}" />
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>

            </div>
        </div>
 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>

    <script>
        $(document).ready(function() {
    
            +function() {
                var swiper5 = new Swiper(".mySwiper5", {
                    grabCursor: true,
                    effect: "creative",
                    loop: true,
                    autoplay: {
                        delay: 4000,
                        disableOnInteraction: false,
                    },
                    creativeEffect: {
                        prev: {
                            shadow: true,
                            translate: ["-125%", 0, -800],
                            rotate: [0, 0, -90],
                        },
                        next: {
                            shadow: true,
                            translate: ["125%", 0, -800],
                            rotate: [0, 0, 90],
                        },
                    },
                });

                var swiper = new Swiper(".swiper-categories", {
                    slidesPerView: 1,
                    spaceBetween: 30,
                    autoplay: {
                        delay: 3600,
                        disableOnInteraction: false,
                    },
                    breakpoints: {
                        768: {
                            slidesPerView: 3,
                            spaceBetween: 30,
                        },
                        1600: {
                            slidesPerView: 4,
                            spaceBetween: 40,
                        },
                    },

                    // Navigation arrows
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                });

                
                var swiper = new Swiper(".swiper-judges", {
                    effect: "coverflow",
                    grabCursor: true,
                    centeredSlides: true,
                    slidesPerView: "auto",
                    coverflowEffect: {
                        rotate: 50,
                        stretch: 0,
                        depth: 100,
                        modifier: 1,
                        slideShadows: true,
                    },
                    pagination: {
                        el: ".swiper-pagination",
                    },
                });
            }();
        });
    </script>
</html>
