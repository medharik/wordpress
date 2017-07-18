<?php 
add_action( "init", 'mon_menu' );
function mon_menu()
{
	register_nav_menu( 'main_menu', "mon menu principal" );
}

add_action( "widgets_init", "widgety" );
function widgety(){
	 $args = array(
	'name'          => 'Nom de ma widget',
	'id'            => 'harik_widget1',
	'description'   => '',
        'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' );
	 register_sidebar($args);

}
 ?>