<?php
/*
Plugin Name: WidgetSlideshow
Plugin URI: http://quovadis.web.id
Description: Manampilkan Slideshow
Author: quovadis
Version: 1
Author URI: http://quovadis.web.id
*/
 
 
// Block direct requests
if ( !defined('ABSPATH') )
	die('-1');
	
	
add_action( 'widgets_init', function(){
     register_widget( 'widget_slideshow' );
});	
 
/**
 * Adds Quote_Curl widget.
 */
class widget_slideshow extends WP_Widget {
 
	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'widget_slideshow', // Base ID
			__('Widget Slideshow', 'text_domain'), // Name
			array( 'description' => __( 'Fade Slideshow', 'text_domain' ), ) // Args
		);
	}
 
	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
	
     	echo $args['before_widget'];
		if ( ! empty( $instance['title'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $args['after_title'];
		}
 
 
#===================================
?>
<div id="slideshow">
   <div>
     <img src="<?php bloginfo("template_url"); ?>/images/thumbnail_4.jpg" width="130px" height="200px">
   </div>
   <div>
    <img src="<?php bloginfo("template_url"); ?>/images/thumbnail_5.jpg" width="130px" height="200px">
   </div>
   <div>
	<img src="<?php bloginfo("template_url"); ?>/images/thumbnail_6.jpg" width="130px" height="200px">
   </div>
</div>
<?php 
#===================================
 
 
		echo $args['after_widget'];
	}
 
	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = __( 'New title', 'text_domain' );
		}
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<?php 
	}
 
	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
 
		return $instance;
	}
 
} // class My_Widget