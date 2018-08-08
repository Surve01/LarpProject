/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


     

                  $(document).ready(function(){
                      
    $('#testp').click(function(){
        
        $.ajax({
                       // contentType: "application/json",
        type: 'get',
        url: 'testPHPretrun.php',
        dataType: 'json',
       
    //data: JSON.stringify(jsonArray),
      // data: jsonArray,
        success: function(result){
      // alert(jsonArray);
        alert(JSON.stringify(result));
          var json1 = result.peter;
          alert(result.peter);
          $('#testp').text(json1);
    //        $('#id1').html('yay!!!');
          

    },
   error: function (xhr, ajaxOptions, thrownError) {
        alert(xhr.status);
        alert(thrownError);
      //  alert(request.responsetext);
      //  alert('FAIL');
   }
     });
 });
                  });
           