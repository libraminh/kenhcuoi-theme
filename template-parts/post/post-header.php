<header class="entry-header">
  <?php
  if ( 'masthead_slider' === get_post_type() ) :
    ?>
    <div class="entry-meta">
      <?php
      kenhcuoi_posted_on();
      kenhcuoi_posted_by();
      ?>
    </div><!-- .entry-meta -->
  <?php endif; ?>
</header>
<!-- .entry-header -->