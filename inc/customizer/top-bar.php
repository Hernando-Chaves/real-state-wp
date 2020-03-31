<?php 

/**
* Custmizer para la barra top 
*/
if(!function_exists('rsw_add_options_topbar'))
{
	function rsw_add_options_topbar($wp_customize)
	{
		$wp_customize->add_panel( 'topbar_real_s', array(
		  'title' => __( 'Real State: Topbar' ),
		  'description' => $description, // Include html tags such as <p>.
		  'priority' => 10, // Mixed with top-level-section hierarchy.
		) );

		$wp_customize->add_section( "topbar_config" , array(
		  'title' => "Configuración topbar",
		  'panel' => 'topbar_real_s',
		) );
        for($i=1;$i<=3;$i++):
			$wp_customize->add_setting( "topbar_icon_$i", array(
				'type'                 => 'theme_mod', // or 'option'
				'capability'           => 'edit_theme_options',
				'theme_supports'       => '', // Rarely needed.
				'default'              => 'fas fa-phone',
				'transport'            => 'refresh', // or postMessage
				'sanitize_callback'    => '',
				'sanitize_js_callback' => '', // Basically to_json.
			) );

			$wp_customize->add_control( "topbar_icon_$i",
			   [
					'label'       => __( 'Selecciona un icono ' ),                                               
					'description' => esc_html__( 'Selecciona un icono' ),
					'section'     => "topbar_config",
					'priority'    => 10, // Optional. Order priority to load the control. Default: 10
					'type'        => 'select', // Can be either text, email, url, number, hidden, or date
					'capability'  => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
					'choices'=> [
						'fas fa-phone'      => 'Teléfono',
						'fas fa-envelope'   => 'Correo',
						'fas fa-map-marker' => 'Dirección',
					],
			      
			   ]
			);

			$wp_customize->add_setting( "texto_icono_$i", array(
				'type'                 => 'theme_mod', // or 'option'
				'capability'           => 'edit_theme_options',
				'theme_supports'       => '', // Rarely needed.
				'default'              => '',
				'transport'            => 'refresh', // or postMessage
				'sanitize_callback'    => '',
				'sanitize_js_callback' => '', // Basically to_json.
			) );

			$wp_customize->add_control( "texto_icono_$i",
			   [
					'label'       => __( "Texto Icono $i" ),                                               
					'description' => esc_html__( 'Escribe aquí el nombre de la propiedad' ),
					'section'     => "topbar_config",
					'priority'    => 10, // Optional. Order priority to load the control. Default: 10
					'type'        => 'text', // Can be either text, email, url, number, hidden, or date
					'capability'  => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
			      'input_attrs'   => array( // Optional.
						'class'       => 'my-custom-class',
						'style'       => 'border: 1px solid rebeccapurple',
						'placeholder' => __( 'Ingresa el titulo...' ),
			      ),
			   ]
			);
	    endfor;

		
	}
}
add_action('customize_register','rsw_add_options_topbar' );