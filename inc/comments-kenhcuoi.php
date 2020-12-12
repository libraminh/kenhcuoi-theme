<?php
if( ! function_exists( 'better_comments' ) ):

function better_comments($comment, $args, $depth) { ?>
<div class="media">
  <div class="media-left">
    <?php
        $defaultImage = 'https://imgix.bustle.com/uploads/image/2020/11/5/cbe5f6dc-a0d8-4b6a-bd01-350c0a3784a5-bluesus.png?w=350&h=298&auto=format%2Ccompress&cs=srgb&q=70&fit=crop&crop=faces';
        
        echo get_avatar(
          $comment, 
          $size = '76', 
          $default = $defaultImage,
          $alt = 'avatar',
          array( 'class' => array( 'media-object' ))
        ); ?>
  </div>

  <div class="media-body">
    <h4 class="text-uppercase"><strong><?php echo get_comment_author() ?></strong></h4>

    <p class="post-video-showcase-comment-detail-date">
      <strong class="text-accent">2 <i class="fa fa-heart" aria-hidden="true"></i></strong>
      <span class="line-divine">|</span>
      <span
        class="date float-right"><?php printf(/* translators: 1: date and time(s). */ esc_html__('%1$s at %2$s' , '5balloons_theme'), get_comment_date(),  get_comment_time()) ?>
      </span>
    </p>

    <p class="post-video-showcase-comment-detail-content">
      <?php comment_text() ?>
    </p>

    <ol class="breadcrumb breadcrumb-3">

      <li>
        <?php $postID = $post->ID; comment_reply_link(array_merge(
            $args, 
            array(
              'reply_text' => __('Phản Hồi', 'textdomain'),
              'depth' => $depth, 
              'max_depth' => $args['max_depth']
            )
          )) ?>
      </li>

      <li><a href="#">Thích</a></li>
    </ol>
  </div>
</div>
<?php } endif; ?>