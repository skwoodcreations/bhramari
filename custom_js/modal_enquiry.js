  $(document).ready(function(e)
    {

    	$('.gateway_modal').click(function(e) {
   		
	   		 e.preventDefault();
    		var link_name=$(this).attr("href");

                if (document.cookie.indexOf('modal_shown=') >= 0) {
                 

                       window.location.href=link_name;
                
                } else {

                  $('#gatway_url').val(link_name);
                 $('#basicModal').modal('show');  
                 
                  
                }




   			
		
	});


    	  $(".gatway_modal_form").on('submit', (function(e)
        {
            e.preventDefault();

          

              
           // alert('Came');

            var thisform = $(this);
          //  console.log(thisform);

            $('.required-error1', thisform).remove();

             var gatway_name = $("#gatway_name").val();

             var gatway_email = $("#gatway_email").val();
           	 var gatway_number = $("#gatway_number").val();
       		 var gatway_url= $('#gatway_url').val();
            


            // console.log(name+email+phone+country+channel);


            if (gatway_name == "")
            {

            	  
              
                $("#gatway_name").after('<span class="form-description required-error1" style="text-align: right;color: #f10f0f;position: absolute;top: 35px;left: 25%;font-size:12px;">Required field.</span>');
    			
            }
            else
            {
                $("#gatway_name").after('');
            }



            if (gatway_email == "")
            {
                $("#gatway_email").after('<span class="form-description required-error1" style="text-align: right;color: #f10f0f;position: absolute;top: 35px;left: 25%;font-size:12px;">Required field.</span>');
            }
            else
            {
               $("#gatway_email").after('');
            }



            
            if (gatway_number == "")
            {
                $("#gatway_number").after('<span class="form-description required-error1" style="text-align: right;color: #f10f0f;position: absolute;top: 35px;left: 25%;font-size:12px;">Required field.</span>');
            }
            else
            {
                $("#gatway_number").after('');
            }




        

            if (gatway_number != "" && gatway_name != "" && gatway_email != "")
            {
              
               
                $.ajax({
                  url: "http://digitalnock.in/demos/bhramarimail/contact.php",
                    type: "POST",
                    data: new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data)
                    {
                            document.cookie = 'modal_shown=seen'; 
                        	window.location.href = gatway_url;
                       


                    }});
            

              



            }

              

       
        }));
     });