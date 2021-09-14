/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
*/

( function( $ ) {

    /*
    $( "#request_form_toggle" ).toggle(function() {
            $("#request_form_slider").animate({ right: "0"}, 1000);
        }, function() {
            $("#request_form_slider").animate({ right: "-275px"}, 1000);
    });
    
    $('#slider_close').click( function() {
        $("#request_form_slider").animate({ right: "-275px"}, 1000);
    });
    */
    
     $('.carousel').carousel({
        interval: 6000
    });
    
    $('.carousel-text p a').addClass('block-button');
    
    $(document).on("scroll", function() {
	    if ($(document).scrollTop() > 300) {
		    $("header").addClass("shrunk");
		} else {
			$("header").removeClass("shrunk");
		}
	});
	
    $("div.programs-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.programs-tab>div.programs-tab-content").removeClass("active");
        $("div.programs-tab>div.programs-tab-content").eq(index).addClass("active");
    });
    
    
    
} )( jQuery );

