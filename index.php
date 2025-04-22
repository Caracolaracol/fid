<?php
/*
Template Name: Home FIDE
*/

get_header();

?>

<h1 class="seo-style">Bienvenidos a FIDE - Federación de Instituciones de Educación Particular</h1>

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
	<div class="carousel-indicators">
		<?php
		$banners = get_field('home_banners', 309);
		$contador = 0;
		if ($banners) :
			foreach ($banners as $ban) :
				if ($ban['ban_estado'] === 'si') :
		?>
					<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="<?php echo $contador; ?>" class="<?php echo $contador === 0 ? 'active' : '' ?>" aria-current="<?php echo $contador === 0 ? 'true' : 'false' ?>" aria-label="Slide <?php echo $contador + 1; ?>"></button>
			<?php
					$contador++;
				endif;
			endforeach;
			?>
	</div>
	<div class="carousel-inner">
		<?php
			$banners = get_field('home_banners', 309);
			$contador = 0;
			foreach ($banners as $ban) :
				if ($ban['ban_estado'] === 'si') :
		?>
				<div class="carousel-item <?php echo $contador === 0 ? 'active' : '' ?>" id="<?php echo $contador === 0 ? 'carousel-img' : '' ?>">
					<div class="filtro-carousel-item"></div>
					<div class="miop sale-movil">
						<img src="<?php echo $ban['ban_imagen_desktop'] ?>" class="d-block w-100 banner-img" alt="..." />
					</div>
					<div class="miop sale-desktop entra-movil">
						<img src="<?php echo $ban['ban_imagen_mobile'] ?>" class="d-block w-100 banner-img" alt="..." />
					</div>
					<div class="container-tipddy">
						<div class="carousel-caption">
							<h2><?php echo $ban['ban_titulo'] ?></h2>
							<p style="margin-top: 8px;" class="sale-movil">
								<?php echo $ban['ban_bajada'] ?>
							</p>
							<p class="entra-movil sale-desktop"></p>
							<p>
								<a class="enlace-art" href="<?php echo $ban['ban_link'] ?>">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/leer.png" alt="..." class="img-rounded" />
									Leer más
								</a>
							</p>
						</div>
					</div>
				</div>
	<?php
					$contador++;
				endif;
			endforeach;
		endif;
	?>
	</div>
	<button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Previous</span>
	</button>
	<button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Next</span>
	</button>
</div>

<!-- Nuestra Mision -->

<div class="container-tipddy">
	<div class="row">
		<div class="col-md-6">
			<h2 class="tit-segundario">Nuestra Misión</h2>
			<p class="texto-generico"></p>

		</div>
		<div class="col-md-6"></div>
	</div>
</div>

<div class="wrapper ">
	<div class="container-tipddy">
		<div class="row">
			<?php
			// Check rows exists.
			if (have_rows('home_nm_tarjetas', 309)) :
				// Loop through rows.
				while (have_rows('home_nm_tarjetas', 309)) : the_row();
			?>
					<div class="col-xl-3 col-md-6 esp-box-rec">
						<div class="borde-pas2">
							<img src="<?php echo get_sub_field('home_nm_imagen') ?>" alt="..." class="img-fluid" style="display:block; margin:0 auto; padding-top:15px;">
							<p class="texto-generico-pas">
								<?php echo get_sub_field('home_nm_bajada') ?>
							</p>
						</div>
					</div>
			<?php
				endwhile;
			endif;
			?>
		</div>
	</div>
</div>
<div class="container-tipddy  vacio"></div>
<div class="wrapper rectangulo vacio"></div>
<!-- Congreso Fide -->
<div class="wrapper rectangulo">
	<div class="container-tipddy">
		<div class="row">
			<div class="col-md-6 esp-inferior">
				<h2 class="tit-segundario"><?php echo get_field('home_cong_titulo', 309); ?></h2>
				<p class="texto-generico">
					<?php echo get_field('home_cong_bajada', 309); ?>
				</p>
				<br>
			</div>
			<div class="col-md-6">
				<a href="<?php echo get_field('home_cong_link_img', 309); ?>">
					<img src="<?php echo get_field('home_cong_imagen', 309); ?>" alt="..." class="img-fluid">
				</a>
			</div>
		</div>
	</div>
</div>
<div class="wrapper vacio rectangulo"></div>
<!-- Seccion TV rollo pelicula -->
<div class="container-tipddy vacio"></div>
<div class="container-tipddy">
	<div class="row">
		<div class="col-md-12 ps-0">
			<h1 class="tit-segundario"><?php echo get_field('home_tv_titulo', 309); ?></h1>
			<p class="texto-generico"><?php echo get_field('home_tv_bajada', 309); ?></p>
		</div>
		<!-- <div class="col-md-6"></div> -->
	</div>
</div>
<div class="container-tipddy tipddy-box-shadow px-0" style="border-radius:15px">
	<img class="img-side-film" src="<?php echo get_stylesheet_directory_uri(); ?>/images/costado-rollo-film2.jpg" alt=". . ." style="border-radius: 15px 15px 0 0" />
	<?php get_template_part('include/_tv-list', 'videos-home'); ?>
	<img class="img-side-film" src="<?php echo get_stylesheet_directory_uri(); ?>/images/costado-rollo-film2.jpg" alt=". . ." style="border-radius:  0 0 15px 15px" />
</div>

<div class="container-tipddy vacio"></div>
<!-- Seccion Revista -->

<div class="container-tipddy vacio"></div>
<div class="container-tipddy">
	<div class="row">
		<div class="col-md-6">
			<a href="<?php echo get_field('home_rev_link_img', 309); ?>">
				<img src="<?php echo get_field('home_rev_imagen', 309); ?>" alt="..." class="img-fluid">
			</a>
		</div>
		<div class="col-md-6 esp-inferior">
			<h2 class="tit-segundario"><?php echo get_field('home_rev_titulo', 309); ?></h2>
			<p class="texto-generico">
				<?php echo get_field('home_rev_bajada', 309); ?>
			</p>
			<br>
		</div>
	</div>
	<!-- <div class="container-tipddy vacio"></div>
	<div class="container tipddy-box-shadow px-0" style="border-radius:15px">
		<img class="img-side-film" src="<?php echo get_stylesheet_directory_uri(); ?>/images/costado-rollo-film2.jpg" alt=". . ." style="border-radius: 15px 15px 0 0" />
		<?php get_template_part('include/_tv-list', 'videos-home'); ?>
		<img class="img-side-film" src="<?php echo get_stylesheet_directory_uri(); ?>/images/costado-rollo-film2.jpg" alt=". . ." style="border-radius:  0 0 15px 15px" />
	</div> -->
</div>
<div class="container-tipddy vacio"></div>
<!--
<div class="wrapper rectangulo vacio"></div>
<div class="wrapper rectangulo">
	<div class="container-tipddy">
		<div class="row">
			<div class="col-md-6">
				<h1 class="tit-segundario">Próximas Actividades</h1>

			</div>
			<div class="col-md-6"></div>
		</div>
	</div>
</div>

 <div class="wrapper rectangulo">
	<div class="container-tipddy">
		<div class="row">
			<div class="col-md-4 esp-box-rec">
				<a href="<?php echo get_home_url(); ?>/actividad/" style="text-decoration: none">
					<div class="borde-pas">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/portada.jpg" alt="..." class="img-fluid">
						<h4 class="tit-pastoral">Congreso 2023</h4>
						<p class="texto-generico-pas2">
							Este año 2023 nuestra Federación conmemorá sus 75 años con la realización del XX Congreso Internacional de Educación, “Educación Particular, una historia con Futuro”...
						</p>
					</div>
				</a>
			</div>
		</div>
	</div>
</div> 
<div class="wrapper vacio rectangulo" style="height: 40px;"></div>
-->
<div class="container-tipddy vacio" style="height: 40px;"></div>
<!-- Noticias -->
<div class="container-tipddy">
	<div class="row">
		<div class="col-md-6">
			<h2 class="tit-segundario"><?php echo get_field('home_noticia_titulo', 309); ?></h2>
			<p class="texto-generico"><?php echo get_field('home_noticia_bajada', 309); ?></p>

		</div>
		<div class="col-md-6"></div>
	</div>
</div>
<div class="container-tipddy vacio"></div>
<?php get_template_part('include/_noticias', 'destacadas') ?>


<div class="wrapper vacio rectangulo"></div>

<div class="wrapper rectangulo">
	<div class="container-tipddy">
		<h2 class="tit-segundario"><?php echo get_field('home_conv_titulo', 309); ?></h2>
		<p class="texto-generico"><?php echo get_field('home_conv_bajada', 309); ?></p>
	</div>
	<div class="container-tipddy vacio"></div>
	<div class="container-tipddy">
		<div class="row">
			<?php
			$contador = 0;
			// Check rows exists.
			if (have_rows('home_conv', 309)) :
				// Loop through rows.
				while (have_rows('home_conv', 309)) : the_row();

			?>
					<!-- <div class="col-2" data-fancybox='convenios' href="#convenio-<?php echo $contador; ?>"> -->
					<img src="<?php echo get_sub_field('home_convenio_imagen'); ?>" alt="" class="img-convenio" style="cursor: default;">
					<!-- </div> 
					<div class="interior-convenio" id='convenio-<?php echo $contador; ?>'>
						<div class="row">
							<div class="col-12 col-md-3 col" style="margin:auto;">
								<img src="<?php echo get_sub_field('home_convenio_imagen') ?>" alt=". . ." class="img-convenio-int" />
							</div>
							<div class="col-12 col-md-9">
								<h2 class="tit-convenio2"><?php echo get_sub_field('home_convenio_titulo') ?></h2>
								<div class="desc-convenio">
									<?php echo get_sub_field('home_convenio_descripcion') ?>
								</div>
							</div>
						</div>
					</div>-->
			<?php
					$contador++;
				endwhile;
			endif;
			?>
		</div>
	</div>
</div>
<div class="wrapper vacio rectangulo"></div>
<div class="wrapper vacio"></div>

<div class="wrapper">
	<div class="container-tipddy">
		<div class="row">
			<div class="col-md-6">
				<?php /*
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/0045.jpg" alt="..." class="img-fluid">
				*/ ?>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fide-afiliate.jpeg" alt="..." class="img-fluid">
			</div>
			<div class="col-md-6 esp-inferior">
				<h2 class="tit-segundario">Afíliate</h2>
				<p class="texto-generico">
					El principal y más importante servicio de FIDE a sus afiliados y a la Educación Particular, es intangible y de alto valor: la “defensa gremial de los colegios” ante los intentos de terminar con la Educación Particular – incluida la educación religiosa -, al limitar paulatinamente la autonomía de los colegios hasta llegar a su total extinción.
				</p>
				<br>
				<p class="texto-generico"> <a href="<?php echo get_permalink(16); ?>" class="btn btn-primary bot-prin"><?php echo get_field('home_texto_de_boton_seccion_2', 309); ?></a></p>
			</div>

		</div>
	</div>
</div>
<div class="wrapper vacio"></div>

<script>
	window.addEventListener("load", () => {
		let carousel = document.querySelector("#myCarousel")
		let carousel_item = document.querySelector("#carousel-img")
		let carousel_filter = document.querySelectorAll(".filtro-carousel-item")

		/* Lógica para que el filtro ocupe el mismo alto de la imagen*/
		let img_height = carousel_item.offsetHeight
		carousel_filter.forEach((e) => {
			e.style.height = img_height + 'px'
		})
	})
</script>

<?php get_footer(); ?>