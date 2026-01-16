<?php
/*
Template Name: Portal de Notícias (Pro)
*/
get_header(); 

// Variáveis de Controle
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$ids_descartados = array(); // Para não repetir posts
?>

<main class="news-portal-wrapper">

    <div class="news-header centered-header">
        <div class="container">
            <div class="header-content-center">
                <h1>Sala de Imprensa</h1>
                <p>Transparência e informação oficial em tempo real.</p>
            </div>
        </div>
    </div>

    <div class="categories-strip">
        <div class="container">
            <div class="cat-scroll-center">
                <a href="<?php echo get_permalink(); ?>" class="cat-pill active">Todas</a>
                
                <?php 
                // Pega todas as categorias que têm pelo menos 1 post
                $categories = get_categories(array(
                    'orderby' => 'name',
                    'order'   => 'ASC',
                    'hide_empty' => 1, // Só mostra se tiver post
                    'exclude' => 1 // Tenta excluir a categoria "Sem Categoria" (geralmente ID 1)
                ));

                foreach($categories as $category) {
                    // Link para a página de arquivo da categoria
                    echo '<a href="' . get_category_link($category->term_id) . '" class="cat-pill">' . $category->name . '</a>';
                }
                ?>
            </div>
        </div>
    </div>

    <div class="container main-news-container">

        <?php if ($paged == 1) : ?>
            <section class="hero-mosaic">
                <?php 
                // Pega os 3 posts mais recentes
                $hero_query = new WP_Query(array('posts_per_page' => 3, 'ignore_sticky_posts' => 1));
                
                if ($hero_query->have_posts()) :
                    $i = 0;
                ?>
                
                <div class="mosaic-grid">
                    <?php while ($hero_query->have_posts()) : $hero_query->the_post(); 
                        $ids_descartados[] = get_the_ID(); 
                        $i++;
                        $card_class = ($i == 1) ? 'mosaic-main' : 'mosaic-side';
                    ?>
                    
                    <article class="mosaic-card <?php echo $card_class; ?>">
                        <a href="<?php the_permalink(); ?>" class="mosaic-link">
                            <div class="mosaic-bg">
                                <?php if(has_post_thumbnail()) { 
                                    the_post_thumbnail('large'); 
                                } else {
                                    echo '<div class="no-img-gradient"></div>';
                                } ?>
                            </div>
                            <div class="mosaic-overlay">
                                <span class="mosaic-cat"><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></span>
                                <h2><?php the_title(); ?></h2>
                                <span class="mosaic-date"><span class="dashicons dashicons-calendar-alt"></span> <?php echo get_the_date('d/m/Y'); ?></span>
                            </div>
                        </a>
                    </article>

                    <?php endwhile; ?>
                </div>
                <?php endif; wp_reset_postdata(); ?>
            </section>
        <?php endif; ?>

        <section class="news-feed-section">
            <h3 class="section-divider"><span>Últimas Atualizações</span></h3>
            
            <div class="feed-grid">
                <?php 
                $feed_args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 9,
                    'paged' => $paged,
                    'post__not_in' => $ids_descartados
                );
                $feed_query = new WP_Query($feed_args);

                if ($feed_query->have_posts()) : 
                    while ($feed_query->have_posts()) : $feed_query->the_post(); 
                ?>
                    
                    <article class="pro-news-card">
                        <div class="card-thumb">
                            <a href="<?php the_permalink(); ?>">
                                <?php if(has_post_thumbnail()) { 
                                    the_post_thumbnail('medium_large'); 
                                } else {
                                    echo '<div class="no-img-placeholder"><span class="dashicons dashicons-format-image"></span></div>';
                                } ?>
                            </a>
                            <span class="card-badge"><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></span>
                        </div>
                        <div class="card-body">
                            <div class="card-meta">
                                <span><?php echo get_the_date('d/m/Y'); ?></span>
                            </div>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                            <a href="<?php the_permalink(); ?>" class="link-arrow">Ler matéria <span class="dashicons dashicons-arrow-right-alt2"></span></a>
                        </div>
                    </article>

                <?php endwhile; ?>
            </div>

            <div class="pagination-pro">
                <?php 
                echo paginate_links(array(
                    'total' => $feed_query->max_num_pages,
                    'current' => $paged,
                    'prev_text' => 'Anterior',
                    'next_text' => 'Próxima',
                    'mid_size' => 2
                )); 
                ?>
            </div>

            <?php else : ?>
                <div class="empty-state">
                    <p>Não há mais notícias para exibir no momento.</p>
                </div>
            <?php endif; wp_reset_postdata(); ?>

        </section>

    </div>

</main>

<?php get_footer(); ?>