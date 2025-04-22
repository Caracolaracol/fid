<?php
get_template_part('include/_user-logged', 'in');

$current_user = wp_get_current_user();

$client_user = get_field('user_client', 'user_' . $current_user->ID);
?>
<html>

<head>
	<?php
	$version = 13; ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="../../../../favicon.ico">
	<title>TV CBA</title>
	<!-- Bootstrap core CSS -->
	<link href="<?php echo  get_stylesheet_directory_uri(); ?>/css/tv/bootstrap.css?v=<?php echo $version; ?>" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="<?php echo  get_stylesheet_directory_uri(); ?>/css/tv/fuentes.css?v=<?php echo $version; ?>" rel="stylesheet">
	<link href="<?php echo  get_stylesheet_directory_uri(); ?>/css/tv/listado-videos.css?v=<?php echo $version; ?>" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

</head>


<style>
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
		speak: none;
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

	@media screen and (min-width: 0px) and (max-width: 812px) {
		.img-smartphone {
			width: 250px !important;

		}
	}
</style>


<?php if (is_page('dashboard') or is_page('knowledge-management-opportunities-members') or is_page('knowledge-management-opportunities-members-v2') or is_page('request-an-expert-members-v2') or is_page('request-an-expert-members')) :
	if (is_page('dashboard') or is_page('knowledge-management-opportunities-members') or is_page('knowledge-management-opportunities-members-V2') or is_page('request-an-expert-members-v2') or is_page('request-an-expert-members')) :
		get_template_part('include/_header-dashboard', 'min');
	endif;
	get_template_part('include/_header', 'css'); ?>

	<body data-rsssl="1" class="page-template-default page page-id-5575 et-tb-has-template et-tb-has-header et-tb-header-disabled et_pb_button_helper_class et_pb_footer_columns4 et_cover_background et_pb_gutter osx et_pb_gutters3 et_pb_pagebuilder_layout et_no_sidebar et_divi_theme et-db chrome" cz-shortcut-listen="true" style="overflow-x: hidden;">

		<?php if (is_page('knowledge-management-opportunities-members') or is_page('knowledge-management-opportunities-members-v2') or is_page('request-an-expert-members-v2') or is_page('request-an-expert-members')) : ?>
			<style>
				.is-form-style input.is-search-submit,
				.is-search-icon {
					background-color: #E09900 !important;
				}
			</style>
		<?php endif; ?>

		<?php if (is_page('knowledge-management-opportunities-members-v2') or is_page('knowledge-management-opportunities-members') or is_page('request-an-expert-members-v2') or is_page('request-an-expert-members')) :
			get_template_part('include/_header-members', 'tvcba');
		endif; ?>


	<?php else : ?>

		<body>
		<?php endif; ?>
		<div class="wrapper fondo-listado linea">
			<div <?php echo (!is_page('tvcba') && !is_singular('cbatv')) ? 'style="max-width:100%;width:100%;"' : ''; ?> class="container-tipddy ancho">
				<nav class="navbar navbar-inverse fondo-listado">
					<div class="container-tipddy-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div style="margin-right:5%;" class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>

							<a class="navbar-brand animate__animated animate__slideInLeft" href="<?php echo get_permalink('tvcba'); ?>"><img style="border-radius:0;" src="<?php echo  get_stylesheet_directory_uri(); ?>/images/cas-logo-tv.png" alt="..." class="img-smartphone img-rounded"></a>

						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

							<ul class="nav navbar-nav">
								<?php /*		
			               <li class="tex-menu"><a href="<?php echo esc_url(get_permalink(get_page_by_path('tvcba')));?>">CBA TV <span class="sr-only">(current)</span></a></li>
						   <li class="tex-menu"><a href="<?php echo get_permalink(6267);?>">Dashboard <span class="sr-only">(current)</span></a></li>
						   <li class="tex-menu"><a href="<?php echo get_permalink(5846);?>">Insight Network</a></li>
						   <li class="tex-menu"><a target="_blank" href="<?php echo get_permalink(8177);?>" target="_blank">LABS</a></li>
			               */ ?>


							</ul>

							<ul class="nav navbar-nav navbar-right">
								<div class="user-profile">
									<div class="user-pro-body">
										<div style="float: left;margin-top: 25px;margin-right: 20px;" class="dropdown">
											<a style="color: #fff;font-weight:bold;" href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu" data-bs-toggle="dropdown" role="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $current_user->user_firstname . ' ' . $current_user->user_lastname; ?>
												<span class="caret"></span>
											</a>
											<div class="dropdown-menu animated flipInY" aria-labelledby="dropdownMenuButton">
												<!-- text-->
												<?php if ($client_user && $client_user == 'Sura') : ?>
													<a data-toggle="tooltip" data-placement="top" title="private access" class="dropdown-item">
														<i class="ti-user"></i> My Profile</a>

												<?php else : ?>
													<a href="<?php echo esc_url(get_permalink(get_page_by_path('profile-members'))); ?>" class="dropdown-item">
														<i class="ti-user"></i> My Profile</a>
												<?php endif; ?>

												<!-- text-->
												<div class="dropdown-divider"></div>
												<!-- text-->
												<a href="<?php echo wp_logout_url('https://www.cambridgebusinessassociation.com/dashboard'); ?>" class="dropdown-item">
													<i class="fa fa-power-off"></i> Logout</a>
												<!-- text-->
											</div>
										</div>

										<div style="float: left;margin-right: 25px;margin-top: 10px;">
											<a style="text-decoration:none;color:#000;" href="<?php echo esc_url(get_permalink(get_page_by_path('profile-members'))); ?>">
												<?php if (get_field('profile_image_user', 'user_' . $current_user->ID)) : ?><img style="border-radius: 50%;" loading="lazy" src="<?php echo get_field('profile_image_user', 'user_' . $current_user->ID); ?>" alt="" class="img-circle">
												<?php else : ?><img style="border-radius: 50%;" loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/images/user-profile.jpg" alt="" class="img-circle"><?php endif; ?>
											</a>

										</div>

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