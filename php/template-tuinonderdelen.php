<?php
/*
Template Name: Tuinonderdelen
*/
?>

<?php get_header(); ?>

  <main class="Content">

  <!-- Main content -->
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="Article u-layoutExtraSpace" ?>
      <?php if(!is_front_page()) {?>
        <h3 class="Article-heading"><?php the_title(); ?></h3>
      <?php }?>
      <div class="Article-content"><?php the_content(); ?></div>
    </article>
  <?php endwhile; endif; ?>

  <!-- Custom post types -->
  <?php
    $temp = $wp_query;
    $wp_query = null;
    $wp_query = new WP_Query();
    $wp_query->query('showposts=99&post_type=tuinonderdelen'.'&paged='.$paged);

    while ($wp_query->have_posts()) : $wp_query->the_post();
  ?>

    <article class="Article u-layoutExtraSpace" id="post-<?php the_ID(); ?>">
      <h3 class="Article-heading"><?php the_title(); ?></h3>
      <div class="Article-content"><?php the_content(); ?></div>
    </article>

  <?php endwhile; ?>

  <?php
    $wp_query = null;
    $wp_query = $temp;  // Reset
  ?>

  </main>

<?php get_footer(); ?>
