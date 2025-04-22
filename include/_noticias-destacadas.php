<div class="container-tipddy">
  <div class="row">
    <?php
    // Check rows exists.
    if (have_rows('home_noticias', 309)) :
      // Loop through rows.
      while (have_rows('home_noticias', 309)) : the_row();
        $post = get_sub_field('noticia');

        if ($post) :
          setup_postdata($post)
    ?>
          <div class="col-md-6 esp-calugas">
            <div class="box-noticias-colegio">
              <div class="row">
                <div class="col-6 col-md-7">
                  <h3 class="tit-noticias-new"><?php echo get_the_title(); ?></h3>
                  <p class="text-noticias-new sale-movil">
                    <?php echo cortarTexto(get_field('bajada')); ?>...
                  </p>
                  <p class="text-noticias-new2"><a href="<?php echo get_permalink(); ?>" class="btn btn-primary bot-prin">Ver</a></p>
                </div>
                <div class="col-6 col-md-5"><img src="<?php echo get_field('imagen_tarjeta_home'); ?>" alt="..." class="img-fluid img-tarjeta-noticia"></div>
              </div>
            </div>
          </div>

    <?php endif;
        wp_reset_postdata();
      // End loop.
      endwhile;

    // No value.
    else :
    // Do something...
    endif;

    ?>

  </div>
</div>