<?php get_header(); ?>

<div class="container-tipddy vacio"></div>
<div class="container-tipddy container-img-float">
	<img src="<?php echo get_field('mv_imagen_1'); ?>" alt="..." class="img-fluid img-pag-text-rig">
	<h1 class="tit-segundario">Misión</h1>
	<p class="texto-generico">
		<?php echo get_field('mv_texto_1'); ?>
	</p>
</div>
<div class="container-tipddy vacio"></div>
<div class="container-tipddy container-img-float">
	<img src="<?php echo get_field('mv_imagen_1'); ?>" alt="..." class="img-fluid img-pag-text-left">
	<h2 class="tit-segundario">Visión</h2>
	<p class="texto-generico">
		<?php echo get_field('mv_texto_2'); ?>
	</p>
</div>

<div class="container-tipddy vacio"></div>
<?php get_footer();
