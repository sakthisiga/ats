var Event = function() {
  
    // ------------------------------------------------------------------------
  
    this.__construct = function() {
        console.log('Event Created');
        Display = new Display();
        create_client();
    };
    
// ------------------------------------------------------------------------

    
    // ------------------------------------------------------------------------
    
    var create_client = function() {
    	 $("#create_client").submit(function(evt) {
    		 evt.preventDefault();
  
  	        var url = $(this).attr('action');
  	        var postData = $(this).serialize();
  	        
  	        $.post(url, postData, function(o){
  	           if(o.result == 1) {
  	               Display.success(o.output);
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
