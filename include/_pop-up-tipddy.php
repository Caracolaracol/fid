<?php
if (get_field('pu_visible', 'option') === 'true') :
  $pu_home_only = get_field('pu_home_only', 'option') === 'true';
  if (!$pu_home_only || is_front_page()) :
    if (have_rows('pu_element', 'option')) :
      while (have_rows('pu_element', 'option')) : the_row();
        $pu_image = get_sub_field('pu_image_popup');
        $pu_link = get_sub_field('pu_link_popup');
        $pu_nombre_link = get_sub_field('pu_nombre_link_popup');
?>
        <style>
          .link-name {
            color: white;
            font-size: 20px;
          }

          .link-name:hover {
            color: #dadada;
            font-size: 20px;
          }

          body:not(.is-using-mouse) .fancybox__container :focus,
          .link-name:focus {
            outline: none;
            box-shadow: none;
          }
        </style>
        <a class="col-12 col-md-6 col-lg-4" data-fancybox='pop-up' href="<?php echo esc_url($pu_image); ?>" data-caption="<a class='link-name' href='<?php echo $pu_link ?>'><?php echo $pu_nombre_link ?></a>">
          <!-- <img src="<?php echo esc_url($pu_image); ?>" alt=". . ." class="img-fluid" /> -->
        </a>
    <?php
      endwhile;
    endif;
    is_front_page()
    ?>
    <script>
      window.addEventListener('load', () => {
        document.querySelectorAll("[data-fancybox='pop-up']").forEach(anchor => anchor.click());
      })
    </script>
<?php
  endif;
endif;
?>