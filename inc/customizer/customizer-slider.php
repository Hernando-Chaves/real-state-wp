<?php 
/**
* AGREGA LAS FUNCIONES PERSONALIDAS DEL TEMA 
*/
 
if(!function_exists('rsw_add_options_slider'))
{
	function rsw_add_options_slider($wp_customize)
	{
		/*AGREGAMOS UN PANEL*/
		$wp_customize->add_panel( 'slider_real_s', array(
			'title'       => __( 'Real State Slider' ),
			'description' => 'Opciones para la pagina principal', // Include html tags such as <p>.
			'priority'    => 11, // Mixed with top-level-section hierarchy.
		) );

		// $wp_customize->add_section( "slider_radio" , array(
		//   'title' => "Elige que mostrar en el slider",
		//   'panel' => 'slider_real_s',
		// ) );

		$wp_customize->add_setting( "slider_radio_op", array(
			'type'                 => 'theme_mod', // or 'option'
			'capability'           => 'edit_theme_options',
			'theme_supports'       => '', // Rarely needed.
			'default'              => 'fas fa-phone',
			'transport'            => 'refresh', // or postMessage
			'sanitize_callback'    => '',
			'sanitize_js_callback' => '', // Basically to_json.
			'panel' => 'slider_real_s',
		) );

		$wp_customize->add_control( "slider_radio_op",
		   [
				'label'       => __( 'Selecciona una opción ' ),                                               
				'description' => esc_html__( 'Selecciona una opción' ),
				'section'     => "slider_radio",
				'priority'    => 10, // Optional. Order priority to load the control. Default: 10
				'type'        => 'radio', // Can be either text, email, url, number, hidden, or date
				'capability'  => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
				'choices'=> [
					'Últimas Entradas','Configurar manualmente'
				],
		      
		   ]
		);
		for($i = 1; $i <=10;$i++):
		$wp_customize->add_section( "slider_home_$i" , array(
		  'title' => "Configuración Slider $i",
		  'panel' => 'slider_real_s',
		) );
		/*AGREGAMOS UNA CONFIGURACIÓN*/
			$wp_customize->add_setting( "slider_$i", array(
				'type'                 => 'theme_mod', // or 'option'
				'capability'           => 'edit_theme_options',
				'theme_supports'       => '', // Rarely needed.
				'default'              => '',
				'transport'            => 'refresh', // or postMessage
				'sanitize_callback'    => '',
				'sanitize_js_callback' => '', // Basically to_json.
			) );


			/*AGREGAMOS UN CONTROL*/
			$wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, "slider_$i", array(
				'label'         => __( "Imgen Slider $i", 'real_s' ),
				'section'       => "slider_home_$i",
				'priority'      => 10,
				'flex_width'    => true, // Optional. Default: true
				'flex_height'   => false, // Optional. Default: false
				'width'         => 800, // Optional. Default: 150
				'height'        => 400, // Optional. Default: 150
			) ) );



			$wp_customize->add_setting( "titulo_slide_$i", array(
				'type'                 => 'theme_mod', // or 'option'
				'capability'           => 'edit_theme_options',
				'theme_supports'       => '', // Rarely needed.
				'default'              => '',
				'transport'            => 'refresh', // or postMessage
				'sanitize_callback'    => '',
				'sanitize_js_callback' => '', // Basically to_json.
			) );

			$wp_customize->add_control( "titulo_slide_$i",
			   [
					'label'       => __( 'Titulo' ),                                               
					'description' => esc_html__( 'Escribe aquí el nombre de la propiedad' ),
					'section'     => "slider_home_$i",
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

			$wp_customize->add_setting( "address_slide_$i", array(
				'type'                 => 'theme_mod', // or 'option'
				'capability'           => 'edit_theme_options',
				'theme_supports'       => '', // Rarely needed.
				'default'              => '',
				'transport'            => 'refresh', // or postMessage
				'sanitize_callback'    => '',
				'sanitize_js_callback' => '', // Basically to_json.
			) );

			$wp_customize->add_control( "address_slide_$i",
			   [
					'label'       => __( 'Ubicación de la propiedad'),                                               
					'description' => esc_html__( 'Escribe aquí la dirección de la propiedad' ),
					'section'     => "slider_home_$i",
					'priority'    => 10, // Optional. Order priority to load the control. Default: 10
					'type'        => 'text', // Can be either text, email, url, number, hidden, or date
					'capability'  => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
			      'input_attrs'   => array( // Optional.
						'class'       => 'my-custom-class',
						'style'       => 'border: 1px solid rebeccapurple',
						'placeholder' => __( 'Ingresa la dirección...' ),
			      ),
			   ]
			);

			$wp_customize->add_setting( "detalles_slide_$i", array(
				'type'                 => 'theme_mod', // or 'option'
				'capability'           => 'edit_theme_options',
				'theme_supports'       => '', // Rarely needed.
				'default'              => '',
				'transport'            => 'refresh', // or postMessage
				'sanitize_callback'    => '',
				'sanitize_js_callback' => '', // Basically to_json.
			) );

			$wp_customize->add_control( "detalles_slide_$i",
			   [
					'label'       => __( 'Detalles de la propiedad'),                                               
					'description' => esc_html__( 'Escribe aquí el nombre de la propiedad' ),
					'section'     => "slider_home_$i",
					'priority'    => 10, // Optional. Order priority to load the control. Default: 10
					'type'        => 'text', // Can be either text, email, url, number, hidden, or date
					'capability'  => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
			      'input_attrs'   => array( // Optional.
						'class'       => 'my-custom-class',
						'style'       => 'border: 1px solid rebeccapurple',
						'placeholder' => __( 'Número de Baños, Cocinas, Garaje...' ),
			      ),
			   ]
			);

			$wp_customize->add_setting( "precio_slide_$i", array(
				'type'                 => 'theme_mod', // or 'option'
				'capability'           => 'edit_theme_options',
				'theme_supports'       => '', // Rarely needed.
				'default'              => '',
				'transport'            => 'refresh', // or postMessage
				'sanitize_callback'    => '',
				'sanitize_js_callback' => '', // Basically to_json.
			) );

			$wp_customize->add_control( "precio_slide_$i",
			   [
					'label'       => __( 'Precio' ),                                               
					'description' => esc_html__( 'Escribe aquí el precio de la propiedad' ),
					'section'     => "slider_home_$i",
					'priority'    => 10, // Optional. Order priority to load the control. Default: 10
					'type'        => 'text', // Can be either text, email, url, number, hidden, or date
					'capability'  => 'edit_theme_options', // Optional. Default: 'edit_theme_options'
			      'input_attrs'   => array( // Optional.
						'class'       => 'my-custom-class',
						'style'       => 'border: 1px solid rebeccapurple',
						'placeholder' => __( 'Ingresa el valor de la propiedad...' ),
			      ),
			   ]
			);

			
		endfor;
		
	}
}
add_action('customize_register','rsw_add_options_slider' );