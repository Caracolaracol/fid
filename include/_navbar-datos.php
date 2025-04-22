	<style>
		.container-datos {
			display: flex;
			flex-direction: column;
			gap: 0.5rem;
			/* optional spacing between items */
		}

		.btn-login-privado {
    display: inline-block;
    padding: 0.5rem 1rem;
    background-color:#7fc300; /* azul FIDE */
    color: white;
    font-weight: 600;
    border: none;
    border-radius: 0.375rem; /* bordes redondeados */
    text-decoration: none;
    transition: background-color 0.3s ease, transform 0.2s ease;
    text-align: center;
    white-space: nowrap;
  }

  .btn-login-privado:hover {
    background-color:#7fc366; /* azul un poco más claro */
    transform: scale(-1px);
  }

  .btn-login-privado:active {
    background-color: #7fc366; /* azul oscuro al hacer click */
   
  }

		@media (min-width: 768px) {
			.container-datos {
				flex-direction: row;
				align-items: center;
				justify-content: flex-end;
				/* optional: aligns to the right if desired */
				gap: 1rem;
			}
		}
	</style>

	<div class="wrapper barra-sup">
		<div class="container-tipddy container-datos">
			<!-- <a type="button" class="btn-login" href="<?php echo get_home_url(); ?>/wp-login.php">Ingresar</a> -->
			<div class="entra-movil" id="react-search"><!-- here it renders a search box --></div>
			<div>
				<a href="<?php echo get_home_url(); ?>/wp-login.php" class="btn-login-privado">Acceso Privado</a>
			</div>
		</div>
	</div>