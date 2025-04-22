<?php get_header(); ?>

<div class="container-tipddy" style="padding: 0;">
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/prensa2.jpg" alt="..." class="img-fluid img-extension">
</div>


<div class="container-tipddy">
	<br>
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb fondo-bred">
			<li class="breadcrumb-item"><a href="#">FIDE</a></li>
			<li class="breadcrumb-item active" aria-current="page">Prensa</li>

		</ol>
	</nav>
</div>


<div class="container-tipddy">
	<div class="row">
		<div class="col-md-6">
			<h1 class="tit-segundario">Prensa</h1>
			<h2 class="texto-generico"> Te damos a conocer los principales acontecimientos de la Comunidad.</h2>
		</div>
		<div class="col-md-6"></div>
	</div>
</div>
<div class="container-tipddy esp-boton">
	<br>
	<div class="row">
		<div onclick="filterNews('Comunicados')" class="btn-filtro-new">
			<button type="button" class="btn btn-primary bot-prin-noticias">Comunicados</button>
		</div>
		<div onclick="filterNews('Actas')" class="btn-filtro-new">
			<button type="button" class="btn btn-primary bot-prin-noticias">Actas</button>
		</div>
		<div onclick="filterNews('Estatutos')" class="btn-filtro-new">
			<button type="button" class="btn btn-primary bot-prin-noticias">Estatutos</button></a>
		</div>
	</div>
</div>
<div class="container-tipddy vacio"></div>
<div class="container-tipddy">
	<div class="row">
		<?php
		$args = array(
			'post_type' => array('noticia'),
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
				<div data-category="<?php echo !empty($categories) ? $catest : ''; ?>" class="col-md-6 esp-calugas <?php echo !empty($categories) ? $categories[0]->name : ''; ?>">
					<div class="box-noticias-colegio">
						<div class="row">
							<div class="col-6 col-md-7">
								<h3 class="tit-noticias-new"><?php echo get_the_title(); ?></h3>
								<div class="text-noticias-new sale-movil">
									<?php echo cortarTexto(get_field('bajada')); ?>
								</div>
								<p class="text-noticias-new2"><a href="<?php echo get_permalink(); ?>" class="btn btn-primary bot-prin">Ver</a></p>

							</div>
							<div class="col-6 col-md-5"><img style="border-radius: 0 10% 10% 0;" src="<?php echo get_field('imagen_tarjeta_home'); ?>" alt="..." class="img-fluid"></div>
						</div>
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


<script>
	function filterNews(noticia) {
		let comunicados = document.querySelectorAll(".Comunicados")
		let actas = document.querySelectorAll(".Actas")
		let estatutos = document.querySelectorAll(".Estatutos")

		let array = [comunicados, actas, estatutos]
		console.log('filterNews', array)

		array.forEach(element => {
			element.forEach(e => {
				new_array = e.getAttribute('data-category').split(" ")
				new_array.pop()
				console.log(new_array)
				for (let i = 0; i < new_array.length; i++) {
					// console.log(new_array[i])
					if (noticia === new_array[i]) {
						e.style.display = "unset"
						break
					} else {
						e.style.display = "none"
					}
				}
			})
		});
	}
</script>

<?php get_footer();
