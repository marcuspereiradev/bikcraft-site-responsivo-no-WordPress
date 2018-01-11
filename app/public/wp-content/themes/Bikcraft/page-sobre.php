<?php
// Template Name: Sobre
get_header();
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>    
    <!-- INTRODUÇÃO -->
    <?php include(TEMPLATEPATH . "/inc/introducao.php"); ?>
    
    <!-- -->
    <section class="missao_sobre container animar-interno">
        <div class="grid-10">
            <h2 class="subtitulo_interno">História, Missão e Visão</h2>
            <p><?php the_field('missao'); ?></p>
        </div>
        
        <div class="grid-6">
            <h2 class="subtitulo_interno">Valores</h2>
            <?php the_field('valores'); ?>
        </div>
        
        <div class="grid-16"><img class="foto_equipe" src="<?php the_field('imagem_equipe'); ?>" alt="Equipe Bikcraft"></div>
    </section>
    
    
    <!-- QUALIDADE -->
    <?php include(TEMPLATEPATH . "/inc/qualidade.php"); ?>
    
<?php endwhile; else: endif; ?>
<?php get_footer(); ?>