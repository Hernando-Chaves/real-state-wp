<?php 
/**
* Lista propiedades 
*/
 if(!function_exists('rst_lista_propiedades'))
 {
 	function rst_lista_propiedades($num,$estado)
 	{
 		$args = [
			'post_type'      => 'propiedad',
			'posts_per_page' => $num,
			'orderby'        => 'date',
			'order'          => 'DESC',
			'tax_query'=> [
				'taxonomy' => 'estado',
				'field'    => 'slug',
				'terms'    => $estado,
			]
 		];

 		$propiedades = new WP_Query( $args );

 		if($propiedades->have_posts()):
 			while($propiedades->have_posts()) : $propiedades->the_post();
 		?>
			
 			<div class="col-lg-3 col-md-6 col-12 mb-10">
 			    <!-- single-property Start -->
 			    <div class="single-property mt-30">
 			        <div class="property-img">
 			            <a href="<?php the_permalink(); ?>" target="_blank">
 			               <?php the_post_thumbnail(); ?>
 			            </a>

		            	<?php 
		            		$terms = get_the_terms($post->ID,'estado');
		            		foreach($terms as $term):
		            		if($term->slug === 'promocion'):
		            	?>
			            	<span class="level-stryker text-light">Promoción </span>
			            <?php endif; endforeach; ?>
 			        </div>
 			        <div class="property-desc">
 			            <h4><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title(); ?> </a></h4>
 			            <p>
 			                <span class="location"><?php the_field('direccion'); ?></span> <br>
 			                <span class="property-info"><?php the_field('cocinas'); ?> Cocinas, <?php the_field('habitaciones'); ?> Cuartos, <?php the_field('garaje'); ?> Garajes, </span>
 			            </p>
 			            <div class="price-box">
 			                <p>CO $ <?php echo rst_formato_pesos(get_field('precio')); ?></p>
 			            </div>
 			        </div>
 			    </div><!-- single-property End -->
 			</div>

 		<?php
 			endwhile;wp_reset_postdata();
 		endif;
 	}
 }
 
 /**
 * Convierte a formato pesos 
 */
  if(!function_exists('rst_formato_pesos'))
  {
  	function rst_formato_pesos($val)
  	{
  		$precio = intval($val) ;
  		$valor  = number_format($precio,0,'.','.') ;

  		return $valor;
  	}
  }  

/**
* Lista los agentes 
*/
if(!function_exists('rst_listar_agentes'))
{
	function rst_listar_agentes($cant)
	{
		$args = [
			'post_type'      => 'agente',
			'posts_per_page' => $cant,
		];

		$agente = new WP_Query( $args );
		if($agente->have_posts()):
			while($agente->have_posts()) : $agente->the_post();
		?>
				<div class="col-lg-3 col-md-6 mt-30">
				    <!-- Our Agents Start -->
				    <div class="our-agents">
				        <div class="agents-image">
				        	<a href="<?php the_permalink(); ?>"> 
				        	   <?php the_post_thumbnail('agente_list'); ?>
				        	</a>
				            
				            <div class="agents-info">
				                <h3>Más Detalles</h3>
				                <div class="agents-social">
				                    <ul>
				                    	<?php 
				                    	if(have_rows('redes_sociales')):
			                    			while(have_rows('redes_sociales')): the_row();
			                    				$redes = get_sub_field('red_social_1');
				                    				if($redes['red_social'] == 'Facebook'):
				                    					$icon = 'facebook';
				                    				elseif ($redes['red_social'] == "Twitter"):
				                    					$icon = "twitter";
				                    				elseif ($redes['red_social'] == "Youtube"):
				                    					$icon = "youtube";
				                    				elseif ($redes['red_social'] == "Instagram"):
				                    					$icon = "instagram";
				                    					elseif ($redes['red_social'] == "Linkedin"):
				                    					$icon = "linkedin";
				                    					
				                    				endif;
				                    	?>
				                        <li>
				                        	<a href="<?php echo $redes['link_red_social'] ?>" target="_blank"><i class="fab fa-<?php echo $icon ?>"></i></a>
				                        </li>
				                        <?php endwhile;endif; ?>
				                    </ul>
				                </div>
				            </div>
				            
				        </div>
				        <a href="<?php the_permalink(); ?>"> 
					        <div class="agents-contents">
					            <h4><?php the_title(); ?></h4>
					            <p><?php the_field('cargo'); ?></p>
					        </div>
					    </a>
				    </div><!-- Our Agents End -->
				</div>
		<?php

			endwhile;wp_reset_postdata();
		endif;
	}
}


 
/**
* Filtra las propiedades 
*/
 if(!function_exists('rst_filtra_propiedades'))
 {
 	function rst_filtra_propiedades($estado)
 	{
 		$args = [
			'post_type'      => 'propiedad',
			'posts_per_page' => -1,
			'orderby'        => 'rand',
			'tax_query'      => [
               [
				'taxonomy' => 'estado',
				'field'    => 'slug',
				'terms'     => $estado,
               ]
 			]
 		];

 		$propiedad = new WP_Query( $args ); 

 		?> 
 		<div class="tab-pane propiedades" id="<?php echo $estado ?>">
            <div class="row">
				<?php
				
		 		if($propiedad->have_posts()):
		 			while($propiedad->have_posts()) : $propiedad->the_post(); 
		 		?>
		 				<div class="col-lg-3 col-md-4 col-12">
		 				    <!-- single-property Start -->
		 				    <div class="single-property mt-30">
		 				        <div class="property-img">
		 				            <a href="<?php  the_permalink(); ?>" >
		 				                <?php the_post_thumbnail('prop_thumb_list') ?>
		 				            </a>
		 				            <?php if($estado == "promocion"): ?>
		 				            	<span class="level-stryker">Promoción</span>
		 				            <?php endif ?>
		 				        </div>
		 				        <div class="property-desc">
		 				            <h4><a href="<?php  the_permalink(); ?>"><?php the_title() ?></a></h4>
		 				            <p>
		 				                <span class="location"><?php the_field('direccion') ?></span><br>
		 				                <span class="property-info"><?php the_field('habitaciones') ?> Cuartos, <?php the_field('banos') ?> Baños, <?php the_field('garaje') ?> Garajes </span>
		 				            </p>
		 				            <div class="price-box">
		 				                <p>Precio  $ <?php echo rst_formato_pesos(get_field('precio')); ?></p>
		 				            </div>
		 				        </div>
		 				    </div><!-- single-property End -->
		 				</div>
		 		<?php

		 			endwhile;wp_reset_postdata();
		 		endif;
		 		?>
		 	</div>
		</div>
		<?php
 	}
 }
 

/**
* Registra la zona de widgets para el tema 
*/
 
if(!function_exists('rst_set_up_theme'))
{
	function rst_set_up_theme()
	{
		register_sidebar([
			'name'          => 'Sidebar Real S',
			'id'            => 'real_s',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
			'before_widget' => '<div class="single-widget">',
			'after_widget'  => '</div>'
		]);
	}
}
add_action('widgets_init','rst_set_up_theme' );

/**
* Agrega tamaños de imagen 
*/
add_image_size('sidebar_agent',131,134,['center','top']);
add_image_size('sidebar_prop',340,202,true);
add_image_size('video_thumb',480,400,true);
add_image_size('prop_thumb',1000,600,true);
add_image_size('prop_thumb_list',270,225,true);
add_image_size('agente_thumb',80,86,['center','top']);
add_image_size('agente_list',215,323,['center','top']);
add_image_size('img_cat_small',470,380,['center','top']);
add_image_size('img_cat_big',669,380,['center','top']);
