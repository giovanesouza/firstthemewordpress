<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- ICON DO SITE -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

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
        </div>

    </section>


    <!-- SEÇÃO SOBRE EQUIPE -->
    <section class="sobre-equipe">

        <div class="cente">

            <div class="w50 sobre-equipe-texto">
                <h2>Uma equipe estratégica para um trabalho incrível</h2>
                <p>Com foco permanente na geração de resultados para empresas, atuamos na consultoria estratégica e na
                    criação e implementação de soluções de comunicação criativas, conssistentes e adequadas às
                    necessidades e características de cada companhia. Para isso, trabalhamos sempre em parceria e
                    colaboração com interfaces e executivos das organizações, mantendo completo envolvimento com os
                    negócios de cada cliente.</p>
            </div>

            <div class="w50">
                <img src="images/foto-equipe.png" />
            </div>


            <!-- Retorna o fluxo do site -->
            <div class="clear"></div>
        </div>


    </section>


    <!-- FOTOS -->
    <section class="sobre-imagens">

        <div class="center">

            <div class="img-sobre">
                <img src="images/imagem-sobre.png" />
            </div>

            <div class="img-sobre">
                <img src="images/imagem-sobre.png" />
            </div>

            <div class="img-sobre">
                <img src="images/imagem-sobre.png" />
            </div>

            <div class="img-sobre">
                <img src="images/imagem-sobre.png" />
            </div>

        </div>


    </section>



    <!-- FOOTER / SEÇÃO METODOLOGIA -->
    <footer>
        <section class="metodologia">
            <div class="center">
                <h2>Conheça nossa Metodologia</h2>
                <p>O que acha de fazermos o que mais gostamos de fazer? Conversar!<br />Entre em contato por e-mail ou
                    telefone.</p>
                <a href="/contato">Entrar Contato</a>
            </div>
        </section>
        <div class="center">
            <div class="col-footer">
                <h2>Suporte</h2>
                <a href="">Contato</a>
                <a href="">FAQ</a>
            </div>
            <div class="col-footer">
                <h2>Suporte</h2>
                <a href="">Contato</a>
                <a href="">FAQ</a>
            </div>
            <div class="col-footer">
                <h2>Suporte</h2>
                <a href="">Contato</a>
                <a href="">FAQ</a>
            </div>
            <div style="width: 40%;text-align: right;" class="col-footer">
                <img src="images/logo-footer.png" />
            </div>
        </div>
    </footer>


        <!-- JQUERY -->
        <script src="js/jquery.js"></script>

    <!-- EXIBE/OCULTA O MENU MOBILE -->
    <script>
        //Menu responsivo.
        $('.menu-mobile i').click(function () {
            $('.menu-mobile').find('ul').slideToggle();
        })
    </script>
</body>

</html>