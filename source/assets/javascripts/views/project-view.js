var RT = RT || {};
RT.VIEWS = RT.VIEWS || {};
RT.VIEWS.project = (function(window){

	var project = {};

	project.thumbSlide = function(){

		function imageFade (node) {
			$(node).fadeIn(500);
			$(".loading-image").remove();
		};

		function onThumbClick(node){

			var url = $(node).attr( "href" ),
				content = "<img class='potrait' src='" + url +"'/>";

			$(node).append("<p class='right loading-image' >NOW LOADING</p>");

			$(".gallery-image").html("").fadeOut(200,function() {
				$(".gallery-image").append(content).imagesLoaded( imageFade(this) );
			});
		}

		$( ".gallery-thumbs>li>a" ).click( function ( e ) {
			e.preventDefault();
			onThumbClick(this);
		});
	}


	$(document).ready(function(){
		project.thumbSlide();
	});

	return project;

}(window));


