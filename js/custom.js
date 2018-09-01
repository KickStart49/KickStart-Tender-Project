  (function() {
    'use strict';
    window.addEventListener('load', function() {
      var form = document.getElementById('needs-validation');
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
         
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    }, false);
  })();

$(document).ready(function(){

	$(".ViewTender").click(function(){ 
	     var formid = $(this).data('id');
	     var data = {
					'formid': formid,
					};
					 var ajaxurl = "ViewTender.php";
					jQuery.post(ajaxurl, data, function(response) {
						$('.tenderviewtable').html(response);
						
					});
					$('#ViewTender').modal('show');
	     
	     
   });

	$(".deletetender").click(function(){ 

	     var formid = $(this).data('id');
	     var data = {
					'formid': formid,
					};
					 var ajaxurl = "DeleteTender.php";
					jQuery.post(ajaxurl, data, function(response) {
						$('.tenderviewtable').html(response);
						
					});
					$(this).parent().parent().fadeOut(1000);
					
	     
	     
   });
	$(".downloadtender").click(function(){ 

	     var download = $(this).data('download');
	     var data = {
					'download': download,
					};
					 var ajaxurl = "download.php";
					jQuery.post(ajaxurl, data, function(response) {
						
					});
					
					
	     
	     
   });
	
	$(".search").click(function(){
		var formid = $("#searchTender").val();
	     var data = {
					'formid': formid,
					};
					 var ajaxurl = "edittender.php";
					jQuery.post(ajaxurl, data, function(response) {
						$('.doedit').html(response);
						
					});
		$('.doedit').slideDown(1000);		
	});

	function manageDocuments(){

		var arr = new Array();
	    $('.select').on('click',function(){
	      
		   	var val = $(this).val();

	        var r1= '<input type="button" class="form-control selected list-group-item list-group-item-action"'; 
	        var r2 = ' value = "';
	        var r3 = val;
	        var r4 = '">';
	        var r7 = r1+r2+r3+r4;
	        $(".list2").append(r7);
	        var r5 = 'documents/';
	        var r6 = r3;
	        var r8 = r5+r6;      
	        var variableToSend = r8;
	        arr.push(variableToSend);
	        $('.selected').on('click',function(){   
	          var v2 = $(this).val();
	          var v1 = 'documents/';
	          var v = v1+v2;
	          $(this).remove();
	          for(var i = 0; i < arr.length - 1; i++) {
	            if(arr[i] == v) {
	              arr.splice(i, 1);
	            }
	          }
	          var jsondata = JSON.stringify(arr);
	          document.getElementById("docarr").value = jsondata; 
         	});   
        	var jsondata = JSON.stringify(arr);
        	document.getElementById("docarr").value = jsondata; 
        });
	}

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
	manageDocuments();

	$('#myTable').DataTable();


});