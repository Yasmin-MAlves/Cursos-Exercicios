<footer>
    <section class="metodologia">
        <div class="center">
            <h2>Conheça nossa Metodologia</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit placeat architecto est, ipsa amet, eos fugit sit velit cupiditate quaerat voluptatum corporis soluta voluptatibus temporibus magni. Ea repudiandae ad asperiores.</p>
            <a href="/Contato">Entrar em Contato></a>
        </div>
    </section>
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

                <div style="width: 40%; text-align: right;" class="col-footer">
                    <img src="<?php echo get_theme_root_uri(); ?>/danki/images/logo-footer.png"/>
                </div>
        </div>
    </footer>

<?php wp_footer()?>
<script src="<?php echo get_theme_root_uri(); ?>/danki/js/jquery.js"></script>
    <script src="<?php echo get_theme_root_uri(); ?>/danki/js/slick.min.js"></script>
    <script type="text/javascript">
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
            responsive:
                [
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2
                        }
                    }]
        });

        $('section.depoimentos .depoimentos-box').slick({
            dots: true,
            arrows: false,
            infinite: true,
            speed: 1000,
            slidesToShow: 1,
            centerMode: false,    
        } 
        );
    </script>
    <script>
        $('.menu-mobile span').click(function(){
            $('.menu-mobile').find('ul').slideToggle();
        })
</script>
</body>
</html>