<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- PADRÃO DO WP -->
    <?php wp_head(); ?>

    <!-- VALIDAÇÃO PARA MUDAR O TITLE DA PÁGINA -->
    <?php
    $title = get_the_title(); // ARMAZENA O TÍTULO DA PÁGINA ATUAL
    if ($title == '') {
        $title = 'Home';
    }
    ?>

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
    <link rel="stylesheet" href="<?php echo get_theme_root_uri(); ?>/temaOneWordPress/style.css" />

    <!-- INSERE NOME DO TÍTULO DE FORMA DINÂMICA -->
    <title>
        <?php echo $title; ?>
    </title>
</head>

<body>

    <section class="topo">

        <div class="center">

            <header>
                <div class="logo">
                    <!-- LINK PARA QUANDO CLICAR NA LOGO RETORNAR PARA HOME -->
                    <a href="<?php echo '/wordpress/'; ?>">
                        <img src="<?php echo get_theme_root_uri(); ?>/temaOneWordPress/images/logo.png" alt="logo" />
                    </a>
                </div>
            </header>

            <!-- MENU DESKTOP -->
            <ul class="menu-desktop">
                <li><a href="/wordpress/">Home</a></li>
                <li><a href="/wordpress/sobre">Sobre</a></li>
                <li><a href="/wordpress/contato">Contato</a></li>
            </ul>

            <!-- MENU MOBILE -->
            <div class="menu-mobile">
                <i class="fas fa-align-right"></i>
                <ul>
                    <li><a href="/wordpress/">Home</a></li>
                    <li><a href="/wordpress/sobre">Sobre</a></li>
                    <li><a href="/wordpress/contato">Contato</a></li>
                </ul>
            </div><!--menu-mobile-->