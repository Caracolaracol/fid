<style>
  .esp-listado-video {
    background-color: #000;
  }

  .tipddy-carrusel {
    padding: 0;
    margin: 0;
  }

  .tipddy-carrusel-items {
    display: flex;
    overflow: hidden;
  }

  .tipddy-carrusel-item {
    min-width: 300px;
    max-width: 300px;
    height: auto;
    outline: 2px solid black;
    cursor: pointer;
    padding: 0.5rem;
  }

  .img-responsive {
    height: auto;
    max-width: 100%;
  }

  .imagenzoom {
    backface-visibility: hidden;
    border-radius: 4px;
    box-shadow: rgb(0 0 0 / 69%) 0px 26px 30px -10px, rgb(0 0 0 / 73%) 0px 16px 10px -10px;
    cursor: pointer;
    display: block;
    position: relative;
    transform: scale(1, 1) translateZ(0px);
    transition-duration: 300ms;
    transition-property: transform, box-shadow;
    transition-timing-function: ease-out;
    -webkit-font-smoothing: subpixel-antialiased;
    border: 2px solid #fff;
  }

  .imagenzoom:hover {
    box-shadow: rgb(0 0 0 / 80%) 0px 40px 58px -16px, rgb(0 0 0 / 72%) 0px 30px 22px -10px;
    transform: scale(1.1, 1.1) translateZ(0px) translate3d(0px, 0px, 0px);
    transition-duration: 300ms;
    transition-property: transform, box-shadow;
    transition-timing-function: ease-out;
  }
</style>
<?php
/* Version que extrae desde page home los videos */
?>
<div class="container ancho esp-listado-video tipddy-carrusel">
  <div class="tipddy-carrusel-items">
    <?php
    /* Repeater para administrar con un repetidor los videos a desplegar */
    /* if (have_rows('home_videos', 559)) :
      
      while (have_rows('home_videos', 559)) : the_row();
        $post = get_sub_field('video');

        if ($post) :
          setup_postdata($post); */
    /* Repeater para administrar con un repetidor los videos a desplegar */

    $args = array(
      'orderby' => 'date',
      'order' => 'DESC',
      'post_status' => 'publish',
      'post_type'   => 'streaming',
      'posts_per_page' => 8
    );
    $videos = get_posts($args);
    if (sizeof($videos) > 0) :
      foreach ($videos as $post) :
        if ($post):
          setup_postdata($post);
    ?>

          <div class="esp-listado-cel tipddy-carrusel-item">
            <a class="imagenzoom" href="<?php echo get_permalink($post->ID); ?>">
              <img src="<?php echo  get_field('image_main', $post->ID); ?>" alt="..." class="img-responsive">
            </a>
          </div>

    <?php endif;
        wp_reset_postdata();
      endforeach;
    endif;
    ?>
  </div>
</div>
<script>
  const carrusel = document.querySelector(".tipddy-carrusel-items");
  if (carrusel) {
    let maxScrollLeft = carrusel.scrollWidth - carrusel.clientWidth;
    let intervalo = null;
    let step = 1;
    const start = () => {
      intervalo = setInterval(function() {
        carrusel.scrollLeft = carrusel.scrollLeft + step;
        if (carrusel.scrollLeft === maxScrollLeft) {
          step = step * -1;
        } else if (carrusel.scrollLeft === 0) {
          step = step * -1;
        }
      }, 10);
    };

    const stop = () => {
      clearInterval(intervalo);
    };

    carrusel.addEventListener("mouseover", () => {
      stop();
    });

    carrusel.addEventListener("mouseout", () => {
      start();
    });

    start();
  }
</script>