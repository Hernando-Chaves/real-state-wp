<?php 


/**
 * Widget para mostrar últimas propedades
 */
class last_properties extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    function __construct() {
        parent::__construct(
            'last_properties', // Base ID
            esc_html__( 'Real State Propiedades', 'real_s' ), // Name
            array( 'description' => esc_html__( 'Muestra las propieddes agregadas recientemente', 'real_s' ), ) // Args
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
    public function widget( $args, $instance ) 
    {
        echo $args['before_widget'];
        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        }
        ?>
        <div class="col-lg-12">
            <div class="">
                <div class="row single-propertiy-wigets">
        <?php
        $query = [
            'post_type'      => 'propiedad',
            'posts_per_page' => 3,
            'order'          => 'DESC',
            'order_by'       => 'date',
        ];
        $propiedad = new WP_Query($query);

        if($propiedad->have_posts()):
            while($propiedad->have_posts()) : $propiedad->the_post();
        ?>
                <div class="col-lg-12 col-md-6 single-propertiy mb-30">
                    <a href="<?php the_permalink() ?>">
                        <?php the_post_thumbnail('sidebar_prop',['class' => 'rounded-top',]) ?>
                    <div class="propertiy-det-box">
                        <a href="<?php the_permalink() ?>"><h4><?php the_title() ?></h4></a>
                        <?php 
                            $prop = intval(get_field('precio'));

                        ?>
                        <p><?php echo "CO$ " . number_format($prop,0,'.', '.'  )?></p>
                    </div>
                </div>
        <?php

            endwhile;wp_reset_postdata();
        endif;
        ?>
                </div>
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
    public function form( $instance ) 
    {
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
function register_last_properties() {
    register_widget( 'last_properties' );
}
add_action( 'widgets_init', 'register_last_properties' );