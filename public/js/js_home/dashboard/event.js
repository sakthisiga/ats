var Event = function() {
  
    // ------------------------------------------------------------------------
  
    this.__construct = function() {
        //console.log('Event Created');
        Display = new Display();
        create_client();
        update_client();
        lead_form();
        
    };
    
// ------------------------------------------------------------------------
    var lead_form = function() {
    /*	$('#service_others_chk').change(function(){
    	    $("#service_others_box").prop("type","text",$(this).is(':checked'));
    	});  */
    	
    	
    	 $('#service_others_chk').click(function(){
    		    if($(this).is(":checked"))
    		       $("#service_others_box").prop("type","text");
    		    else
    		    	$("#service_others_box").prop("type","hidden");
    		});
    }
    
    // ------------------------------------------------------------------------
    
    var create_client = function() {
    	 $("#create_client").submit(function(evt) {
    		 evt.preventDefault();
  
  	        var url = $(this).attr('action');
  	        var postData = $(this).serialize();
  	        
  	        $.post(url, postData, function(o){
  	           if(o.result == 1) {
  	               
  	             window.location.href = "viewClient?msg=success";
  	           } 
  	           else
  	           {
  	        	   Display.error(o.error);
  	           }
  	        },'json');
	           
    	 });
    };
    
// ------------------------------------------------------------------------
    
    var update_client = function() {	
    	 $("#update_client").submit(function(evt) {
    		 evt.preventDefault();
    		 
  	        var url = $(this).attr('action');
  	        var postData = $(this).serialize();
  	        
  	        $.post(url, postData, function(o){
  	           if(o.result == 1) {
  	               Display.success(o.output);
  	           }
  	           else if(o.result == 2)
  	        	   {
  	        	   	Display.warning(o.output);
  	        	   }
  	           else
  	           {
  	        	   Display.error(o.error);
  	           }
  	        },'json');	           
    	 });
    };
    
    this.__construct();
    
};
