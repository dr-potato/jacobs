<?php wp_nav_menu(array(
    'container'=> 'nav',
    'menu' => 'main-nav',
    'container_class' =>'Navigation',
    'menu_class' => '',
    'theme_location' => 'main-nav',
    'items_wrap' => '<ul class="Navigation-list Navigation-list--parent">%3$s</ul><a href="#" id="js-navToggle" class="Navigation-toggle"><svg class="Icon Icon--alone" viewBox="0 0 128 128"><use xlink:href="#icon-menu2"></use></svg></a>',
    'walker' => new Slate_Walker_Nav_Menu()
)); ?>
