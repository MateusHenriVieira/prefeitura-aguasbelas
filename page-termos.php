<?php
/*
Template Name: Página Termos de Uso
*/
get_header(); ?>

<main class="legal-page-wrapper">

    <div class="page-header-strip">
        <div class="container">
            <h1>Termos de Uso</h1>
            <p>Regras e condições para utilização do Portal da Prefeitura de Águas Belas</p>
        </div>
    </div>

    <section class="container mb-large">
        
        <div class="legal-document-box">
            
            <div class="doc-toolbar">
                <div class="doc-meta">
                    <span class="dashicons dashicons-calendar-alt"></span>
                    Última atualização: <strong><?php echo get_the_modified_time('d/m/Y H:i'); ?></strong>
                </div>
                <button onclick="window.print()" class="btn-print">
                    <span class="dashicons dashicons-printer"></span> Imprimir
                </button>
            </div>

            <hr class="doc-divider">

            <div class="doc-content typography-pro">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; endif; ?>
            </div>

            <div class="doc-footer">
                <p>Em caso de dúvidas sobre estes termos, entre em contato através da nossa <a href="<?php echo home_url('/fale-conosco'); ?>">Ouvidoria</a>.</p>
            </div>

        </div>

    </section>

</main>

<?php get_footer(); ?>