(function($){
 	$('#propiedadList > div').addClass('active');
	$('.filtroProp').on('click',function(){
		var estado = $(this).attr('href');
		$('#propiedadList > div').removeClass('active');
		$(estado).addClass('active').fadeIn('slow');
		return ;
	});
	$('.todos').on('click',function(){
		$('#propiedadList > div').addClass('active').fadeIn('slow');
	});
	    var swiper = new Swiper('.swiper-container', {
	      navigation: {
	        nextEl: '.swiper-button-next',
	        prevEl: '.swiper-button-prev',	        
	      },
	      autoplay :{
	      	delay: 3000
	      },
	      pagination : {
	      	el : '.swiper-pagination'
	      }
	    });
})(jQuery);