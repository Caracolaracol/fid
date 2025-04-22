<?php get_template_part('include/_header', 'tv', array('page-name' => 'FIDE TV')); ?>

<h1 class="seo-style">Bienvenidos a FIDE TV</h1>
<h2 class="seo-style">Promovemos la libertad de enseñanza y la autonomía de los proyectos educativos institucionales</h2>

<?php
$posts = get_posts(array(
	'orderby' => 'date',
	'order' => 'DESC',
	'post_status' => 'publish',
	'post_type'   => 'streaming',
	'numberposts' => 1,
	//'category' => 381   // 381 = Main Cover
));

$current_user = wp_get_current_user();
?>
<style>
	.img-principal {
		width: 100%;
		/* height: auto; */
		height: 600px;
		background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/banner-fide-tv3.jpg');
		/* background-image: none; */
		background-size: cover;
		margin: 0;
		padding: 0;
	}

	.banner-tv {
		width: 100%;
		height: auto;
		max-height: 600px;
	}

	@media screen and (min-width: 821px) and (max-width: 1200px) {
		.img-principal {
			height: 400px;
			background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/banner-tv-mobile2.jpg');
			background-size: cover;
		}
	}

	@media screen and (min-width: 0px) and (max-width: 812px) {
		.img-principal {
			height: 170px;
			background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/banner-tv-mobile2.jpg');
			background-size: cover;
		}
	}
</style>


<!-- banner con css de carrusel -->
<div class="banner-container">
	<img class="img-banner sale-movil" src="<?php echo get_stylesheet_directory_uri(); ?>/images/molde-fide-tv.jpg" alt="">
	<img class="img-banner sale-desktop entra-movil" src="<?php echo get_stylesheet_directory_uri(); ?>/images/fide-cel.jpg" alt="">
</div>

<?php

wp_reset_postdata();
?>
<div id="tv-content" style="display:none;">
	<?php get_template_part('include/_tv-list', 'videos'); ?>
</div>
<?php
get_template_part('include/_loader', 'script');
get_template_part('include/_footer', 'tv');
?>