<?php get_header(); ?>

<!-- <div class="container-tipddy" style="padding: 0;">
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/prensa2.jpg" alt="..." class="img-fluid img-extension">
</div> -->
<h1 class="seo-style">Blog FIDE</h1>
<div class="wrapper my-4" style="background-color: #fff;">
	<div class="container-tipddy">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6 esp">
					<h2 class="tit-principal">Descubre FIDE TV</h2>
					<p class="texto-generico">
						Donde podras encontrar todo nuestro contenido visual
					</p><br>
					<p class="texto-generico">
						<a href="<?php get_page_by_slug_tipddy('fide-tv'); ?>" type="button" class="btn btn-primary bot-prin">
							Ver FIDE TV
						</a>
					</p>
				</div>
				<div class="col-md-6"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/molde.jpg" alt="..." class="img-fluid"></div>
			</div>
		</div>
	</div>
</div>


<div class="container-tipddy">
	<br>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb fondo-bred">
			<li class="breadcrumb-item"><a href="#">FIDE</a></li>
			<li class="breadcrumb-item active" aria-current="page">Blog</li>

		</ol>
	</nav>
</div>


<div class="container-tipddy">
	<div class="row">
		<div class="col-md-8">
			<h2 class="tit-segundario">Blog</h2>
			<p class="texto-generico">
				Este es un espacio de opinión, donde encontrarás documentos con los aportes que quiere hacer FIDE a
				la redacción de nuestra nueva Constitución.

			</p>
		</div>
	</div>
</div>
<div class="container-tipddy vacio"></div>
<div class="container-tipddy">
	<div class="row">
		<?php
		$args = array(
			'post_type' => array('articulo'),
			'post_status' => 'publish',
			'nopaging' => true,
			'numberposts' => 25
		);
		$query = new WP_Query($args);

		if ($query->have_posts()) :
			while ($query->have_posts()) :
				$query->the_post();
				$categories = get_the_category();
				$catest = '';
				foreach ($categories as $key => $cat) {
					$catest .= $cat->name . ' ';
				}
		?>
				<!--INICIO -->
				<div class="col-md-4 mb-4">
					<div class="box-noticias-colegio-2">
						<img src="<?php echo get_field('imagen_tarjeta_articulo_home'); ?>" alt="..." class="img-fluid img-tarjeta-blog">
						<h3 class="tit-blog"><?php echo get_the_title(); ?></h3>
						<div class="text-blog sale-movil"><?php echo substr(get_field('bajada_articulo'), 0, 130) . '...'; ?></div>
						<p class="btn-blog"><a href="<?php echo get_permalink(); ?>" class="btn btn-primary bot-prin">Ver</a></p>
					</div>
				</div>
				<!--FIN -->
		<?php
			endwhile;
		endif;

		wp_reset_postdata();
		?>
		<!--FIN -->
	</div>
</div>
<div class="container-tipddy vacio"></div>

<?php get_footer();
