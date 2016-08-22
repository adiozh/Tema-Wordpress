<?php
/*
Plugin Name: Widget News
Plugin URI: http://quovadis.web.id
Description: Manampilkan 'Asssalamualaikum' dan IP Pengunjung
Author: quovadis
Version: 1
Author URI: http://quovadis.web.id
*/
 
 
// Block direct requests
if ( !defined('ABSPATH') )
	die('-1');
	
	
add_action( 'widgets_init', function(){
     register_widget( 'widget_news' );
});	
 
/**
 * Adds Quote_Curl widget.
 */
class widget_news extends WP_Widget {
 
	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'widget_news', // Base ID
			__('Widget News', 'text_domain'), // Name
			array( 'description' => __( 'Memberitahu Berita Terbaru', 'text_domain' ), ) // Args
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
echo ' 
<div id="newsticker-demo">    
    <div class="title">Latest News</div><br>
    <div class="newsticker-jcarousellite">
		<ul>
            <li>
				
				<div class="info">
					<a href="http://www.vladstudio.com/wallpaper/?knight_lady">The Knight and the Lady</a>
					<span class="cat">Category: Illustrations</span>
				</div>
				<div class="clear"></div>
			</li>
			
            <li>
				
				<div class="info">
					<a href="http://www.vladstudio.com/wallpaper/?family_of_colors">The Family of Colors</a>
					<span class="cat">Category: Creatures</span>
				</div>
				<div class="clear"></div>
			</li>
            <li>
				
				<div class="info">
					<a href="http://www.vladstudio.com/wallpaper/?teddybear_mac">Teddy Bear and MacBook</a>
					<span class="cat">Category: Photos</span>
				</div>
				<div class="clear"></div>
			</li>
			<li>
				
				<div class="info">
					<a href="http://www.vladstudio.com/wallpaper/?rainbow_butterfly">Rainbow Butterfly</a>
					<span class="cat">Category: Abstract art</span>
				</div>
				<div class="clear"></div>
			</li>
			<li>
				
				<div class="info">
					<a href="http://www.vladstudio.com/wallpaper/?space_travel">Space Travel</a>
					<span class="cat">Category: Abstract art</span>
				</div>
				<div class="clear"></div>
			</li>
			<li>
				
				<div class="info">
					<a href="http://www.vladstudio.com/wallpaper/?traveling_tree">The Traveling Tree</a>
					<span class="cat">Category: Creatures</span>
				</div>
				<div class="clear"></div>
			</li>
        </ul>
    </div>
    
</div>
';

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