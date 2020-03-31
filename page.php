<!-- <?php
// $posts_Query = new WP_Query(array(
//     'post_type' => 'post',
// ));

while (have_posts()) :
    the_post();
?>
    <h1> ** PAGE ** </h1>
    <h1> <?php the_title(); ?></h1>
    <p> <?php the_content();
        ?></p>
    <hr>
<?php endwhile; ?> -->