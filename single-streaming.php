<?php get_template_part('include/_header', 'tv', array('page-name' => 'FIDE TV'));

$username = wp_get_current_user();

$link_url = get_permalink();

$link_url = explode('/', $link_url);
$cont_link_url = count($link_url);
$link_url = $link_url[$cont_link_url - 2];

?>

<?php
$imagen_principal = get_field('image_detail');
$imagen_principal = $imagen_principal != '' ? $imagen_principal : 'https://www.cambridgebusinessassociation.com/wp-content/themes/Cambridge/images/tv/fon-interior.jpg';
?>


<div style="background-image: url(<?php echo $imagen_principal; ?>);" class="wrapper img-principal-interior">
	<div class="container ancho">
		<div class="row">
			<div class="col-md-6 marg">
				<p class="tex-interior"></p>
				<ul class="list">
					<li class="listado"><span class="badge">18+</span></li>
					<!-- <li class="listado"><span class="badge">CC</span></li> -->
					<li class="listado"><?php echo get_field('year'); ?> * <?php echo get_field('duration'); ?></li>
					<?php if (get_field('link_ebook')) : ?>
						<li class="listado"><a target="_blank" href="<?php echo get_field('link_ebook'); ?>"><span style="color:#000;background-color:orange;padding:4px;font-size:12px;" class="badge"><img style="width:12px;padding-left:0;" src="<?php echo  get_stylesheet_directory_uri(); ?>/images/tv/ico-flecha.png" alt="..." class="img-rounded">Presentation</span></a></li>
					<?php endif; ?>
				</ul>
				<p></p>
				<?php
				$tags = get_the_tags();
				$text_taxonomies = "";
				if (!empty($taxonomies)) :
					$cont = 0;
					foreach ($tags as $tag) :
						if ($cont > 0) :
							$text_taxonomies .= ", ";
						endif;

						$text_taxonomies .= $tag->name;

					endforeach;
				endif; ?>
				<p class="catego"><?php echo $text_taxonomies; ?></p>
				<br>
				<div class="row animate__animated animate__fadeInUp">
					<div class="col-xs-5 col-md-3">
						<?php /* 
				   <a href="https://61f92c6347000800082cc02c--laughing-jackson-13757f.netlify.app/?user_name=<?php echo $username->user_login ==''?'anonymous':$username->user_login;?>&config=cba&video_id=<?php echo get_field('video_id');?>&h=<?php echo get_field('h_video');?>&url=<?php echo $link_url;?>" class="btn btn-primary btn-lg bot-ver"><img src="<?php echo  get_stylesheet_directory_uri();?>/images/tv/ico-flecha.png" alt="..." class="img-rounded">VER AHORA</a>
				   */ ?>
						<a style="font-size:20px;" href="http://tipconsoladev.tipddy.cl/?user_name=<?php echo $username->user_login == '' ? 'anonymous' : $username->user_login; ?>&config=iframe&brand=fide&video_id=<?php echo get_field('video_id'); ?>&h=<?php echo get_field('h_video'); ?>&url=<?php echo $link_url; ?>" class="btn btn-primary btn-lg bot-ver"><img src="<?php echo  get_stylesheet_directory_uri(); ?>/images/tv/ico-flecha.png" alt="..." class="img-rounded">Watch Now</a>
					</div>
					<div class="col-xs-2 col-md-1"><?php /* comentado mvp2 <img src="<?php echo  get_stylesheet_directory_uri();?>/images/tv/bot-mas.png" alt="..." class="img-rounded">*/ ?></div>
					<div class="col-xs-2 col-md-1"></div>
					<div class="col-xs-3 col-md-7"></div>
				</div>
				<h1 style="text-transform:uppercase;font-size:32px;" class="tex-interior animate__animated animate__fadeInUp"><?php echo get_the_title(); ?></h1>
				<h2 class="seo-style">Conoce sobre <?php echo get_the_title(); ?> y más en FIDE TV</h2>
				<p style="padding-bottom:0px;margin-bottom:0px;font-size:23px;font-weight:500;" class="tex-interior animate__animated animate__fadeInUp"><?php echo get_field('description'); ?></p>
			</div>
			<div class="col-md-6"></div>
		</div>
	</div>
</div>


<?php
get_template_part('include/_tv-list', 'videos');

get_template_part('include/_footer', 'tv');
