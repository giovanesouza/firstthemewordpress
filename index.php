<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />

    <!-- ICON -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" />

    <!-- CSS EXTERNO -->
    <link rel="stylesheet" href="style.css" />
    <title>Template One WordPress</title>
</head>

<body>

    <section class="topo">

        <div class="center">

            <header>
                <div class="logo"> <img src="images/logo.png" alt="logo" /></div>
            </header>

            <!-- MENU DESKTOP -->
            <ul class="menu-desktop">
                <li><a href="">Home</a></li>
                <li><a href="">Sobre</a></li>
                <li><a href="">Contato</a></li>
            </ul>

            <!-- MENU MOBILE -->
            <div class="menu-mobile">
                <i class="fas fa-align-right"></i>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </div><!--menu-mobile-->

            <div class="clear"></div>
            <br />
            <br />

            <div class="w50 time-descricao">
                <h2>Melhore a comunicação com seu cliente e time.</h2>
                <p>Consultoria especializada em startups, empresas, principalmente, pessoas.</p>
                <a href="" target="_blank">Ver demonstração</a>
            </div>

            <div class="w50 time-imagem"> <img src="images/equipe.png" alt="logo" /></div>

            <div class="clear"></div>

        </div>

    </section>


    <div class="circle"><i class="fas fa-angle-down"></i></div>


    <!-- SEÇÃO DO SLIDER -->
    <section class="clientes-slider">

        <div class="center">

            <div style="max-width: 700px;margin: 0 auto;overflow: hidden;" class="slider-container">

                <img src="images/amazon.png" />

                <img src="images/costco.png" />
                <img src="images/dominos.png" />
                <img src="images/uber.png" />
                <img src="images/walmart.png" />
                <img src="images/amazon.png" />
                <img src="images/costco.png" />
                <img src="images/dominos.png" />
                <img src="images/uber.png" />
                <img src="images/walmart.png" />

            </div>

        </div>
    </section>




    <section class="diferenciais">

        <div class="center">
            <h2>Contribuímos de ponta a ponta</h2>

            <div class="icons-diferenciais">

                <div class="box-single-diferenciais">
                    <img src="images/icon1.png" />
                    <h3>Ambientes Mobile</h3>
                    <p>Garanta que toda sua comunicação esteja alinhada com seu propósito, cada palavra conta.</p>
                </div>

                <div class="box-single-diferenciais">
                    <img src="images/icon2.png" />
                    <h3>Ambientes Mobile</h3>
                    <p>Garanta que toda sua comunicação esteja alinhada com seu propósito, cada palavra conta.</p>
                </div>

                <div class="box-single-diferenciais">
                    <img src="images/icon3.png" />
                    <h3>Ambientes Mobile</h3>
                    <p>Garanta que toda sua comunicação esteja alinhada com seu propósito, cada palavra conta.</p>
                </div>

            </div>

        </div>

    </section>








    <!-- BIBLIOTECA PARA O SLIDER -->
    <script src="js/jquery.js"></script>
    <script src="js/slick.min.js"></script>

    <script>
        // Ativa o slider slick
        $('section.clientes-slider .slider-container').slick({
            dots: true,
            arrows: false,
            infinite: false,
            speed: 1000,
            slidesToShow: 4,
            autoplay: true,
            centerMode: false,
            autoplaySpeed: 3000,
            pauseOnHover: false,

            //  Configurações do slider em telas menores
            responsive:
                [
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2
                        }
                    }
                ]
        });

        $('section.depoimentos .depoimentos-box').slick({
            dots: true,
            arrows: false,
            infinite: true,
            speed: 1000,
            slidesToShow: 1,
            centerMode: false
        });
    </script>

    <!-- EXIBE/OCULTA O MENU MOBILE -->
    <script>
        //Menu responsivo.
        $('.menu-mobile i').click(function () {
            $('.menu-mobile').find('ul').slideToggle();
        })
    </script>
</body>

</html>