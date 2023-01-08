<!-- VARIÁVEL GLOBAL -->
<?php
$title = get_the_title(); // Pega o título da página e ARMAZENA NA VARIÁVEL $title
?>

<!-- FOOTER / SEÇÃO METODOLOGIA -->
<footer <?php if ($title == 'Contato') {
    echo 'style=padding:20px 0;';
} ?>>
    <!-- SE ESTIVER NA PÁG CONTATO, ALTERA O PADDING -->

    <?php

    // VERIFICAÇÃO - insere a seção METODOLOGIA em todas as páginas, EXCETO na CONTATO e 404
    if ($title != 'Contato' && is_404() == false) {

        ?>

        <section class="metodologia">
            <div class="center">
                <h2>Conheça nossa Metodologia</h2>
                <p>O que acha de fazermos o que mais gostamos de fazer? Conversar!<br />Entre em contato por e-mail ou
                    telefone.</p>
                <a href="/contato">Entrar Contato</a>
            </div>
        </section>

        <?php
    }

    ?>

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
            <img src="<?php echo get_theme_root_uri(); ?>/temaOneWordPress/images/logo-footer.png" />
        </div>
    </div>
</footer>


<!-- PADRÃO DO WP -->
<?php wp_footer(); ?>


<!-- JQUERY -->
<script src="<?php echo get_theme_root_uri(); ?>/temaOneWordPress/js/jquery.js"></script>

<!-- BIBLIOTECA PARA O SLIDER -->
<script src="<?php echo get_theme_root_uri(); ?>/temaOneWordPress/js/slick.min.js"></script>

<!-- GOOGLE API KEY - MAPA -->
<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4'></script>

<script src="<?php echo get_theme_root_uri(); ?>/temaOneWordPress/js/map.js"></script>

<script>
    // Ativa o slider slick - SEÇÃO clientes-slider
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


    // Ativa o slider slick - SEÇÃO depoimentos
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