<?php
// Template Name: Portfólio
get_header();
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>    
    <!-- INTRODUÇÃO -->
    <?php include(TEMPLATEPATH . "/inc/introducao.php"); ?>
    
    <!-- -->
    <div class="container animar-interno">
        <ul class="rslides">
            <li>
                <blockquote class="quote_clientes">
                    <p><?php the_field('quote'); ?></p>
                    <cite><?php the_field('nome_quote'); ?></cite>
                </blockquote>   
            </li>
            <li>
                <blockquote class="quote_clientes">
                    <p><?php the_field('quote2'); ?></p>
                    <cite><?php the_field('nome_quote2'); ?></cite>
                </blockquote>   
            </li>
            <li>
                <blockquote class="quote_clientes">
                    <p><?php the_field('quote3'); ?></p>
                    <cite><?php the_field('nome_quote3'); ?></cite>
                </blockquote>   
            </li>
        </ul>

    </div>
    
    <!-- -->
    <div class="portfolio">
        <div class="container">
        
             <?php include(TEMPLATEPATH . "/inc/clientes-portfolio.php"); ?>
              
        </div>
    </div>
    
<?php endwhile; else: endif; ?>
<?php get_footer(); ?>