<?php
// Template Name: Home
get_header();
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>   
    <!-- INTRODUÇÃO -->
    <section class="introducao">
        <div class="container">
            <h1>Bicicletas Feitas a Mão</h1>
            
            <blockquote class="quote_externo">
                <p>“não tenha nada em sua casa que você
                não considere útil ou acredita ser bonito”</p>
                <cite>WILLIAM MORRIS</cite>
            </blockquote>
            
            <a href="produtos.html" class="btn">Orçamento</a>
        </div>
    </section>  
    <!-- PRODUTOS -->
    <section class="produtos container animar">
        <h2 class="subtitulo">Produtos</h2>
        <ul class="produtos_lista">
           
            <li class="grid-1-3">
               <div class="produtos_icone">
                <img src="img/produtos/passeio.png" alt="Bikcraft Passeio">
                </div>
                <h3>Passeio</h3>
                <p>Muito melhor do que passear pela orla a vidros fechados.</p>
            </li>
            
            <li class="grid-1-3">
               <div class="produtos_icone">
                <img src="img/produtos/esporte.png" alt="Bikcraft Passeio">
                </div>
                <h3>Esporte</h3>
                <p>Mais rápida do que Forrest Gump, ninguém vai pegar você.</p>
            </li>
            
            <li class="grid-1-3">
               <div class="produtos_icone">
                <img src="img/produtos/retro.png" alt="Bikcraft Passeio">
                </div>
                <h3>Retro</h3>
                <p>O passado volta para lembrarmos o que devemos fazer no futuro.</p>
            </li>
            
        </ul>
        
        <div class="call-to-action">
            <p>Clique aqui e veja os detalhes do produto</p>
            <a href="produtos.html" class="btn btn-preto">Produtos</a>
        </div>
    </section>
    
    <!-- PORTFÒLIO -->
    <section class="portfolio">
        <div class="container">
            <h2 class="subtitulo">Portifólio</h2>
            <div class="portfolio-lista">
                <div class="grid-8"><img src="img/portfolio/retro.jpg" alt="Bicicleta Retro"></div>
                <div class="grid-8"><img src="img/portfolio/passeio.jpg" alt="Bicicleta Passeio"></div>
                <div class="grid-16"><img src="img/portfolio/esporte.jpg" alt="Bicicleta Esporte"></div>
            </div>
            
            <div class="call-to-action">
                <p>Conheça mais o nosso portfólio</p>
                <a href="portfolio.html" class="btn">Portfólio</a>
            </div>
        
        </div>
    </section>
    
    <!-- QUALIDADE -->
    <section class="qualidade container">
        <h2 class="subtitulo">Qualidade</h2>
        <img src="img/bikcraft-qualidade.png" alt="Bikcraft">
        <ul class="qualidade_lista">
            <li class="grid-1-3">
                <h3>Durabilidade</h3>
                <p>Sólida como pedra, leve como o vento e resistente como o diamante, são nossos diferenciais.</p>
            </li>
            <li class="grid-1-3">
                <h3>Design</h3>
                <p>Feitas sob medida para o melhor conforto e eficiência. Adaptamos a sua Bikcraft para o seu corpo.</p>
            </li>
            <li class="grid-1-3">
                <h3>Sustentabilidade</h3>
                <p>Além de ajudar a cuidar do meio ambiente, tirando carros da rua, toda a produção é sustentável.</p>
            </li>
        </ul>
        <div class="call-to-action">
                <p>Conheça mais a nossa história</p>
                <a href="sobre.html" class="btn btn-preto">Sobre</a>
            </div>
    </section>
    
    <?php endwhile; else: endif; ?>
    <?php get_footer(); ?>
    