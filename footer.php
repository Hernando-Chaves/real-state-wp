<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package real_s
 */

?>

	</div><!-- #content -->


</div><!-- #page -->

<!-- Footer Section Start --> 
<footer class="footer-section section ">
   
    <div class="footer-top footer-bg pt-70 pt-md-50 pt-sm-30 pt-xs-20 pb-100 pb-md-90 pb-sm-70 pb-xs-60">
        <div class="container">
           <div class="row">
                <div class="col-coustom-3 col-md-6 col-lg-3 col-12 mt-40">
                    <!-- Footer-widget Start -->
                    <div class="footer-widget">
                        <div class="footer-title">
                            <h3>About</h3>
                        </div>
                        <div class="footer-info">
                            <p>Ortiz is the best and popular real estate to you how all this mistaolt cing pleasure and praising ained wasnad pain was prexplain</p>
                            <div class="newsletter-box">
                                
                                <form id="mc-form" class="mc-form footer-newsletter" >
                                    <input id="mc-email" type="email" autocomplete="off" placeholder="Email for Newsletter" />
                                    <button id="mc-submit"><i class="fa fa-paper-plane"></i></button>
                                </form>
                            </div>
                            
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts text-centre">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div><!-- mailchimp-alerts end -->
                        </div>   
                    </div><!-- Footer-widget End -->
                </div>
                <div class="col-coustom-3 col-md-6 col-lg-3 col-12 mt-40">
                    <!-- Footer-widget Start -->
                    <div class="footer-widget">
                        <div class="footer-title">
                            <h3>Popular Post</h3>
                        </div>
                        <div class="footer-info">
                            <div class="single-list">
                                <h4>Duplex Villa Design</h4>
                                <p>Lorem ipsum dolor sit amet, tur acinglit sed do eius </p>
                            </div>
                            <div class="single-list">
                                <h4>Duplex Villa Design</h4>
                                <p>Lorem ipsum dolor sit amet, tur acinglit sed do eius </p>
                            </div>
                        </div>   
                    </div><!-- Footer-widget End -->
                </div>
                <div class="col-coustom-3 col-md-6 col-lg-3 col-12 mt-40">
                    <!-- Footer-widget Start -->
                    <div class="footer-widget">
                        <div class="footer-title">
                            <h3>Quick Link</h3>
                        </div>
                        <div class="footer-info">
                            <ul class="footer-list">
                                <li><a href="service.html">Sercives</a></li>
                                <li><a href="agent.html">Agent</a></li>
                                <li><a href="properties.html">Properties</a></li>
                                <li><a href="features.html">Features</a></li>
                                <li><a href="blog.html">From Blog</a></li>
                                <li><a href="contact-us.html">Contact</a></li>
                            </ul>
                        </div>   
                    </div><!-- Footer-widget End -->
                </div>
                <div class="col-coustom-3 col-md-6 col-lg-3 col-12 mt-40">
                    <!-- Footer-widget Start -->
                    <div class="footer-widget">
                        <div class="footer-title">
                            <h3>Contact Us</h3>
                        </div>
                        <div class="footer-info">
                            <ul class="footer-list">
                                <li>
                                    <div class="contact-text">
                                        <i class="fas fa-map-marker "></i> 
                                        <p>256, 1st AVE, Manchester <br>125 , Noth England</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-text">
                                        <i class="fas fa-phone"></i> 
                                        <p>
                                            <span>Telephone : <a href="tel:1234566789"> +88 (012) 356 958 45</a></span>
                                            <span>Telephone : <a href="tel:1234566789"> +88 (012) 356 958 45</a></span>
                                        </p>
                                        
                                    </div>
                                </li>
                                <li>
                                    <div class="contact-text">
                                        <i class="fas fa-envelope"></i>
                                        <p>
                                            <span>Email : <a href="mailto:info@example.com">info@example.com</a></span>
                                            <span>Web : <a href="https://hasthemes.com/">www.example.com</a></span>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>   
                    </div><!-- Footer-widget End -->
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                   <a href="<?php echo esc_url(__('https://bogotawebcompany.com','real_s')) ?>">
                    <?php printf( esc_html__( 'Diseño y Desarrollo por %s', 'real_s' ), 'Hernando J. Chaves' ); 
                    ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
</footer><!-- Footer Section End -->  
    


<?php wp_footer(); ?>
</body>

</html>
