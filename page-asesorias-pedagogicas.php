<?php get_header(); ?>

<div class="container-tipddy">
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/asesoria-pedagogica.jpg" alt="..." class="img-fluid img-asesorias">
  <h1 class="tit-asesorias">Asesorías Pedagógicas</h1>
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
  <h2 class="tipddy-label-2">¿Cómo enfrentas los desafíos pedagógicos que nos plantea la educación actual?</h2>
  <p class="texto-asesorias">
    FIDE es, desde su fundación, un referente nacional en el ámbito educativo. Su Departamento Pedagógico es una instancia de reflexión,
    análisis y producción de material educativo, que estudia las políticas públicas y sus efectos; y desarrolla propuestas que apuntan
    a mejorar la gestión educativa.
  </p>
  <div class="container-tipddy vacio"></div>
  <h2 class="tipddy-label-2">¿En qué te podemos asesorar?</h2>
  <ul class="tipddy-services-list">
    <li class="tipddy-item-list"><span>En la programación de temas para seminarios, encuentros o cursos.</span></li>
    <li class="tipddy-item-list"><span>Elaboramos documentos de trabajo y reflexión que permiten un análisis crítico de la contingencia educativa e implementación de políticas públicas.</span></li>
    <li class="tipddy-item-list"><span>Desarrollamos proyectos de investigación educacional.</span></li>
    <li class="tipddy-item-list"><span>Orientamos la generación de proyectos de innovación pedagógica.</span></li>
  </ul>
  <div class="container-tipddy vacio"></div>
  <a href="<?php get_page_by_slug_tipddy('form-contacto'); ?>" target="_blank"><button type="button" class="btn btn-primary bot-prin-not cen-comunidad">Contáctanos</button></a>

</div>
<div class="container-tipddy vacio"></div>

<?php get_footer();
