<script>
    function validate() {
        	var valid = true;
        var message;
    	    
        $("#validation-info").hide();
        	$("#validation-info").html();
        if($("#ka").val() == "") {
            message = "All fields are required";
            	valid = false;
        } else if(!$.isNumeric($("#na").val())) {
            	message = "MRP should be in numbers";
            	valid = false;
            }

        if(valid == false) {
        	   $("#validation-info").show();
           $("#validation-info").html(message);
        }
        return valid;
    }
</script>