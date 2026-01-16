<?php
/*
Template Name: Página Fale Conosco
*/
get_header(); ?>

<main>

    <div class="page-header-strip">
        <div class="container">
            <h1>Fale Conosco</h1>
            <p>Dúvidas, sugestões ou reclamações? Fale direto no nosso WhatsApp.</p>
        </div>
    </div>

    <section class="container mb-large">
        <div class="contact-grid">

            <div class="contact-info-col">
                
                <h2 class="section-title">Canais de Atendimento</h2>
                
                <div class="contact-list">
                    <div class="contact-item">
                        <div class="c-icon"><span class="dashicons dashicons-location"></span></div>
                        <div class="c-text">
                            <strong>Endereço</strong>
                            <p>Praça Nossa Senhora da Conceição, S/N<br>Centro, Águas Belas - PE<br>CEP: 55.340-000</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="c-icon"><span class="dashicons dashicons-phone"></span></div>
                        <div class="c-text">
                            <strong>Telefone / Ouvidoria</strong>
                            <p>(87) 99933-0730</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="c-icon"><span class="dashicons dashicons-email-alt"></span></div>
                        <div class="c-text">
                            <strong>E-mail Oficial</strong>
                            <p>prefeitura@aguasbelas.pe.gov.br</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="c-icon"><span class="dashicons dashicons-clock"></span></div>
                        <div class="c-text">
                            <strong>Horário de Atendimento</strong>
                            <p>Segunda a Sexta: 08h às 14h</p>
                        </div>
                    </div>
                </div>

                <div class="contact-map">
                    <iframe 
                        width="100%" 
                        height="300" 
                        frameborder="0" 
                        scrolling="no" 
                        marginheight="0" 
                        marginwidth="0" 
                        src="https://maps.google.com/maps?q=Prefeitura%20Municipal%20de%20%C3%81guas%20Belas%20Pernambuco&t=&z=15&ie=UTF8&iwloc=&output=embed">
                    </iframe>
                    <small style="display:block; margin-top:10px; color:#666; font-size:12px;">
                        <span class="dashicons dashicons-location-alt"></span> Localização Exata da Prefeitura
                    </small>
                </div>

            </div>

            <div class="contact-form-col">
                <div class="form-box">
                    <h3>Envie sua Mensagem</h3>
                    <p>Preencha os campos abaixo para iniciar o atendimento via WhatsApp.</p>

                    <form id="form-whatsapp" class="custom-form">
                        
                        <div class="form-group">
                            <label for="nome">Nome Completo</label>
                            <input type="text" id="nome" placeholder="Digite seu nome" required>
                        </div>

                        <div class="form-group">
                            <label for="whatsapp">Seu WhatsApp / Celular</label>
                            <div style="position: relative;">
                                <input type="tel" id="whatsapp" placeholder="(87) 99999-9999" required>
                                <span class="dashicons dashicons-whatsapp" style="position: absolute; right: 10px; top: 12px; color: #25D366;"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="assunto">Assunto</label>
                            <select id="assunto">
                                <option value="Assunto Geral">Assunto Geral</option>
                                <option value="Ouvidoria">Ouvidoria</option>
                                <option value="Tributos">Setor de Tributos</option>
                                <option value="Iluminação Pública">Iluminação Pública</option>
                                <option value="Imprensa">Imprensa</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="mensagem">Mensagem</label>
                            <textarea id="mensagem" rows="5" placeholder="Escreva aqui sua dúvida ou sugestão..." required></textarea>
                        </div>

                        <button type="submit" class="btn-submit">
                            <span class="dashicons dashicons-whatsapp" style="margin-right:5px"></span> Iniciar Conversa no WhatsApp
                        </button>

                    </form>
                </div>
            </div>

        </div>
    </section>

</main>

<script>
document.addEventListener("DOMContentLoaded", function() {
    
    // 1. MÁSCARA DE TELEFONE
    document.getElementById('whatsapp').addEventListener('input', function (e) {
        var x = e.target.value.replace(/\D/g, '').match(/(\d{0,2})(\d{0,5})(\d{0,4})/);
        e.target.value = !x[2] ? x[1] : '(' + x[1] + ') ' + x[2] + (x[3] ? '-' + x[3] : '');
    });

    // 2. LÓGICA DE ENVIO
    document.getElementById('form-whatsapp').addEventListener('submit', function(e) {
        e.preventDefault(); 

        var nome = document.getElementById('nome').value;
        var fone = document.getElementById('whatsapp').value;
        var assunto = document.getElementById('assunto').value;
        var msg = document.getElementById('mensagem').value;
        var numeroDestino = "5587999330730";

        // CORREÇÃO AQUI: Usamos '\n' para pular linha.
        // O encodeURIComponent vai transformar isso no código certo pro WhatsApp.
        var textoFinal = 
            "*Fale Conosco - Site Prefeitura*" + "\n" +
            "--------------------------------" + "\n" +
            "*Nome:* " + nome + "\n" +
            "*Assunto:* " + assunto + "\n" +
            "--------------------------------" + "\n" +
            "*Mensagem:*" + "\n" + msg;

        var linkWhatsapp = "https://wa.me/" + numeroDestino + "?text=" + encodeURIComponent(textoFinal);

        window.open(linkWhatsapp, '_blank');
    });

});
</script>

<?php get_footer(); ?>