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

$(document).ready(function () {
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

});   

