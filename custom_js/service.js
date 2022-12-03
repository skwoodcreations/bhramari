$(document).ready(function(e)
{


    $("#product_form").on('submit', (function(e)
    {
        
        e.preventDefault();
      //  alert('came');
        var thisform = $(this);
        

        $('.required-error1', thisform).remove();

        var name = $("#modal_contact_name").val();
        var email = $("#modal_contact_email").val();
        var phone = $("#modal_contact_phone").val();

       


        // console.log(name+email+phone+country+channel);


        if (name == "")
        {
            $("#modal_contact_name").after('<span class="form-description required-error1">Required field.</span>');
        }
        else
        {
            $("#modal_contact_name").parent().find('.required-error').remove();
        }



        if (email == "")
        {
            $("#modal_contact_email").after('<span class="form-description required-error1">Required field.</span>');
        }
        else
        {
            $("#modal_contact_email").parent().find('.required-error').remove();
        }






        if (phone == "")
        {
            $("#modal_contact_phone").after('<span class="form-description required-error1">Required field.</span>');
        }
        else
        {
            $("#modal_contact_phone").parent().find('.required-error').remove();
        }



       


        if (modal_contact_name != ""  && email != ""  && phone != ""  )
        {


            $.ajax(
            {
                url: "http://digitalnock.in/demos/bhramarimail/service_mail.php",
                type: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function(data)
                {

                   alert(data);
                      
                      location.reload();
                    $('.body-message').append(data);
                    $("#modal_contact_name").val("");
                    $("#modal_contact_email").val("");
                  
                    $("#modal_contact_message").val("");

                    $("#modal_contact_phone").val("");


                }
            });

        }



    }));
});