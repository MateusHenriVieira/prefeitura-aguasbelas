<?php
/*
Template Name: Página Mapa do Site
*/
get_header(); ?>

<main>

    <div class="page-header-strip">
        <div class="container">
            <h1>Mapa do Site</h1>
            <p>Navegue por toda a estrutura do portal da Prefeitura de Águas Belas</p>
        </div>
    </div>

    <section class="container mb-large">
        
        <div class="sitemap-custom-grid">

            <div class="sitemap-block">
                <div class="sitemap-icon">
                    <span class="dashicons dashicons-building"></span>
                </div>
                <h3>Prefeitura</h3>
                <ul>
                    <li><a href="<?php echo home_url('/'); ?>">Página Inicial</a></li>
                    <li><a href="<?php echo home_url('/prefeitura'); ?>">Gabinete do Prefeito e Vice</a></li>
                    <li><a href="<?php echo home_url('/secretarias'); ?>">Secretariado e Pastas</a></li>
                    <li><a href="<?php echo home_url('/fale-conosco'); ?>">Fale Conosco / Contato</a></li>
                </ul>
            </div>

            <div class="sitemap-block">
                <div class="sitemap-icon">
                    <span class="dashicons dashicons-chart-bar"></span>
                </div>
                <h3>Transparência e Serviços</h3>
                <ul>
                    <li><a href="<?php echo home_url('/transparencia'); ?>">Portal da Transparência (Menu Principal)</a></li>
                    <li><a href="https://cloud.tenosoft.com.br/portal/ouvidoria/314" target="_blank">Ouvidoria Municipal <span class="external-icon">↗</span></a></li>
                    <li><a href="https://cloud.tenosoft.com.br/portal/sic/?entidade=314" target="_blank">E-SIC (Acesso à Informação) <span class="external-icon">↗</span></a></li>
                    <li><a href="https://www.municipioonline.com.br/pe/pmab/aguasbelas" target="_blank">Nota Fiscal Eletrônica <span class="external-icon">↗</span></a></li>
                    <li><a href="https://cloud.tenosoft.com.br/portal/sp_acesso_rapido/sp_acesso_rapido.php" target="_blank">Portal do Servidor <span class="external-icon">↗</span></a></li>
                </ul>
            </div>

            <div class="sitemap-block">
                <div class="sitemap-icon">
                    <span class="dashicons dashicons-megaphone"></span>
                </div>
                <h3>Comunicação Oficial</h3>
                <ul>
                    <li><a href="<?php echo home_url('/noticias'); ?>">Sala de Imprensa (Notícias)</a></li>
                    <li><a href="<?php echo home_url('/editais-e-concursos'); ?>">Editais, Licitações e Concursos</a></li>
                </ul>
                
                <h4 class="sub-title">Categorias de Notícias:</h4>
                <ul class="sub-list">
                    <?php 
                    $cats = get_categories(array('hide_empty' => 1, 'exclude' => 1));
                    foreach($cats as $c) {
                        echo '<li><a href="'.get_category_link($c->term_id).'">'.$c->name.'</a></li>';
                    }
                    ?>
                </ul>
            </div>

            <div class="sitemap-block">
                <div class="sitemap-icon">
                    <span class="dashicons dashicons-palmtree"></span>
                </div>
                <h3>Turismo e Cultura</h3>
                <ul>
                    <li><a href="<?php echo home_url('/turismo'); ?>">Pontos Turísticos e Rotas</a></li>
                </ul>

                <div class="separator-line"></div>

                <div class="sitemap-icon mini">
                    <span class="dashicons dashicons-admin-network"></span>
                </div>
                <h3>Legal</h3>
                <ul>
                    <li><a href="<?php echo home_url('/termos-de-uso'); ?>">Termos de Uso</a></li>
                    <li><a href="<?php echo home_url('/politica-de-privacidade'); ?>">Política de Privacidade</a></li>
                </ul>
            </div>

        </div>
    </section>

</main>

<?php get_footer(); ?>