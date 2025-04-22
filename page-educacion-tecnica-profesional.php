<?php get_header(); ?>

<div class="container-tipddy">
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tecnica.jpg" alt="..." class="img-fluid img-asesorias">
  <h1 class="tit-asesorias">Educación Técnica Profesional</h1>
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
  <h2 class="tipddy-label-2">Trabajemos por potenciar la EMTP</h2>
  <p class="texto-asesorias">
    FIDE tiene como misión acompañar a sus colegios técnicos profesionales afiliados en sus desafíos y políticas de desarrollo
    institucional, en las áreas curriculares, relación con el medio y administrativas o financieras.
  </p>
  <div class="container-tipddy vacio"></div>
  <h2 class="tipddy-label-2">¿En qué te podemos asesorar?</h2>
  <ul class="tipddy-services-list">
    <li class="tipddy-item-list"><span>En la implementación de la Reforma Educacional.</span></li>
    <li class="tipddy-item-list"><span>En materias administrativas, académicas y legales.</span></li>
    <li class="tipddy-item-list"><span>En la programación de temas, como la Estructura Modular, Reglamento de Evaluación, Reglamento de Práctica Profesional y Acreditación de Especialidades, para seminarios, encuentros o cursos.</span></li>
  </ul>
  <div class="container-tipddy vacio"></div>
  <a href="<?php get_page_by_slug_tipddy('form-contacto'); ?>" target="_blank"><button type="button" class="btn btn-primary bot-prin-not cen-comunidad">Contáctanos</button></a>

</div>
<div class="container-tipddy vacio"></div>

<?php get_footer();
