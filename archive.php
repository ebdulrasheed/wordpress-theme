<?php
get_header();

?>
<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri("images/ocean.jpg"); ?>"></div>
  <div class="page-banner__content container container--narrow">
    <h1 class="page-banner__title"><?php
    $before = "";
    if (is_author()) {
        $before = "Posts By ";
    }
    echo the_archive_title($before); ?></h1>
    <div class="page-banner__intro">
      <p><?php echo the_archive_description(); ?></p>
    </div>
  </div>
</div>

<div class="container container--narrow page-section">
  <?php while (have_posts()) {
    the_post();
  ?>
    <div class="post-item">
      <h2 class="headline headline--medium headline--post-title"> <a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
      <div class="metabox">
        <?php 
        $author = get_the_author_posts_link();
        $date = get_the_date('F j, Y');
        $time = get_the_time('g:i a');
        $category = get_the_category_list(', ');
        echo "<p> Posted by $author on $date at $time in $category</p>"
        ?>
      </div>
      <div class="generic-content">
        <?php
        the_excerpt();
        ?>
        <p><a href="<?php the_permalink(); ?>" class="btn btn--blue">Continue Reading..</a></p>
      </div>
    </div>
    <div>
      <?php echo paginate_links(); ?>
    </div>
  <?php
  } ?> </div> <?php get_footer(); ?>