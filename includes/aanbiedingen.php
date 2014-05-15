<?php
  $args = array(
    'post_type' => 'aanbieding',
    );
  $aanbiedingen = new WP_Query( $args );
  if( $aanbiedingen->have_posts() ) {
    while( $aanbiedingen->have_posts() ) {
      $aanbiedingen->the_post(); ?>

      <li class="Carousel-slide">
        <div class="Carousel-imageColumn">
          <img class="Carousel-image" src="<?php the_field('afbeelding'); ?>" alt="" />      
        </div>
        <div class="Carousel-textColumn">
          <article class="Article Article--inverted u-textShout">
            <h3 class="Article-heading"><?php the_title(); ?></h3>
            <p class="Article-tagline"><?php the_field('ondertitel'); ?></p>
            <div class="Article-content"><?php the_excerpt(); ?></div>
            <div class="u-textRight u-objRight">
              <p class="Article-content"><?php the_field('oude_prijs'); ?></p>
              <h3 class="Article-heading"><?php the_field('huidige_prijs'); ?></h3>
              <a href="/onze-aanbiedingen" class="Button Button--brand">
                <span class="u-textShout u-textFat">Bekijk aanbiedingen</span>
                <svg class="Icon Icon--inline" viewBox="0 0 128 128"><use xlink:href="#icon-arrow-right2"></use></svg>
              </a>
            </div>
          </article>
        </div>
      </li>

    <?php
    }
  }

  else {
    echo '<p>Er zijn momenteel geen aanbiedingen</p>';
  }

?>
