<?php $portfolio = get_page_by_title('portfolio'); ?>

<ul class="portfolio-lista rslides_portfolio">
    <li>
        <div class="grid-8"><img src="<?php the_field('portfolio_imagem1', $portfolio); ?>" alt="<?php the_field('portfolio_imagem_descricao1', $portfolio); ?>"></div>
        <div class="grid-8"><img src="<?php the_field('portfolio_imagem2', $portfolio); ?>" alt="<?php the_field('portfolio_imagem_descricao2', $portfolio); ?>"></div>
        <div class="grid-16"><img src="<?php the_field('portfolio_imagem3', $portfolio); ?>" alt="<?php the_field('portfolio_imagem_descricao3', $portfolio); ?>"></div>
    </li>

    <li>
        <div class="grid-8"><img src="<?php the_field('portfolio_imagem2', $portfolio); ?>" alt="<?php the_field('portfolio_imagem_descricao2', $portfolio); ?>"></div>
        <div class="grid-8"><img src="<?php the_field('portfolio_imagem1', $portfolio); ?>" alt="<?php the_field('portfolio_imagem_descricao1', $portfolio); ?>"></div>
        <div class="grid-16"><img src="<?php the_field('portfolio_imagem3', $portfolio); ?>" alt="<?php the_field('portfolio_imagem_descricao3', $portfolio); ?>"></div>
    </li>
</ul>
    
<?php if (!is_page('portfolio')) { ?>
    <div class="call-to-action">
        <p><?php the_field('chamada_portfolio', $portfolio); ?></p>
        <a href="/portfolio/" class="btn">Portfólio</a>
    </div>
<?php } ?>  