<?php 

/**
 * Adds Foo_Widget widget.
 */
class Agentes extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'foo_widget', // Base ID
			esc_html__( 'Real State Agentes destacados ', 'real_s' ), // Name
			array( 'description' => esc_html__( 'Muestra los agentes destacados del mes.', 'real_s' ), ) // Args
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
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
		}
		
		$query = [
			'cat'            => 3,
			'order'          => 'DESC',
			'post_type'      => 'agente',
			'posts_per_page' => 4,
		];

		$agentes = new WP_Query($query);
		?>
		
		    <div class="">
		        <div class="our-widget-agent">

		<?php
		if($agentes->have_posts()):
			while($agentes->have_posts()) : $agentes->the_post();
		?>
			<div class="widget-agent">
			    <div class="image ">
			        <a href="<?php the_permalink() ?>">
			        	<?php the_post_thumbnail('sidebar_agent','rounded-top') ?>
			        </a>
			    </div>
			    <div class="name">
			        <a href="<?php the_permalink() ?>">
			        	<h5><?php the_title() ?></h5>
			        </a>
			    </div>
			</div>
		<?php
			endwhile;wp_reset_postdata();
		endif;
		?>
				</div>
			</div>

		<?php

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
		$title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'New title', 'real_s' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'real_s' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
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
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';

		return $instance;
	}

} // class Foo_Widget

// register Foo_Widget widget
function register_agente() {
    register_widget( 'Agentes' );
}
add_action( 'widgets_init', 'register_agente' );