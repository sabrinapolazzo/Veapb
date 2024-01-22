<?php
//Template name: Home
?>

<?php
get_header();
?>

<section class="bannerhome">
    <img src="<?php the_field('banner_principal'); ?>">
</section>

<section id="competicao" class="proxima-partida">
    <h2 class="title-partida center">Próximas Competições</h2>
    <div class="partida-slider">
        <?php while (have_rows('proxima_partida')) {
            the_row(); ?>
            <div class="partida-single-slider">
                <div class="partida-atual grid">
                    <div class="box-partida flex">
                        <p class="data"><?php the_sub_field('data_partida'); ?></p>
                        <?php if (get_sub_field('time_1')) : ?>
                            <img src="<?php the_sub_field('time_1'); ?>" />
                        <?php endif ?>
                    </div>
                    <p class="element">X</p>
                    <div class="box-partida flex">
                        <?php if (get_sub_field('time_2')) : ?>
                            <img src="<?php the_sub_field('time_2'); ?>" />
                        <?php endif ?>
                        <p class="categoria"><?php the_sub_field('categoria_competicao'); ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</section>

<section class="about-time">
    <div class="center">
        <div class="w50 time-descricao-2">
            <?php while (have_rows('section_2')) {
                the_row(); ?>
                <h2><?php the_sub_field('titulo_section_2'); ?></h2>
                <p>
                    <?php the_sub_field('descricao_section_2'); ?>
                </p>
        </div>
        <div class="w50 img-time">
            <?php if (get_sub_field('imagem_secao_2')) : ?>
                <img src="<?php the_sub_field('imagem_secao_2'); ?>" />
            <?php endif ?>
        </div>
    <?php } ?>
    <div class="clear"></div>
    </div>
</section>

<section class="noticias">
    <div class="center">
        <h2>+ NOTÍCIAS</h2>
        <div class="flex box-noticias">
            <?php while (have_rows('noticias_home')) {
                the_row(); ?>
                <div class="box-single-noticias">
                    <?php if (get_sub_field('imagem_noticia')) : ?>
                        <a href="<?php the_sub_field('link_direcionamento'); ?>"><img src="<?php the_sub_field('imagem_noticia'); ?>" /></a>
                    <?php endif ?>
                    <h3> <?php the_sub_field('titulo'); ?></h3>
                    <p><?php the_sub_field('descricao'); ?></p>
                </div>
            <?php } ?>
        </div>
</section>


<section id="patrocinadores-parceiros" class="apoio-slider">

    <div class="center">
        <div style="max-width: 1100px;margin: 0 auto;overflow: hidden;" class="slider-container">
            <?php while (have_rows('slider_patrocinadores')) {
                the_row(); ?>
                <?php if (get_sub_field('imagem_patrocinador')) : ?>
                    <img src="<?php the_sub_field('imagem_patrocinador'); ?>" />
                <?php endif ?>
            <?php } ?>
        </div>
    </div>
</section>

<section class="depoimentos">
    <div class="center">
        <h2>Depoimentos</h2>
        <div class="depoimentos-box">
            <?php while (have_rows('comentarios')) : the_row(); ?>
                <div class="depoimentos-single">
                    <p><?php the_sub_field('mensagem_depoimento'); ?></p>
                    <p><?php the_sub_field('nome_autor'); ?></p>
                    <?php if (get_sub_field('imagem_autor')) : ?>
                        <img src="<?php the_sub_field('imagem_autor'); ?>" />
                    <?php endif ?>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>