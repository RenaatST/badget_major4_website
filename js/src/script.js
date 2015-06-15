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

		var s = skrollr.init({          
            mobileCheck: function() {
                //hack - forces mobile version to be off
                return false;
            }
        });

        if(!Modernizr.svg) {
	        $('img[src*="svg"]').attr('src', function() {
	            return $(this).attr('src').replace('.svg', '.png');
	        });
	    }
	    
 	}

 	function changeHandler() {

	    $.post("http://localhost/2014_2015/BADGES/index.php?page=search", $("form #txtzoek").serializeArray()).done(getSearchData);
	    scrollTo("formdiv");



	    
	}

	function getSearchData(data){

		//console.log(data);


	    $("ol").remove();
	    $("#formm").append($(data).filter("ol"));




	    var countlis = $("ol li").length;

	    $("ol").addClass("slideInDown");
	    $(".cups").css("margin-top", "250px");

	    console.log(countlis);

	    switch(countlis) {
		    case 0:
		        $("#geenbekers").text("Geen bekers gevonden met de naam: " + $("form #txtzoek").val());
		        break; 

		    case 2:
		        $("ol").addClass("tweecup");
		        break;
		    case 3:
		        $("ol").addClass("driecup");
		        break;
		    case 4:
		        $("ol").addClass("viercup");
		        break;
		    case 5:
		        $("ol").addClass("vijfcup");
		        break;
		    case 6:
		        $("ol").addClass("zescup");
		        break;
		    case 7:
		        $("ol").addClass("zevencup");
		        break;
		    case 8:
		        $("ol").addClass("achtcup");
		        break;
		    default:
		        $("ol").addClass("eencup");
		}

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

