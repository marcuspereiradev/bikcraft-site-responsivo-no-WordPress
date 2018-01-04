<style type="text/css">
    .introducao_interna {
        background: url("<?php the_field('background_interno'); ?>") no-repeat center;
        background-size: cover;
    }
</style>
<!-- INTRODUÇÃO -->
<section class="introducao_interna">
    <div class="container">
        <h1><?php the_title(); ?></h1>
        <p><?php the_field('subtitulo'); ?></p>
    </div>
</section>