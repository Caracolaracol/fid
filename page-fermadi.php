<?php get_header(); ?>

<div class="container-tipddy container-img-float2">
    <img src="<?php echo get_template_directory_uri(); ?>/images/fermadi/banner.jpg" alt="Banner Fermadi" class="img-fluid">

</div>
<div class="container-tipddy vacio"></div>
<div class="container-tipddy">

    <div class="shares">
        <?php
        global $post;
        $post_slug = $post->post_name;
        $site_url = explode("://", get_home_url())[1];
        ?>
        <p class="tit-terciario">Compartir:</p>
        <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2F<?php echo $site_url; ?>%2F<?php echo $post_slug; ?>%2F" target="_blank" rel="noopener noreferrer" class="rrss">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/new-fb.png" alt="facebook" class="img-fluid">
        </a>
        <a href="https://twitter.com/intent/tweet?url=https%3A%2F%2F<?php echo $site_url; ?>%2F<?php echo $post_slug; ?>%2F" target="_blank" rel="noopener noreferrer" class="rrss">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/new-x.png" alt="twitter" class="img-fluid">
        </a>
    </div>

    <div>
        <h1 class="tit-segundario">FERMADI 2025 – Feria de Material Didáctico, Equipamiento Educativo y Servicios Educacionales.</h1>

        <div>
            <div class="card mt-5" style="padding-bottom: 40px;">

            
        <div class="text-center mb-2 mt-3">
            <h2 class="mb-1" style="font-weight: 800; color:#0057a7;font-size: 3.2rem;"><span >Faltan</span></h2>
        </div class="">
            <div class=" countdown-container">
                <div class="col-3">
                    <div class="countdown-box">
                        <div id="days" class="countdown-number">00</div>
                        <div class="countdown-label">Días</div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="countdown-box">
                        <div id="hours" class="countdown-number">00</div>
                        <div class="countdown-label">Horas</div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="countdown-box">
                        <div id="minutes" class="countdown-number">00</div>
                        <div class="countdown-label">Minutos</div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="countdown-box">
                        <div id="seconds" class="countdown-number">00</div>
                        <div class="countdown-label">Segundos</div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div class="text-center mb-5 mt-5">
            <h2 class="mb-4" style="font-weight: 800;"><span style="color: #7fc300;">¡Ingreso gratuito!</span></h2>
        </div>

        <div class="container-tipddy">
            <div class="fermadi-info mb-5">
                <h2 class="tit-segundario text-center mb-4">Fecha: 13 y 14 de Junio – Estación Mapocho</h2>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card p-4 mb-4 shadow-sm">
                            <h3 class="mb-3">Historia</h3>
                            <p>En la década de los 90 y a inicios del nuevo milenio, la Federación de Instituciones de Educación Particular organizaba anualmente el encuentro nacional FERMADI – Feria de Material Didáctico y Equipamiento Educativo. Se inició en las dependencias del Liceo Alemán de Santiago para luego instalarse por dos décadas en el Centro Cultural Estación Mapocho. Una actividad que congregaba a más de 30 mil asistentes anualmente. Y en donde la presencia de los docentes era clave a través de un concurso sobre creación o uso original de material didáctico.</p>

                            <p>La FERMADI es un espacio privilegiado para el encuentro educacional que posibilitaba la exposición y muestra de tendencias en la elaboración de materiales y servicios educacionales. Con la presencia de distintos actores del mundo pedagógico tanto nacional como internacional se genera un mundo virtuoso para intercambiar experiencias en calidad e inclusión.</p>

                            <p>La experiencia permite fomentar los aprendizajes en niños, niñas y adolescentes. El material didáctico y de innovación pedagógica llega directamente a las manos del estudiante, sus familias y los docentes.</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card p-4 h-100 shadow-sm">
                            <h3 class="mb-3">Objetivo de la actividad</h3>
                            <p>Crear un espacio pedagógico que potencie la interacción y colaboración entre empresas de servicios educacionales, proveedores de servicios educacionales, directivos, docentes, profesionales de la educación, familias y estudiantes donde puedan compartir experiencias educativas de calidad asegurando acceso a distintas ofertas.</p>

                            <p>Además, ofrecer talleres y charlas en los dos seminarios (congresos) de educación – gratuitos - de párvulos y de educación técnico profesional.</p>

                            <div class="alert alert-info mt-3">
                                <strong>N° estimado de participantes:</strong> 20 mil personas
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card p-4 h-100 shadow-sm">
                            <h3 class="mb-3">Beneficiarios o participantes</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="beneficiarios-list">
                                        <li>Sostenedores de Instituciones Educativas</li>
                                        <li>Directores de Instituciones Educativas</li>
                                        <li>Coordinadores Pedagógicos y Académicos</li>
                                        <li>Equipos Directivos de Instituciones Educativas</li>
                                        <li>Empresas de Servicios Educacionales</li>
                                        <li>Universidades y Escuelas de Pedagogía</li>
                                        <li>Docentes</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="beneficiarios-list">
                                        <li>Educadoras de Párvulos</li>
                                        <li>Equipos de Colegios Técnicos Profesionales</li>
                                        <li>Profesionales de la Educación</li>
                                        <li>Padres y Apoderados</li>
                                        <li>Estudiantes</li>
                                        <li>Público en General</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>

<div class="container-tipddy">
    <div class="fermadi-info mb-5">
        
        
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="card p-4 shadow-sm">
                    <h3 class="mb-4 mx-auto " style="font-size: 32px;" >Auspiciadores</h3>
                    <div class="row justify-content-center align-items-center sponsors-container">
                        <?php
                        // Ruta a la carpeta de imágenes de auspiciadores
                        $sponsors_path = get_template_directory_uri() . '/images/fermadi/auspiciadores/';
                        // Número de auspiciadores (ajustar según cantidad real)
                        $sponsors = [ 'Logoarquimed.jpg','Logo-Epson.png', 'atacama.jpg','Logo_Color_RGB_1.png','google.png','PHOTO-2025-03-14-20-19-39 2.png','logo-indumac-12.png','IMAGOTIPO-HORIZONTAL (2).png',  'PHOTO-2025-03-17-11-58-49.png', 'master7.png','logo-sm.png' ];
                        
                        foreach($sponsors as $sponsor): ?>
                            <div class="col-6 col-md-3 col-lg-2 mb-4">
                                <div class="sponsor-logo">
                                    <img src="<?php echo $sponsors_path . $sponsor; ?>" alt="Logo Auspiciador" class="img-fluid">
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mb-5">
            <div class="col-md-12">
                <div class="card p-4 shadow-sm">
                    <h3 class="mb-4  mx-auto" style="font-size: 32px;">Patrocinadores</h3>
                    <div class="row justify-content-center align-items-center sponsors-container">
                        <?php
                        // Ruta a la carpeta de imágenes de patrocinadores
                        $patrons_path = get_template_directory_uri() . '/images/fermadi/patrocinadores/';
                        // Número de patrocinadores (ajustar según cantidad real)
                        $patrons = [ 'banner-mineduc.png','Estación Mapocho.jpg','logogore.png','logoeducar.png','Logo-75-aniversario_OEI.png','logostgo.png',  ];
                        
                        foreach($patrons as $patron): ?>
                            <div class="col-6 col-md-3 col-lg-2 mb-4">
                                <div class="sponsor-logo">
                                    <img src="<?php echo $patrons_path . $patron; ?>" alt="Logo Patrocinador" class="img-fluid">
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div class="card p-4 shadow-sm text-center">
                    <h3 class="mb-4">Afiche Oficial del Evento</h3>
                    <div class="poster-container">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/fermadi/afiche-fermadi(1080 x 1350 px).jpg" alt="Afiche FERMADI 2025" class="img-fluid poster-preview mb-4">
                        
                        <!-- <div class="poster-download">
                            <a href="<?php echo get_template_directory_uri(); ?>/images/fermadi/afiche-fermadi.pdf" download class="btn btn-primary btn-lg">
                                <i class="fa fa-download mr-2"></i> Descargar Afiche Oficial
                            </a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-tipddy vacio"></div>


<style>
    .countdown-container {
        margin: 0 auto;
        max-width: 800px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: row;
    }

    .countdown-box {
        background-color: #0057a7;
        border-radius: 10px;
        padding: 20px 10px;
        margin: 0 5px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .countdown-number {
        font-size: 2.5rem;
        font-weight: bold;
        color: white;
        line-height: 1;
        margin-bottom: 10px;
    }

    .countdown-label {
        font-size: .7rem;
        color: #f0f0f0;
        text-transform: uppercase;
    }

    @media (max-width: 767px) {
        .countdown-number {
            font-size: 1.4rem;
        }

        .countdown-label {
            font-size: 0.5rem;
        }

        .countdown-box {
            padding: 15px 5px;
            margin: 0 2px;
        }
    }

    .fermadi-info h3 {
        color: #0057a7;
        font-weight: 600;
    }

    .beneficiarios-list {
        padding-left: 20px;
    }

    .beneficiarios-list li {
        margin-bottom: 8px;
        position: relative;
        list-style-type: none;
        padding-left: 15px;
    }

    .beneficiarios-list li:before {
        content: "•";
        color: #7fc300;
        font-weight: bold;
        position: absolute;
        left: -5px;
    }

    .card {
        border-radius: 8px;
        border: none;
        background-color: #f8f9fa;
    }

    /* Estilos para los logos de auspiciadores y patrocinadores */
.sponsors-container {
    margin-top: 20px;
}

.sponsor-logo {
    height: 120px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 10px;
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    transition: transform 0.3s ease;
}

.sponsor-logo:hover {
    transform: scale(1.05);
}

.sponsor-logo img {
    max-height: 100%;
    max-width: 100%;
    object-fit: contain;
}

/* Estilos para el afiche */
.poster-container {
    max-width: 1200px;
    margin: 0 auto;
}

.poster-preview {
    border-radius: 8px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    transition: transform 0.3s ease;
    max-height: 500px;
    object-fit: contain;
}

.poster-preview:hover {
    transform: scale(1.02);
}

.poster-download {
    margin-top: 20px;
}

.btn-primary {
    background-color: #0057a7;
    border-color: #0057a7;
    padding: 10px 20px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.btn-primary:hover {
    background-color: #003d75;
    border-color: #003d75;
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Fecha objetivo: 1 de agosto de 2025 (ajusta según la fecha real del evento)
        const countDownDate = new Date("Jun 13, 2025 00:00:00").getTime();

        // Actualiza el contador cada segundo
        const countdown = setInterval(function() {
            // Obtiene la fecha y hora actual
            const now = new Date().getTime();

            // Calcula la diferencia entre la fecha objetivo y ahora
            const distance = countDownDate - now;

            // Cálculos de tiempo para días, horas, minutos y segundos
            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Muestra los resultados con formato de dos dígitos
            document.getElementById("days").innerHTML = String(days).padStart(2, '0');
            document.getElementById("hours").innerHTML = String(hours).padStart(2, '0');
            document.getElementById("minutes").innerHTML = String(minutes).padStart(2, '0');
            document.getElementById("seconds").innerHTML = String(seconds).padStart(2, '0');

            // Si la cuenta regresiva ha terminado, muestra un mensaje
            if (distance < 0) {
                clearInterval(countdown);
                document.getElementById("days").innerHTML = "00";
                document.getElementById("hours").innerHTML = "00";
                document.getElementById("minutes").innerHTML = "00";
                document.getElementById("seconds").innerHTML = "00";

                // Opcionalmente, muestra un mensaje de que el evento ha comenzado
                const countdownContainer = document.querySelector('.countdown-container');
                if (countdownContainer) {
                    const eventStartedMsg = document.createElement('div');
                    eventStartedMsg.className = 'text-center mt-3';
                    eventStartedMsg.innerHTML = '<h3>¡El evento ha comenzado!</h3>';
                    countdownContainer.parentNode.insertBefore(eventStartedMsg, countdownContainer.nextSibling);
                }
            }
        }, 1000);
    });
</script>
<?php get_footer();
