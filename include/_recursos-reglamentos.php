<div class="wrapper">
	<div class="container-tipddy">
		<div class="row">
			<div class="col-md-9">
				<h1 class="tit-segundario-generico2">Reglamentos</h1>
				<p class="texto-generico"> Amada Sofia Garcia
					</span>
				</p>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
</div>
<div class="container-tipddy vacio"></div>
<div class="wrapper ">
	<div class="container-tipddy">
		<div class="row">
			<?php
			if (have_rows('reglamento')) :
				while (have_rows('reglamento')) : the_row();
					if (get_sub_field('titulo_reglamento') !== '' && get_sub_field('bajada_reglamento') !== '' && get_sub_field('tipo_de_archivo_reglamento') !== '' &&  get_sub_field('archivo_reglamento') !== '') :
			?>
						<div class="col-md-4 esp-calugas">
							<div class="row">
								<div class="col-md-2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ico-<?php echo get_sub_field('tipo_de_archivo_reglamento') ?>.png" alt="..." class="imagen"></div>
								<div class="col-md-10">
									<h4 class="tit-integral"><?php echo get_sub_field('titulo_reglamento'); ?></h4>
									<p class="texto-generico-new"><?php echo get_sub_field('bajada_reglamento') ?></p>
									<a href="<?php echo get_sub_field('archivo_reglamento') ?>" target="_blank"><button type="button" class="btn btn-primary bot-prin-not cen-comunidad">Ver más</button></a>
								</div>
							</div>
						</div>
			<?php endif;
				endwhile;
			endif; ?>
		</div>
	</div>
</div>
<div class="wrapper">
	<div class="container-tipddy">
		<div class="row">
			<div class="col-md-9">
				<h1 class="tit-segundario-generico2">Actas</h1>
				<p class="texto-generico"> Amada Sofia Garcia
					</span>
				</p>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>
</div>
<div class="container-tipddy vacio"></div>
<div class="wrapper ">
	<div class="container-tipddy">
		<div class="row">
			<?php
			if (have_rows('acta')) :
				while (have_rows('acta')) : the_row();
					if (get_sub_field('titulo_acta') !== '' && get_sub_field('bajada_acta') !== '' && get_sub_field('tipo_de_archivo_acta') !== '' &&  get_sub_field('archivo_acta') !== '') :
			?>
						<div class="col-md-4 esp-calugas">
							<div class="row">
								<div class="col-md-2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ico-<?php echo get_sub_field('tipo_de_archivo_acta') ?>.png" alt="..." class="imagen"></div>
								<div class="col-md-10">
									<h4 class="tit-integral"><?php echo get_sub_field('titulo_acta'); ?></h4>
									<p class="texto-generico-new"><?php echo get_sub_field('bajada_acta') ?></p>
									<a href="<?php echo get_sub_field('archivo_acta') ?>" target="_blank"><button type="button" class="btn btn-primary bot-prin-not cen-comunidad">Ver más</button></a>
								</div>
							</div>
						</div>
			<?php endif;
				endwhile;
			endif; ?>
		</div>
	</div>
</div>