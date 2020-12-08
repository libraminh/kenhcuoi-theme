<header class="header" id="header">
  <?php
    get_template_part( 'template-parts/partials/header', 'info');
    if ( is_front_page() ) get_template_part( 'template-parts/partials/header', 'banner');
    get_template_part( 'template-parts/partials/header', 'navbar');
  ?>
</header>