<?php get_header(); ?>

<main>

    <div class="page-header-strip">
        <div class="container">
            <h1>Resultados da Pesquisa</h1>
            <p>
                Você buscou por: <strong>"<?php echo get_search_query(); ?>"</strong>
                <br>
                Encontramos <?php echo $wp_query->found_posts; ?> resultado(s).
            </p>
        </div>
    </div>

    <section class="container mb-large">
        
        <?php if (have_posts()) : ?>
            
            <div class="search-results-list">
                <?php while (have_posts()) : the_post(); ?>
                    
                    <article class="search-card">
                        
                        <a href="<?php the_permalink(); ?>" class="search-thumb">
                            <?php if(has_post_thumbnail()) { 
                                the_post_thumbnail('medium'); 
                            } else { 
                                // Placeholder caso não tenha imagem
                                echo '<div class="no-img-placeholder"><span class="dashicons dashicons-format-image"></span></div>'; 
                            } ?>
                        </a>

                        <div class="search-content">
                            <div class="search-meta">
                                <span class="date-tag-yellow"><?php echo get_the_date('d/m/Y'); ?></span>
                                <span class="type-tag">
                                    <?php 
                                    // Mostra se é Notícia, Página ou Outro
                                    $post_type = get_post_type();
                                    if($post_type == 'post') { echo 'Notícia'; }
                                    elseif($post_type == 'page') { echo 'Página'; }
                                    elseif($post_type == 'licitacao') { echo 'Licitação'; }
                                    else { echo 'Outro'; }
                                    ?>
                                </span>
                            </div>

                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            
                            <p><?php echo wp_trim_words(get_the_excerpt(), 25); ?></p>
                            
                            <a href="<?php the_permalink(); ?>" class="btn-link">
                                Ler Mais <span class="dashicons dashicons-arrow-right-alt2"></span>
                            </a>
                        </div>

                    </article>

                <?php endwhile; ?>
            </div>

            <div class="pagination-box">
                <?php
                the_posts_pagination(array(
                    'mid_size'  => 2,
                    'prev_text' => '<span class="dashicons dashicons-arrow-left-alt2"></span>',
                    'next_text' => '<span class="dashicons dashicons-arrow-right-alt2"></span>',
                ));
                ?>
            </div>

        <?php else : ?>

            <div class="no-results-box">
                <span class="dashicons dashicons-search big-icon"></span>
                <h2>Nenhum resultado encontrado</h2>
                <p>Não encontramos nada correspondente ao termo "<?php echo get_search_query(); ?>".</p>
                <p>Tente usar palavras-chave diferentes ou mais genéricas.</p>
                
                <div class="retry-search">
                    <form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
                        <input type="text" placeholder="Tente pesquisar novamente..." name="s" />
                        <button type="submit">Buscar</button>
                    </form>
                </div>
            </div>

        <?php endif; ?>

    </section>

</main>

<?php get_footer(); ?>