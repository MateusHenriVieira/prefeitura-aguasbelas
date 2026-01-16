<?php
/*
Template Name: Página Política de Privacidade
*/
get_header(); ?>

<main class="legal-page-wrapper">

    <div class="page-header-strip">
        <div class="container">
            <h1>Política de Privacidade</h1>
            <p>Como a Prefeitura coleta, usa e protege seus dados pessoais (LGPD)</p>
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
                <p>O Encarregado de Proteção de Dados (DPO) pode ser contatado pelo e-mail: <a href="mailto:dpo@aguasbelas.pe.gov.br">dpo@aguasbelas.pe.gov.br</a></p>
            </div>

        </div>

    </section>

</main>

<?php get_footer(); ?>