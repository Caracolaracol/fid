<?php get_header(); ?>
<div class="container-tipddy" style="padding: 0;">
  <img src="<?php echo get_field('ex_imagen_princnipal') ?>" alt="..." class="img-fluid img-extension">
</div>
<div class="container-tipddy">
  <h1 class="tit-extension"><?php echo get_field('ex_titulo') ?></h1>
  <h2 class="seo-style">Capacitación Profesional para Docentes y Directivos</h2>
  <div class="shares">
    <?php
    global $post;
    $post_slug = $post->post_name;
    $site_url = explode("//", get_home_url())[1];
    $show_share_rrss = get_field('ex_share_btn');

    if ($show_share_rrss === 'si') :
    ?>
      <p class="tit-terciario">Compartir:</p>
      <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2F<?php echo $site_url; ?>%2F<?php echo $post_slug; ?>%2F" target="_blank" rel="noopener noreferrer" class="rrss">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/new-fb.png" alt="facebook" class="img-fluid">
      </a>
      <a href="https://twitter.com/intent/tweet?url=https%3A%2F%2F<?php echo $site_url; ?>%2F<?php echo $post_slug; ?>%2F" target="_blank" rel="noopener noreferrer" class="rrss">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/new-twitter.png" alt="twitter" class="img-fluid">
      </a>
    <?php endif; ?>
  </div>
  <div class="container-tipddy vacio"></div>
  <div class="texto-extension">
    <?php echo get_field('ex_bajada'); ?>
  </div>
  <div class="container-tipddy vacio"></div>
  <a href="<?php echo get_field('ex_link_boton'); ?>" target="_blank"><button type="button" class="btn btn-primary bot-prin-not cen-comunidad">Ver más</button></a>
</div>
<div class="container-tipddy vacio"></div>

<?php get_footer();
