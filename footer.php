<?php
$title = get_the_title();
?>
<footer <?php if ($title == 'Contato') {
            echo 'style="padding:200px 0;"';
        } elseif (is_404()) {
            echo 'style="padding:100px 0;"';
        } ?>>
    <?php
    $title = get_the_title();
    if ($title != "Contato" && !is_404()) {
    ?>

        <section class="metodologia">
            <div class="center">
                <h2>Conheça a Associação</h2>
                <p>O que acha de fazermos o que mais gostamos de fazer? conversar!</p>
                <a href="<?php echo WP_SITEURL?>/contato">Entrar em contato</a>
            </div>
        </section>

    <?php
    }
    ?>
    <div class="line"></div>
        <div class="center-footer">
            <div class="grid-footer">
                <p>Desenvolvido por Sabrina Polazzo © <?php date_default_timezone_set('America/Sao_Paulo');
                                                                                    echo date("Y"); ?> - Todos os direitos reservados</p>
                <div style="text-align: center;" class="logo-footer">
                   <a href="<?php echo WP_HOME ?>"><img src="<?php echo WP_SITEURL ?>/wp-content/themes/VEAPB/assets\home\logo2.png" alt="logo"></a>
                </div>
                <div class="redes-socias">
                    <a href="https://www.instagram.com/voleibolpatobranco/"><i class="fa-brands fa-instagram" style="color: #000000;"></i></a>
                    <a href="http://api.whatsapp.com/send?1=pt_BR&phone=5546999836918"><i class="fa-brands fa-whatsapp" style="color: #000000;"></i></a>
                    <a href="https://www.tiktok.com/@aveapb?_t=8iW2JUWcL7m&_r=1"><i class="fa-brands fa-tiktok" style="color: #000000;"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php
wp_footer();
?>

<script src="<?php echo WP_SITEURL ?>/wp-content/themes/VEAPB/js/jquery.js"></script>
<script src="<?php echo WP_SITEURL ?>/wp-content/themes/VEAPB/js/slick.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBEQfU2Z0CfbH-UY6sKnvJmgW2CETBTiWo&callback=initMap"></script>
<script src="<?php echo WP_SITEURL ?>/wp-content/themes/VEAPB/js/map.js"></script>
<script type="text/javascript">
    $('section.apoio-slider  .slider-container').slick({
        dots: true,
        arrows: false,
        infinite: false,
        speed: 1000,
        slidesToShow: 4,
        autoplay: true,
        centerMode: false,
        autoplaySpeed: 3000,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 1
            }
        }]
    });

    $('section.depoimentos  .depoimentos-box').slick({
        dots: true,
        arrows: false,
        infinite: true,
        speed: 1000,
        autoplay: true,
        slidesToShow: 1,
        centerMode: false,
    });
</script>
<script>
    $('#competicao.proxima-partida .partida-slider').slick({
        // Configurações do Slick Slider
        dots: true,
        arrows: false,
        infinite: true,
        speed: 1000,
        autoplay: true,
        slidesToShow: 1,
        centerMode: false,
        // Outras configurações...
    });
</script>
<script>
    $('section.imagem-competicao .competicao-slider').slick({
        // Configurações do Slick Slider
        dots: true,
        arrows: false,
        infinite: true,
        speed: 1000,
        autoplay: true,
        slidesToShow: 1,
        centerMode: false,
        // Outras configurações...
    });
</script>
<script>
    //Menu responsivo.
    $('.menu-mobile i').click(function() {
        $('.menu-mobile').find('ul').slideToggle();
    })
</script>
</body>

</html>