var RT = RT || {};
RT.VIEWS = RT.VIEWS || {};
RT.VIEWS.project = (function(window){

	var project = {};

	project.thumbSlide = function(){

		function imageFade (node) {
			$(node).fadeIn(500);
			$(".loading_image").remove();
		};

		function onThumbClick(node, content){

			e.preventDefault();

			$(node).append("<p class='right loading_image' >NOW LOADING</p>");

			$(".gallery_image").html("").fadeOut(200,function() {
				$(".gallery_image").append(content).imagesLoaded( imageFade(node) );
			});
		}

		$( ".gallery_thumbs>li>a" ).click( function ( e ) {

			var url = $( this ).attr( "href" );
			var img = $("<img />").attr('src', url);

			onThumbClick(this, img);

		});

		$( ".video_thumbs>li>a" ).click( function ( e ) {

			var url = $( this ).attr( "href" );
			var vid = $("<iframe />").attr({src: url, width: '940', height: '540',});

			onThumbClick(this, vid);
		});
	}


	$(document).ready(function(){
		project.thumbSlide();
	});

	return project;

}(window));


