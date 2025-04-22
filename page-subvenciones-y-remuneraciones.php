<?php get_header(); ?>

<div class="container-tipddy">
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/financiera.jpg" alt="..." class="img-fluid img-asesorias">
  <h1 class="tit-asesorias">Subvenciones y remuneraciones</h1>
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
  <h2 class="tipddy-label-2">¿Tienes dudas en tu colegio con respecto a temas tributarios o contables?</h2>
  <p class="texto-asesorias">
    FIDE, ofrece a sus colegios afiliados asesoría financiera, contable, tributaria y remuneracional. Además,
    del envío de los <b>criterios operativos</b>, destinados a guiar la aplicación de la legislación vigente, en el
    ámbito de las remuneraciones, subvenciones, aspectos tributarios y contables; <b>circulares</b>, con la información
    al día de la nueva legislación y requerimientos a los colegios; e <b>instructivos</b>, con dictámenes de la Contraloría
    General de la República, Dirección del Trabajo, Servicio de Impuestos Internos y Superintendencia de Educación.
  </p>
  <div class="container-tipddy vacio"></div>
  <h2 class="tipddy-label-2">¿En qué te podemos asesorar?</h2>
  <ul class="tipddy-services-list">
    <li class="tipddy-item-list"><span>Carrera Docente.</span></li>
    <li class="tipddy-item-list"><span>Financiamiento Compartido.</span></li>
    <li class="tipddy-item-list"><span>Rendición de ingresos y gastos.</span></li>
    <li class="tipddy-item-list"><span>Fines Educativos.</span></li>
  </ul>
  <div class="container-tipddy vacio"></div>
  <a href="<?php get_page_by_slug_tipddy('form-contacto'); ?>" target="_blank"><button type="button" class="btn btn-primary bot-prin-not cen-comunidad">Contáctanos</button></a>

</div>
<div class="container-tipddy vacio"></div>

<?php get_footer();
