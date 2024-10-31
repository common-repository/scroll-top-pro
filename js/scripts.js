(function($){

	$(document).ready(function(){
		$(window).scroll(function(){

			var gotop = $(window).scrollTop();

			if( gotop > 100){
				$(".top-scroll").fadeIn();
			}else{
				$(".top-scroll").fadeOut();
			}
		});

		$(".top-scroll").click(function(){

			$("html, body").animate({'scrollTop' : 0}, 600);

			return false;
		});
	});

})(jQuery)