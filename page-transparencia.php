<?php
/*
Template Name: Página Transparência
*/
get_header(); ?>

<main>

    <div class="page-header-strip">
        <div class="container">
            <h1>Portal da Transparência</h1>
            <p>Acesso rápido às contas públicas, licitações e serviços ao cidadão</p>
        </div>
    </div>

    <section class="container mb-large">
        <div class="transparency-grid">

            <div class="transp-card">
                <div class="tp-icon-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/OUVIDORIA VETOR.svg" alt="Ícone Ouvidoria">
                </div>
                <div class="tp-content">
                    <h3>Ouvidoria Municipal</h3>
                    <p>Canal direto para envio de denúncias, reclamações, sugestões e elogios sobre a administração pública.</p>
                    <a href="https://cloud.tenosoft.com.br/portal/ouvidoria/314" target="_blank" class="btn-transp">
                        Acessar Sistema <span class="dashicons dashicons-external"></span>
                    </a>
                </div>
            </div>

            <div class="transp-card">
                <div class="tp-icon-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/ESIC VETOR.svg" alt="Ícone E-SIC">
                </div>
                <div class="tp-content">
                    <h3>E-SIC (Acesso à Informação)</h3>
                    <p>Solicite dados e documentos públicos que não estejam disponíveis no portal, conforme a Lei de Acesso à Informação.</p>
                    <a href="https://cloud.tenosoft.com.br/portal/sic/?entidade=314" target="_blank" class="btn-transp">
                        Solicitar Informação <span class="dashicons dashicons-external"></span>
                    </a>
                </div>
            </div>

            <div class="transp-card">
                <div class="tp-icon-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/TRIBUTOS VETOR.svg" alt="Ícone Tributos">
                </div>
                <div class="tp-content">
                    <h3>Portal Tributário</h3>
                    <p>Emissão de Nota Fiscal Eletrônica (NFS-e), consulta de débitos, IPTU e certidões negativas.</p>
                    <a href="https://www.municipioonline.com.br/pe/pmab/aguasbelas" target="_blank" class="btn-transp">
                        Acessar Tributos <span class="dashicons dashicons-external"></span>
                    </a>
                </div>
            </div>

            <div class="transp-card">
                <div class="tp-icon-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/CARTA DE SERVIÇO VETOR.svg" alt="Ícone Carta de Serviço">
                </div>
                <div class="tp-content">
                    <h3>Carta de Serviços</h3>
                    <p>Consulte a lista completa de serviços prestados pela prefeitura, prazos, locais de atendimento e requisitos.</p>
                    <a href="https://agiliblue.agilicloud.com.br/portal/aguasbelas#/" target="_blank" class="btn-transp">
                        Ver Serviços <span class="dashicons dashicons-external"></span>
                    </a>
                </div>
            </div>

            <div class="transp-card">
                <div class="tp-icon-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/CONTRA CHEQUE VETOR.svg" alt="Ícone Servidor">
                </div>
                <div class="tp-content">
                    <h3>Portal do Servidor</h3>
                    <p>Área restrita para funcionários públicos emitirem contra-cheques, informes de rendimentos e fichas financeiras.</p>
                    <a href="https://cloud.tenosoft.com.br/portal/sp_acesso_rapido/sp_acesso_rapido.php" target="_blank" class="btn-transp">
                        Área do Servidor <span class="dashicons dashicons-external"></span>
                    </a>
                </div>
            </div>

            <div class="transp-card">
                <div class="tp-icon-box">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/EDITAL VETOR.svg" alt="Ícone Editais">
                </div>
                <div class="tp-content">
                    <h3>Editais e Seleções</h3>
                    <p>Acompanhe os processos seletivos simplificados, concursos públicos e editais de convocação em andamento.</p>
                    <a href="<?php echo home_url('/category/editais'); ?>" class="btn-transp">
                        Ver Editais <span class="dashicons dashicons-arrow-right-alt2"></span>
                    </a>
                </div>
            </div>

        </div>
    </section>

</main>

<?php get_footer(); ?>