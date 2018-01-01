<?php
// Template Name: Contato
get_header();
?>
    
    <!-- INTRODUÇÃO -->
    <section class="introducao_interna interna_contato">
        <div class="container">
            <h1>Contato</h1>
            <p>tire suas dúvidas com a gente</p>
        </div>
    </section>
    
    <!-- ORÇAMENTO -->
    <section class="contato container animar-interno">

        <form action="enviar.php" method="post" name="form" class="formphp contato_form grid-8">
            <label for="nome">Nome</label>
            <input id="nome" name="nome" type="text">
            <label for="email">E-mail</label>
            <input id="email" name="email" type="text">
            <label for="telefone">Telefone</label>
            <input id="telefone" name="telefone" type="text">

            <label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
            <input type="text" class="nao-aparece" name="leaveblank">
            <label class="nao-aparece">Se você não é um robô, não mude este campo.</label>
            <input type="text" class="nao-aparece" name="dontchange" value="http://" >

            <label for="mensagem">Mensagem</label>
            <textarea name="mensagem" id="mensagem"></textarea>

            <button id="enviar" name="enviar" type="submit" class="btn btn-preto">Enviar</button>
        </form>

        <div class="contato_dados grid-8">
            <h3>Dados</h3>
            <span>+55 21 93223 3232</span>
            <span>orcamento@bikcraft.com</span>
            <span>Rua Ali Perto - Botafogo</span>
            <span>Rio de Janeiro - RJ - Brasil</span>

            
            <h3>Redes Sociais</h3>
            
             <ul>
                <li><a href="https://www.facebook.com" target="_blank"><img src="img/redes-sociais/facebook.png" alt="Facebook"></a></li>
                <li><a href="https://www.instagram.com" target="_blank"><img src="img/redes-sociais/instagram.png" alt="Instagram"></a></li>
                <li><a href="https://www.twitter.com" target="_blank"><img src="img/redes-sociais/twitter.png" alt="Twitter"></a></li>
            </ul>
        </div>
    </section>
    
    <!-- MAPA -->
    <div class="container contato_mapa">
        <a href="https://www.google.com.br/maps/place/Botafogo,+Rio+de+Janeiro+-+RJ/@-22.9511872,-43.1944118,3956m/data=!3m1!1e3!4m5!3m4!1s0x997fe5efee9a25:0x3c77ca60168b5ea!8m2!3d-22.9511149!4d-43.1809269?hl=pt-BR" target="_blank" class="grid-16"><img src="img/endereco-bikcraft.jpg" alt="Endereço da Bikcraft"></a>
    </div>
   
    <?php get_footer(); ?>