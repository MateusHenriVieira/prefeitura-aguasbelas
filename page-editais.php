<?php
/*
Template Name: Página Editais e Concursos
*/
get_header(); 

// Paginação
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
?>

<main class="editais-wrapper">

    <div class="page-header-strip">
        <div class="container">
            <h1>Editais e Concursos</h1>
            <p>Consulte os processos seletivos, licitações e editais públicos em andamento.</p>
        </div>
    </div>

    <div class="container search-toolbar-container">
        <div class="toolbar-box">
            <form role="search" method="get" class="edital-search-form" action="<?php echo home_url( '/' ); ?>">
                <input type="text" placeholder="Buscar por número do edital ou palavra-chave..." name="s" />
                <input type="hidden" name="post_type" value="post" />
                <button type="submit"><span class="dashicons dashicons-search"></span> Buscar</button>
            </form>
            
            <div class="status-legend">
                <span class="legend-item"><span class="dot open"></span> Recentes</span>
                <span class="legend-item"><span class="dot closed"></span> Antigos</span>
            </div>
        </div>
    </div>

    <section class="container mb-large">
        
        <div class="editais-list">
            <?php 
            // QUERY: Busca posts da categoria 'editais'
            $args = array(
                'category_name'  => 'editais', // O SLUG da categoria deve ser 'editais'
                'posts_per_page' => 10,
                'paged'          => $paged,
                'orderby'        => 'date',
                'order'          => 'DESC'
            );
            $editais_query = new WP_Query($args);

            if ($editais_query->have_posts()) : 
                while ($editais_query->have_posts()) : $editais_query->the_post(); 
                    
                    // Lógica Simples de Status Visual (Baseado na data: < 30 dias = Novo)
                    $post_age = (date('U') - get_the_time('U')) / 86400; // Dias desde a publicação
                    $status_class = ($post_age < 30) ? 'status-new' : 'status-old';
                    $status_label = ($post_age < 30) ? 'Novo' : 'Arquivado';
            ?>

            <article class="edital-row">
                
                <div class="edital-date-box">
                    <span class="day"><?php echo get_the_date('d'); ?></span>
                    <span class="month"><?php echo get_the_date('M'); ?></span>
                    <span class="year"><?php echo get_the_date('Y'); ?></span>
                </div>

                <div class="edital-info">
                    <div class="edital-meta">
                        <span class="badge-status <?php echo $status_class; ?>"><?php echo $status_label; ?></span>
                        <span class="meta-cat"><span class="dashicons dashicons-category"></span> <?php the_category(', '); ?></span>
                    </div>
                    
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    
                    <p><?php echo wp_trim_words(get_the_excerpt(), 25); ?></p>
                </div>

                <div class="edital-action">
                    <a href="<?php the_permalink(); ?>" class="btn-download">
                        <span class="dashicons dashicons-media-text"></span> Ver Detalhes
                    </a>
                </div>

            </article>

            <?php endwhile; ?>
            
            <div class="pagination-pro">
                <?php 
                echo paginate_links(array(
                    'total' => $editais_query->max_num_pages,
                    'current' => $paged,
                    'prev_text' => 'Anterior',
                    'next_text' => 'Próxima',
                    'mid_size' => 2
                )); 
                ?>
            </div>

            <?php else : ?>
                
                <div class="empty-state-box">
                    <span class="dashicons dashicons-media-document"></span>
                    <h3>Nenhum edital encontrado</h3>
                    <p>No momento não há editais ou concursos cadastrados nesta categoria.</p>
                </div>

            <?php endif; wp_reset_postdata(); ?>
        </div>

    </section>

</main>

<?php get_footer(); ?>