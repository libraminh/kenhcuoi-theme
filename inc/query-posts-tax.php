<?php 
  $the_query = null;
  function setPostTerms($taxName, $perpage = 5) {
    $terms = get_terms( array(
      'taxonomy' => $taxName,
      'hide_empty' => false,
    ) );

    $queryTerms = array();

    foreach($terms as $term) {
      array_push($queryTerms, $term->slug);
    }
  
    return new WP_Query( array(
      'post_type' => 'post',
      'posts_per_page' => $perpage,
      'tax_query' => array(
        'relation' => 'AND',
        array(
          'taxonomy' => $taxName,
          'field' => 'slug',
          'terms' => $queryTerms
        )
      ),
    ));
  }
?>