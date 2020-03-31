<?php get_header(); ?>


<main class="page-content section"> 
   
    <!-- Featured Properites Start -->   
    <div class="properites-sidebar-wrap pt-80 pt-md-60 pt-sm-40 pt-xs-30 pb-110 pb-md-90 pb-sm-70 pb-xs-60">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-4 col-xl-3 col-12 order-lg-2 order-2">
                    <div class="row widgets">
                       
                        <div class="col-lg-12">
                            <?php
                                if(is_active_sidebar('real_s')):
                                    dynamic_sidebar('real_s');
                                endif;
                            ?>
                        </div>
                        
                        <div class="col-lg-12">
                            <div class="single-widget widget-tag">
                                <h4 class="widget-title">
                                    <span>Tag</span>
                                </h4>
                                <div class="tag">
                                    <a href="#">Real Estate</a>
                                    <a href="#">Home</a>
                                    <a href="#">Duplex</a>
                                    <a href="#">Villa</a>
                                    <a href="#">Appartment</a>
                                    <a href="#">Property</a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <div class="col-lg-8 col-xl-9 col-12 order-lg-1 order-1">
                   
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog-details-warpper">
                                <div class="details-image mt-30">
                                    <?php the_post_thumbnail('prop_thumb') ?>
                                </div>
                                <div class="details-contents-wrap">
                                   
                                    <h3><?php the_title() ?></h3>

                                    <?php //the_content(); ?>
                                    
                                    
                                    <div class="propertice-details pt-25">
                                        <div class="row">
                                           
                                            <div class="col-12">
                                                <div class="properties-details-title mb-10">
                                                    <h4>Básico</h4>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="single-info">
                                                    <strong>Area: </strong><span><?php echo get_field('area')  ?></span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <div class="single-info">
                                                    <strong>Acueducto:</strong><span> <?php echo get_field('acueducto') == 1 ? 'Aplica' : 'No aplica' ?></span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="single-info">
                                                    <strong>Electricidad:</strong><span> <?php echo get_field('electricidad') == 1 ? 'Aplica' : 'No aplica' ?></span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="single-info">
                                                    <strong>Gas: </strong><span> <?php echo get_field('gas') == 1 ? 'Aplica' : 'No aplica' ?></span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="single-info">
                                                    <strong>Baños:</strong><span>  <?php the_field('banos') ?></span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="single-info">
                                                    <strong>Cocinas:</strong><span> <?php the_field('cocinas') ?></span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="single-info">
                                                    <strong>Garajes:</strong><span>  <?php the_field('garaje') ?></span>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <div class="single-info">
                                                    <strong>Cuartos:</strong><span>  <?php the_field('habitaciones') ?></span>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-sm-6">
                                                <div class="single-info">
                                                    <strong>Dirección: </strong><span> <?php the_field('direccion') ?></span>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="single-property-price">
                                                    <?php 
                                                        $prop = intval(get_field('precio'));
                                                    ?>
                                                    <strong>Precio :  CO $ <?php echo number_format($prop,0,'.','.') ?></strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="propertice-details pt-25">
                                        <div class="row">
                                            <div class="col-12">
                                                <?php 
                                                    $agente = get_field('agente_encargado');
                                                    if($agente):
                                                    $post = $agente;
                                                    setup_postdata($post);
                                                ?>

                                                        <strong>Agente Encargado: </strong>
                                                        <div class="row mt-3">
                                                            <div class="col-md-2 pr-0">
                                                                <a href="<?php  the_permalink() ?>">
                                                                 <?php the_post_thumbnail('agente_thumb',['class'=> 'img-thumbnail',]) ?>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-10 pl-0">
                                                                <a href="<?php  the_permalink() ?>">
                                                                    <h4><?php the_title() ?></h4>
                                                                </a>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore officia, impedit ut debitis natus in quaerat iure, </p>
                                                            </div>
                                                        </div>
                                                            
                                                    <?php wp_reset_postdata();endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="propertice-details pt-25">
                                        <div class="row">
                                           
                                            <div class="col-12">
                                                <div class="properties-details-title mb-10">
                                                    <h4>Comodidades</h4>
                                                </div>
                                            </div>
                                           			
                                            <?php for($i = 1; $i <=4; $i++): ?> 
	                                             <div class="col-md-3 col-sm-6">
	                                           		<?php 
														$values  = get_field("comodidades_$i");
														$field   = get_field_object("comodidades_$i");
														$choices = $field['choices'];
	                                           			foreach ($choices as $value => $label) :
	                                           		?>
	                                           				<div class="single-info form-check">
	                                           				    <input class="form-check-input" type="checkbox" <?php echo in_array($value, $values) ? 'checked' : '' ?>>
	                                           				    <label for=""><?php echo $label ?></label>
	                                           				</div>
													<?php endforeach; ?>
	                                             </div>
                                           	<?php endfor; ?>
                                        </div>
                                    </div>
                                    <div class="propertice-details pt-25">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="properties-details-title mb-20">
                                                            <h4>Planos</h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="image">
                                                            <?php 
                                                                $image = get_field('planos');
                                                                if(!empty($image)): ?>
                                                                    <img src="<?php  echo esc_url($image['url']) ?>" alt="">
                                                            <?php
                                                                endif;
                                                            ?>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-6 pl-50 pl-xs-15 mt-xs-30">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="properties-details-title mb-20">
                                                            <h4>Ver video</h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <div class="image-property">
                                                           <?php the_post_thumbnail('video_thumb'); ?>
                                                            <div class="video-box">
                                                                <a class="video-popup" href="https://www.youtube.com/watch?v=PG3ehLP4yD8"><i class="far fa-play-circle"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <div class="comments-area pt-70 pt-md-50 pt-sm-50 pt-xs-50">
                                    <h4>Comments</h4>
                                    
                                    <ul class="comment-list">
                                        <li>
                                            <div class="comment">
                                                <div class="image"><img src="assets/images/review/01.png" alt=""></div>
                                                <div class="content">
                                                    <h5>Luci Chunni</h5>
                                                    <div class="d-flex flex-wrap justify-content-between">
                                                        <span class="time">6 hour ago</span>
                                                    </div>
                                                    <div class="decs">
                                                        <p>There are some business lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiu tepunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrudt </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="child-comment">
                                                <li>
                                                    <div class="comment">
                                                        <div class="image"><img src="assets/images/review/02.png" alt=""></div>
                                                        <div class="content">
                                                            <h5>Devid Bepari</h5>
                                                            <div class="d-flex flex-wrap justify-content-between">
                                                                <span class="time">10 hour ago</span>
                                                            </div>
                                                            <div class="decs">
                                                                <p>There are some business lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiu tempunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="comment">
                                                <div class="image"><img src="assets/images/review/03.png" alt=""></div>
                                                <div class="content">
                                                    <h5>Neha Jhograti</h5>
                                                    <div class="d-flex flex-wrap justify-content-between">
                                                        <span class="time">6 hour ago</span>
                                                    </div>
                                                    <div class="decs">
                                                        <p>But I must explain to you how all this mistaken idea of denouncing pleasure and ising pain  borand I will give you a complete account of the system</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    
                                    <h4>Leave a Comments</h4>
                                    
                                    <div class="comment-form">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-md-6 col-12 mb-30"><input type="text" placeholder="Your Name"></div>
                                                <div class="col-md-6 col-12 mb-30"><input type="email" placeholder="Email"></div>
                                                <div class="col-md-6 col-12 mb-30"><input type="text" placeholder="Phone"></div>
                                                <div class="col-md-6 col-12 mb-30"><input type="text" placeholder="Subject"></div>
                                                <div class="col-12 mb-30"><textarea placeholder="Message"></textarea></div>
                                                <div class="col-12"><button class="btn send-btn btn-circle">Send</button></div>
                                            </div>
                                        </form>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
            
        </div>
    </div><!-- Featured Properites End -->  

</main>















<?php get_footer(); ?>