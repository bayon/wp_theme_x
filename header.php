<!DOCTYPE html>
<html>
<head>
<?php wp_head(); ?>
</head>



<?php

?>
<body>

<h1>Header</h1>
<?php
    $args = array(
        'post_type' => 'post'
    );

    $post_query = new WP_Query($args);
if($post_query->have_posts() ) {
  while($post_query->have_posts() ) {
    $post_query->the_post();
    ?>
    <h2><?php the_title(); ?></h2>
    <?php
  }
}
?>
