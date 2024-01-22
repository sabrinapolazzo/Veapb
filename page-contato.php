<?php
 //Template name: Contato
?>

    <?php
    get_header();
    ?>
</div>
</section>
        <div class="clear"></div>
    </div>
    </section>
    <section class="contato">
        <div class="center">
            <div class="w50 contato-info">
                <h2>A mais importante <br />primeira conversa.</h2>
                <br>
                <?php
                    while(have_rows('tipo_de_campo')){
                        the_row();
                ?>
                <p><b><?php echo get_sub_field('categoria')?></b> <?php echo get_sub_field('valor')?></p>
                <?php }?>
               
                <div class="mapa-container">
                    <div id="mapa"></div>
                </div> 
            </div>
            <div class="w50 contact-form">
                <?php the_content();?>
                <!-- <form>
                    <input placeholder="Nome" type="text">
                    <input placeholder="E-mail"type="text">
                    <input placeholder="Telefone" type="text">
                    <select>
                        <option >Feminino</option>
                        <option >Masculino</option>
                    </select>
                    <textarea placeholder="Mensagem"></textarea>
                    <input type="submit" value="Enviar!">
                </form> -->
            </div>
            <div class="clear"></div>
        </div>
    </section>
<?php
 get_footer();
?>