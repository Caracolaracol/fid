<div class="wrapper">
  <div class="container-tipddy">
    <div class="row">
      <div class="col-md-9">
        <h1 class="tit-segundario-generico2">Valores Paulinos</h1>
        <p class="texto-generico"> Amada Sofia Garcia
          </span>
        </p>
      </div>
      <div class="col-md-3"></div>
    </div>
  </div>
</div>
<div class="container-tipddy vacio"></div>



<div class="container-tipddy">


  <ul class="nav nav-tabs" id="myTab" role="tablist">

    <?php $arr_pestanas = array('primer', 'segundo', 'tercer', 'cuarto', 'quinto', 'sexto'); ?>
    <li class="nav-item">
      <a class="nav-link active" id="<?php echo $arr_pestanas[0] ?>-tab" data-toggle="tab" href="#<?php echo $arr_pestanas[0] ?>" role="tab" aria-controls="<?php echo $arr_pestanas[0] ?>-tab" aria-selected="true"><?php echo get_field('nombre_' . $arr_pestanas[0] . '_valor') ?></a>
    </li>

    <?php for ($i = 1; $i < 6; $i++) :
      if (get_field('titulo_' . $arr_pestanas[$i] . '_valor') && get_field('titulo_' . $arr_pestanas[$i] . '_valor') !== '') :
    ?>

        <li class="nav-item">
          <a class="nav-link" id="<?php echo $arr_pestanas[$i] ?>-tab" data-toggle="tab" href="#<?php echo $arr_pestanas[$i] ?>" role="tab" aria-controls="<?php echo $arr_pestanas[$i] ?>-tab" aria-selected="true"><?php echo get_field('nombre_' . $arr_pestanas[$i] . '_valor') ?></a>
        </li>
    <?php
      endif;
    endfor;
    ?>
  </ul>
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="<?php echo $arr_pestanas[0] ?>" role="tabpanel" aria-labelledby="<?php echo $arr_pestanas[0] ?>-tab"><br>
      <h4 class="text-pastoral2"><?php echo get_field('titulo_' . $arr_pestanas[0] . '_valor') ?></h4>
      <p><?php echo get_field('contenido_' . $arr_pestanas[0] . '_valor') ?></p>
      <?php if (get_field('imagen_' . $arr_pestanas[0] . '_valor')) : ?>
        <p> <img src="<?php echo get_field('imagen_' . $arr_pestanas[0] . '_valor') ?>" alt="..." class="img-fluid"></p>-tab
      <?php endif ?>
    </div>
    <?php for ($j = 1; $j < 6; $j++) :
      if (get_field('titulo_' . $arr_pestanas[$j] . '_valor') && get_field('titulo_' . $arr_pestanas[$j] . '_valor') !== '') :
    ?>
        <div class="tab-pane fade" id="<?php echo $arr_pestanas[$j] ?>" role="tabpanel" aria-labelledby="<?php echo $arr_pestanas[$j] ?>-tab"><br>
          <h4 class="text-pastoral2"><?php echo get_field('titulo_' . $arr_pestanas[$j] . '_valor') ?></h4>
          <p><?php echo get_field('contenido_' . $arr_pestanas[$j] . '_valor') ?></p>
          <?php if (get_field('imagen_' . $arr_pestanas[$j] . '_valor')) : ?>
            <p> <img src="<?php echo get_field('imagen_' . $arr_pestanas[$j] . '_valor') ?>" alt="..." class="img-fluid"></p>
          <?php endif ?>
        </div>
    <?php endif;
    endfor; ?>
  </div>