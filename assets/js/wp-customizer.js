(function($){
	// Slider section
	wp.customize('slider1_backgroud_color', function(value){
		value.bind(function(value){
			$('.hero-area').css('color:', newval);
		});
	});
	wp.customize('slider1_heading', function(value){
		value.bind(function(value){
			$('.slider1-heading').html(newval);
		});
	});
	wp.customize('slider1_heading2', function(value){
		value.bind(function(newval){
			$('.hero-content span').html(newval);
		});
	});
	wp.customize('slider1_description', function(value){
		value.bind(function(newval){
			$('.hero-content h4').html(newval);
		});
	});
	wp.customize('slider1_description2', function(value){
		value.bind(function(newval){
			$('.hero-content p').html(newval);
		});
	});
	wp.customize('slider1_button', function(value){ // contact us text
		value.bind(function(newval){
			$('.hero-content a').html(newval);
		});
	});

	// About Section (Hero)
	wp.customize('hero_backgroud_color', function(value){
		value.bind(function(newval){
			$('.about-area').css('color', newval);
		});
	});
	wp.customize('hero_heading', function(value){
		value.bind(function(newval){
			$('.about-scetion-title').html(newval);
		});
	});
	wp.customize('hero_description', function(value){
		value.bind(function(newval){
			$('.about-description').html(newval);
		});
	});

	// Services Section
	wp.customize('services_setting_section', function(value){
		value.bind(function(newval){
			$('.testOneServices').html(newval);
		});
	});
	
	
})(jQuery);