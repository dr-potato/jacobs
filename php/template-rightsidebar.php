<?php
/*
Template Name: Page w/ sidebar on right
*/
?>

<?php get_header(); ?>

  <main class="Content">
    <div class="Content-main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article class="Article u-layoutExtraSpace" ?>
        <?php if(!is_front_page()) {?>
          <h3 class="Article-heading"><?php the_title(); ?></h3>
        <?php }?>
        <div class="Article-content"><?php the_content(); ?></div>
      </article>
    <?php endwhile; endif; ?>
    </div>

    <?php get_sidebar(); ?>

  </main>

<?php get_footer(); ?>
