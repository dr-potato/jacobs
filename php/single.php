<?php get_header(); ?>

<main class="Content">

  <?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

      <article class="Article u-layoutExtraSpace" ?>
        <h3 class="Article-heading"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
        <p class="Article-details">Geplaatst op <?php the_time( get_option( 'date_format' ) ); ?></p>
        <div class="Article-content"><?php the_content('Read the rest of this entry &raquo;'); ?></div>
      </article>

    <?php endwhile; ?>

    <nav class="Pagination">
      <?php previous_post_link('%link') ?>
      <?php next_post_link('%link') ?>
    </nav>

  <?php else : ?>

    <h3>Not Found</h3>
    <p>Sorry, but you are looking for something that isn't here.</p>
    <?php get_search_form(); ?>

  <?php endif; ?>

</main>

<?php get_footer(); ?>
