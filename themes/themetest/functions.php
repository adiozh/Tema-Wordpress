<?php
function slideshow_widgets_init() {
		register_sidebar( array(
        'name' => 'Sidebar', 
        'id' => 'slide_sidebar', 
        'before_widget' => '<div class="widget_containerX>', 
        'after_widget' => '</div>',
        'before_title' => '<h2 class="rounded">',
        'after_title' => '</h2>',
    ) );
         
}
add_action( 'widgets_init', 'slideshow_widgets_init' );
?>