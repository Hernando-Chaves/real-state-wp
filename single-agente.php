<?php get_header(); ?>


<!-- Breadcrumb -->
<div class="breadcrumb-area section" style="background-image: url(assets/images/bg/breadcrumb.jpg)">
    <div class="container">
        <div class="breadcrumb pt-75 pb-75 pt-sm-70 pb-sm-40 pt-xs-70 pb-xs-40">
            <div class="row">
                <div class="col">
                    <h2>Jassica Thomson</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Agent</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--// Breadcrumb -->
   
<!-- Our Agents Section Start -->    
<div class="our-agents-section section pt-110 pt-md-90 pt-sm-70 pt-xs-60 pb-110 pb-md-90 pb-sm-70 pb-xs-60">
    <div class="container">
        
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-6">
                <!-- Our Agents Start -->
                <div class="our-agents">
                    <div class="agents-image">
                       <?php the_post_thumbnail('agente_list'); ?>
                    </div>
                    <div class="agents-contents">
                        <h4><?php the_title() ?></h4>
                        <p><?php the_field('cargo'); ?></p>
                    </div>
                </div><!-- Our Agents End -->
            </div>
            
            <div class="col-lg-9 ">
                <div class="single-agent-details fix d-md-flex align-items-md-center">
                    <div class="agent-info-text">
                        <p><span class="agent-name"><?php the_title(); ?> </span><?php the_field('presentacion'); ?></p>
                        <h4 class="mb-15 mt-30">Sigueme en:</h4>
                        <div class="single-contact-text">
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
                    
                    <div class="agent-contact-info">
                        <div class="single-contact-text">
                            <h4>Llamame</h4>
                            <?php 
                            if(have_rows('numero_telefonico')):
                                while(have_rows('numero_telefonico')) : the_row();
                                  $phone = get_sub_field('telefono');
                            ?>
                                    <span><?php echo $phone ?> </span><br>
                           <?php endwhile;endif; ?>
                        </div>
                        <div class="single-contact-text">
                            <h4>Escribeme</h4>
                            <?php if(have_rows('correo_electronico')):
                                     while(have_rows('correo_electronico')) : the_row();
                                        $mail = get_sub_field('correo');
                            ?>
                                       <a href="mailto:<?php echo $mail ?>|"><?php echo $mail ?></a>
                                <?php endwhile;endif ?>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            
        </div>
        
    </div>
    
</div><!-- Our Agents Section End -->    
  
<?php get_footer(); ?>