<?php get_header(); ?>


<!-- Page Conttent -->
<main class="page-content section"> 
    <!-- Featured Properites Start -->   
    <div class="featured-properites-section section pt-50 pt-md-90 pt-sm-70 pt-xs-60 pb-110 pb-md-90 pb-sm-70 pb-xs-60">
        <div class="container">

            <div class="row">
                <div class="col">
                    <ul class="properties-list nav justify-content-end" role="tablist">
                    	<li class="liFiltro">
                     	  	<a class="todos" href="#" role="tab" data-toggle="tab">Todos</a>
                     	 </li>
                    	<?php 
                    		$estados = get_terms(['taxonomy'=> 'estado']);
                    		foreach($estados as $estado):
                    	?>
                     	  <li class="liFiltro">
                     	  	<a class="filtroProp" href="#<?php echo $estado->slug ?>" role="tab" data-toggle="tab"><?php echo $estado->name ?></a>
                     	  </li>
                   	   <?php endforeach; ?>
                    </ul>
                </div>
            </div>



            
            <div id="propiedadList" class="tab-content">
                 <?php 
                 	foreach($estados as $estado):
                 		echo  rst_filtra_propiedades(4,$estado->slug);
                 	endforeach;
                 ?>
            </div>
            
            
           <!--  <div class="row pt-40">
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
    </div><!-- Featured Properites End -->  

</main>
<!--// Page Conttent -->
 


























<?php get_footer(); ?>