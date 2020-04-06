<?php acf_form_head(); ?>
<?php get_header(); ?>

<!--  search overlay -->
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
                    <h2>Add Properties</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">Add Properties</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!--// Breadcrumb -->
    
<!-- Page Conttent -->
<main class="page-content section"> 
   
    <!-- Featured Properites Start -->   
    <div class="add-properites-wrap pt-110 pt-110 pt-md-90 pt-sm-70 pt-xs-60 pb-110 pb-md-90 pb-sm-70 pb-xs-60">
        <div class="container">
            <?php require get_template_directory() . '/custom/config-acf.php' ?>
        </div>
        <!-- <form action="#">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="add-property-box step-1">
                            <div class="step-title mb-30">
                                <h3>Step # 1</h3>
                            </div>
                            <div class="basic-information-box">
                                <div class="information-title mb-30">
                                    <h4>Basic Information</h4>
                                </div>
                                <div class="basic-information-form">
                                    <div class="row">
                                        <div class="col-lg-9 col-md-7 col-12 mb-25">
                                            <div class="input-file">
                                                <label>Property Title</label>
                                                <input type="text" placeholder="Enter your title here">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-5 col-12  mb-25">
                                            <div class="input-file">
                                                <label>Price</label>
                                                <input type="text" placeholder="Price $">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-12  mb-25">
                                            <div class="information-text">
                                                <label>Property Text</label>
                                                <textarea placeholder="Write here"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="add-property-box step-2 pt-30">
                            <div class="step-title mb-30">
                                <h3>Step # 2</h3>
                            </div>
                            <div class="information-title mb-30">
                                <h4>Basic Information</h4>
                            </div>
                            <div class="details-information-box">
                                <div class="property-search-wrap">
                                    <div class="row row-17">

                                        <div class="col-lg-6 col-md-6 col-12 mb-25">
                                            <label>Location</label>
                                            <select class="nice-select">
                                                <option>Location One</option>
                                                <option>Location Two</option>
                                                <option>Location Three</option>
                                                <option>Location Four</option>
                                            </select>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12 mb-25">
                                            <label>Sub-Location</label>
                                            <select class="nice-select">
                                                <option>Sub-location here</option>
                                                <option>Location Two</option>
                                                <option>Location Three</option>
                                                <option>Location Four</option>
                                            </select>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12 mb-25">
                                            <label>Property Type</label>
                                            <select class="nice-select">
                                                <option>Property Type</option>
                                                <option>Types One</option>
                                                <option>Types Two</option>
                                                <option>Types Three</option>
                                            </select>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12 mb-25">
                                            <label>Status</label>
                                            <select class="nice-select">
                                                <option>Sale</option>
                                                <option>Sale one</option>
                                                <option>Sale two</option>
                                                <option>Sale(sqft)</option>
                                            </select>
                                        </div>

                                    </div>
                                    
                                    <div class="row row-10">
                                    
                                        <div class="col-lg-3 col-md-6 col-12 mb-25">
                                            <label>No. of Beedroom</label>
                                            <select class="nice-select">
                                                <option>No. of Beedroom</option>
                                                <option>1 Beedroom</option>
                                                <option>2 Beedroom</option>
                                                <option>3 Beedroom</option>
                                                <option>4 Beedroom</option>
                                            </select>
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-12 mb-25">
                                            <label>No. of Bathroom</label>
                                            <select class="nice-select">
                                                <option>No. of Bathroom</option>
                                                <option>1 Bathroom</option>
                                                <option>2 Bathroom</option>
                                                <option>3 Bathroom</option>
                                                <option>4 Bathroom</option>
                                            </select>
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-12 mb-25">
                                            <label>No. of Garage</label>
                                            <select class="nice-select">
                                                <option>No. of Garage</option>
                                                <option>1 Garage</option>
                                                <option>2 Garage</option>
                                                <option>3 Garage</option>
                                                <option>4 Garage</option>
                                            </select>
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-12 mb-25">
                                            <label>Area</label>
                                            <input type="text" placeholder="Area (quft)">
                                        </div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                        <div class="add-property-box step-3 pt-30">
                            <div class="step-title">
                                <h3>Step # 3</h3>
                            </div>
                            <div class="image-upload-inner mt-30">
                                <div class="information-title mb-25">
                                    <h4>Image gallery</h4>
                                </div>
                                <div class="image-upload-box">
                                    <label class="custom-file-upload">
                                        <span><i class="fa fa-folder-open"></i> Browse Images</span> <input type="file">
                                    </label>
                                </div>
                            </div>
                            <div class="video-upload-inner mt-30">
                                <div class="information-title mb-15">
                                    <h4>Video Presentation</h4>
                                </div>
                                <div class="video-upload-box">
                                    <label class="custom-video-upload">
                                        <span>Add Video</span> <input type="file">
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="add-property-box step-4 pt-30">
                            <div class="row">
                                <div class="col-lg-4 col-md-5 col-12">
                                    <div class="property-features mt-30">
                                        <div class="information-title mb-30">
                                            <h4>Property Features</h4>
                                        </div>
                                    </div>
                                    <div class="features-box">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-6">
                                                <div class="feature-check box1">
                                                    <input id="remember-1" type="checkbox">
                                                    <label for="remember-1">Air Conditioning</label>
                                                </div>
                                                <div class="feature-check box2">
                                                    <input id="remember-2" type="checkbox">
                                                    <label for="remember-2">Bedding</label>
                                                </div>
                                                <div class="feature-check box3">
                                                    <input id="remember-3" type="checkbox">
                                                    <label for="remember-3">Balcony</label>
                                                </div>
                                                <div class="feature-check box4">
                                                    <input id="remember-4" type="checkbox">
                                                    <label for="remember-4">Cable TV</label>
                                                </div>
                                                <div class="feature-check box5">
                                                    <input id="remember-5" type="checkbox">
                                                    <label for="remember-5">Internet</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-md-6 col-6 pd-left">
                                                <div class="feature-check box6">
                                                    <input id="remember-6" type="checkbox">
                                                    <label for="remember-6">Parking</label>
                                                </div>
                                                <div class="feature-check box7">
                                                    <input id="remember-7" type="checkbox">
                                                    <label for="remember-7">Lift</label>
                                                </div>
                                                <div class="feature-check box8">
                                                    <input id="remember-8" type="checkbox">
                                                    <label for="remember-8">Pool</label>
                                                </div>
                                                <div class="feature-check box9">
                                                    <input id="remember-9" type="checkbox">
                                                    <label for="remember-9">Dishwasher</label>
                                                </div>
                                                <div class="feature-check box10">
                                                    <input id="remember-10" type="checkbox">
                                                    <label for="remember-10">Toaster</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-7 col-12">
                                    <div class="place-map">
                                        <div class="information-title mt-30 mb-30">
                                            <h4>Place on Map</h4>
                                        </div>
                                        <div class="embed-responsive embed-responsive-21by9">
                                            <div id="googleMap-2" class="embed-responsive-item googleMap-2" data-lat="40.730610" data-Long="-73.935242"></div>
                                        </div>
                                    </div>
                               </div>
                            </div>
                        </div>
                        <div class="add-property-submit mt-60">
                            <button type="submit">ADD PRPPERTY</button>
                        </div>
                    </div>
                </div>
            </div>
        </form> -->
    </div><!-- Featured Properites End -->  

</main>
<!--// Page Conttent -->
<?php get_footer(); ?>
