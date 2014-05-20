<?php
/*
Template Name: Referenties
*/
?>

<?php get_header(); ?>

<main class="u-gridContainer">

  <?php
    $temp = $wp_query;
    $wp_query = null;
    $wp_query = new WP_Query();
    $wp_query->query('showposts=5&post_type=referenties'.'&paged='.$paged);

    while ($wp_query->have_posts()) : $wp_query->the_post();
  ?>

    <article class="Article u-layoutExtraSpace" id="post-<?php the_ID(); ?>">
      <h3 class="Article-heading"><?php the_title(); ?></h3>
      <div class="Article-content"><?php the_content('Read the rest of this entry &raquo;'); ?></div>
    </article>

  <?php endwhile; ?>

  <nav class="Pagination">
      <?php next_posts_link('&laquo; Oudere berichten') ?>
      <?php previous_posts_link('Nieuwere berichten &raquo;') ?>
  </nav>

  <?php
    $wp_query = null;
    $wp_query = $temp;  // Reset
  ?>

</main>

<?php get_footer(); ?>
