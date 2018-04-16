(function($, root, undefined) {

    $(function() {

        'use strict';

        // DOM ready, take it away



    });

})(jQuery, this);

jQuery(document).ready(function($) {

    
	// Define function to fire slick
    function fire_slick_slider(selector, slidesToShow1, slidesToShow2, slidesToShow3, slidesToShow4){
	    $(selector).slick({
	        dots: false,
	        arrows: true,
	        infinite: false,
	        speed: 300,
	        slidesToShow: slidesToShow1,
	        slidesToScroll: 2,
	        responsive: [{
	                breakpoint: 1024,
	                settings: {
	                    slidesToShow: slidesToShow2,
	                    slidesToScroll: 3,
	                    infinite: true,
	                    dots: false,
	                    arrows: true,
	                }
	            },
	            {
	                breakpoint: 600,
	                settings: {
	                    slidesToShow: slidesToShow3,
	                    slidesToScroll: 2
	                }
	            },
	            {
	                breakpoint: 480,
	                settings: {
	                    slidesToShow: slidesToShow4,
	                    arrows: true,
	                    slidesToScroll: 1
	                }
	            }
	        ]
	    });
	}

	// Fire Slick Slider - Student Artwork
	fire_slick_slider('.responsive', 4, 3, 2, 1);

	// Fire Slick Slider 
	fire_slick_slider('.responsive_visual_inquiry', 3, 3, 2, 1);



    // Count up numbers
    function count_it_up(target, param1, param2, param3, param4) {
        var options = {  
            useEasing: true,
              useGrouping: true,
              separator: ',',
              decimal: '.',
        };
        var demo = new CountUp(target, param1, param2, param3, param4, options);
        if (!demo.error) {  
            demo.start();
        } else {  
            console.error(demo.error);
        }
    }
    if ($('body').hasClass('home')) {    	        
        setTimeout(function() {
        	$('.home_hero').css('opacity', 1);        	
            count_it_up('n1', 0, 100, 0, 1);                        
        }, 900);
        setTimeout(function() {
            count_it_up('n2', 0, 86, 0, 1); 
        }, 1200);
        setTimeout(function() {
            count_it_up('n3', 0, 80, 0, 1);
        }, 1800);
    }

    // Horizontal align
    jQuery.fn.horizontalAlign = function () {
	    return this
	        .css({
	        	"left":'-'+($(this).width())/2 + 'px',
	        	"margin-left": '50%'
	    } );
	};

	$(window).on('load resize', function () {
		if ($('body').hasClass('home')) {
			if($(window).width() < 992) {
				$('.stats .counter').each(function(){
					$(this).horizontalAlign();
				});
			}
			setTimeout(function() {
	        	$('.n1, .n2, .n3').css('opacity', 1);                       
	        }, 100);
		}
	});

	// $(window).on('load', function () {
		
	// });

});

// SEARCH 
jQuery(document).ready(function($){

	function swp_seacrh() {

		$('#swp_result').html('<img style="display:block;margin: 100px auto;" src="../../wp-content/themes/html5blank-stable/img/ss_loader_dark_blue.svg">');
		$('.search_item').removeClass('fade_it_in');

		var formData = $('#swp_form').serialize();
		$.ajax({
		    type        : 'POST', // define the type of HTTP verb we want to use (POST for our form)
		    url         : '../../wp-content/themes/html5blank-stable/process-swp.php', // the url where we want to POST
		    data        : formData, // our data object
		    dataType    : 'json', // what type of data do we expect back from the server
		    encode      : true
		})				
		    // using the done promise callback
		    .done(function(data) {
		        console.log(data);
		        setTimeout(function() {
		            $('#swp_result').html(data.message);
		        }, 500);	
		        setTimeout(function() {
		            $('.search_item').addClass('fade_it_in');
		        }, 1000);	        
		    })
		    // using the fail promise callback
		    .fail(function(data) {
		        // show any errors
		        console.log(data);
		    });
		event.preventDefault();
	}

	// Perform search on submit ===========
	$('#swp_form').submit(function(event){
		swp_seacrh();
	});

	// Perform search on radio button and checkbox change ===========
	$('.cat_radio_btn, .tag_radio_btn').change(function(){
		swp_seacrh();		
	});

	// Get URL query
	function getParameterByName(name, url) {
	    if (!url) url = window.location.href;
	    name = name.replace(/[\[\]]/g, "\\$&");
	    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
	        results = regex.exec(url);
	    if (!results) return null;
	    if (!results[2]) return '';
	    return decodeURIComponent(results[2].replace(/\+/g, " "));
	}
	var preselected_cat = getParameterByName('show');

	// Preselect category based on URL query value ===========
	$("#"+preselected_cat).attr("checked", "").change();


	
	// Fire Modal
	$('body').on('click', '.fire_modal', function(){
		$('#modal6').modal('show');
	});
	$('.video_modal').on('hidden.bs.modal', function (e) {
  		// $('.video-js')[0].player.pause();
  		$('video-js').each(function(){
  			$(this)[0].player.pause();
  		});
	});







	
});

