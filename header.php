<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php
    wp_head();
    ?>

    <?php
    $title = get_the_title();
    if ($title == '') {
        $title = 'Home';
    }
    ?>
    <title>
        <?php echo $title; ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="FBXCVK_YBn2mJvadyp3_8H6AkL7tIbUTtcGnDxesQvI" />
    <meta name="robots" content="index,follow">
    <link rel="icon" type="image/x-icon" href="<?php echo WP_SITEURL ?>/wp-content/themes/VEAPB/assets/home/favicon.png">
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/menu.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/c94b49236f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo WP_SITEURL ?>/wp-content/themes/VEAPB/style.css">

</head>

<body>
    <header>
        <div class="top">
            <div class="logo">
                <a href="<?php echo WP_HOME ?>"><img src="<?php echo WP_SITEURL ?>/wp-content/themes/VEAPB/assets\home\logo2.png" alt="logo"></a>
            </div>
            <div class="top-patrocinadores">
                <div class="top-left flex">
                    <?php while (have_rows('topo_patrocinadores')) {
                        the_row(); ?>
                        <div class="logo-patrocinadores w33">
                            <?php if (get_sub_field('posicao_1')) : ?>
                                <img src="<?php the_sub_field('posicao_1'); ?>" />
                            <?php endif ?>
                        </div>
                        <div class="logo-patrocinadores w33">
                            <?php if (get_sub_field('posicao_2')) : ?>
                                <img src="<?php the_sub_field('posicao_2'); ?>" />
                            <?php endif ?>
                        </div>
                        <div class="logo-patrocinadores w33">
                            <?php if (get_sub_field('posicao_3')) : ?>
                                <img src="<?php the_sub_field('posicao_3'); ?>" />
                            <?php endif ?>
                        <?php } ?>
                        </div>
                </div>

                <div class="top-rigth flex">
                    <?php while (have_rows('topo_patrocinadores')) {
                        the_row(); ?>
                        <div class="logo-patrocinadores w33">
                            <?php if (get_sub_field('posicao_4')) : ?>
                                <img src="<?php the_sub_field('posicao_4'); ?>" />
                            <?php endif ?>
                        </div>
                        <div class="logo-patrocinadores w33">
                            <?php if (get_sub_field('posicao_5')) : ?>
                                <img src="<?php the_sub_field('posicao_5'); ?>" />
                            <?php endif ?>
                        </div>
                        <div class="logo-patrocinadores w33">
                            <?php if (get_sub_field('posicao_6')) : ?>
                                <img src="<?php the_sub_field('posicao_6'); ?>" />
                            <?php endif ?>
                        <?php } ?>
                        </div>
                </div>
            </div>
        </div>
    </header>

    <section class="menu">
        <div class="center-menu">
            <ul class="menu-desktop flex-left">
                <li><a href=<?php echo WP_HOME ?>>HOME</a></li>
                <li><a href="<?php echo WP_SITEURL ?>/sobre">O CLUBE</a></li>
                <li><a href="<?php echo WP_SITEURL ?>/competicao">COMPETIÇÃO</a></li>
            </ul>
            <ul class="menu-desktop flex-rigth">
                <li><a href="<?php echo WP_HOME ?>#patrocinadores-parceiros">PARCEIROS / PATROCINADORES</a></li>
                <li><a href="<?php echo WP_SITEURL ?>/contato">CONTATO</a></li>
            </ul>
            <div class="menu-mobile">
            <i class="fa-solid fa-bars"></i>
                <ul>
                   <li><a href=<?php echo WP_HOME ?>>HOME</a></li>
                <li><a href="<?php echo WP_SITEURL ?>/sobre">O CLUBE</a></li>
                <li><a href="<?php echo WP_SITEURL ?>/competicao">COMPETIÇÃO</a></li>
                    <li><a href="<?php echo WP_HOME ?>#patrocinadores-parceiros">PARCEIROS / PATROCINADORES</a></li>
                <li><a href="<?php echo WP_SITEURL ?>/contato">CONTATO</a></li>

                </ul>
            </div>
            <div class="clear"></div>
    </section>