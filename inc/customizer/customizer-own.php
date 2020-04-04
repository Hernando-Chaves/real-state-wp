<?php 


if(class_exists('WP_Customize_Control')):

	class Rst_custom_customizer extends WP_Customize_Control
	{
		public $type = 'simple_notice';

		public function render_content()
		{
		?>
		   <div class="simple-notice-custom-control">
		      <?php if( !empty( $this->label ) ) { ?>
		         <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
		      <?php } ?>
		      <?php if( !empty( $this->description ) ) { ?>
		         <span class="customize-control-description"><?php echo wp_kses_post( $this->description ); ?></span>
		      <?php } ?>
		   </div>
		<?php
		}
	}


endif;