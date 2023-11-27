<?php get_header(); ?>
           
           <div class="clear"></div>
            <br>
            <br>
            <div class="w50 time-descricao">
                <h2>Melhore a comunicação com seu cliente e time.</h2>
                <p>Consultoria especializada em startups, empresas, principalmente, pessoas.</p>
                <a href="https://dankicode.com">Ver demonstração</a>
            </div>
            <div class="w50 time-imagem"><img src="<?php echo get_theme_root_uri(); ?>/danki/images/equipe.png" alt="">
            </div>
            <div class="clear"></div>
        </div>
    </section>


    <div class="circle">
        <span class="material-symbols-outlined">
            stat_minus_1
        </span>
    </div>


    /*
    <section class="conteudo-da-pagina">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); the_content();
        endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>
    </section>
    */       

    
    <section class="clientes-slider">
        <div class="center">
            <div style="max-width: 700px;margin: 0 auto;overflow: hidden;" class="slider-container">
                <img src="<?php echo get_theme_root_uri(); ?>/danki/Images/amazon.png" alt="logo amazon">
                <img src="<?php echo get_theme_root_uri(); ?>/danki/Images/costco.png" alt="logo costco">
                <img src="<?php echo get_theme_root_uri(); ?>/danki/Images/dominos.png" alt="logo dominos">
                <img src="<?php echo get_theme_root_uri(); ?>/danki/Images/uber.png" alt="logo uber">
                <img src="<?php echo get_theme_root_uri(); ?>/danki/Images/walmart.png" alt="logo walmart">
            </div>
        </div>
    </section>


    <section class="diferenciais">
        <div class="center">
            <h2>Contribuímos de ponta a ponta</h2>

            <div class="icons-diferenciais">
                <div class="box-single-diferenciais">
                    <img src="<?php echo get_theme_root_uri(); ?>/danki/images/icon.png"/>
                    <h3>Ambientes Mobile</h3>
                    <p>Garanta que toda sua comunicação esteja alinhada com seu propósito, cada palavra conta.</p>
                </div>
                
                <div 
                class="box-single-diferenciais">
                    <img src="<?php echo get_theme_root_uri(); ?>/danki/images/icon2.png"/>
                    <h3> </h3>
                    <p>Garanta que toda sua comunicação esteja alinhada com seu propósito, cada palavra conta.</p>
                </div>
                
                <div 
                class="box-single-diferenciais">
                    <img src="<?php echo get_theme_root_uri(); ?>/danki/images/icon3.png"/>
                    <h3>Ambientes Mobile</h3>
                    <p>Garanta que toda sua comunicação esteja alinhada com seu propósito, cada palavra conta.</p>
                </div>
            </div>
        </div>
    </section>


    <section class="sobre-time">
        <div class="center">
            <div class="w50" time-descricao-2>
                <h2>Um time experiente,<br>comunicador e coeso.
                </h2>
                <p>Não vou copiar tudo isso.</p>
                <p>Nem fodendo.</p>
            </div>
            <div class="w50 img-time">
                <img src="<?php echo get_theme_root_uri(); ?>/danki/images/time.png"/>
            </div>
            <div class="clear"></div>    
        </div>
    </section>


    <section class="depoimentos">
        <div class="center">
            <h2>Depoimentos</h2>
            <div class="depoimentos-box">
                <div class="depoimento-single">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo et nesciunt autem quos ratione placeat totam, magnam quam qui aspernatur ullam obcaecati ipsum laborum itaque delectus sapiente illum repudiandae iusto.</p>
                    <p>Alan Bida</p>
                    <img src="<?php echo get_theme_root_uri(); ?>/danki/images/autor.png" alt="foto">

                    <div class="depoimento-single">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo et nesciunt autem quos ratione placeat totam, magnam quam qui aspernatur ullam obcaecati ipsum laborum itaque delectus sapiente illum repudiandae iusto.</p>
                    <p>Alan Bida</p>
                    <img src="<?php echo get_theme_root_uri(); ?>/danki/images/autor.png" alt="foto">

                    <div class="depoimento-single">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo et nesciunt autem quos ratione placeat totam, magnam quam qui aspernatur ullam obcaecati ipsum laborum itaque delectus sapiente illum repudiandae iusto.</p>
                    <p>Alan Bida</p>
                    <img src="<?php echo get_theme_root_uri(); ?>/danki/images/autor.png" alt="foto">
                </div>
                </div>
                </div>
            </div>
        </div>
    </section>

    
    <?php get_footer(); ?>
   