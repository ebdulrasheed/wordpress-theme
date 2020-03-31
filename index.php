<?php

$posts_Query = new WP_Query(array(
    'post_type' => 'post',
));


while ($posts_Query->have_posts()) :
    $posts_Query->the_post(); ?>

    <h1> <a href="<?php the_permalink()  ?>"><?php the_title(); ?> </a></h1>
    <p> <?php the_content();
        ?></p>
    <hr>
<?php endwhile; ?>