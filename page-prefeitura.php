<?php
/*
Template Name: Página Prefeitura
*/
get_header(); ?>

<main>

    <div class="page-header-strip">
        <div class="container">
            <h1>Prefeitura</h1>
            <p>Conheça os representantes do nosso executivo municipal</p>
        </div>
    </div>

    <section class="bio-section container">
        <div class="bio-grid">
            
            <div class="bio-image-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder-prefeito.jpg" alt="Foto do Prefeito" class="bio-photo">
                <div class="bio-label">
                    <span>Prefeito</span>
                </div>
            </div>

            <div class="bio-content">
                <h2 class="bio-name">Nome do Prefeito</h2>
                <h3 class="bio-role">Prefeito Municipal</h3>
                <div class="bio-text">
                    <p>Aqui você vai colocar o texto da biografia do prefeito. Fale sobre a trajetória política, formação acadêmica, onde nasceu e os principais feitos.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                </div>
                
                <div class="bio-social">
                    <a href="#" target="_blank"><span class="dashicons dashicons-instagram"></span> @instagramdoprefeito</a>
                    <a href="#" target="_blank"><span class="dashicons dashicons-facebook"></span> /facebookdoprefeito</a>
                </div>
            </div>

        </div>
    </section>

    <hr class="container divider-line">

    <section class="bio-section container">
        <div class="bio-grid reverse-mobile">
            
            <div class="bio-content">
                <h2 class="bio-name">Nome da Vice-Prefeita</h2>
                <h3 class="bio-role">Vice-Prefeita</h3>
                <div class="bio-text">
                    <p>Aqui entra a biografia da vice-prefeita. Conte sobre a história de vida dela, projetos que participou e sua importância para o município.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                </div>

                <div class="bio-social">
                    <a href="#" target="_blank"><span class="dashicons dashicons-instagram"></span> @instagramdavice</a>
                </div>
            </div>

            <div class="bio-image-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder-vice.jpg" alt="Foto da Vice-Prefeita" class="bio-photo">
                <div class="bio-label label-vice">
                    <span>Vice-Prefeita</span>
                </div>
            </div>

        </div>
    </section>

</main>

<?php get_footer(); ?>