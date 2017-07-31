

$(function(){

	$(".menu nav a").click(function () { 
	    elementClick = $(this).attr("href");
	    destination = $(elementClick).offset().top;
        $('body, html').animate( { scrollTop: destination }, 1100 );
	    return false;
    });
	
	$('.call_back_href').click(function(){
		$('.popup_callback').fadeIn();
		$('.bg_popup').fadeIn();

		$('.bg_popup, .krest').click(function(){
			$('.popup_callback').fadeOut();
			$('.bg_popup').fadeOut();
		});
	});	

	$('.call_back_btn').click(function(){
		$('.popup_callback').fadeIn();
		$('.bg_popup').fadeIn();

		$('.bg_popup, .krest').click(function(){
			$('.popup_callback').fadeOut();
			$('.bg_popup').fadeOut();
		});
	});

	$('.open_otziv').click(function(){
		$('.popup_otziv').fadeIn();
		$('.bg_popup').fadeIn();

		$('.bg_popup, .krest').click(function(){
			$('.popup_otziv').fadeOut();
			$('.bg_popup').fadeOut();
		});
	});

	$(window).scroll(function(){
		if($(window).scrollTop() > $('.menu_wrap').offset().top){
			$('.menu').addClass('active');
		}
		else{
			$('.menu').removeClass('active');
		}
	});

	$('.otzivi_carousel').slick({
		dots: true
	});

	$('.fancy').fancybox();

});
















