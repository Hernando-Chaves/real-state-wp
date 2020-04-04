<?php 

if(!function_exists('rst_add_options_tipo'))
{
	function rst_add_options_tipo($wp_customize)
	{
		$wp_customize->add_panel('options_tipo',
			[
				'title'       => 'Real State: Categorías',
				'description' => esc_html('Opciones de categorías'),
				'priority'    => '11',
			]

		);
	    for($i=1;$i<=4;$i++):
		$wp_customize->add_section("tipo_seccion_$i",
			[
				'title'=> "Editar Categoría $i",
				'panel'=> 'options_tipo',
			]
	    );
			$wp_customize->add_setting("cat_$i",
				[
					'type'       => 'theme_mod',
					'transport'  => 'refresh',
				]
		    );
		    $i % 2 == 0 ? $width = 669 : $width = 470;
			$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize,"cat_$i",
				[
					'label'  => __("Imagen de la categoría $i"),
					'section'=> "tipo_seccion_$i",
					'width'=> $width,
					'height'=> 380,
				]
		    ));

		    $wp_customize->add_setting("titulo_cat_$i",
				[
					'type'      => 'theme_mod',
					'transport' => 'refresh',
				]
		    );
			$wp_customize->add_control( "titulo_cat_$i",
				[
					'label'       => __("Titulo de la categoría $i"),
					'section'     => "tipo_seccion_$i",
					// 'priority'    => 20,
					'input_attrs' => 
					   [
					   	'class'       => 'input_rst',
					   	'placeholder' => "Nombre de la categoría _$i",
					   ]
				]
		    );

		    $wp_customize->add_setting("ribon_cat_$i",
				[
					'type'      => 'theme_mod',
					'transport' => 'refresh',
				]
		    );
			$wp_customize->add_control( "ribon_cat_$i",
				[
					'label'       => __("Ribon de la categoría $i"),
					'section'     => "tipo_seccion_$i",
					// 'priority'    => 20,
					'input_attrs' => 
					   [
					   	'class'       => 'input_rst',
					   	'placeholder' => "Ribon de la categoría _$i",
					   ]
				]
		    );
		endfor;
	}
}
add_action('customize_register','rst_add_options_tipo' );