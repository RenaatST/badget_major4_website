(function(){

	function init() {

		$(".navcups").click(function(e){e.preventDefault();scrollTo("cups");});
		$(".navweds").click(function(e){e.preventDefault();scrollTo("stappenplan");});
		$(".navapp").click(function(e){e.preventDefault();scrollTo("appstore");});
		$(".navpromo").click(function(e){e.preventDefault();scrollTo("promofilm");});
		$(".navprijs").click(function(e){e.preventDefault();scrollTo("prijs");});
		

		$("#terug").click(function(e){e.preventDefault();scrollTo("intro");});

		$("#txtzoek").on('change input', changeHandler);
		$("ol").remove();

		
 	}

 	function changeHandler() {

	    $.post("http://localhost/2014_2015/BADGES/index.php?page=search", $("form #txtzoek").serializeArray()).done(getSearchData);
	    scrollTo("formdiv");
	}

	function getSearchData(data){

		console.log(data);

	    $("ol").remove();
	    $("#formm").append($(data).filter("ol"));

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

