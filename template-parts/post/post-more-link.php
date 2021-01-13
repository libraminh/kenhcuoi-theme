<?php
  $perPage = 4;
  $args = array(
    'orderby'   => 'rand',
    'post_type' => 'any',
    'posts_per_page' => $perPage
  );
  $the_query = new WP_Query( $args ); 
?>

<?php if($the_query->have_posts()) : ?>

<div class="post-video-showcase-morelink">
  <ul class="post-video-showcase-morelink-nav">
    <?php while ($the_query -> have_posts()) : $the_query -> the_post() ?>
    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php endwhile; ?>
  </ul>
</div>

<?php endif; wp_reset_postdata(); ?>