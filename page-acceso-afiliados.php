<?php
if (! is_user_logged_in()) {
    wp_safe_redirect(wp_login_url());
    exit;
}
?>
<?php get_template_part('include/_header', 'afiliados', array('page-name' => 'FIDE TV')); ?>

<h2 class="seo-style">Bienvenido a Acceso Afiliados</h2>
<h2 class="seo-style"></h2>

<?php
$posts = get_posts(array(
    'orderby' => 'date',
    'order' => 'DESC',
    'post_status' => 'publish',
    'post_type'   => 'streaming',
    'numberposts' => 1,
    //'category' => 381   // 381 = Main Cover
));

$current_user = wp_get_current_user();
?>
<style>
    .img-principal {
        width: 100%;
        /* height: auto; */
        height: 600px;
        background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/banner-fide-tv3.jpg');
        /* background-image: none; */
        background-size: cover;
        margin: 0;
        padding: 0;
    }

    .banner-tv {
        width: 100%;
        height: auto;
        max-height: 600px;
    }

    @media screen and (min-width: 821px) and (max-width: 1200px) {
        .img-principal {
            height: 400px;
            background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/banner-tv-mobile2.jpg');
            background-size: cover;
        }
    }

    @media screen and (min-width: 0px) and (max-width: 812px) {
        .img-principal {
            height: 170px;
            background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/banner-tv-mobile2.jpg');
            background-size: cover;
        }
    }
</style>


<!-- banner con css de carrusel -->
<div class="banner-container">
    <!-- <img class="img-banner sale-movil" src="<?php echo get_stylesheet_directory_uri(); ?>/images/molde-fide-tv.jpg" alt="">
	<img class="img-banner sale-desktop entra-movil" src="<?php echo get_stylesheet_directory_uri(); ?>/images/fide-cel.jpg" alt=""> -->
</div>

<?php

wp_reset_postdata();
?>

<div class="banner-welcome-section">
    <!-- Banner con texto superpuesto -->
    <div class="banner-container position-relative">
        <img class="img-principal" src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner-fide-tv2.jpg" alt="Banner FIDE TV">
        
        <div class="welcome-overlay">
            <div class="barra-deco-banner"></div>
            <div class="welcome-content">
                <h1>Bienvenido/a a Acceso Afiliados</h1>
                <p>Consulta y descarga los documentos que FIDE provee especialmente a sus afiliados.</p>
                <!-- <a href="#material-descargable" class="btn-primary-fide">Ver Material Descargable</a> -->
            </div>
        </div>
    </div>
</div>

<style>
    .banner-welcome-section {
        margin-bottom: 3rem;
    }
    
    .banner-container {
        width: 100%;
        height: auto;
        overflow: hidden;
        position: relative;
    }
    
    .img-principal {
        width: 100%;
        height: auto;
        display: block;
        object-fit: cover;
    }
    
    .welcome-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to right, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.3) 100%);
        display: flex;
        align-items: center;
    }
    
    .welcome-content {
        padding: 2rem 10rem;
        max-width: 690px;

    }
    
    .welcome-content h1 {
        color: white;
        font-size: 5.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
    }
    
    .welcome-content p {
        color: white;
        font-size: 2rem;
        margin-bottom: 1.5rem;
        text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
        line-height: 1.6;
    }
    
    .btn-primary-fide {
        display: inline-block;
        background-color: #0057a7;
        color: white;
        padding: 0.75rem 1.5rem;
        border-radius: 5px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    
    .btn-primary-fide:hover {
        background-color: #003d75;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }
    .barra-deco-banner {
        width: 1rem;
        /* w-2 */
        height: 40%;
        /* h-2/5 */
        background-color: rgba(243, 243, 243, 0.93);
        /* bg-white */
        position: absolute;
        top: 50%;
        /* top-1/2 */
        left: 8rem;
        /* left-12 */
        transform: translate(-50%, -50%);
        /* translate-x-1/2 translate-y-1/2 */
        border-radius: .8rem;
        /* rounded-sm */
    }

    
    /* Responsive adjustments */
    @media screen and (max-width: 992px) {
        .welcome-content {
            padding: 2rem 10rem;
        }
        
        .welcome-content h1 {
            font-size: 3rem;
        }
    }
    
    @media screen and (max-width: 768px) {
        .welcome-content {
            padding: 1.5rem 10rem;
        }
        
        .welcome-content h1 {
            font-size: 2rem;
        }
        
        .welcome-content p {
            font-size: 1.2rem;
        }
      /*   .barra-deco-banner{
            display: none;
        } */
    }
    
    @media screen and (max-width: 576px) {
        .welcome-overlay {
            background: linear-gradient(to bottom, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0.8) 100%);
            align-items: flex-end;
        }
        
        .welcome-content {
            padding: 1.5rem 10rem;
            text-align: center;
            max-width: 100%;
        }
        .welcome-content p {
            font-size: 1.2rem;
        }
        
        .welcome-content h1 {
            font-size: 1.8rem;
        }
        .barra-deco-banner{
            display: none;
        }
    }
</style>

<div class="pdf-grid-container">
    <h3 class="tit-segundario" style=" color: #fff; padding: 1rem; margin-top: 0;">Material Descargable</h3>
    <div class="pdf-grid">
        <?php
        $pdfs = array(
            array('nombre' => 'Criterio Operativo N°74', 'archivo' => 'Criterio Operativo N°74.pdf'),
            array('nombre' => 'Declaración y Actualización de Bienios de la Dotación Docente 2025', 'archivo' => 'Declaración y Actualización de Bienios de la Dotación Docente 2025.pdf'),
            array('nombre' => 'Decreto N°106, Procedimiento de Acreditación de Experiencia Profesional', 'archivo' => 'Decreto N°106, Procedimiento de Acreditación de Experiencia Profesional de los Docentes.pdf'),
            array('nombre' => 'Decreto Supremo N°3 del Ministerios de Hacienda', 'archivo' => 'Decreto Supremo N°3 del Ministerios de Hacienda que determina el valor del Ingreso Mínimo a partir 1 de enero de 2025.pdf'),
            array('nombre' => 'Ingreso Mínimo Mensual a partir del 1 de enero de 2025', 'archivo' => 'Ingreso Mínimo Mensual a partir del 1 de enero de 2025.pdf'),
            array('nombre' => 'Ley de Reajuste N°21.724', 'archivo' => 'Ley de Reajuste N°21.724.pdf'),
            array('nombre' => 'Valor de Asignaciones Vigentes a partir de Enero 2025', 'archivo' => 'Valor de Asignaciones Vigentes a partir de Enero 2025.pdf'),
        );

        foreach ($pdfs as $pdf) {
            $ruta_pdf = get_stylesheet_directory_uri() . '/docs/' . $pdf['archivo'];
            echo '
            <a href="' . esc_url($ruta_pdf) . '" class="pdf-item">
                <div class="pdf-icon">
                    <img class="icon" src="' . get_stylesheet_directory_uri() . '/images/PDF_file_icon.svg" alt="PDF" />
                </div>
                <div class="pdf-info">
                    <div class="barra-deco"></div>
                    <div class="texto-overlay">
                    <p class="titulo-pdf">
                        ' . esc_html($pdf['nombre']) . '
                    </p>
                    </div>
                </div>
            </a>';
        }
        ?>
    </div>
</div>



<!-- <div id="tv-content" style="display:none;">
	<?php get_template_part('include/_tv-list', 'videos'); ?>
</div> -->
<?php
/* get_template_part('include/_loader', 'script'); */
get_template_part('include/_footer', 'tv');
?>

<style>
    .pdf-grid-container {
        padding: 2rem 1rem;
        color: #f3f4f6;
        max-width: 100%;
    }

    .pdf-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 2.2rem;
        margin-top: 1rem;
    }

    @media screen and (min-width: 640px) {
        .pdf-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media screen and (min-width: 1024px) {
        .pdf-grid {
            grid-template-columns: repeat(4, 1fr);
        }
    }

    .pdf-item {
        border: 1px solid #334155;
        border-radius: 8px;
        padding: 1rem;
        padding-left: 1.6rem;
        display: flex;
        align-items: center;
        gap: 2rem;
        background: transparent;
        transition: background-color 0.3s ease;
        height: 240px;
        position: relative;
        background-color: #2b3047;
    }

    .pdf-item:hover {
        background-color: #1e293b;
    }

    .pdf-icon {
        padding-left: 4px;
    }

    .pdf-icon img {
        width: 45px;
        height: auto;


    }

    ¿ .pdf-info h4 {
        font-size: 1rem;
        margin: 0 0 0.5rem;
        color: #f1f5f9;

    }

    .btn-descarga {
        display: inline-block;
        padding: 0.4rem 0.8rem;
        background-color: #0f766e;
        color: white;
        border-radius: 6px;
        font-weight: 600;
        text-decoration: none;
        transition: background-color 0.3s ease;
        font-size: 0.875rem;
    }

    .btn-descarga:hover {
        background-color: #115e59;
    }


    .barra-deco {
        width: 0.5rem;
        /* w-2 */
        height: 40%;
        /* h-2/5 */
        background-color: white;
        /* bg-white */
        position: absolute;
        top: 50%;
        /* top-1/2 */
        left: 8rem;
        /* left-12 */
        transform: translate(-50%, -50%);
        /* translate-x-1/2 translate-y-1/2 */
        border-radius: 0.125rem;
        /* rounded-sm */
    }

    .texto-overlay {
        position: absolute;
        top: 50%;
        /* top-1/2 */
        left: 9.5rem;
        /* left-14 */
        transform: translateY(-50%);
        /* translate-y-1/2 */
        opacity: 1;
        transition: opacity 0.3s ease;
        padding: 0.25rem;
        /* p-1 */
        max-width: 75%;
        width: auto;
    }

    .titulo-pdf {
        color: white;
        /* text-white */
        font-size: clamp(1.25rem, 1.8vw, 2rem);
        /* text-[clamp(...)] */
        text-wrap: balance;
        /* text-balance */
        font-weight: 600;
        /* font-semibold */
        text-align: left;
        line-height: 1.25;
        /* leading-tight */
        word-break: break-word;
        /* break-words */
        white-space: normal;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        /* line-clamp-3 */
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-shadow: 1px 1px 6px black;
        font-family: 'Helvetica Neue Bd', sans-serif;
    }
</style>