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
        <style type="text/css">
            #contenido{
                background-color: white;
                color: black;
                font-size:1.5em ;
            }
            #contenido #mostrar{
                background-color: #ccc;
                color: black;
                border: 1px solid black;
                font-size:1.5em ;
                width: 90%;
                margin: auto;
                margin-top: 5px;
                padding: 25px;
            }
           #contenido div h2{
                width: 90%;
                margin: auto;
                background-color: black;
                min-height: 50px;
                color: yellow;
                border: 1px solid black;
                text-align: center;
                margin-bottom: -5px;
            }
            #contenido #empire tr th {
                background-color: black;
                color: white;
                font-size: 1.5em;
                padding: 6px;
                min-width: 200px;
                margin: 2px;

            }
            #contenido #empire tr td{
                padding: 6px;
                border: 2px solid black;
                

            }
            #contenido #empire{
                margin: auto;
                margin-top: 5px;
                border: 2px solid black;
                text-align: center;
            }
        </style>
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
            <section id="contenido" class="contenido">
                @yield('content')
            </section>
 
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