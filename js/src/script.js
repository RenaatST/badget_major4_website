(function(){

	function init() {

		$(".navcups").click(function(e){e.preventDefault();scrollTo("cups");});
		$(".navweds").click(function(e){e.preventDefault();scrollTo("stappenplan");});
		$(".navapp").click(function(e){e.preventDefault();scrollTo("appstore");});
		$(".navpromo").click(function(e){e.preventDefault();scrollTo("promofilm");});
		$(".navprijs").click(function(e){e.preventDefault();scrollTo("prijs");});

		$("#terug").click(function(e){e.preventDefault();scrollTo("intro");});




		
 	}


 	function scrollTo(id) {
        $('html, body').animate({ scrollTop: $('.' + id).offset().top - 30}, 'normal');
        return false;
    }

 	function goTo(id){
	    $("html,body").animate({scrollTop:$("."+id).offset().top});
	}

	init();
  
})();

