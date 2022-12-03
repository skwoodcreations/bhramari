// A $( document ).ready() block.
$(document).ready(function() {
 
 	$('.en_modal').click(function() {
   
		var product_name=$(this).attr('id')
		$('#modal_product').val(product_name);
		$('#myModal').modal('show');
	}); 

  
});