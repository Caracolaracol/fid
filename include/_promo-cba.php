	<div class="promo-cba" id="promo-container">
	  <div class="promo-box">
	    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cerrar.png" alt="x" class="promo-close" id="promo-close">
	    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/molde-promo-cba03.jpg" alt="..." class="promo-cba-img" id="promo" data-fancybox="img" data-src="#form-cba">
	    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/flecha.png" alt="x" class="promo-open" id="promo-open">
	    <?php get_template_part('include/_footer', 'tipddy', array('bg-color' => '#fff', 'color' => '#000', 'img' => '2')); ?>
	  </div>
	</div>
	<script>
	  let close_btn = document.getElementById('promo-close')
	  let open_btn = document.getElementById('promo-open')
	  let promo_container = document.getElementById('promo-container')
	  let isClose = localStorage.getItem('promo-open')
	  let promo = document.getElementById('promo')

	  if (isClose === 'false') {
	    promo_container.style.transform = "translateX(500px)"
	  } else {
	    open_btn.style.transform = "rotate(180deg)"
	    open_btn.style.borderRadius = "0 20px 20px 0"
	  }

	  close_btn.addEventListener("click", () => {
	    promo_container.style.transform = "translateX(500px)"
	    open_btn.style.transform = "rotate(0deg)"
	    open_btn.style.borderRadius = "20px 0 0 20px"
	    localStorage.setItem('promo-open', false)
	    // promo.style.display = "none"
	  })

	  open_btn.addEventListener("click", () => {
	    let isBtnClose = localStorage.getItem('promo-open')

	    if (isBtnClose === 'false') {
	      open_btn.style.transform = "rotate(180deg)"
	      open_btn.style.borderRadius = "0 20px 20px 0"
	      promo_container.style.transform = "translateX(0px)"
	      localStorage.setItem('promo-open', true)
	    } else {
	      open_btn.style.transform = "rotate(0deg)"
	      open_btn.style.borderRadius = "20px 0 0 20px"
	      promo_container.style.transform = "translateX(500px)"
	      localStorage.setItem('promo-open', false)
	    }
	    // promo.style.display = "none"
	  })

	  Fancybox.bind("[data-fancybox=img]", {});
	  Fancybox.bind("[data-fancybox=btn]", {});

	  // promo.addEventListener("click", () => {
	  // 	console.log('se abre la promo')
	  // })
	</script>