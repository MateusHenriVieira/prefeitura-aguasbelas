<?php get_header(); ?>

<main>

    <section class="hero-section container">
        <div class="hero-grid">
            
            <div class="hero-highlight">
                <?php 
                $args_destaque = array('posts_per_page' => 1);
                $query_destaque = new WP_Query($args_destaque);
                if ($query_destaque->have_posts()) : while ($query_destaque->have_posts()) : $query_destaque->the_post(); 
                ?>
                <a href="<?php the_permalink(); ?>" class="highlight-card">
                    <?php if(has_post_thumbnail()) { the_post_thumbnail('large', ['class' => 'bg-img']); } else { echo '<div class="bg-placeholder"></div>'; } ?>
                    <div class="highlight-overlay">
                        <span class="date-tag-yellow"><?php echo get_the_date('d/m/Y'); ?></span>
                        <h2><?php the_title(); ?></h2>
                        <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                    </div>
                </a>
                <?php endwhile; wp_reset_postdata(); endif; ?>
            </div>

            <div class="quick-access-grid">
                
                <a href="https://cloud.tenosoft.com.br/portal/ouvidoria/314" target="_blank" class="service-card">
                    <div class="icon-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/OUVIDORIA VETOR.svg" alt="Ícone Ouvidoria">
                    </div>
                    <div class="text-box"><strong>OUVIDORIA</strong><span>Canal de comunicação</span></div>
                </a>

                <a href="https://www.municipioonline.com.br/pe/pmab/aguasbelas" target="_blank" class="service-card">
                    <div class="icon-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/TRIBUTOS VETOR.svg" alt="Ícone Tributos">
                    </div>
                    <div class="text-box"><strong>TRIBUTOS</strong><span>Nota Fiscal Eletrônica</span></div>
                </a>

                <a href="https://cloud.tenosoft.com.br/portal/sic/?entidade=314" target="_blank" class="service-card">
                    <div class="icon-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ESIC VETOR.svg" alt="Ícone E-SIC">
                    </div>
                    <div class="text-box"><strong>E-SIC</strong><span>Informação ao Cidadão</span></div>
                </a>

                <a href="https://agiliblue.agilicloud.com.br/portal/aguasbelas#/" target="_blank" class="service-card">
                    <div class="icon-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/CARTA DE SERVIÇO VETOR.svg" alt="Ícone Carta de Serviço">
                    </div>
                    <div class="text-box"><strong>CARTA DE SERVIÇO</strong></div>
                </a>

                <a href="<?php echo home_url('/category/editais'); ?>" class="service-card">
                    <div class="icon-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/EDITAL VETOR.svg" alt="Ícone Editais">
                    </div>
                    <div class="text-box"><strong>EDITAIS</strong><span>De Seleção</span></div>
                </a>

                <a href="https://cloud.tenosoft.com.br/portal/sp_acesso_rapido/sp_acesso_rapido.php" target="_blank" class="service-card">
                    <div class="icon-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/CONTRA CHEQUE VETOR.svg" alt="Ícone Contra Cheque">
                    </div>
                    <div class="text-box"><strong>CONTRA CHEQUE</strong><span>Portal do Servidor</span></div>
                </a>

            </div>
        </div>
    </section>

    <section class="banner-carousel container">
        <div class="banner-wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/BANNER CARNAVAL.png" alt="Carnaval das Águas">
        </div>
    </section>

    <section class="news-carousel-section container">
        <div class="news-scroll-container">
            <?php 
            $args_news = array('posts_per_page' => 6, 'offset' => 1);
            $query_news = new WP_Query($args_news);
            
            if ($query_news->have_posts()) : while ($query_news->have_posts()) : $query_news->the_post(); ?>
                
                <a href="<?php the_permalink(); ?>" class="news-card-overlay">
                    <?php if(has_post_thumbnail()) { 
                        the_post_thumbnail('large', ['class' => 'bg-img']); 
                    } else { 
                        echo '<div class="bg-placeholder"></div>'; 
                    } ?>
                    
                    <div class="card-overlay-gradient">
                        <span class="date-tag-yellow"><?php echo get_the_date('d/m/Y'); ?></span>
                        <h4><?php the_title(); ?></h4>
                        <p><?php echo wp_trim_words(get_the_excerpt(), 12); ?></p>
                    </div>
                </a>

            <?php endwhile; wp_reset_postdata(); endif; ?>
        </div>
    </section>

    <section class="instagram-section container">
        <div class="insta-header">
            <span class="dashicons dashicons-camera" style="font-size:30px; margin-right:10px;"></span>
            <h3>Siga @prefeituraaguasbelas</h3>
        </div>
        <div class="insta-grid">
            <div class="insta-item" style="background:#ddd; height:200px;"></div>
            <div class="insta-item" style="background:#ddd; height:200px;"></div>
            <div class="insta-item" style="background:#ddd; height:200px;"></div>
            <div class="insta-item" style="background:#ddd; height:200px;"></div>
        </div>
    </section>

</main>

<?php get_footer(); ?>