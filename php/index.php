<?php get_header(); ?>

<main class="u-gridContainer">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<article class="Article" id="post-<?php the_ID(); ?>">
				<h2 class="Article-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<div class="Article-content"><?php the_content('Read the rest of this entry &raquo;'); ?></div>
        <p>Geplaatst op <?php the_time( get_option( 'date_format' ) ); ?> in <?php the_category(', ') ?></p>
        <a class="Button Button--brand" href="<?php the_permalink() ?>" rel="bookmark" title="Ga naar: <?php the_title_attribute(); ?>">
          <span>Lees verder</span>
          <svg class="Icon" viewBox="0 0 128 128"><use xlink:href="#icon-arrow-right2"></use></svg>
        </a>
			</article>

		<?php endwhile; ?>

		<nav>
			<div><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</nav>

	<?php else : ?>

		<h2>Not Found</h2>
		<p>Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>

<?php get_sidebar(); ?>

</main>

<?php get_footer(); ?>
