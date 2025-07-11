<?php get_header(); ?>

<div class="container-tipddy">
	<br>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb fondo-bred">
			<li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>">FIDE</a></li>
			<li class="breadcrumb-item active"><a href="<?php echo get_home_url(); ?>/blog">Blog</a></li>
		</ol>
	</nav>
</div>

<div class="container-tipddy">
	<img src="<?php echo get_field('imagen_interior_articulo'); ?>" alt="..." class="img-fluid img-actividad">
	<div class="container-tipddy vacio"></div>
	<h1 class="tit-actividad"><?php echo get_the_title(); ?></h1>
	<p class="fecha-actividad">septiembre 30, 2023</p>
	<div class="shares">
		<?php
		global $post;
		$post_slug = $post->post_name;
		$site_url = explode("://", get_home_url())[1];
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
		<?php echo get_field('bajada_articulo'); ?>
	</p>
	<?php echo get_field('texto_completo_articulo'); ?>
</div>
<div class="container-tipddy vacio"></div>
<div class="container-tipddy">
	<div class="row">
		<div class="col-md-6">
			<h2 class="tit-segundario">Articulos Destacados</h2>
		</div>
	</div>
</div>
<div class="container-tipddy vacio"></div>
<?php get_template_part('include/_articulos', 'destacados'); ?>
<div class="container-tipddy vacio"></div>
<?php get_footer();
