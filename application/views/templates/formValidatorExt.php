<script type="text/javascript">
$(document).ready(function(){  
  $.extend($.validator.messages, {required: '<?php echo __("This field is required!") ?>'});
  
  $("#<?php echo $form_id ?>").validate({ignore:'',
    
    //custom erro placment to handle radio etc. 
      errorPlacement: function(error, element) {
        if (element.attr("type") == "radio") 
        {
           error.insertAfter(".radio-list-"+element.attr("data-raido-list"));
        } 
        else if (element.attr("type") == "checkbox") 
        {
           error.insertAfter(".checkboxesList"+element.attr("data-checkbox-list"));
        }
        else 
        {  
           error.insertAfter(element);
        }                
      }, 
    invalidHandler: function(e, validator) {
			var errors = validator.numberOfInvalids();
			if (errors) {
				var message = '<div class="alert alert-danger"><?php echo __("Some fields are required. They have been highlighted above.") ?></div>';
				$("#form_error_handler").fadeIn().html(message).delay(2000).fadeOut();								
			} 
		}});
}); 		
</script>

<div id="form_error_handler" style="display:none"></div>
