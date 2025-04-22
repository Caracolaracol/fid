<style>
	.ring {
		--uib-size: 15px;
		--uib-speed: 2s;
		--uib-color: white;

		height: var(--uib-size);
		width: var(--uib-size);
		vertical-align: middle;
		transform-origin: center;
		animation: rotate var(--uib-speed) linear infinite;
		margin-left: 8px;
		/* cambiar a blanco y centrar */
	}

	.ring circle {
		fill: none;
		stroke: var(--uib-color);
		stroke-dasharray: 1, 200;
		stroke-dashoffset: 0;
		stroke-linecap: round;
		animation: stretch calc(var(--uib-speed) * 0.75) ease-in-out infinite;
	}

	@keyframes rotate {
		100% {
			transform: rotate(360deg);
		}
	}

	@keyframes stretch {
		0% {
			stroke-dasharray: 1, 200;
			stroke-dashoffset: 0;
		}

		50% {
			stroke-dasharray: 90, 200;
			stroke-dashoffset: -35px;
		}

		100% {
			stroke-dashoffset: -124px;
		}
	}

	.valid,
	.invalid {
		display: none;
		padding: 0 12px;
		margin-left: 4%;
		border-radius: .3rem;
		color: white;
		font-weight: bold;
		width: 62.6%;
	}

	.valid {
		background-color: #5cb85c;
	}

	.invalid {
		background-color: #f7000d;
	}

	.sending {
		background-color: #fcb900;
		display: none;
		border-radius: .3rem;

	}

	.check {
		justify-content: center;
		color: white;
		padding: 0;
		background-color: #5cb85c;
		display: none;
		border-radius: .3rem;
	}

	.enviar {
		justify-content: center;
		color: white;
		padding: 0 .5rem;
		background-color: #fcb900;
		display: none;
		border-radius: .3rem;
		cursor: pointer;
	}

	.enviar:hover {
		background-color: grey;
		color: #1d5d95;
	}
</style>
<!--FIN VERSION MOVIL -->
<!-- <div class="container-tipddy vacio"> -->
<!--FIN VERSION MOVIL -->
</div>
<!--VERSION MOVIL MAPA -->
<div class="container-tipddy sale-desktop entra-movil">
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mapa.jpg" alt="..." class="img-fluid">
</div>
<!--FIN VERSION MOVIL MAPA-->
<div class="wrapper fon-footer esp-footer">
	<div class="container-tipddy">
		<div class="row">
			<div class="col-md-2"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/log-fide.png" alt="..." class="img-fluid esp-img-footer cen-logo-footer"></div>
			<div class="col-md-4">
				<p class="tit-footer">REDES SOCIALES</p>
				<ul class="lis-f">
					<a href="https://www.facebook.com/FIDE.Nacional" target="_blank">
						<li class="lis-footer"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/new-fb.png" alt="..." class="rrss-icon"></li>
					</a>
					<a href="https://twitter.com/fidenacional" target="_blank">
						<li class="lis-footer"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/new-x.png" alt="..." class="rrss-icon"></li>
					</a>
					<a href="https://www.instagram.com/fide_chile/" target="_blank">
						<li class="lis-footer"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/new-ig.png" alt="..." class="rrss-icon"></li>
					</a>
					<a href="https://www.linkedin.com/company/federaci%C3%B3n-de-instituciones-de-educaci%C3%B3n-particular/" target="_blank">
						<li class="lis-footer"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/new-linkedin.png" alt="..." class="rrss-icon"></li>
					</a>
				</ul><br>
				<p class="tit-footer">CONTACTO</p>
				<p id="footer-contacts" class="texto-generico">
					Dieciocho 45 Oficina 101<br>
					Santiago - Chile<br>
					Casa Central: +56 2 2994 4091<br>
					Secretaría Administrativa:<br /> +56 9 85405816<br>
					fide@fide.cl</p>
				<p class="tit-footer">Newsletter</p>
				<p class="texto-generico">Newsletter

					Recibe las últimas noticias de
					nuestro sitio web:
				</p><br>
				<div class="row d-flex">
					<div class="col-8 col-md-8" style="padding-right:0;">
						<input type="email" class="form-control" id="newsletterEmail" placeholder="Email">
					</div>
					<div class="col-2 col-md-2 align-items-center sending">
						<svg class="ring" viewBox="25 25 50 50" stroke-width="5">
							<circle cx="50" cy="50" r="20" />
						</svg>
						<!-- <div>Enviando...</div> -->
					</div>
					<div class="col-2 col-md-2 align-items-center enviar" style="padding-left: 0; display:flex;">
						<div class="" style="width:100%; padding-left:35%; font-weight:bold" id="send-newsletter" onclick="enviar()">OK</div>
					</div>
					<div class="col-2 col-md-2 align-items-center check">
						<div style="color:white ; font-weight:bolder">&checkmark;</div>
					</div>
				</div>
				<div class="row">
					<label class="invalid">email inválido</label>
					<label class="valid">email válido</label>
				</div>
			</div>
			<div class="col-md-6 sale-movil"><a href="https://goo.gl/maps/NJYbsgNyVHdnRSQS7" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mapa.jpg" alt="..." class="img-fluid"></a></div>
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/popper.min.js"></script> -->

<script src="https://www.eaco.cl/wp-content/themes/eaco/js/bootstrap.min.js"></script>

<!-- <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/holder.min.js"></script> -->
<!-- <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/ie10-viewport-bug-workaround.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<script>
	const validateEmail = (email) => {
		var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return re.test(email);
	};

	let valid = document.querySelector(".valid")
	let invalid = document.querySelector(".invalid")
	let email = document.querySelector("#newsletterEmail")
	let loading = document.querySelector(".sending")
	let send = document.querySelector(".enviar")
	let check = document.querySelector(".check")
	// email.onchange
	// email.addEventListener('input', validarEmail)
	// email.addEventListener('input', function)
	const validarEmail = () => {
		console.log(email.value)
		if (email.value === '') {
			invalid.style.display = "none"
			valid.style.display = "none"
			return
		}
		if (validateEmail(email.value)) {
			invalid.style.display = "none"
			valid.style.display = "unset"
			// send.style.display = "flex"
		} else {
			valid.style.display = "none"
			invalid.style.display = "unset"
		}
	}
	email.addEventListener('input', validarEmail)



	const enviar = () => {
		if (email.value === '' || !validateEmail(email.value)) {
			return
		}
		jQuery.ajax({
			type: "POST",
			url: "<?php echo admin_url('admin-ajax.php'); ?>",
			data: {
				action: "iapp_ajax_newsletter",
				email: email.value
			},
			dataType: "JSON",
			beforeSend: function() {
				send.style.display = "none"
				loading.style.display = "flex"
			},
			success: function(data) {
				loading.style.display = "none"
				check.style.display = "flex"
				setTimeout(() => {
					check.style.display = "none"
					valid.style.display = "none"
					send.style.display = "flex"
					email.value = ""
				}, 3000)
			},
			error: function(data, status) {
				loading.style.display = "none"
				console.log(status, data)
			}
		});
	}
</script>

<?php get_template_part('include/_footer', 'tipddy', array('bg-color' => '#f3f1fd', 'color' => '#000', 'img' => '2')); ?>


<?php wp_footer(); ?>
</body>

</html>