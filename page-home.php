<!-- COMENTÁRIO PARA CRIAÇÃO DE MODELO (TEMPLATE) -->
<?php
// Template Name: Home
?>


<!-- PEGA CONTEÚDO DO ARQUIVO HEADER -->
<?php get_header(); ?>

<div class="clear"></div>
<br />
<br />

<div class="w50 time-descricao">
    <h2>Melhore a comunicação com seu cliente e time.</h2>
    <p>Consultoria especializada em startups, empresas, principalmente, pessoas.</p>
    <a href="" target="_blank">Ver demonstração</a>
</div>

<div class="w50 time-imagem"> <img src="<?php echo get_theme_root_uri(); ?>/temaOneWordPress/images/equipe.png"
        alt="logo" /></div>

<div class="clear"></div>

</div>

</section>


<div class="circle"><i class="fas fa-angle-down"></i></div>


<!-- SEÇÃO DO SLIDER -->
<section class="clientes-slider">

    <div class="center">

        <div style="max-width: 700px;margin: 0 auto;overflow: hidden;" class="slider-container">

            <img src="<?php echo get_theme_root_uri(); ?>/temaOneWordPress/images/amazon.png" />
            <img src="<?php echo get_theme_root_uri(); ?>/temaOneWordPress/images/costco.png" />
            <img src="<?php echo get_theme_root_uri(); ?>/temaOneWordPress/images/dominos.png" />
            <img src="<?php echo get_theme_root_uri(); ?>/temaOneWordPress/images/uber.png" />
            <img src="<?php echo get_theme_root_uri(); ?>/temaOneWordPress/images/walmart.png" />
            <img src="<?php echo get_theme_root_uri(); ?>/temaOneWordPress/images/amazon.png" />
            <img src="<?php echo get_theme_root_uri(); ?>/temaOneWordPress/images/costco.png" />
            <img src="<?php echo get_theme_root_uri(); ?>/temaOneWordPress/images/dominos.png" />
            <img src="<?php echo get_theme_root_uri(); ?>/temaOneWordPress/images/uber.png" />
            <img src="<?php echo get_theme_root_uri(); ?>/temaOneWordPress/images/walmart.png" />

        </div>

    </div>
</section>



<!-- SEÇÃO DIFERENCIAIS -->
<section class="diferenciais">

    <div class="center">
        <h2>Contribuímos de ponta a ponta</h2>

        <div class="icons-diferenciais">

            <div class="box-single-diferenciais">
                <img src="<?php echo get_theme_root_uri(); ?>/temaOneWordPress/images/icon1.png" />
                <h3>Ambientes Mobile</h3>
                <p>Garanta que toda sua comunicação esteja alinhada com seu propósito, cada palavra conta.</p>
            </div>

            <div class="box-single-diferenciais">
                <img src="<?php echo get_theme_root_uri(); ?>/temaOneWordPress/images/icon2.png" />
                <h3>Ambientes Mobile</h3>
                <p>Garanta que toda sua comunicação esteja alinhada com seu propósito, cada palavra conta.</p>
            </div>

            <div class="box-single-diferenciais">
                <img src="<?php echo get_theme_root_uri(); ?>/temaOneWordPress/images/icon3.png" />
                <h3>Ambientes Mobile</h3>
                <p>Garanta que toda sua comunicação esteja alinhada com seu propósito, cada palavra conta.</p>
            </div>

        </div>

    </div>

</section>




<!-- SEÇÃO SOBRE O TIME -->
<section class="sobre-time">
    <div class="center">
        <div class="w50 time-descricao-2">
            <h2>Um time experiente,<br />comunicador e coeso.</h2>
            <p>A Product Runt acredita que marcas fortes são construídas a partir de transformações importantes e
                positivas na vida dos consumidores. Exatamente como uma conversa que ganha forma, a ideia vira
                flâmula.
                <br /><br />
                Comunicar bem, de forma coerente e clara não é algo fácil e estamos aqui para ajudar você e seu
                time. Você escolhe, remoto ou presencial, para seu cliente ou seu público interno, você determina
                como vamos te ajudar.
            </p>
        </div><!--w50-->
        <div class="w50 img-time">
            <img src="<?php echo get_theme_root_uri(); ?>/temaOneWordPress/images/time.png" />
        </div>
        <div class="clear"></div>
    </div>
</section>



<!-- SEÇÃO DEPOIMENTOS -->
<section class="depoimentos">
    <div class="center">

        <h2>Depoimentos</h2>

        <div class="depoimentos-box">

            <div class="depoimento-single">
                <p>"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo exercitationem molestias
                    eligendi eum corrupti doloremque voluptate eius veniam magnam. Impedit sapiente quasi a nihil
                    eligendi at voluptatibus, sed mollitia vitae." </p>
                <p>Josef Wonder</p>
                <img src="<?php echo get_theme_root_uri(); ?>/temaOneWordPress/images/autor.png" />
            </div>

            <div class="depoimento-single">
                <p>"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo exercitationem molestias
                    eligendi eum corrupti doloremque voluptate eius veniam magnam. Impedit sapiente quasi a nihil
                    eligendi at voluptatibus, sed mollitia vitae."</p>
                <p>Josef Wonder</p>
                <img src="<?php echo get_theme_root_uri(); ?>/temaOneWordPress/images/autor.png" />
            </div>

            <div class="depoimento-single">
                <p>"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo exercitationem molestias
                    eligendi eum corrupti doloremque voluptate eius veniam magnam. Impedit sapiente quasi a nihil
                    eligendi at voluptatibus, sed mollitia vitae."</p>
                <p>Josef Wonder</p>
                <img src="<?php echo get_theme_root_uri(); ?>/temaOneWordPress/images/autor.png" />
            </div>

        </div>
    </div>
</section>

<!-- PEGA O CONTEÚDO DO ARQUIVO FOOTER -->
<?php get_footer(); ?>