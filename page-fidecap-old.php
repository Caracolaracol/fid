<?php get_header(); ?>
<div class="container-tipddy" style="padding: 0;">
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fidecap2.jpg" alt="..." class="img-fluid img-extension">
</div>
<div class="container-tipddy">
  <h1 class="tit-extension">¿Qué es FIDECAP?</h1>
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
  <p class="texto-extension">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora veniam ea harum earum reprehenderit.
    Nihil eligendi, illum voluptatem similique, magni eos placeat recusandae nemo officiis minus sint cupiditate temporibus velit.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora veniam ea harum earum reprehenderit.
    Nihil eligendi, illum voluptatem similique, magni eos placeat recusandae nemo officiis minus sint cupiditate temporibus velit.
  </p>
  <p class="texto-extension">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora veniam ea harum earum reprehenderit.
    Nihil eligendi, illum voluptatem similique, magni eos placeat recusandae nemo officiis minus sint cupiditate temporibus velit.
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora veniam ea harum earum reprehenderit.
    Nihil eligendi, illum voluptatem similique, magni eos placeat recusandae nemo officiis minus sint cupiditate temporibus velit.
  </p>
  <div class="container-tipddy vacio"></div>
  <a href="<?php echo get_home_url(); ?>" target="_blank"><button type="button" class="btn btn-primary bot-prin-not cen-comunidad">Ver más</button></a>
</div>
<div class="container-tipddy vacio"></div>

<?php get_footer();
