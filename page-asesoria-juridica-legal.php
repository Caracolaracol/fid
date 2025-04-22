<?php get_header(); ?>

<div class="container-tipddy">
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/juridica.jpg" alt="..." class="img-fluid img-asesorias">
  <h1 class="tit-asesorias">Asesorías Jurídica - Legal</h1>
  <div class="shares">
    <?php
    global $post;
    $post_slug = $post->post_name;
    $site_url = explode("//", get_home_url())[1];
    ?>
    <p class="tit-terciario">Compartir:</p>
    <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2F<?php echo $site_url; ?>%2F<?php echo $post_slug; ?>%2F" target="_blank" rel="noopener noreferrer" class="rrss">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/new-fb.png" alt="facebook" class="img-fluid">
    </a>
    <a href="https://twitter.com/intent/tweet?url=https%3A%2F%2F<?php echo $site_url; ?>%2F<?php echo $post_slug; ?>%2F" target="_blank" rel="noopener noreferrer" class="rrss">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/new-twitter.png" alt="twitter" class="img-fluid">
    </a>
  </div>
  <div class="container-tipddy vacio"></div>
  <p class="texto-asesorias">
    FIDE pone al servicio de sus colegios afiliados asesoría en todo lo relacionado a la jurisprudencia administrativa
    y judicial, sobre todo en temas laborales y tributarios.
  </p>
  <div class="container-tipddy vacio"></div>
  <h2 class="tipddy-label-2">¿En qué te podemos asesorar?</h2>
  <ul class="tipddy-services-list">
    <li class="tipddy-item-list"><span>Aplicación de leyes, decretos y circulares relativas a la ley de Inclusión, y de Carrera Docente.</span></li>
    <li class="tipddy-item-list"><span>Elaboración y términos de contratos.</span></li>
    <li class="tipddy-item-list"><span>Demandas y juicios.</span></li>
    <li class="tipddy-item-list"><span>Multas.</span></li>
  </ul>
  <div class="container-tipddy vacio"></div>
  <a href="<?php get_page_by_slug_tipddy('form-contacto'); ?>" target="_blank"><button type="button" class="btn btn-primary bot-prin-not cen-comunidad">Contáctanos</button></a>

</div>
<div class="container-tipddy vacio"></div>

<?php get_footer();
