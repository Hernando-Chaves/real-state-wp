<?php 

/**
* Custmizer para Ouwn Customizer 
*/
if(!function_exists('rsw_add_options_own_customizer'))
{
	function rsw_add_options_own_customizer($wp_customize)
	{
		$wp_customize->add_panel( 'test_custom', array(
		  'title' => __( 'Real State: Custom Customizer' ),
		  'description' => $description, // Include html tags such as <p>.
		  'priority' => 10, // Mixed with top-level-section hierarchy.
		) );

		$wp_customize->add_section( "custom_config" , array(
		  'title' => "Customizer Personalizado",
		  'panel' => 'test_custom',
		) );
			$wp_customize->add_setting(  "custom_customizer", array(
				'type'                 => 'theme_mod', // or 'option'
				'capability'           => 'edit_theme_options',
				'theme_supports'       => '', // Rarely needed.
				'default'              => 'fas fa-phone',
				'transport'            => 'refresh', // or postMessage
				'sanitize_callback'    => '',
				'sanitize_js_callback' => '', // Basically to_json.
			) );

			$wp_customize->add_control(new Rst_custom_customizer($wp_customize,"custom_customizer",
			   [
					'label'       => __( 'Selecciona un icono ' ),                                               
					'description' => esc_html__( 'Selecciona un icono' ),
					'section'     => "custom_config",
					'priority'    => 10, // Optional. Order priority to load the control. Default: 10
					
			      
			   ])
			);

			
		
	}
}
add_action('customize_register','rsw_add_options_own_customizer' );