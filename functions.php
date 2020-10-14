<?php 
register_nav_menus( array(
'menu' => 'Principal menu',
'menu_posts' => 'Menu posts',
'menu_mobile' => 'menu mobile'
));

add_theme_support('post-thumbnails');
add_image_size('list_article_thumbs', 450,370, true);

?>