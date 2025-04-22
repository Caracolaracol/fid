<?php
$current_user = wp_get_current_user();

$client_user = get_field('user_client', 'user_' . $current_user->ID);
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon-fide2.png">
    <!-- Robot Tags, Author -->
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, noarchive">
    <meta name="author" content="Tipddy Ltda" />

    <?php
    // Meta description, Meta Keywords y título dinámicos

    echo get_field('seo_titulo') ? '<title>' . get_field('seo_titulo') . '</title>' : '<title>FIDE TV - ' . get_the_title() . '</title>';
    echo '<meta name="description" content="' . (get_field('seo_descripcion') ? get_field('seo_descripcion') . '" />' : 'En FIDE TV se promueve la libertad de enseñanza y aprendizaje, defendiendo la educación particular en Chile. Descubre nuestros servicios, congresos y la alianza familia-escuela para un sistema educativo pluralista y democrático.">');
    echo '<meta name="keywords" content="' . (get_field('seo_keywords') ? get_field('seo_keywords') . '" />' :  get_the_title() . 'FIDE TV, FIDE, educación particular, libertad de enseñanza, congresos educativos, FIDE Chile, alianza familia-escuela">');

    $version = 28; ?>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.css?v=<?php echo $version; ?>" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/fuentes.css?v=<?php echo $version; ?>" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/listado-videos.css?v=<?php echo $version; ?>" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/form.css?v=<?php echo $version; ?>" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/tipddy-footer/fuentes.css?v=<?php echo $version; ?>" rel="stylesheet">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/tipddy-footer/styles.css?v=<?php echo $version; ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <?php if (is_page('webinars') or is_page('job-portal') or is_page('materials') or is_page('knowledge-management-opportunities-members') or is_singular('projectquestion') or is_page('request-an-expert-members')) : ?>
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/otro.css?v=<?php echo $version; ?>" />

        <style>
            .et_pb_tabs_controls li {
                border-right: unset !important;

            }

            .et_pb_tab_active a {
                font-weight: bold !important;
            }

            ul.et_pb_tabs_controls {
                background-color: transparent !important;

            }

            .et_pb_tabs_0 .et_pb_tabs_controls li.et_pb_tab_active {
                background-color: #F9BD13 !important;
            }
        </style>
    <?php endif; ?>

</head>


<style>
    .navbar-brand {
        padding-bottom: 0;
    }

    .user-profile {
        margin-top: 10px;
    }

    .user-profile .user-pro-body img {
        width: 50px;
        display: block;
        margin: 0 auto 10px;
    }

    .img-circle {
        border-radius: 100%;
    }

    .dropdown,
    .dropend,
    .dropstart,
    .dropup {
        position: relative;
    }

    .user-profile .u-dropdown {
        display: block;
        text-align: center;
    }

    .user-profile .dropdown-menu {
        right: 0;
        width: 180px;
        left: 0;
        top: 20px !important;
        margin: 0 auto;
    }


    .dropdown-item {
        display: block;
        width: 100%;
        padding: 0.65rem 1rem;
        clear: both;
        font-weight: 400;
        color: #212529;
        text-align: inherit;
        text-decoration: none;
        white-space: nowrap;
        background-color: transparent;
        border: 0;
    }

    [class*=" ti-"],
    [class^=ti-] {
        font-family: themify;
        /* speak: none; */
        font-style: normal;
        font-weight: 400;
        font-variant: normal;
        text-transform: none;
        line-height: 1;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    .dropdown a:hover,
    .dropdowna:focus {
        color: #fff;
        font-weight: bold;
    }


    .dropdown a:hover,
    .dropdowna:focus {
        color: #000;
        font-weight: bold;
        text-decoration: underline;
    }


    .img-smartphone {
        height: 70px;
        width: 100%;
    }

    /* Estilos para el botón de cerrar sesión y nombre de usuario */
    .user-pro-body.d-flex {
        display: flex !important;
        align-items: center;
    }

    .user-info {
        margin-right: 15px;
        color: #fff;
    }

    .welcome-text {
        font-size: 14px;
        color: rgba(255, 255, 255, 0.8);
    }

    .user-name {
        color: #fff;
        font-weight: 600;
        text-transform: capitalize;
    }

    .btn-logout {
        display: inline-block;
        padding: 6px 12px;
        background-color: #0057a7;
        color: #fff;
        border-radius: 4px;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .btn-logout:hover {
        background-color:rgb(4, 103, 197);
        color: #fff;
        text-decoration: none;
    }

    @media screen and (max-width: 768px) {
        .navbar-right {
            margin-left: 15px;
            margin-bottom: 15px;
        }

        .user-pro-body.d-flex {
            display: block !important;
        }

        .user-info {
            margin-bottom: 10px;
        }
    }

    @media screen and (min-width: 0px) and (max-width: 1200px) {
        .img-smartphone {
            height: 50px !important;
            width: auto;
        }

        .navbar-toggle {
            margin-top: 27px !important;

        }
    }
</style>



<body>

    <div class="wrapper fondo-listado linea">
        <div <?php echo (!is_page('tvcba') && !is_singular('cbatv')) ? 'style="max-width:100%;width:100%;"' : ''; ?> class="container ancho">
            <nav class="navbar navbar-inverse fondo-listado">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>


                        <a class="navbar-brand animate__animated animate__slideInLeft" href="<?php echo get_page_by_slug_tipddy('acceso-afiliados'); ?>"><img style="margin-bottom:15px;border-radius:0;" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-fide-tv-2.png" class="img-smartphone img-rounded"></a>


                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-afiliados" id="bs-example-navbar-collapse-1">

                        <ul style="margin-top:15px;" class="nav navbar-nav">
                            <li class="tex-menu"><a href="<?php echo get_home_url(); ?>" style="color:#fff;">Web FIDE</a></li>
                            <li class="tex-menu"><a href="<?php echo get_page_by_slug_tipddy('mision-y-vision'); ?>" style="color:#fff;">Sobre FIDE</a></li>
                            <li class="tex-menu"><a href="<?php echo get_page_by_slug_tipddy('mesa-directiva'); ?>" style="color:#fff;">Estamento</a></li>
                            <li class="tex-menu"><a href="<?php echo get_page_by_slug_tipddy('asesorias-pedagogicas'); ?>" style="color:#fff;">Asesorías</a></li>
                            <li class="tex-menu"><a href="<?php echo get_page_by_slug_tipddy('fidecap'); ?>" style="color:#fff;">Extensión</a></li>
                            <li class="tex-menu"><a href="<?php echo get_page_by_slug_tipddy('noticias'); ?>" style="color:#fff;">Prensa</a></li>
                            <li class="tex-menu"><a href="<?php echo get_page_by_slug_tipddy('form-contacto'); ?>" style="color:#fff;">Afíliate</a></li>
                            <li class="tex-menu"><a href="<?php echo get_page_by_slug_tipddy('blog'); ?>" style="color:#fff;">Blog</a></li>
                            <!-- <li class="tex-menu"><a href="<?php echo get_page_by_slug_tipddy('area-reservada'); ?>" style="color:#fff;">Área Reservada</a></li> -->
                            <!-- <li class="tex-menu"><a href="<?php echo get_page_by_slug_tipddy('fide-tv'); ?>" style="color:#fff;">FIDE TV</a></li> -->

                        </ul>
                        <?php /*
						<ul style="margin-top:10px;" class="nav navbar-nav navbar-right">
							<div class="user-profile">
								<div class="user-pro-body">
									<div style="float: left;margin-right: 25px;margin-top: 10px;">
										<button type="button" class="cba-btn" data-fancybox="btn" data-src="#form-cba">Cambridge</button>
									</div>
								</div>
							</div>
						</ul>
						*/ ?>
                        <ul style="margin-top:15px;transform: translateY(16px);    padding-bottom: 20px; " class="nav navbar-nav navbar-right">
                            <div class="user-profile">
                                <div class="user-pro-body d-flex align-items-center">
                                    <div class="user-info mr-2">
                                        <span class="welcome-text">Bienvenido/a: </span>
                                        <strong class="user-name" style=""><?php echo esc_html(ucfirst($current_user->display_name)); ?></strong>
                                    </div>
                                    <a href="<?php echo wp_logout_url(home_url()); ?>" class="btn-logout">
                                        <i class="fa fa-sign-out"></i> Cerrar sesión
                                    </a>
                                </div>
                            </div>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>

    <?php /*
	get_template_part('include/_promo', 'cba'); 
	get_template_part('include/_form', 'cba'); 
	*/ ?>