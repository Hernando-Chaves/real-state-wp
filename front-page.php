<?php get_header(); ?>

<div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
     <?php 
         for($i=1;$i<=10;$i++):
         $id_img   = get_theme_mod("slider_$i");
         $ruta_img = wp_get_attachment_image_src($id_img,'full');
         
         if($id_img):
     ?>   
        <!-- Slides -->
        <div class="swiper-slide">
            <img src="<?php echo $ruta_img[0] ?>" alt="">
            <?php if($titulo = get_theme_mod("titulo_slide_$i")): ?>
                <div class="info-slider">
                    <h1 class="text-white"> <?php echo $titulo ?></h1>
                    <h3 class="text-white mt-15"><?php echo get_theme_mod("detalles_slide_$i") ?></h3>
                    <p><?php echo get_theme_mod("address_slide_$i") ?></p>
                    <div class="hero-price">
                        <?php $precio = get_theme_mod("precio_slide_$i"); ?>
                        <h2 class="text-white">CO $ <?php echo rst_formato_pesos($precio); ?></h2>
                    </div>
                </div>
        <?php endif; ?>
        </div>
        <?php endif;endfor; ?>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
</div>


<!-- Location Module Section Start -->
<div class="location-section section  pt-110 pt-md-90 pt-sm-70 pt-xs-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-5 mb-30">
                <a href="#" class="location-module">
                    <?php 
                        $crop_img = get_theme_mod("cat_1");
                        $img_cat  = wp_get_attachment_image_src($crop_img,'full');
                        // echo "<pre>";
                        //     var_dump($crop_img);
                        // echo "</pre>";
                    ?>
                    <img src="<?php echo $img_cat[0]; ?>" alt="">
                    <div class="location-module__cont">
                        <h3 class="location-module__name"><?php echo get_theme_mod("titulo_cat_1") ?></h3>
                        <span class="location-module__badge"><?php echo get_theme_mod("ribon_cat_1") ?></span>
                    </div>
                </a>
            </div>
            <div class="col-lg-7 col-md-7 mb-30">
                <a href="#" class="location-module">
                    <div class="location-module__cont">
                    <?php
                        $crop_img = get_theme_mod("cat_2");
                        $img_cat  = wp_get_attachment_image_src($crop_img,'full');
                    ?>
                    <img src="<?php echo $img_cat[0];  ?>" alt="">
                        <h3 class="location-module__name"><?php echo get_theme_mod("titulo_cat_2") ?></h3>
                        <span class="location-module__badge"><?php echo get_theme_mod("ribon_cat_2") ?></span>
                    </div>
                </a>
            </div>
            <div class="col-lg-7 col-md-7 mb-30">
                <a href="#" class="location-module">
                    <div class="location-module__cont">
                    <?php
                        $crop_img = get_theme_mod("cat_4");
                        $img_cat  = wp_get_attachment_image_src($crop_img,'full');
                    ?>
                    <img src="<?php echo $img_cat[0];  ?>" alt="">
                        <h3 class="location-module__name"><?php echo get_theme_mod("titulo_cat_4") ?></h3>
                        <span class="location-module__badge"><?php echo get_theme_mod("ribon_cat_4") ?></span>
                    </div>
                </a>
            </div>
            <div class="col-lg-5 col-md-5 mb-30">
                <a href="#" class="location-module">
                    <?php 
                        $crop_img = get_theme_mod("cat_3");
                        $img_cat  = wp_get_attachment_image_src($crop_img,'full');
                    ?>
                    <img src="<?php echo $img_cat[0]; ?>" alt="">
                    <div class="location-module__cont">
                        <h3 class="location-module__name"><?php echo get_theme_mod("titulo_cat_3") ?></h3>
                        <span class="location-module__badge"><?php echo get_theme_mod("ribon_cat_3") ?></span>
                    </div>
                </a>
            </div>
           
        </div>
    </div>
</div>
<!-- Location Module Section End -->


<!-- Featured Properites Start -->   
<div class="featured-properites-section section pt-80 pt-md-60 pt-sm-40 pt-xs-30">
    <div class="container">
      
        <div class="row">
            <div class="section-title text-left col mb-30 mb-md-20 mb-xs-20 mb-sm-20">
                <h2>Más Recientes</h2>
            </div>
        </div>
       
        <div class="row product-slider">
           
            <?php echo rst_lista_propiedades(15,$estado) ?>
            
        </div>
        
    </div>
</div><!-- Featured Properites End -->  

<!-- About Section Start -->
<div class="about-section section pt-65 pb-65 pt-md-55 pb-md-55 pt-sm-45 pb-sm-45 pt-xs-25 pb-xs-25">
    <div class="container">
        <div class="row align-items-center fix">
            
            <div class="col-lg-4 col-md-5 col-12 offset-lg-1 mb-15 mt-35">
                <div class="about-properties-area">
                    <div class="about-slider_bg"></div>
                    <div class="about-properties-slider">
                        <div class="about-properties-item">
                            <div class="image"><img src="<?php echo get_template_directory_uri() ?> /assets/images/about/about-1.jpg" alt=""></div>
                        </div>

                        <div class="about-properties-item">
                            <div class="image"><img src="<?php echo get_template_directory_uri() ?> /assets/images/about/about-2.jpg" alt=""></div>
                        </div>

                    </div>
                </div>
            </div>
            
            <div class="about-content col-lg-6 col-md-7 col-12 ml-auto mt-35 pl-lg-0">
                <h2>We never compromize <br> with quality work...</h2>
                <p>Ortiz is one of the most popular real estate company all around USA. You can find your dream property or build property </p>
                
                <div class="row row-25">
                    
                    <div class="about-feature col-md-6 col-sm-6 col-12 mb-35">
                        <div class="icon"><img src="<?php echo get_template_directory_uri() ?> /assets/images/icons/feature-1.png" alt=""></div>
                        <div class="content">
                            <h4>Minimum Cost</h4>
                            <p>Privide low cost that help all more build real estate</p>
                        </div>
                    </div>
                    
                    <div class="about-feature col-md-6 col-sm-6 col-12 mb-35">
                        <div class="icon"><img src="<?php echo get_template_directory_uri() ?> /assets/images/icons/feature-2.png" alt=""></div>
                        <div class="content">
                            <h4>Best Marketing</h4>
                            <p>Privide low cost that help all more build real estate</p>
                        </div>
                    </div>
                    
                    <div class="about-feature col-md-6 col-sm-6 col-12 mb-35">
                        <div class="icon"><img src="<?php echo get_template_directory_uri() ?> /assets/images/icons/feature-3.png" alt=""></div>
                        <div class="content">
                            <h4>Easy to Search</h4>
                            <p>You can find your property to simply and easy way</p>
                        </div>
                    </div>
                    
                    <div class="about-feature col-md-6 col-sm-6 col-12 mb-35">
                        <div class="icon"><img src="<?php echo get_template_directory_uri() ?> /assets/images/icons/feature-4.png" alt=""></div>
                        <div class="content">
                            <h4>Secure</h4>
                            <p>You can find your property to simply and easy way</p>
                        </div>
                    </div>
                    
                </div>
                
            </div>
            
            
        </div>
    </div>
</div><!-- About Section End -->


<!-- Featured Properites Start -->   
<div class="featured-properites-section section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="tabs-categorys-list mb-30 mb-md-20 mb-xs-20 mb-sm-20">
                    <ul class="nav" role="tablist">
                       <li class="active"><a class="active" href="#tab_item_01" role="tab" data-toggle="tab">Propiedades en venta</a></li>
                       <li><a href="#tab_item_02" role="tab" data-toggle="tab">Propiedades en arriendo</a></li>
                   </ul>
                </div>
            </div>

        </div>
       
        <!-- tab-contnt start -->
        <div class="tab-content">
            <div class="tab-pane active" id="tab_item_01">
                
                <div class="row ">
                    <?php rst_lista_propiedades(-1,'venta') ?>
                </div>
            </div>
            <div class="tab-pane" id="tab_item_02">
                <div class="row ">
                     <?php rst_lista_propiedades(-1,'arriendo') ?>
                </div>
            </div>
        </div>
    </div>
</div><!-- Featured Properites End -->  


<!-- Featured Property section start -->
<!-- <div class="featured-section section  pt-100 pt-md-65 pt-sm-65 pt-xs-60">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-6">
                <div class="featured-property h-100">
                    <div class="featured-property__details">
                        <h2 class="featured-property__title">Desilva De Villa</h2>
                        <address class="featured-property__address">24 North Street, California, USA</address>
                        <p class="featured-property__info">6500 sqft, 7 Bed, 5 Bath, 3 Garage</p>
                        <h3 class="featured-property__price">For Sale $54,000</h3>
                    </div>
                    <div class="featured-property__tab">
                        <ul class="nav nav-tabs justify-content-center" id="featuredProTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="featured-tab-1" data-toggle="tab" href="#featured-1" role="tab" aria-controls="featured-1" aria-selected="true">
                                    <img src="<?php echo get_template_directory_uri() ?> /assets/images/propertes/property-small-01.jpg" alt="Featured Tab">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="featured-tab-2" data-toggle="tab" href="#featured-2" role="tab" aria-controls="featured-2" aria-selected="false">
                                    <img src="<?php echo get_template_directory_uri() ?> /assets/images/propertes/property-small-02.jpg" alt="Featured Tab">
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="featured-tab-3" data-toggle="tab" href="#featured-3" role="tab" aria-controls="featured-3" aria-selected="false">
                                    <img src="<?php echo get_template_directory_uri() ?> /assets/images/propertes/property-small-03.jpg" alt="Featured Tab">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="feature-property__content h-100">
                    <div class="tab-content" id="featuredProTabContent">
                        <div class="tab-pane active" id="featured-1">
                            <figure class="featured-property__image">
                                <img src="<?php echo get_template_directory_uri() ?> /assets/images/propertes/property-lg-01.jpg" alt="Feature Tab">
                                <figcaption class="featured-property__caption">Call Us 01245 025 654
                                </figcaption>
                            </figure>
                        </div>
                        <div class="tab-pane" id="featured-2">
                            <figure class="featured-property__image">
                                <img src="<?php echo get_template_directory_uri() ?> /assets/images/propertes/property-lg-01.jpg" alt="Feature Tab">
                                <figcaption class="featured-property__caption">Call Us 01245 025 654
                                </figcaption>
                            </figure>
                        </div>
                        <div class="tab-pane" id="featured-3">
                            <figure class="featured-property__image">
                                <img src="<?php echo get_template_directory_uri() ?> /assets/images/propertes/property-lg-01.jpg" alt="Feature Tab">
                                <figcaption class="featured-property__caption">Call Us 01245 025 654
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Featured Property section end -->

 
<!-- Our Agents Section Start -->    
<div class="our-agents-section section pt-110 pt-md-90 pt-sm-70 pt-xs-60 pb-110 pb-md-90 pb-sm-70 pb-xs-60">
    <div class="container">
       
        <div class="row">
            <div class="section-title text-center col mb-30 mb-md-20 mb-xs-20 mb-sm-20">
                <h2>Nuestros Agentes</h2>
                <p>  one of the most popular real estate company all around USA. You <br> can find your dream property or build property with us</p>
            </div>
        </div>
        
        <div class="row">
            <?php rst_listar_agentes(4); ?>
            
        </div>
        
    </div>
    
</div><!-- Our Agents Section End -->    
   
<!-- About Section Start -->
<div class="about-section section pt-70 pt-md-70 pt-xs-60 pt-sm-70  pb-110 pb-md-90 pb-sm-70 pb-xs-55 counter-bg">
    <div class="container">
                   
        <!-- Project Count Area Start -->
        <div class="row project-count">
            <div class="col-lg-3 col-md-6 col-sm-6 mt-25">
                <!-- counter start -->
                <div class="counter text-center">
                    <h3 class="counter-active">900</h3>
                    <p>Property Sale</p>
                </div>
                <!-- counter end -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-25">
                <!-- counter start -->
                <div class="counter  text-center">
                    <h3 class="counter-active">125</h3>
                    <p>Employee</p>
                </div>
                <!-- counter end -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-25">
                <!-- counter start --> 
                <div class="counter  text-center">
                    <h3 class="counter-active">220</h3>
                    <p>Happy Clients</p>
                </div>
                <!-- counter end -->
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-25">
                <!-- counter start --> 
                <div class="counter  text-center">
                    <h3 class="counter-active">850</h3>
                    <p>Property Available</p>
                </div>
                <!-- counter end -->
            </div>
        </div>
    <!-- Project Count Area End -->
                    
    </div>
</div><!-- About Section End -->
   
<!-- Latest Blog Section Start -->
<div class="latest-blog-section section pt-110 pt-md-90 pt-sm-70 pt-xs-60 pb-110 pb-md-90 pb-sm-70 pb-xs-60">
    <div class="container">
       
        
        <div class="row">
            <div class="section-title text-center col mb-30 mb-md-20 mb-xs-20 mb-sm-20">
                <h2>Latest Blog Post</h2>
                <p> one of the most popular real estate company all around USA. You <br> can find your dream property or build property with us</p>
            </div>
        </div>
        
        
        <div class="row">
            <div class="col-lg-4 col-md-6 mt-30">
                <!-- Single latest blog Start -->
                <div class="single-latest-blog">
                    <div class="latest-blog-image">
                        <a href="blog-details.html"><img src="<?php echo get_template_directory_uri() ?> /assets/images/blog/blog-s-01.jpg" alt=""></a>
                    </div>
                    <div class="latest-blog-contents">
                        <h4><a href="blog-details.html">Duplex Appartment Latest Design</a></h4>
                        <p><span>May 10, 2019</span> / <span>10 pm</span></p>
                        <p>Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete </p>
                        <a class="read-more" href="blog-details.html">Read More</a>
                    </div>
                </div><!-- Single latest blog End -->
            </div>
            <div class="col-lg-4 col-md-6 mt-30">
                <!-- Single latest blog Start -->
                <div class="single-latest-blog">
                    <div class="latest-blog-image">
                        <a href="blog-details.html"><img src="<?php echo get_template_directory_uri() ?> /assets/images/blog/blog-s-02.jpg" alt=""></a>
                    </div>
                    <div class="latest-blog-contents">
                        <h4><a href="blog-details.html">Real Estate Fesitval - 2018</a></h4>
                        <p><span>May 08, 2019</span> / <span>03 pm</span></p>
                        <p>Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete </p>
                        <a class="read-more" href="blog-details.html">Read More</a>
                    </div>
                </div><!-- Single latest blog End -->
            </div>
            <div class="col-lg-4 col-md-6 mt-30">
                <!-- Single latest blog Start -->
                <div class="single-latest-blog">
                    <div class="latest-blog-image">
                        <a href="blog-details.html"><img src="<?php echo get_template_directory_uri() ?> /assets/images/blog/blog-s-03.jpg" alt=""></a>
                    </div>
                    <div class="latest-blog-contents">
                        <h4><a href="blog-details.html">Latest Architectural Real Estate</a></h4>
                        <p><span>May 10, 2019</span> / <span>4 pm</span></p>
                        <p>Real estate festival is one of the famous feval for explain to you how all this mistaolt deand praising pain wasnad I will give complete </p>
                        <a class="read-more" href="blog-details.html">Read More</a>
                    </div>
                </div><!-- Single latest blog End -->
            </div>
        </div>
    </div>
</div><!-- Latest Blog Section End -->
















<?php get_footer(); ?>