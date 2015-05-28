(function(){

	function init() {

		$("#clickheidi").click(function(e){
			e.preventDefault();
			scrollTo("textheidi");
		});

		$("#clickmarah").click(function(e){
			e.preventDefault();
			scrollTo("textmarah");
		});

		$("#worknav").click(function(e){
			scrollTo("works");
		});

		
 	}

 	function scrollTo(id) {
        $('html, body').animate({ scrollTop: $('#' + id).offset().top - 70}, 'normal');
        return false;
    }

 	function goTo(id){
	    $("html,body").animate({scrollTop:$("#"+id).offset().top});
	}

	init();
  
})();

