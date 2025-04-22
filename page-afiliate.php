<?php get_header(); ?>



<div class="container-tipddy" style="padding: 0;">
  <div class="img-fluid img-extension"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/contacto.jpg" alt="..." class="img-fluid"></div>
</div>

<div class="container-tipddy">
  <?php get_template_part('include/_form', 'afiliate'); ?>
</div>
<div class="container-tipddy vacio"></div>
<?php get_footer();
