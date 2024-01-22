<?php
//Template name: Sobre
?>

</div>
</section>
<?php
get_header();
?>
</div>
<div class="clear"></div>
</div>
</section>

<section class="sobre-equipe">
    <div class="center">
        <div class="w50 equipe-sobre-texto">
            <h2><?php the_field('titulo'); ?></h2>
            <p><?php the_field('descricao_time'); ?></p>
        </div>
        <div class="w50">
            <?php if (get_field('imagem_intruducao')) : ?>
                <img src="<?php the_field('imagem_intruducao'); ?>" />
            <?php endif ?>
        </div>
        <div class="clear"></div>
    </div>
</section>

<section class="galeria">
    <div class="center">
        <?php while (have_rows('galeria')) {
            the_row(); ?>
            <div class="img-sobre">
                <?php if (get_sub_field('imagem_galeria')) : ?>
                    <img src="<?php the_sub_field('imagem_galeria'); ?>" />
                <?php endif ?>
            </div>
        <?php } ?>
    </div>
</section>
<?php get_footer(); ?>