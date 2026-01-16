<?php
/*
Template Name: Página Turismo
*/
get_header(); ?>

<main>

    <div class="page-header-strip">
        <div class="container">
            <h1>Turismo e Cultura</h1>
            <p>Descubra as belezas naturais, a fé e as festas de Águas Belas</p>
        </div>
    </div>

    <section class="container mb-large">
        
        <div class="tourism-filters">
            <span class="filter-btn active" data-filter="todos">Todos</span>
            <span class="filter-btn" data-filter="f-natureza">Natureza</span>
            <span class="filter-btn" data-filter="f-religioso">Religioso</span>
            <span class="filter-btn" data-filter="f-aventura">Aventura</span>
            <span class="filter-btn" data-filter="f-eventos">Eventos</span>
            <span class="filter-btn" data-filter="f-cultura">Cultura</span>
        </div>

        <div class="tourism-grid" id="tourismGrid">

            <div class="tour-card f-natureza" onclick="openTour(this)" 
                 data-location="Cachoeira do Garcia">
                <div class="tour-thumb">
                    <span class="tour-tag tag-nature">Natureza</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder-cachoeira.jpg" alt="Cachoeira do Garcia">
                </div>
                <div class="tour-info">
                    <h3>Cachoeira do Garcia</h3>
                    <p>Um refúgio natural com quedas d'água cristalinas, ideal para banho e trilhas ecológicas. Localizada na zona rural, oferece contato direto com a mata nativa.</p>
                    <span class="btn-link">Ver Detalhes <span class="dashicons dashicons-arrow-right-alt2"></span></span>
                </div>
            </div>

            <div class="tour-card f-religioso" onclick="openTour(this)" 
                 data-location="Igreja Nossa Senhora da Conceição Águas Belas">
                <div class="tour-thumb">
                    <span class="tour-tag tag-faith">Religioso</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder-igreja.jpg" alt="Igreja Matriz">
                </div>
                <div class="tour-info">
                    <h3>Igreja de N. Sra. da Conceição</h3>
                    <p>Marco histórico da cidade, com arquitetura preservada. É o ponto central da fé católica no município e palco das principais celebrações religiosas.</p>
                    <span class="btn-link">Ver Detalhes <span class="dashicons dashicons-arrow-right-alt2"></span></span>
                </div>
            </div>

            <div class="tour-card f-aventura" onclick="openTour(this)" 
                 data-location="Serra do Comunaty Águas Belas">
                <div class="tour-thumb">
                    <span class="tour-tag tag-adventure">Aventura</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder-trilha.jpg" alt="Serra do Comunaty">
                </div>
                <div class="tour-info">
                    <h3>Trilha da Serra do Comunaty</h3>
                    <p>Para quem ama trekking e vistas de tirar o fôlego. O ponto mais alto da região oferece uma visão panorâmica inesquecível do pôr do sol.</p>
                    <span class="btn-link">Ver Detalhes <span class="dashicons dashicons-arrow-right-alt2"></span></span>
                </div>
            </div>

            <div class="tour-card f-eventos" onclick="openTour(this)" 
                 data-location="Praça Nossa Senhora da Conceição Águas Belas">
                <div class="tour-thumb">
                    <span class="tour-tag tag-event">Evento Sazonal</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder-carnaval.jpg" alt="Carnaval das Águas">
                </div>
                <div class="tour-info">
                    <h3>Carnaval das Águas</h3>
                    <p>A maior festa popular da cidade, reunindo blocos tradicionais, maracatus e atrações nacionais no centro da cidade durante 4 dias de folia.</p>
                    <span class="btn-link">Ver Detalhes <span class="dashicons dashicons-arrow-right-alt2"></span></span>
                </div>
            </div>

            <div class="tour-card f-cultura" onclick="openTour(this)" 
                 data-location="Aldeia Fulni-ô Águas Belas">
                <div class="tour-thumb">
                    <span class="tour-tag tag-culture">Cultura</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder-aldeia.jpg" alt="Aldeia Fulni-ô">
                </div>
                <div class="tour-info">
                    <h3>Aldeia Fulni-ô</h3>
                    <p>Conheça a riqueza cultural, rituais e o artesanato do único povo do Nordeste que manteve sua língua original, o Yaathe.</p>
                    <span class="btn-link">Ver Detalhes <span class="dashicons dashicons-arrow-right-alt2"></span></span>
                </div>
            </div>

            <div class="tour-card f-cultura" onclick="openTour(this)" 
                 data-location="Mercado Público de Águas Belas">
                <div class="tour-thumb">
                    <span class="tour-tag tag-food">Gastronomia</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder-feira.jpg" alt="Feira Livre">
                </div>
                <div class="tour-info">
                    <h3>Feira Livre Tradicional</h3>
                    <p>O lugar certo para provar o queijo de coalho, a manteiga de garrafa e vivenciar a autêntica cultura sertaneja no centro comercial.</p>
                    <span class="btn-link">Ver Detalhes <span class="dashicons dashicons-arrow-right-alt2"></span></span>
                </div>
            </div>

        </div>
    </section>

    <div id="tour-modal" class="modal-overlay">
        <div class="modal-content tour-modal-content">
            <span class="close-btn" onclick="closeTour()">&times;</span>
            
            <div class="tour-modal-grid">
                <div class="tour-modal-details">
                    <div class="tour-modal-img">
                        <img id="tm-photo" src="" alt="">
                        <span id="tm-badge" class="tour-tag" style="position: absolute; top: 20px; left: 20px; right: auto;"></span>
                    </div>
                    <div class="tour-modal-text">
                        <h2 id="tm-title"></h2>
                        <p id="tm-desc"></p>
                    </div>
                </div>

                <div class="tour-modal-map">
                    <h4><span class="dashicons dashicons-location"></span> Localização</h4>
                    <div class="map-frame-container">
                        <iframe id="tm-map-iframe" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    
                    <a id="tm-gps-btn" href="#" target="_blank" class="btn-gps">
                        <span class="dashicons dashicons-location-alt"></span> Traçar Rota no GPS
                    </a>
                </div>
            </div>

        </div>
    </div>

</main>

<script>
// 1. Lógica dos Filtros
document.addEventListener('DOMContentLoaded', function() {
    const filters = document.querySelectorAll('.filter-btn');
    const cards = document.querySelectorAll('.tour-card');

    filters.forEach(btn => {
        btn.addEventListener('click', () => {
            filters.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            const filterValue = btn.getAttribute('data-filter');

            cards.forEach(card => {
                if (filterValue === 'todos' || card.classList.contains(filterValue)) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
});

// 2. Lógica do Modal com Mapa
function openTour(card) {
    // Pega dados do card
    var imgSrc = card.querySelector('.tour-thumb img').src;
    var badgeClass = card.querySelector('.tour-tag').className; // Pega as cores da tag
    var badgeText = card.querySelector('.tour-tag').innerText;
    var title = card.querySelector('h3').innerText;
    var desc = card.querySelector('p').innerText;
    var locationName = card.getAttribute('data-location'); // Nome para o Google Maps

    // Preenche o Modal
    document.getElementById('tm-photo').src = imgSrc;
    document.getElementById('tm-badge').className = badgeClass; // Aplica a cor certa
    document.getElementById('tm-badge').innerText = badgeText;
    document.getElementById('tm-title').innerText = title;
    document.getElementById('tm-desc').innerText = desc;

    // Gera o Link do Mapa Dinamicamente
    // Dica: Usamos "output=embed" para gerar o iframe sem API Key (pode ter limitações, mas funciona para demos)
    var mapEmbedUrl = "https://maps.google.com/maps?q=" + encodeURIComponent(locationName + " Águas Belas PE") + "&t=&z=15&ie=UTF8&iwloc=&output=embed";
    document.getElementById('tm-map-iframe').src = mapEmbedUrl;

    // Gera o Botão de Rota (Abre app nativo)
    var mapGpsUrl = "https://www.google.com/maps/dir/?api=1&destination=" + encodeURIComponent(locationName + " Águas Belas PE");
    document.getElementById('tm-gps-btn').href = mapGpsUrl;

    // Abre
    document.getElementById('tour-modal').style.display = 'flex';
    document.body.style.overflow = 'hidden';
}

function closeTour() {
    document.getElementById('tour-modal').style.display = 'none';
    document.getElementById('tm-map-iframe').src = ""; // Limpa o iframe para parar de carregar
    document.body.style.overflow = 'auto';
}

// Fecha clicando fora
window.onclick = function(event) {
    var modal = document.getElementById('tour-modal');
    if (event.target == modal) closeTour();
}
</script>

<?php get_footer(); ?>