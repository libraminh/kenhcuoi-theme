<div class="post-video-showcase-tag">
  <p class="post-video-showcase-tag-tags">
    <i class="fa fa-tag social-icon-2" aria-hidden="true"></i>
    <strong>Tags: </strong>

    <?php
      $current_tags = get_the_tags(get_the_ID());

      if (!empty($current_tags)) :
    ?>

    <?php 
      foreach($current_tags as $index=>$tag) { ?>
        <a href="<?php echo $tag->slug; ?>"><?php echo $tag->name; ?>
          <?php if ($index < count($current_tags) - 1) echo ', '; ?>
        </a>
      <?php }
    ?>

    <?php endif; ?>
  </p>

  <div class="post-video-showcase-tag-wrap text-right">
    <span class="post-video-showcase-tag-social">
      <i class="fa fa-share-alt social-icon-2" aria-hidden="true"></i>
      <strong>Share  </strong>
    </span>

    <ul class="footer-social list-unstyled">
      <li><a href="javascript:void(0)" class="addthis_button_facebook"><i class="fa fa-facebook" aria-hidden="true"> </i></a></li>
      <li><a href="javascript:void(0)" class="addthis_button_twitter"><i class="fa fa-twitter" aria-hidden="true"> </i></a></li>
      <li><a href="javascript:void(0)" class="addthis_button_linkedin"><i class="fa fa-google-plus" aria-hidden="true"> </i></a></li>
    </ul>
  </div>
</div>