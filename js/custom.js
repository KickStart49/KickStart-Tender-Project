

$(document).ready(function(){

	

		var docform = document.getElementById('doc-validation');
		docform.addEventListener('submit', function(event) {
	        if (docform.checkValidity() === false) {
	         
	          	$(".UploadDocumentMessage").addClass("alert-danger");
				$(".UploadDocumentMessage").html("<i class='fa fa-exclamation-circle'> </i> No document has been choosen");
				$(".UploadDocumentMessage").fadeIn(1000);
				$(".UploadDocumentMessage").fadeOut(3000);
				event.preventDefault();
				event.stopPropagation();
	        }else{

	        	$(".UploadDocumentMessage").addClass("alert-success");
				$(".UploadDocumentMessage").html("<i class='fa fa-exclamation-circle'> </i> Document Submitted");
				$(".UploadDocumentMessage").fadeIn(1000);
				$(".UploadDocumentMessage").fadeOut(3000);
					


	        }
	        docform.classList.add('was-validated');
     	 }, false);
		
		var tenderform = document.getElementById('tender-validation');
		tenderform.addEventListener('submit', function(event) {
	        if (tenderform.checkValidity() === false) {
	         
	          	$(".UploadTenderMessage").addClass("alert-danger");
				$(".UploadTenderMessage").html("<i class='fa fa-exclamation-circle'> </i>Error occurs while uploading. Ensure that you filled out <b>All Fields</b> correctly");
				$(".UploadTenderMessage").fadeIn(1000);
				$(".UploadTenderMessage").fadeOut(5000).delay(2000);
				event.preventDefault();
				event.stopPropagation();
	        }
	        tenderform.classList.add('was-validated');
     	 }, false);

		
	

	
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
	    
	    $('.collapse').collapse();
	    
	}

	
	function collasidebar(){}

	width_resize();
	dropdownEffects();
	collapseNavTabEffect();
	collasidebar();
	manageDocuments();

	$('#myTable').DataTable();


});
var editform = document.getElementById('edit-validation');
		editform.addEventListener('submit', function(event) {
	        if (editform.checkValidity() === false) {
	         
	          	$(".UploadTenderMessage").addClass("alert-danger");
				$(".UploadTenderMessage").html("<i class='fa fa-exclamation-circle'> </i>Error occurs while updating changes. Ensure that you filled out <b>All Fields</b> correctly");
				$(".UploadTenderMessage").fadeIn(1000);
				$(".UploadTenderMessage").fadeOut(5000).delay(2000);
				event.preventDefault();
				event.stopPropagation();
	        }
	        editform.classList.add('was-validated');
     	 }, false);