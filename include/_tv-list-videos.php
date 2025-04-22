<style>
	.esp-listado-cel {
		margin: 0 0 50px 0;
	}

	.imagenzoom {
		backface-visibility: hidden;
		border-radius: 4px;
		box-shadow: rgb(0 0 0 / 69%) 0px 26px 30px -10px, rgb(0 0 0 / 73%) 0px 16px 10px -10px;
		cursor: pointer;
		display: block;
		position: relative;
		transform: scale(1, 1) translateZ(0px);
		transition-duration: 300ms;
		transition-property: transform, box-shadow;
		transition-timing-function: ease-out;
		-webkit-font-smoothing: subpixel-antialiased;
	}

	.imagenzoom:hover {
		box-shadow: rgb(0 0 0 / 80%) 0px 40px 58px -16px, rgb(0 0 0 / 72%) 0px 30px 22px -10px;
		transform: scale(1.05, 1.05) translateZ(0px) translate3d(0px, 0px, 0px);
		transition-duration: 300ms;
		transition-property: transform, box-shadow;
		transition-timing-function: ease-out;
	}

	.navbar-inverse .navbar-nav>.active>a,
	.navbar-inverse .navbar-nav>.active>a:hover,
	.navbar-inverse .navbar-nav>.active>a:focus {
		color: #ffffff;
		background-color: #232737;
	}
</style>
<?php

$username = wp_get_current_user();


$categories = get_categories(array(
	'orderby' => 'id',
	'order' => 'ASC',
	'hide_empty' => true,
	'parent' => 0,
	'exclude' => array(381)
));

foreach ($categories as $category) :
	// echo '<pre>';
	// var_dump($category);
	// echo '</pre>';
	// exit;
	if ($category->cat_ID > 1) :

		$args = array(
			'category' => $category->cat_ID,
			'orderby' => 'date',
			'order' => 'DESC',
			'post_status' => 'publish',
			'post_type'   => 'streaming',
			'posts_per_page' => -1
		);
		$videos = get_posts($args);
		if (sizeof($videos) > 0) :
?>
			<div class="container ancho">
				<p class="tit-sec-listado-video"><?php echo $category->name; ?></p>
			</div>
			<div class="container ancho esp-listado-video">

				<div class="row">
					<?php
					// echo '<pre>';
					// var_dump($videos);
					// echo '<pre>';

					// The Loop
					foreach ($videos as $video) :
						setup_postdata($video); ?>

						<div class="col-md-3 esp-listado-cel">
							<h3 class="seo-style"><?php echo get_the_title($video->ID); ?></h3>
							<?php /*
						<a target="_blank" href="https://61f855115293c5000872d7ee--laughing-jackson-13757f.netlify.app/?user_name=<?php echo $username->user_login ==''?'anonymous':$username->user_login;?>&config=cba&video_id=<?php echo get_field('video_id');?>&h=<?php echo get_field('h_video');?>">
						<div class="imagen"><img src="<?php echo  get_field('image_main');?>" alt="..." class="img-responsive"></div>
						</a>*/ ?>
							<a class="imagenzoom" href="<?php echo get_permalink($video->ID); ?>">
								<div><img src="<?php echo  get_field('image_main', $video->ID); ?>" alt="..." class="img-responsive"></div>
							</a>
						</div>
					<?php
					endforeach;
					wp_reset_postdata(); ?>
				</div>

			</div>
<?php
		/* Restore original Post Data */
		endif;
	endif;
endforeach;


/* Restore original Post Data */
wp_reset_postdata();
