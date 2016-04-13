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
                          id: $(this).data('id') 
                       };

        $.post(url,postData, function(o){


        var output = '<div class="box box-warning">';
          output +=  '<div class="box-header">';
          output += '<div class="pull-right box-tools">';
          output += '<button class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Minimize"><i class="fa fa-minus"></i></button>';
          output += '<button class="close_lead btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button></div>';
          output += '<h3 class="box-title"><b>Lead: LD' + o.data[0].lead_id + ' | ' + o.data[0].name_1 + ' | ' +o.data[0].contact_1+ '</b></h3>';
          output += '</div>';
          output += '<div class="box-body">';

          output += Template.get_lead_info(o.data[0], o.group);

          output += Template.get_company_reg_info(o.data_2[0], o.group);

          output += Template.get_audit_jobs_info(o.data_audit_jobs[0], o.group);

          output += Template.get_ags_reg_jobs_info(o.data_ags_reg_jobs[0], o.group);

          output += Template.get_tech_jobs_info(o.data_tech_jobs[0], o.group);

          output += Template.get_legal_jobs_info(o.data_legal_jobs[0], o.group);
          
          if(o.group == 1)
          {
          //output += '<div class="col-lg-2"><div class="well well-lg no-padding">';
          output += '<div class="pull-right box-tools">';
          output += '<input type= "button" class="btn btn-warning lead_reject" data-leadid="'+o.data[0].lead_id+ '" value="Reject">';
          output += '<p>&nbsp;</p><input type= "button" class="btn btn-danger lead_delete" data-leadid="'+o.data[0].lead_id+ '" value="Delete">';
          output += '</div>';
          }
          output += '</div>';
          output += '</div>';


          $("#edit_lead").html(output);  //Generate the lead view/edit form



          // Disable and Enable the Legal checkbox in Lead Edit
          $("#legal_jobs_edit").click(function() {
          if ($("#legal_jobs_edit").is(":checked")) 
                $(".legal").prop('disabled', false);
          else
                $(".legal").prop('disabled', true);       
          });

          // Disable and Enable the Tech checkbox in Lead Edit
          $("#tech_jobs_edit").click(function() {
          if ($("#tech_jobs_edit").is(":checked")) 
                $(".tech").prop('disabled', false);
          else
                $(".tech").prop('disabled', true);       
          });


         // Disable and Enable the Ags Reg checkbox in Lead Edit
          $("#ags_reg_jobs_edit").click(function() {
          if ($("#ags_reg_jobs_edit").is(":checked")) 
                $(".ags-reg").prop('disabled', false);
          else
                $(".ags-reg").prop('disabled', true);       
          });


        // Disable and Enable the Incorporation checkbox in Lead Edit
          $("#audit_jobs_edit").click(function() {
          if ($("#audit_jobs_edit").is(":checked")) 
                $(".audit").prop('disabled', false);
          else
                $(".audit").prop('disabled', true);       
          });

        // Disable and Enable the Audit jobs checkbox in Lead Edit
          $("#company_edit").click(function() {
          if ($("#company_edit").is(":checked")) 
                $(".company").prop('disabled', false);
          else
                $(".company").prop('disabled', true);       
          });



        // Disable and Enable the Lead Information checkbox in Lead Edit  
          $("#lead_edit").click(function() {
          if ($("#lead_edit").is(":checked")) {
                $(".ld_txt").prop('disabled', false);
                $(".ld_btn").show();
              }
          else {
                $(".ld_txt").prop('disabled', true);       
                $(".ld_btn").hide();
            }
          });


        // Reload the table if clicking the "Close" button
          $(".close_lead").click(function(evt) {
              evt.preventDefault();
              location.reload(); 
            });


        // Update lead information in DB 
         $("#update_lead").submit(function(evt) {
         evt.preventDefault();
         
            var url = $(this).attr('action');
            var postData = $(this).serialize();
            
            $.post(url, postData, function(o){
               if(o.result == 1) {
                   Display.success(o.output);
                    $(".ld_txt").prop('disabled', true);
                    $(".ld_btn").hide();
                    $( "#lead_edit" ).prop( "checked", false );
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
        
        // Update Company information in DB

        $(document).on("change", "input[class='company']", function () {
            e.preventDefault();
            var checkbox = $(this);
            var checked = checkbox.prop('checked');
            if(checked)
              var chk = 'Y';
            else
              var chk = '';
            var url = "../api/update_company";
            var postData = { 
                              lead_id: checkbox.data('leadid'), 
                              service: checkbox.data('name'), 
                              checked: chk
                           };

            $.post(url, postData, function(o){
               if(o.result == 1) {
                   //Display.success(o.output);
               }
            },'json');  
        });

    // Update Audit Jobs information in DB

        $(document).on("change", "input[class='audit']", function () {
            e.preventDefault();
            var checkbox = $(this);
            var checked = checkbox.prop('checked');
            if(checked)
              var chk = 'Y';
            else
              var chk = '';
            var url = "../api/update_audit_jobs";
            var postData = { 
                              lead_id: checkbox.data('leadid'), 
                              service: checkbox.data('name'), 
                              checked: chk
                           };

            $.post(url, postData, function(o){
               if(o.result == 1) {
                   //Display.success(o.output);
               }
            },'json');  
        });

  // Update AGS Reg Jobs information in DB

        $(document).on("change", "input[class='ags-reg']", function () {
            e.preventDefault();
            var checkbox = $(this);
            var checked = checkbox.prop('checked');
            if(checked)
              var chk = 'Y';
            else
              var chk = '';
            var url = "../api/update_ags_reg_jobs";
            var postData = { 
                              lead_id: checkbox.data('leadid'), 
                              service: checkbox.data('name'), 
                              checked: chk
                           };

            $.post(url, postData, function(o){
               if(o.result == 1) {
                   //Display.success(o.output);
               }
            },'json');  
        });

 // Update Tech Jobs information in DB

        $(document).on("change", "input[class='tech']", function () {
            e.preventDefault();
            var checkbox = $(this);
            var checked = checkbox.prop('checked');
            if(checked)
              var chk = 'Y';
            else
              var chk = '';
            var url = "../api/update_tech_jobs";
            var postData = { 
                              lead_id: checkbox.data('leadid'), 
                              service: checkbox.data('name'), 
                              checked: chk
                           };

            $.post(url, postData, function(o){
               if(o.result == 1) {
                   //Display.success(o.output);
               }
            },'json');  
        });

// Update Legal Jobs information in DB

        $(document).on("change", "input[class='legal']", function () {
            e.preventDefault();
            var checkbox = $(this);
            var checked = checkbox.prop('checked');
            if(checked)
              var chk = 'Y';
            else
              var chk = '';
            var url = "../api/update_legal_jobs";
            var postData = { 
                              lead_id: checkbox.data('leadid'), 
                              service: checkbox.data('name'), 
                              checked: chk
                           };

            $.post(url, postData, function(o){
               if(o.result == 1) {
                   //Display.success(o.output);
               }
            },'json');  
        });


    // Reject the Lead ID to make the invisible of Lead in "Lead view" module

        $(document).on("click", ".lead_reject", function () {
            e.preventDefault();
            if (confirm("If you are sure, Press 'OK' or Press 'CANCEL'")) {
                
                var url = "../api/reject_lead";
                var postData = { 
                              lead_id: $(this).data('leadid')
                           };

                $.post(url, postData, function(o){
                   if(o.result == 1) {
                       Display.warning(o.output);
                       location.reload();
                   }
            },'json');  



            }
              return false;
        });

    // Delete the Lead ID permanenetly from the Lead table

        $(document).on("click", ".lead_delete", function () {
            e.preventDefault();
            if (confirm("If you are sure, Press 'OK' or Press 'CANCEL'")) {
                
                var url = "../api/delete_lead";
                var postData = { 
                              lead_id: $(this).data('leadid')
                           };

                $.post(url, postData, function(o){
                   if(o.result == 1) {
                       Display.error(o.output);
                       location.reload();
                   }
            },'json');  



            }
            else
              return false;
        });


         //Flat red color scheme for iCheck
                $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
                    checkboxClass: 'icheckbox_flat-red',
                    radioClass: 'iradio_flat-red'
                });
                

        //---------------------------------------------------------------------------

    });

      
  });


  }