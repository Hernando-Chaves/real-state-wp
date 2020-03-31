<?php get_header(); ?>

<!-- search overlay -->
<div class="search-overlay" id="search-overlay">

    <div class="search-overlay__header">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6 ml-auto col-4">
                    <!-- search content -->
                    <div class="search-content text-right">
                        <span class="mobile-navigation-close-icon" id="search-close-trigger"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="search-overlay__inner">
        <div class="search-overlay__body">
            <div class="search-overlay__form">
                <form action="#">
                    <input type="text" placeholder="Search">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End of search overlay -->



<!-- Breadcrumb -->
<div class="breadcrumb-area section" style="background-image: url(assets/images/bg/breadcrumb.jpg)">
    <div class="container">
        <div class="breadcrumb pt-75 pb-75 pt-sm-70 pb-sm-40 pt-xs-70 pb-xs-40">
            <div class="row">
                <div class="col">
                    <h2>Agent</h2>
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
<div class="our-agents-section section pb-110 pb-md-90 pb-xs-60 pb-sm-70 pt-80 pt-md-60 pt-sm-40 pt-xs-30">
    <div class="container">
        
        <div class="row">
            <?php echo rst_listar_agentes(-1); ?>

        </div>
        
        <!-- <div class="row pt-40">
            <div class="col">
                <ul class="page-pagination">
                    <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                    <li class="active"><a href="#">01</a></li>
                    <li><a href="#">02</a></li>
                    <li><a href="#">03</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
            </div>
        </div> -->
        
    </div>
    
</div><!-- Our Agents Section End -->    
 
<?php get_footer(); ?>
 