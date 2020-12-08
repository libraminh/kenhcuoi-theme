<header class="header" id="header">
  <?php
    get_template_part( 'template-parts/global/header', 'info');
    if ( is_front_page() ) get_template_part( 'template-parts/global/header', 'banner');
    get_template_part( 'template-parts/global/header', 'navbar');
  ?>
</header>