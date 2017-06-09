$(document).ready(function()
{
	//OWL sliders
	var homeBanners = $("#home-banners");
	homeBanners.owlCarousel({
		singleItem : true,
		transitionStyle : "fadeUp",
		autoPlay: true,

		navigation : true,
		navigationText: [
			"<i class='fa fa-angle-double-left'></i>",
			"<i class='fa fa-angle-double-right'></i>"
			]
	});

	$('#home-banners').hover(function(){
		$(this).addClass('userHoverBanner');
	}, function(){
		$(this).removeClass('userHoverBanner');
	});

	/*============================= Animations ================================*/

	//all
	$(".content a").hover(function(){
		$(this).addClass('animated bounceIn');
	}, function(){
		$(this).removeClass('animated bounceIn');
	})

	$(".homeBtn").hover(function(){
		$(this).find('.fa').addClass('animated rotateIn');
	}, function(){
		$(this).find('.fa').removeClass('animated rotateIn');
	})

	$(".headerBtn i.fa").hover(function(){
		$(this).addClass('animated swing');
	}, function(){
		$(this).removeClass('animated swing');
	})


	$('.hover').hover(function(){
    	$(this).find('.show-on-hover').removeClass('hide');
    }, function(){
        $(this).find('.show-on-hover').addClass('hide');
    });

});