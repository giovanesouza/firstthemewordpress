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

            <div class="clear"></div>

        </div>

    </section>


    <!-- SEÇÃO DE CONTATO -->
    <section class="contato">

        <div class="center">
            <div class="w50 contato-info">
                <h2>A mais importante, <br /> primeira conversa.</h2>
                <p><strong>Telefone:</strong> (81) 98888-8888</p>
                <p><strong>Telefone:</strong> (81) 98888-8888</p>
                <p><strong>Telefone:</strong> (81) 98888-8888</p>


                <!-- ÁREA D MAPA -->
                <div class="mapa-container">

                    <div id="mapa">


                    </div>


                </div>
            </div>


            <!-- ÁREA DO FORMULÁRIO -->
            <div class="w50 contato-form">

                <form>

                    <input type="text" placeholder="Nome" />
                    <input type="text" placeholder="E-mail" />
                    <input type="text" placeholder="Telefone" />

                    <select>
                        <option value="">Geral</option>
                        <option value="">Suporte</option>
                    </select>

                    <textarea placeholder="Mensagem"></textarea>

                    <input type="submit" value="Enviar" />

                </form>

            </div>


            <div class="clear"></div>

        </div>


    </section>






    <!-- FOOTER / SEÇÃO METODOLOGIA -->
    <footer style="padding:60px 0;">
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

    <!-- BIBLIOTECA DO GOOGLE MAPS -->
    <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4'></script>

    <!-- PARA EXIBIÇÃO DO MAPA -->
    <script src="js/map.js"></script>

    <!-- EXIBE/OCULTA O MENU MOBILE -->
    <script>
        //Menu responsivo.
        $('.menu-mobile i').click(function () {
            $('.menu-mobile').find('ul').slideToggle();
        })
    </script>
</body>

</html>