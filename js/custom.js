$(document).ready(function(){
	
	function width_resize(){

		var sidebar_width = $('.getSidebarWidth').width();
		$('.nav-link').css('width', (sidebar_width + 12));		    
		return false;
	}

	function dropdownEffects(){

	    $(".dropdown").click(            
	        function() {
	            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
	            $(this).toggleClass('open');        
	        },
	        function() {
	            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("4000");
	            $(this).toggleClass('open');       
	        }
	    );
	}

	function collapseNavTabEffect(){

	    $('.collapse').on('show.bs.collapse', function () {
	      $(this).parent().css({ 'background-color' : '#19212B'});
	    });
	    $('.collapse').on('hidden.bs.collapse', function () {
	      $(this).parent().css({ 'background-color' : '#2B323C'});
	    });
	    $(".sub-menu a").on("click", function(){
	     $(".nav").find(".active").removeClass("active");
	     $(this).parent().addClass("active");
	    });
	    $('.collapse').collapse();
	    $('.1').parent().addClass("active");
	}
	
	function collasidebar(){}

	width_resize();
	dropdownEffects();
	collapseNavTabEffect();
	collasidebar();
	$('#myTable').DataTable();
});