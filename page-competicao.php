<?php
//Template name: Competicao
?>

<?php
get_header();
?>
</div>
</section>
<div class="clear"></div>

<section id="competicao" class="proxima-partida">
    <h2 class="title-partida center">Próximas Competições</h2>
    <div class="partida-slider">
        <?php while (have_rows('proxima_partida_competicao')) {
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

<section class="imagem-competicao">
    <div class="competicao-slider">
        <?php while (have_rows('competicao')) {
            the_row(); ?>
            <?php if (get_sub_field('imagem_competicao')) : ?>
                <div class="single-img">
                    <img class="competicao-img" src="<?php the_sub_field('imagem_competicao'); ?>" />
                </div>
            <?php endif ?>
        <?php } ?>
    </div>
</section>

<?php
get_footer();
?>