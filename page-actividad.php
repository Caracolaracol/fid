<?php get_header(); ?>

<div class="container-tipddy">
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/portada22.jpg" alt="..." class="img-fluid img-actividad">
  <h1 class="tit-actividad">FIDE XX Congreso Internacional de Educación</h1>
  <p class="fecha-actividad">septiembre 21, 2023</p>
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
  <p class="texto-actividad">
    Este año 2023 nuestra Federación conmemorá sus 75 años con la realización del XX Congreso Internacional de Educación, “Educación Particular, una historia con Futuro” los días jueves 28, viernes 29 y sábado 30 de septiembre, en la Casa Central de la Pontificia Universidad Católica de Valparaíso, ubicada en calle Brasil 2950, Valparaíso.
    Es una gran oportunidad para reencontrarnos en un espacio pedagógico y podamos analizar y discutir temáticas de profunda relevancia y contingencia por la que atraviesa nuestro país y nuestra educación.
    El valor por persona es de $ 130.000.- colegios afiliados a FIDE y $150.000.- colegios NO Fide. Se adjunta afiche, programa y ficha de inscripción.
  </p>
</div>
<div class="container-tipddy vacio"></div>
<div class="wrapper">
  <div class="container-tipddy">
    <div class="row">
      <div class="col-md-4 esp-calugas">
        <div class="row">
          <div class="col-md-2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ico-foto.png" alt="..." class="imagen"></div>
          <div class="col-md-10">
            <h4 class="tit-integral tit-integral2">PROGRAMA ACTUALIZADO DE NUESTRO XX CONGRESO FIDE</h4>
            <p class="texto-generico-new"></p>
            <a href="https://www.dropbox.com/sh/zonnn479upxukvn/AAAFqT4WlFgdMIDLyO1Go783a?dl=0" target="_blank"><button type="button" class="btn btn-primary bot-prin-not cen-comunidad">Ver más</button></a>
          </div>
        </div>
      </div>
      <div class="col-md-4 esp-calugas">
        <div class="row">
          <div class="col-md-2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ico-word.png" alt="..." class="imagen"></div>
          <div class="col-md-10">
            <h4 class="tit-integral tit-integral2">FICHA INSCRIPCION CONGRESO INTERNACIONAL FIDE 2023</h4>
            <p class="texto-generico-new"></p>
            <a href="https://www.dropbox.com/sh/qwgre0s3ngt50o4/AABWmyCFqcctAtFI53WIW_3ia?dl=0"><button type="button" class="btn btn-primary bot-prin-not cen-comunidad">Ver más</button></a>
          </div>
        </div>
      </div>
      <div class="col-md-4 esp-calugas">
        <div class="row">
          <div class="col-md-2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ico-word.png" alt="..." class="imagen"></div>
          <div class="col-md-10">
            <h4 class="tit-integral">Hotelería Recomendación PUCV</h4>
            <p class="texto-generico-new"></p>
            <a href="https://www.dropbox.com/s/ytb7q9pn68qsprl/APRENDO%20A%20LEER-ESCRIBIR.pptx?dl=0" target="_blank"><button type="button" class="btn btn-primary bot-prin-not cen-comunidad">Ver más</button></a>
          </div>
        </div>
      </div>
      <div class="col-md-4 esp-calugas">
        <div class="row">
          <div class="col-md-2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ico-word.png" alt="..." class="imagen"></div>
          <div class="col-md-10">
            <h4 class="tit-integral">HOTELERÍA VIÑA DEL MAR - VALPO (Congreso FIDE) SEPTIEMBRE 2023 REGIONAL</h4>
            <p class="texto-generico-new"></p>
            <a href="https://www.dropbox.com/s/ytb7q9pn68qsprl/APRENDO%20A%20LEER-ESCRIBIR.pptx?dl=0" target="_blank"><button type="button" class="btn btn-primary bot-prin-not cen-comunidad">Ver más</button></a>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<div class="container-tipddy vacio"></div>

<?php get_footer();
