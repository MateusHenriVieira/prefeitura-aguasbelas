<?php
/*
Template Name: Página Secretarias
*/
get_header(); ?>

<main>

    <div class="page-header-strip">
        <div class="container">
            <h1>Secretariado</h1>
            <p>Conheça a equipe que trabalha pelo desenvolvimento de Águas Belas</p>
        </div>
    </div>

    <section class="container mb-large">
        <div class="secretaries-grid">

            <div class="secretary-card" onclick="openSecretary(this)">
                <div class="sec-photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sec-adriano.jpg" alt="Adriano Moraes">
                </div>
                <div class="sec-content">
                    <span class="sec-badge">Procuradoria Municipal</span>
                    <h3>Adriano Tenório Moraes</h3>
                    <p>Advogado, professor universitário e pós-graduado em Advocacia Civil e Ciências Penais. Especializando-se em Administração Pública. Assume a responsabilidade de zelar pela legalidade dos atos administrativos, promover a defesa dos interesses públicos e garantir uma gestão transparente e ética na Procuradoria Geral.</p>
                </div>
            </div>

            <div class="secretary-card" onclick="openSecretary(this)">
                <div class="sec-photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sec-agnaldo.jpg" alt="Agnaldo Benevides">
                </div>
                <div class="sec-content">
                    <span class="sec-badge">Gestão Financeira</span>
                    <h3>Agnaldo Benevides</h3>
                    <p>Empresário, assume a Secretaria de Finanças com o desafio de gerir os recursos públicos com eficiência, transparência e responsabilidade. Sua meta é otimizar a gestão financeira, alcançar o equilíbrio fiscal e direcionar investimentos estratégicos para as áreas prioritárias do município.</p>
                </div>
            </div>

            <div class="secretary-card" onclick="openSecretary(this)">
                <div class="sec-photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sec-cicero.jpg" alt="Cícero Teles">
                </div>
                <div class="sec-content">
                    <span class="sec-badge">Assessor Especial de Relações Institucionais</span>
                    <h3>Cícero Teles</h3>
                    <p>Funcionário efetivo com experiência no serviço público, assume o compromisso de fortalecer o diálogo entre a gestão municipal e instituições, promovendo parcerias estratégicas. Sua atuação será pautada pela transparência, eficiência e dedicação ao desenvolvimento da cidade.</p>
                </div>
            </div>

            <div class="secretary-card" onclick="openSecretary(this)">
                <div class="sec-photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sec-edilson.jpg" alt="Edilson Paranhos">
                </div>
                <div class="sec-content">
                    <span class="sec-badge">Presidente do IPREAB</span>
                    <h3>Edilson Paranhos</h3>
                    <p>Advogado, pós-graduado em Direito e Prática Previdenciária. Conciliador e mediador judicial com ampla experiência em resolução de conflitos. À frente do IPREAB, compromete-se a gerir a previdência municipal com responsabilidade, garantindo os direitos dos servidores públicos.</p>
                </div>
            </div>

            <div class="secretary-card" onclick="openSecretary(this)">
                <div class="sec-photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sec-irakitan.jpg" alt="Irakitan Viana">
                </div>
                <div class="sec-content">
                    <span class="sec-badge">Assuntos Indígenas</span>
                    <h3>Irakitan Viana</h3>
                    <p>Assume com o compromisso de fortalecer políticas públicas para as comunidades indígenas, valorizando a cultura e defendendo direitos. Trabalhará para atender às demandas da comunidade Fulni-ô, garantindo inclusão, desenvolvimento sustentável e acesso a serviços essenciais.</p>
                </div>
            </div>

            <div class="secretary-card" onclick="openSecretary(this)">
                <div class="sec-photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sec-jeancarlo.jpg" alt="Jeancarlo Bezerra">
                </div>
                <div class="sec-content">
                    <span class="sec-badge">Relações Institucionais</span>
                    <h3>Jeancarlo Bezerra</h3>
                    <p>Advogado com diversas especializações e ampla experiência jurídica em prefeituras da região. Como Secretário, utilizará sua expertise para fortalecer parcerias, articular políticas públicas e promover o desenvolvimento do município através do diálogo e da eficiência administrativa.</p>
                </div>
            </div>

            <div class="secretary-card" onclick="openSecretary(this)">
                <div class="sec-photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sec-joyce.jpg" alt="Joyce Xavier">
                </div>
                <div class="sec-content">
                    <span class="sec-badge">Assistência Social</span>
                    <h3>Joyce Xavier</h3>
                    <p>Enfermeira com 13 anos de experiência, foca na implementação de políticas públicas de inclusão e bem-estar. Seu objetivo é a proteção social, apoiando indivíduos, familiares e comunidades para superarem dificuldades e acessarem seus direitos sociais.</p>
                </div>
            </div>

            <div class="secretary-card" onclick="openSecretary(this)">
                <div class="sec-photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sec-laura.jpg" alt="Laura Povoas">
                </div>
                <div class="sec-content">
                    <span class="sec-badge">Mulher, Juventude e Direitos Humanos</span>
                    <h3>Laura Povoas</h3>
                    <p>Advogada comprometida com a justiça social. Dedica-se a construir políticas públicas que fortaleçam a inclusão, a igualdade e o empoderamento feminino. Seu foco é garantir o desenvolvimento pleno das mulheres e dos jovens da cidade, protegendo os direitos humanos.</p>
                </div>
            </div>

            <div class="secretary-card" onclick="openSecretary(this)">
                <div class="sec-photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sec-leonardo.jpg" alt="Leonardo França">
                </div>
                <div class="sec-content">
                    <span class="sec-badge">Chefe de Gabinete</span>
                    <h3>Leonardo França</h3>
                    <p>Formado em Direito, com sólida trajetória no serviço público, incluindo Defensoria e Ministério Público. Ex-Diretor Jurídico do IPEM/PE. Coordena atividades administrativas e institucionais, garantindo a integração das secretarias e o alinhamento estratégico das ações do governo.</p>
                </div>
            </div>

            <div class="secretary-card" onclick="openSecretary(this)">
                <div class="sec-photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sec-raul.jpg" alt="Raul Pinheiro">
                </div>
                <div class="sec-content">
                    <span class="sec-badge">Planejamento e Gestão</span>
                    <h3>Raul Pinheiro</h3>
                    <p>Pós-graduado em Administração pela FGV, com vasta experiência na gestão de grandes contratos (Oi/SA). Lidera o planejamento estratégico do município, englobando Cultura, Turismo e Meio Ambiente, com foco na eficiência da gestão pública e no desenvolvimento sustentável.</p>
                </div>
            </div>

            <div class="secretary-card" onclick="openSecretary(this)">
                <div class="sec-photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sec-ricardo.jpg" alt="Ricardo Ubirajara">
                </div>
                <div class="sec-content">
                    <span class="sec-badge">Recursos Hídricos</span>
                    <h3>Ricardo Ubirajara</h3>
                    <p>Licenciado em Geografia, alia conhecimento técnico à experiência prática na gestão pública e comunitária. Comprometido em implementar soluções sustentáveis e eficazes para o uso, preservação e gestão dos recursos hídricos do município.</p>
                </div>
            </div>

            <div class="secretary-card" onclick="openSecretary(this)">
                <div class="sec-photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sec-rilton.jpg" alt="Rilton Wanderley">
                </div>
                <div class="sec-content">
                    <span class="sec-badge">Desenvolvimento Rural</span>
                    <h3>Rilton Wanderley</h3>
                    <p>Com ampla experiência nos setores público e privado, foi Tabelião Titular em Águas Belas. Como Secretário de Agricultura, lidera ações para o fortalecimento do setor agropecuário e sustentabilidade, impulsionando o crescimento econômico do meio rural.</p>
                </div>
            </div>

            <div class="secretary-card" onclick="openSecretary(this)">
                <div class="sec-photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sec-sergio.jpg" alt="Sérgio Matos">
                </div>
                <div class="sec-content">
                    <span class="sec-badge">Infraestrutura e Serviços Públicos</span>
                    <h3>Sérgio Matos</h3>
                    <p>Servidor público desde 1997, com experiência em diversos municípios. Focado em modernizar a infraestrutura urbana e rural, coordenar obras essenciais e garantir a aplicação eficiente dos recursos para proporcionar melhor qualidade de vida aos cidadãos.</p>
                </div>
            </div>

            <div class="secretary-card" onclick="openSecretary(this)">
                <div class="sec-photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sec-sidney.jpg" alt="Sidney Martins">
                </div>
                <div class="sec-content">
                    <span class="sec-badge">Transporte e Trânsito</span>
                    <h3>Sidney Martins</h3>
                    <p>Mais de 20 anos de experiência no setor de transportes e logística. Referência em eficiência e gestão de frotas. Comprometido em promover um sistema de transporte mais organizado, seguro e acessível para todos os aguasbelenses.</p>
                </div>
            </div>

            <div class="secretary-card" onclick="openSecretary(this)">
                <div class="sec-photo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/sec-tulio.jpg" alt="Túlio Danilo">
                </div>
                <div class="sec-content">
                    <span class="sec-badge">Indústria e Comércio</span>
                    <h3>Túlio Danilo</h3>
                    <p>Médico Veterinário com raízes no comércio local. Traz habilidades de gestão e relacionamento para impulsionar o desenvolvimento econômico. Focado em fortalecer oportunidades de negócios e promover o crescimento sustentável que beneficie a população.</p>
                </div>
            </div>

        </div>
    </section>

    <div id="sec-modal" class="modal-overlay">
        <div class="modal-content">
            <span class="close-btn" onclick="closeSecretary()">&times;</span>
            <div class="modal-grid">
                <div class="modal-photo">
                    <img id="m-photo" src="" alt="">
                </div>
                <div class="modal-text">
                    <span id="m-badge" class="sec-badge"></span>
                    <h2 id="m-name"></h2>
                    <p id="m-bio"></p>
                </div>
            </div>
        </div>
    </div>

</main>

<script>
function openSecretary(card) {
    // 1. Pega os dados do card clicado
    var photoSrc = card.querySelector('.sec-photo img').src;
    var badgeText = card.querySelector('.sec-badge').innerText;
    var nameText = card.querySelector('h3').innerText;
    var bioText = card.querySelector('p').innerText;

    // 2. Coloca os dados dentro do Modal
    document.getElementById('m-photo').src = photoSrc;
    document.getElementById('m-badge').innerText = badgeText;
    document.getElementById('m-name').innerText = nameText;
    document.getElementById('m-bio').innerText = bioText;

    // 3. Mostra o Modal com efeito flex
    document.getElementById('sec-modal').style.display = 'flex';
    document.body.style.overflow = 'hidden'; // Trava a rolagem do site fundo
}

function closeSecretary() {
    document.getElementById('sec-modal').style.display = 'none';
    document.body.style.overflow = 'auto'; // Destrava a rolagem
}

// Fecha se clicar fora da caixa branca
window.onclick = function(event) {
    var modal = document.getElementById('sec-modal');
    if (event.target == modal) {
        closeSecretary();
    }
}
</script>

<?php get_footer(); ?>