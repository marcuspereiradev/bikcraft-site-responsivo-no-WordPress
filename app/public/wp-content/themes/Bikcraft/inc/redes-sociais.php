<?php $contato = get_page_by_title('contato'); ?>

<ul>
    <li><a href="<?php the_field('link_social', $contato) ?>" target="_blank"><img src="<?php the_field('imagem_social', $contato) ?>" alt="<?php the_field('nome_social', $contato) ?>"></a></li>

    <li><a href="<?php the_field('link_social2', $contato) ?>" target="_blank"><img src="<?php the_field('imagem_social2', $contato) ?>" alt="<?php the_field('nome_social2', $contato) ?>"></a></li>

    <li><a href="<?php the_field('link_social3', $contato) ?>" target="_blank"><img src="<?php the_field('imagem_social3', $contato) ?>" alt="<?php the_field('nome_social3', $contato) ?>"></a></li>
</ul>