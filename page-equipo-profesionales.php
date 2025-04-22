<?php
get_header();
?>
<div class="container-tipddy vacio"></div>

<div class="container-tipddy">
  <div class="row">
    <div class="col-md-6">
      <h1 class="tit-segundario"><?php echo the_title(); ?></h1>
      <h2 class="texto-generico">Te damos a conocer la <?php echo the_title(); ?> de FIDE.</h2>
    </div>
    <div class="col-md-6"></div>
  </div>
</div>

<div class="container-tipddy vacio"></div>
<div class="container-tipddy">
  <div class="row justify-content-center">
    <?php
    $contador = 0;
    // Check rows exists.
    if (have_rows('estamentos_integrantes')) :
      // Loop through rows.
      while (have_rows('estamentos_integrantes')) : the_row();
    ?>
        <a class="col-12 col-md-6 col-lg-4 container-dir" data-fancybox='equipo-profesionales' href="#md-<?php echo $contador; ?>">
          <img src="<?php echo get_sub_field('ei_imagen') ?>" alt=". . ." class="img-dir" />
          <p class="tit-dir" style="margin-top: 2rem;"><?php echo get_sub_field('ei_nombre_completo') ?></p>
          <div class="desc-dir">
            <?php
            $texto_completo = get_sub_field('ei_descripcion');

            echo cortarTexto($texto_completo);
            ?>
          </div>
        </a>
        <div class="interior-dir" id='md-<?php echo $contador; ?>'>
          <div class="row">
            <div class="col-12 col-md-3 col" style="vertical-align: middle;">
              <img src="<?php echo get_sub_field('ei_imagen') ?>" alt=". . ." class="img-dir" />
            </div>
            <div class="col-12 col-md-9">
              <h3 class="tit-dir2"><?php echo get_sub_field('ei_nombre_completo') ?></h3>
              <div class="desc-dir">
                <?php echo get_sub_field('ei_descripcion') ?>
              </div>
            </div>
          </div>
        </div>
    <?php
        $contador++;
      endwhile;
    endif;
    ?>
  </div>
</div>
<div class="container-tipddy vacio"></div>


<?php get_footer(); ?>