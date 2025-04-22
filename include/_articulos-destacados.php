<div class="container-tipddy">
  <div class="row">
    <?php
    // Check rows exists.
    if (have_rows('home_articulo', 309)) :
      // Loop through rows.
      while (have_rows('home_articulo', 309)) : the_row();
        $post = get_sub_field('articulo');

        if ($post) :
          setup_postdata($post)
    ?>
          <div class="col-md-4 mb-4">
            <div class="box-noticias-colegio-2">
              <img src="<?php echo get_field('imagen_tarjeta_articulo_home'); ?>" alt="..." class="img-fluid img-tarjeta-blog">
              <h3 class="tit-blog"><?php echo get_the_title(); ?></h3>
              <div class="text-blog sale-movil"><?php echo substr(get_field('bajada_articulo'), 0, 130) . '...'; ?></div>
              <p class="btn-blog"><a href="<?php echo get_permalink(); ?>" class="btn btn-primary bot-prin">Ver</a></p>
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