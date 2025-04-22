<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon-fide2.png">
	<!-- Robot Tags, Author -->
	<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, noarchive">
	<meta name="author" content="Tipddy Ltda" />

	<?php
	// Meta description, Meta Keywords y título dinámicos

	echo get_field('seo_titulo') ? '<title>' . get_field('seo_titulo') . '</title>' : '<title>FIDE - ' . get_the_title() . '</title>';
	echo '<meta name="description" content="' . (get_field('seo_descripcion') ? get_field('seo_descripcion') . '" />' : 'En FIDE promueve la libertad de enseñanza y aprendizaje, defendiendo la educación particular en Chile. Descubre nuestros servicios, congresos y la alianza familia-escuela para un sistema educativo pluralista y democrático.">');
	echo '<meta name="keywords" content="' . (get_field('seo_keywords') ? get_field('seo_keywords') . '" />' :  get_the_title() . 'FIDE, educación particular, libertad de enseñanza, congresos educativos, FIDE Chile, alianza familia-escuela">');

	$version = 23; ?>

	<!-- Tipddy Tipbot-Search -->
	<script src="https://unpkg.com/react@18/umd/react.development.js" crossorigin></script>
	<script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js" crossorigin></script>
	<script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
	<!-- Tipddy Tipbot-Search -->

	<!-- Bootstrap core CSS -->
	<!-- <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet"> -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<!-- Custom styles for this template -->

	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/carousel.css?v=<?php echo $version; ?>" rel="stylesheet">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/fuentes.css?v=<?php echo $version; ?>" rel="stylesheet">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/estilos.css?v=<?php echo $version; ?>" rel="stylesheet">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/contact.css?v=<?php echo $version; ?>" rel="stylesheet">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/css/form-contacto.css?v=<?php echo $version; ?>" rel="stylesheet">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/tipddy-footer/fuentes.css?v=<?php echo $version; ?>" rel="stylesheet">
	<link href="<?php echo get_stylesheet_directory_uri(); ?>/tipddy-footer/styles.css?v=<?php echo $version; ?>" rel="stylesheet">

	<!-- Fancybox 4.0 -->
	<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />

	<?php wp_head(); ?>

</head>

<?php $actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>

<body>
	<?php

	get_template_part('include/_navbar', 'datos');
	get_template_part('include/_navbar', 'links');

	// get_template_part('include/_redes', 'sociales');
	?>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/react.js?v=<?php echo $version; ?>" type="text/babel"></script>
	<?php get_template_part('include/_pop-up', 'tipddy'); ?>