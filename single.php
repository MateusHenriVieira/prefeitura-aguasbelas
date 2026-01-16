<?php get_header(); ?>

<main>

    <div class="page-header-strip small-strip">
        <div class="container">
            <p><a href="<?php echo home_url(); ?>">Início</a> / Notícias / Leitura</p>
        </div>
    </div>

    <section class="container mb-large">
        <div class="single-grid">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="post-article">
                
                <header class="post-header">
                    <div class="post-meta">
                        <span class="date-tag-yellow"><?php echo get_the_date('d/m/Y'); ?></span>
                        <span class="category-tag"><?php the_category(', '); ?></span>
                    </div>
                    <h1><?php the_title(); ?></h1>
                </header>

                <?php if(has_post_thumbnail()): ?>
                <div class="post-featured-image">
                    <?php the_post_thumbnail('large'); ?>
                </div>
                <?php endif; ?>

                <div class="post-content-text">
                    <?php the_content(); ?>
                </div>

                <div class="share-box">
                    <h4>Gostou? Compartilhe:</h4>
                    <a href="https://api.whatsapp.com/send?text=<?php echo urlencode(get_the_title() . ' - ' . get_permalink()); ?>" target="_blank" class="btn-whatsapp-share">
                        <span class="dashicons dashicons-whatsapp"></span> Enviar no WhatsApp
                    </a>
                </div>

            </article>
            <?php endwhile; endif; ?>

            <aside class="news-sidebar">
                
                <div class="sidebar-widget search-widget">
                    <h3>Buscar Notícia</h3>
                    <form role="search" method="get" action="<?php echo home_url( '/' ); ?>" class="sidebar-search-form">
                        <input type="text" placeholder="O que procura?" name="s" required>
                        <button type="submit"><span class="dashicons dashicons-search"></span></button>
                    </form>
                </div>

                <div class="sidebar-widget">
                    <h3>Últimas Notícias</h3>
                    <div class="sidebar-posts-list">
                        <?php 
                        // Loop personalizado para mostrar as 3 últimas, exceto a atual
                        $current_id = get_the_ID();
                        $args_sidebar = array('posts_per_page' => 3, 'post__not_in' => array($current_id));
                        $query_sidebar = new WP_Query($args_sidebar);

                        if ($query_sidebar->have_posts()) : while ($query_sidebar->have_posts()) : $query_sidebar->the_post(); 
                        ?>
                        <a href="<?php the_permalink(); ?>" class="mini-post-card">
                            <div class="mini-thumb">
                                <?php if(has_post_thumbnail()) { the_post_thumbnail('thumbnail'); } ?>
                            </div>
                            <div class="mini-info">
                                <span><?php echo get_the_date('d/m/Y'); ?></span>
                                <h4><?php echo wp_trim_words(get_the_title(), 8); ?></h4>
                            </div>
                        </a>
                        <?php endwhile; wp_reset_postdata(); endif; ?>
                    </div>
                </div>

            </aside>

        </div>
    </section>

</main>

<?php get_footer(); ?>