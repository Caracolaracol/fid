<?php get_template_part('include/_header', 'tv', array('page-name' => 'FIDE Afiliados')); ?>

<style>
  .cen-doc {
    width: 150px;
  }
</style>

<!-- <div class="wrapper sale-movil"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img-2.jpg" alt="..." class="img-fluid"></div> -->
<!--VERSION MOVIL HEADER -->
<!-- <div class="wrapper sale-desktop entra-movil"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img-2.jpg" alt="..." class="img-fluid"></div> -->
<!--FIN VERSION MOVIL HEADER -->

<!-- banner con css de carrusel -->
<div class="banner-container">
  <img class="img-banner sale-movil" src="<?php echo get_stylesheet_directory_uri(); ?>/images/area-reservada-2.jpg" alt="">
  <img class="img-banner sale-desktop entra-movil" src="<?php echo get_stylesheet_directory_uri(); ?>/images/area-reservada-cel.jpg" alt="">
</div>


<div class="container-tipddy vacio"></div>
<div class="container-tipddy">
  <h1 class="tit-sec-listado-video">Área Reservada</h1>
  <p class="texto-generico"> FIDE
    </span>
  </p>
</div>
<div class="container-tipddy vacio"></div>
<!-- Botones -->

<div class="container-tipddy esp-boton">
  <br>
  <div class="row">
    <div class="col-12 col-md-12">
      <button onclick="filterProfesors('2023')" type="button" class="btn btn-primary bot-area">Año 2024</button>
      <button onclick="filterProfesors('2022')" type="button" class="btn btn-primary bot-area">Año 2023</button>
    </div>

  </div>
</div>

<div class="container-tipddy vacio"></div>

<div class="container-tipddy">
  <div class="row">
    <div class="col-md-4 esp-calugas">
      <div class="row">
        <div class="col-md-2">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ico-pdf-tv.png" alt="..." class="imagen">
        </div>
        <div class="col-md-10">
          <div class="tit-integral">
            Descarga documento con el tema
          </div>
          <p class="texto-generico-new">
            Escuela de Padres: Impacto de las pantallas en los estudiantes. Mitos y verdades. Parte I.
          </p>
          <a href="https://www.tipddy.cl/" target="_blank">
            <button type="button" class="btn btn-primary bot-area">
              Ver más
            </button>
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-4 esp-calugas">
      <div class="row">
        <div class="col-md-2">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ico-pdf-tv.png" alt="..." class="imagen">
        </div>
        <div class="col-md-10">
          <div class="tit-integral">
            Descarga documento con el tema
          </div>
          <p class="texto-generico-new">
            Escuela de Padres: Impacto de las pantallas en los estudiantes. Mitos y verdades. Parte I.
          </p>
          <a href="https://www.tipddy.cl/" target="_blank">
            <button type="button" class="btn btn-primary bot-area">
              Ver más
            </button>
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-4 esp-calugas">
      <div class="row">
        <div class="col-md-2">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ico-pdf-tv.png" alt="..." class="imagen">
        </div>
        <div class="col-md-10">
          <div class="tit-integral">
            Descarga documento con el tema
          </div>
          <p class="texto-generico-new">
            Escuela de Padres: Impacto de las pantallas en los estudiantes. Mitos y verdades. Parte I.
          </p>
          <a href="https://www.tipddy.cl/" target="_blank">
            <button type="button" class="btn btn-primary bot-area">
              Ver más
            </button>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-tipddy vacio"></div>

<script>
  function filterProfesors(cargo) {
    let Prescolar = document.querySelectorAll(".2023")
    let Básica = document.querySelectorAll(".2022")
    let Media = document.querySelectorAll(".2021")
    let Administrativos = document.querySelectorAll(".2020")
    let array = [Prescolar, Básica, Media, Administrativos]

    array.forEach(element => {
      element.forEach(e => {
        new_array = e.getAttribute('data-category').split(" ")
        for (let i = 0; i < new_array.length; i++) {
          console.log(new_array[i])
          if (new_array[i] === cargo) {
            e.style.display = "unset"
            break
          } else {
            e.style.display = "none"
          }
        }
      })
    });
  }
</script>

<?php get_template_part('include/_footer', 'tv');
