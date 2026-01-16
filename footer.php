</main>

    <footer class="gov-footer">
        
        <div class="footer-color-bar">
            <div class="f-stripe s-green"></div>
            <div class="f-stripe s-red"></div>
            <div class="f-stripe s-yellow"></div>
            <div class="f-stripe s-blue"></div>
        </div>

        <div class="footer-main">
            <div class="container footer-grid">
                
                <div class="footer-col col-info">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/LOGOTIPO ÀGUAS BELAS BRANCA.png" alt="Prefeitura de Águas Belas" class="footer-logo">
                    
                    <p class="footer-desc">
                        Trabalhando com transparência e inovação para garantir o desenvolvimento de nossa cidade e o bem-estar de todos os cidadãos.
                    </p>

                    <ul class="contact-list-footer">
                        <li>
                            <span class="dashicons dashicons-location"></span>
                            <span>Praça Nossa Sra. da Conceição, S/N - Centro<br>Águas Belas - PE, 55340-000</span>
                        </li>
                        <li>
                            <span class="dashicons dashicons-phone"></span>
                            <span>(87) 99939-0790</span>
                        </li>
                        <li>
                            <span class="dashicons dashicons-email-alt"></span>
                            <span>prefeitura@aguasbelas.pe.gov.br</span>
                        </li>
                        <li>
                            <span class="dashicons dashicons-clock"></span>
                            <span>Seg a Sex: 08h às 14h</span>
                        </li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h3>Institucional</h3>
                    <ul class="footer-links">
                        <li><a href="<?php echo home_url('/prefeitura'); ?>">Prefeito e Vice</a></li>
                        <li><a href="<?php echo home_url('/secretarias'); ?>">Secretarias</a></li>
                        <li><a href="<?php echo home_url('/turismo'); ?>">Turismo e Cultura</a></li>
                        <li><a href="<?php echo home_url('/noticias'); ?>">Notícias</a></li>
                        <li><a href="<?php echo home_url('/editais'); ?>">Editais e Concursos</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h3>Serviços ao Cidadão</h3>
                    <ul class="footer-links">
                        <li><a href="<?php echo home_url('/transparencia'); ?>">Portal da Transparência</a></li>
                        <li><a href="https://cloud.tenosoft.com.br/portal/ouvidoria/314" target="_blank">Ouvidoria Municipal</a></li>
                        <li><a href="https://cloud.tenosoft.com.br/portal/sic/?entidade=314" target="_blank">E-SIC (Acesso à Informação)</a></li>
                        <li><a href="https://www.municipioonline.com.br/pe/pmab/aguasbelas" target="_blank">Nota Fiscal Eletrônica</a></li>
                        <li><a href="https://cloud.tenosoft.com.br/portal/sp_acesso_rapido/sp_acesso_rapido.php" target="_blank">Contra-Cheque Servidor</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h3>Conecte-se</h3>
                    <p class="mb-small">Siga a prefeitura nas redes sociais e fique por dentro de tudo.</p>
                    
                    <div class="footer-social">
                        <a href="https://instagram.com/prefeituraaguasbelas" target="_blank" title="Instagram">
                            <span class="dashicons dashicons-instagram"></span>
                        </a>
                        <a href="https://facebook.com" target="_blank" title="Facebook">
                            <span class="dashicons dashicons-facebook-alt"></span>
                        </a>
                        <a href="https://youtube.com" target="_blank" title="YouTube">
                            <span class="dashicons dashicons-video-alt3"></span>
                        </a>
                    </div>

                    <a href="<?php echo home_url('/fale-conosco'); ?>" class="btn-footer-contact">
                        Fale Conosco
                    </a>
                </div>

            </div>
        </div>

        <div class="footer-legal">
            <div class="container legal-flex">
                <div class="legal-text">
                    <p>&copy; <?php echo date('Y'); ?> Prefeitura Municipal de Águas Belas - PE. Todos os direitos reservados.</p>
                    <p class="cnpj">CNPJ: 11.222.333/0001-00</p>
                </div>
                <div class="legal-links">
                    <a href="<?php echo home_url('/termos-de-uso'); ?>">Termos de Uso</a>
                    <span class="sep">|</span>
                    <a href="<?php echo home_url('/politica-de-privacidade'); ?>">Política de Privacidade</a>
                    <span class="sep">|</span>
                    <a href="#">Mapa do Site</a>
                </div>
            </div>
        </div>

    </footer>

    <?php wp_footer(); ?>
</body>
</html>