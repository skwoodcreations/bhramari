$(document).ready(function(e)
{


    $("#bhramari-form").on('submit', (function(e)
    {
        
        e.preventDefault();
      //  alert('came');
        var thisform = $(this);
        

        $('.required-error', thisform).remove();

        var bhramari_name = $("#bhramari_name").val();
        var bhramari_email = $("#bhramari_email").val();
        var bhramari_phone = $("#bhramari_phone").val();
        

        

        // console.log(bhramari_name+bhramari_email+bhramari_phone+country+channel);


        if (bhramari_name == "")
        {
            $("#bhramari_name").after('<span class="form-description required-error">Required field.</span>');
        }
        else
        {
            $("#bhramari_name").parent().find('.required-error').remove();
        }



        if (bhramari_email == "")
        {
            $("#bhramari_email").after('<span class="form-description required-error">Required field.</span>');
        }
        else
        {
            $("#bhramari_email").parent().find('.required-error').remove();
        }




        if (bhramari_phone == "")
        {
            $("#bhramari_phone").after('<span class="form-description required-error">Required field.</span>');
        }
        else
        {
            $("#bhramari_phone").parent().find('.required-error').remove();
        }




        if (bhramari_name != "" && bhramari_email != ""  && bhramari_phone != "" )
        {


            $.ajax(
            {
                url: "http://digitalnock.in/demos/bhramarimail/contact_mail.php",
                type: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function(data)
                {
 alert(data);
                      
                      //location.reload();
                    $("#bhramari_name").val("");
                    $("#bhramari_email").val("");
                    $("#bhramari_phone").val("");
                     $("#bhramari_message").val("");
                    $("#bhramari_subject").val("");

                
                }
            });

        }



    }));
});