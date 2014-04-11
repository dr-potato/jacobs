<?php wp_nav_menu(array(
    'container'=> 'nav',
    'menu' => 'main-nav',
    'container_class' =>'Navigation',
    'theme_location' => 'main-nav',
    'items_wrap' => '<ul class="%2$s">%3$s</ul>',
    'walker' => new Slate_Walker_Nav_Menu()
)); ?>