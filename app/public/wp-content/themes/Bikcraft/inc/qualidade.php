<!-- QUALIDADE -->
<?php $sobre = get_page_by_title('sobre'); ?>

<section class="qualidade container">
    <h2 class="subtitulo"><?php the_field('titulo_qualidade', $sobre); ?></h2>
    <img src="<?php the_field('logo_qualidade', $sobre); ?>" alt="Bikcraft">
    
    <ul class="qualidade_lista">
        <li class="grid-1-3">
            <h3><?php the_field('titulo_item_qualidade', $sobre); ?></h3>
            <?php the_field('descricao_qualidade', $sobre); ?>
        </li>
        <li class="grid-1-3">
            <h3><?php the_field('titulo_item_qualidade_2', $sobre); ?></h3>
            <?php the_field('descricao_qualidade_2', $sobre); ?>
        </li>
        <li class="grid-1-3">
            <h3><?php the_field('titulo_item_qualidade_3', $sobre); ?></h3>
            <?php the_field('descricao_qualidade_3', $sobre); ?>
        </li>
    </ul>
    
    <?php if(!is_page('sobre')) { ?>
    <div class="call-to-action">
            <p><?php the_field('chamada_sobre', $sobre); ?></p>
            <a href="/sobre/" class="btn btn-preto">Sobre</a>
        </div>
    <?php } ?>
</section>