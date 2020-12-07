<?php 
  function queryPosts($post_type = 'post', $perpage = 5, $order_by = 'title', $order = 'ASC') {
    return new WP_Query( array(
      'post_type' => $post_type,
      'posts_per_page' => $perpage,
      'orderby' => $order_by, 
      'order' => $order, 
    ));
  }
?>