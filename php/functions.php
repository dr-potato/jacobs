<?php

  //Remove fixed width and height http://css-tricks.com/snippets/wordpress/remove-width-and-height-attributes-from-inserted-images/
  add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
  add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

  function remove_width_attribute( $html ) {
     $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
     return $html;
  }

  // Register the main navigation
  add_action( 'init', 'register_menu_sitemap' );

  function register_menu_sitemap(){
  register_nav_menus( array(
  'sitemap' => 'Sitemap'
      ));
  }

?>
