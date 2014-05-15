<?php get_header(); ?>

<main class="Content">

  <?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

      <article class="Article u-layoutExtraSpace" id="post-<?php the_ID(); ?>">
        <h3 class="Article-heading"><?php the_title(); ?></h3>
        <div class="Article-content"><?php the_content('Read the rest of this entry &raquo;'); ?></div>
      </article>

    <?php endwhile; ?>

  <?php else : ?>

    <!-- You're looking for something that isn't here (page.php error) -->

  <?php endif; ?>

</main>

<?php get_footer(); ?>
