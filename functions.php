<?php 

function stage_custom_menus() { 
    register_nav_menu( 'menu-main', __( 'Main Menu' ) ); // Registreer hoofdmenu 
} 

add_action( 'init', 'stage_custom_menus' );