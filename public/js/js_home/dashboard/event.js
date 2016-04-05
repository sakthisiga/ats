var Event = function() {
  
    // ------------------------------------------------------------------------
  
    this.__construct = function() {
        //console.log('Event Created');
        Display = new Display();
        create_client();
        update_client();
        lead_form();
        lead_add();
        lead_edit();
        
    };
    
  // ------------------------------------------------------------------------
    
    var lead_add = function() {
    	 $("#create_lead").submit(function(evt) {
    		 evt.preventDefault();
  
  	        var url = $(this).attr('action');
  	        var postData = $(this).serialize();
  	        
  	        $.post(url, postData, function(o){
  	           if(o.result == 1) {
  	        	   		window.location = 'addLead';
  	           } 
  	           else
  	           {
  	        	   Display.error(o.output);
  	           }
  	        },'json');
	           
    	 });
    };
    
    
// ------------------------------------------------------------------------
    var lead_form = function() {
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

// ------------------------------------------------------------------------

 var lead_edit = function() { 

$("body").on('click', '.lead_id', function(e) {
        e.preventDefault();

        var self = $(this);
        var url = $(this).attr('href');
        var postData = { 
                          id: $(this).attr('data-id') 
                       };

        $.post(url,postData, function(o){

          var output = '<div class="box box-warning">';
          output +=  '<div class="box-header">';

          output += '<div class="pull-right box-tools">';
        
          output += '<button class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Minimize"><i class="fa fa-minus"></i></button>';
          output += '<button class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button></div>';
          output += '<i class="fa fa-pencil"></i>';
          output += '<h3 class="box-title">Lead: LD' + o.data[0].lead_id + ' | ' + o.data[0].name_1 + ' | ' +o.data[0].contact_1+ '</h3>';
          output += '</div>';
          output += '<div class="box-body no-padding">';

          output += Template.get_lead_info(o.data[0]);


          output += '<form action="#" method="post">';
          output += '<div class="col-lg-2"><div class="well well-lg no-padding">';
           output += '<table class="table table-condensed incorporation_tbl"><tr><th colspan="2"><u>Incorporation Details</u></th></tr>';

          for(var i=0; i<=o.data_2.length; i++)
          {
          output += Template.get_company_reg_info(o.data_2[i]);
          //output += '<tr><td><b>'+ o.data_2[i].Field + '</b></td></tr>';
          }
          output += '</table>';
          output += '</div></div>';
          output += '</form>';
 

          output += '</div>';
          output += '</div>';


          $("#edit_lead").html(output);
    });
      
  });
  }