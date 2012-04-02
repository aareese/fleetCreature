<?php

register_sidebar(array(
'name' => 'main sidebar',
'before_widget' => '<li id="%1$s" class="widget %2$s">',
'after_widget' => '</li>',
'before_title' => '<h3 class="widgettitle">',
'after_title' => '</h3>',
));


  register_nav_menu( 'main_nav', __( 'Main navigation menu', 'mytheme' ) );
  
  
  if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' ); 
  }
 
  
 ?>