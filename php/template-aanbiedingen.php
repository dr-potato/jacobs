<?php
/*
Template Name: Aanbiedingen
*/
?>

<?php get_header(); ?>

<main class="u-gridContainer">

  <?php
    $temp = $wp_query;
    $wp_query = null;
    $wp_query = new WP_Query();
    $wp_query->query('showposts=3&post_type=aanbieding'.'&paged='.$paged);

    while ($wp_query->have_posts()) : $wp_query->the_post();
  ?>

    <article class="Article Article--aanbieding u-layoutExtraSpace" id="post-<?php the_ID(); ?>">
      <div class="Article-imageWrap" href="<?php the_permalink() ?>" rel="bookmark" title="Bekijk aanbieding <?php the_title_attribute(); ?>">
        <img src="<?php the_field('afbeelding'); ?>" alt="" />
      </div>
      <div class="Article-textColumn">
        <h3 class="Article-heading"><?php the_title(); ?></h3>
        <p class="Article-tagline"><?php the_field('ondertitel'); ?> - <?php the_field('oude_prijs'); ?> - <?php the_field('huidige_prijs'); ?></p>
        <div class="Article-content"><?php the_content('Read the rest of this entry &raquo;'); ?></div>
      </div>
    </article>

  <?php endwhile; ?>

  <nav class="Pagination">
      <?php next_posts_link('&laquo; Oudere aanbiedingen') ?>
      <?php previous_posts_link('Nieuwere aanbiedingen &raquo;') ?>
  </nav>

  <?php
    $wp_query = null;
    $wp_query = $temp;  // Reset
  ?>

</main>

<?php get_footer(); ?>
