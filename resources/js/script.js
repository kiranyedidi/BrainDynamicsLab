$(document).ready(function() {
	// adding justify attribute to P and li elements
	
	$("p").attr("align","justify");
	$("li").attr("align","justify");
	
	$(window).scroll(function() {
		if($(window).scrollTop()>200){
			$('.navbar').addClass('shrink');
		}else{
			$('.navbar').removeClass('shrink');
		}	
	});
});