 <div class="content-wrapper">
        <div class="container container-main">
	          <section class="content-header"><!-- Content Header Starts (Page header) -->
	            <h1>
	              <small></small>
	            </h1>
	            <ol class="breadcrumb">
	              <li><a href="#"><i class="fa fa-dashboard"></i> Enquiry</a></li>
	              <li><a href="#">New Lead</a></li>   
	            </ol>
	          </section><!-- Content Header Ends (Page header) -->
          
	          <section class="content"><!-- Main content ends-->
	        
	          <div class="container container-main">
                <div class="col-md-5" id="show_error">
                    <div id="notify"><!-- Error/Success/Warning Notifications go here.. --></div>
                </div>
	           <div class="col-lg-10">
				<div class="stepwizard">
					
				    <div class="stepwizard-row setup-panel">
				        <div class="stepwizard-step">
				            <a href="#step-1" type="button" class="btn btn-info btn-circle">1</a>
				            <p>Lead Information</p>
				        </div>
				        <div class="stepwizard-step">
				            <a href="#step-2" type="button" class="btn btn-default btn-circle" readonly>2</a>
				            <p>Audit Jobs</p>
				        </div>
				        <div class="stepwizard-step">
				            <a href="#step-3" type="button" class="btn btn-default btn-circle" readonly>3</a>
				            <p>AGS-Registration Jobs
				        </div>
				        <div class="stepwizard-step">
				            <a href="#step-4" type="button" class="btn btn-default btn-circle" readonly>4</a>
				            <p>Technology Jobs
				        </div>
				        <div class="stepwizard-step">
				            <a href="#step-5" type="button" class="btn btn-default btn-circle" readonly>5</a>
				            <p>AGS-Legal Jobs
				        </div>
				    </div>
			  </div>
			  </div>
			  
			  
<form id="create_lead" class="form-horizontal col-md-7" method="post" action="<?=site_url('api/add_lead')?>"">
    <div class="row setup-content" id="step-1">
        <div class="col-md-12">
          <div class="box box-solid">
		   <div class="box-body">
		   <div class="row">
            <div class="col-md-8">
                <div class="form-group form-group-sm">
			        <label for="name1" class="formlabel control-label col-xs-3">Source</label>
			        <div class="col-xs-8">
			            <select class="form-control input-sm" id="source" name="source">
                    <option> No Source </option>
				            <option>Just Dial</option>
				            <option>Web</option>
				            <option>Reference</option>
			            </select>
			        </div>
			    </div>
                 <div class="form-group form-group-sm">
			        <label for="name1" class="formlabel control-label col-xs-3">Name 1</label>
			        <div class="col-xs-8">
			            <input type="text" class="form-control input-sm" required="required" id="name1" name="name1">
			        </div>
			    </div>
			    <div class="form-group form-group-sm">
			        <label for="name2" class="formlabel control-label col-xs-3">Name 2</label>
			        <div class="col-xs-8">
			            <input type="text" class="form-control input-sm"  id="name2" name="name2">
			        </div>
			    </div>
			    <div class="form-group form-group-sm">
			        <label for="contact1" class="formlabel control-label col-xs-3">Contact #1</label>
			        <div class="col-xs-8">
			            <input type="text" class="form-control input-sm" required="required" id="contact1" name="contact1">
			        </div>
			    </div>
			     <div class="form-group form-group-sm">
			        <label for="contact2" class="formlabel control-label col-xs-3">Contact #2</label>
			        <div class="col-xs-8">
			            <input type="text" class="form-control input-sm" id="contact2" name="contact2">
			        </div>
			    </div>
			    <div class="form-group form-group-sm">
			        <label for="email1" class="formlabel control-label col-xs-3">Email 1</label>
			        <div class="col-xs-8">
			            <input type="email" required="required" class="form-control input-sm" id="email1" name="email1">
			        </div>
			    </div>
			    <div class="form-group form-group-sm">
			        <label for="email2" class="formlabel control-label col-xs-3">Email 2</label>
			        <div class="col-xs-8">
			            <input type="email" class="form-control input-sm" id="email2" name="email2">
			        </div>
			    </div>
                
            </div>
         
         	 <div class="col-md-3">
         	 	<?php
         	 		$i = 0;
         	 		foreach($lead_info_build as $lib) : 
         	 		if($i < 10)
         	 			{
         	 	?>
						<div class="form-group form-group-sm">
						    <div class="checkbox">
						       <label><input type="checkbox" id="lib" name="lib[]" value="<?php echo $lib->lib_prop;?>"><?php echo $lib->lib_name; ?></label>
						    </div>
		                </div><!-- Form Group Ends -->
				<?php 
         	 			} 
         	 		 $i++; 
         	 		 endforeach;
         	 	?>
            </div>
         
         
         	<div class="col-md-3">
         	   <?php
         	 		$i = 0;
         	 		foreach($lead_info_build as $lib) : 
         	 		if($i >= 10)
         	 			{
         	 	?>
						<div class="form-group form-group-sm">
						    <div class="checkbox">
						       <label><input type="checkbox" id="lib" name="lib[]" value="<?php echo $lib->lib_prop;?>"><?php echo $lib->lib_name; ?></label>
						    </div>
		                </div><!-- Form Group Ends -->
				<?php 
         	 			} 
         	 		 $i++; 
         	 		 endforeach;
         	 	?>
            </div>
           </div><!-- row -->   
           <div class="row">
       	 		<div class="col-md-12">
       				<button class="btn btn-primary nextBtn btn-sm pull-right" type="button" >Next</button>
       			</div>
       	   </div>
           </div> <!-- Box Body -->
          </div><!-- Box -->
         </div> <!-- col-md-8-->

   </div>
    <div class="row setup-content" id="step-2">
        <div class="col-md-12">
          <div class="box box-solid">
		   <div class="box-body">
		   <div class="row">
             <div class="col-md-1"></div>
         	 <div class="col-md-4">
                <?php
         	 		$i = 0;
         	 		foreach($audit_job_build as $ajb) : 
         	 		if($i < 5)
         	 			{
         	 	?>
						<div class="form-group form-group-sm">
						    <div class="checkbox">
						       <label><input type="checkbox" id="ajb" name="ajb[]" value="<?php echo $ajb->ajb_prop;?>"><?php echo $ajb->ajb_name; ?></label>
						    </div>
		                </div><!-- Form Group Ends -->
				<?php 
         	 			} 
         	 		 $i++; 
         	 		 endforeach;
         	 	?>
            </div>
         
         
         	<div class="col-md-3">
               <?php
         	 		$i = 0;
         	 		foreach($audit_job_build as $ajb) : 
         	 		if($i >= 5 && $i < 10)
         	 			{
         	 	?>
						<div class="form-group form-group-sm">
						    <div class="checkbox">
						       <label><input type="checkbox" id="ajb" name="ajb[]" value="<?php echo $ajb->ajb_prop;?>"><?php echo $ajb->ajb_name; ?></label>
						    </div>
		                </div><!-- Form Group Ends -->
				<?php 
         	 			} 
         	 		 $i++; 
         	 		 endforeach;
         	 	?>
            </div>
            <div class="col-md-3">
               <?php
         	 		$i = 0;
         	 		foreach($audit_job_build as $ajb) : 
         	 		if($i >= 10)
         	 			{
         	 	?>
						<div class="form-group form-group-sm">
						    <div class="checkbox">
						       <label><input type="checkbox" id="ajb" name="ajb[]" value="<?php echo $ajb->ajb_prop;?>"><?php echo $ajb->ajb_name; ?></label>
						    </div>
		                </div><!-- Form Group Ends -->
				<?php 
         	 			} 
         	 		 $i++; 
         	 		 endforeach;
         	 	?>
            </div>
            
           </div><!-- row -->   
           <div class="row">
       	 		<div class="col-md-12">
       	 			<button class="btn btn-warning prevBtn btn-sm pull-left" type="button" >Back</button>
       				<button class="btn btn-primary nextBtn btn-sm pull-right" type="button" >Next</button>
       			</div>
       	   </div>
           </div> <!-- Box Body -->
          </div><!-- Box -->
         </div> <!-- col-md-8-->
    </div>
    <div class="row setup-content" id="step-3">
        <div class="col-md-12">
          <div class="box box-solid">
		   <div class="box-body">
		   <div class="row">
             <div class="col-md-1"></div>
         	 <div class="col-md-4">
                <?php
         	 		$i = 0;
         	 		foreach($ags_reg_job_build as $arj) : 
         	 		if($i < 5)
         	 			{
         	 	?>
						<div class="form-group form-group-sm">
						    <div class="checkbox">
						       <label><input type="checkbox" id="arj" name="arj[]" value="<?php echo $arj->arj_prop;?>"><?php echo $arj->arj_name; ?></label>
						    </div>
		                </div><!-- Form Group Ends -->
				<?php 
         	 			} 
         	 		 $i++; 
         	 		 endforeach;
         	 	?>                
            </div>
         
         
         	<div class="col-md-3">
         	   <?php
         	 		$i = 0;
         	 		foreach($ags_reg_job_build as $arj) : 
         	 		if($i >= 5 && $i < 10)
         	 			{
         	 	?>
						<div class="form-group form-group-sm">
						    <div class="checkbox">
						       <label><input type="checkbox" id="arj" name="arj[]" value="<?php echo $arj->arj_prop;?>"><?php echo $arj->arj_name; ?></label>
						    </div>
		                </div><!-- Form Group Ends -->
				<?php 
         	 			} 
         	 		 $i++; 
         	 		 endforeach;
         	 	?>              
                
            </div>
            
            <div class="col-md-3">
         	   <?php
         	 		$i = 0;
         	 		foreach($ags_reg_job_build as $arj) : 
         	 		if($i >= 10)
         	 			{
         	 	?>
						<div class="form-group form-group-sm">
						    <div class="checkbox">
						       <label><input type="checkbox" id="arj" name="arj[]" value="<?php echo $arj->arj_prop;?>"><?php echo $arj->arj_name; ?></label>
						    </div>
		                </div><!-- Form Group Ends -->
				<?php 
         	 			} 
         	 		 $i++; 
         	 		 endforeach;
         	 	?>              
                
            </div>
            
           </div><!-- row -->   
           <div class="row">
       	 		<div class="col-md-12">
       	 			<button class="btn btn-warning prevBtn btn-sm pull-left" type="button" >Back</button>
       				<button class="btn btn-primary nextBtn btn-sm pull-right" type="button" >Next</button>
       			</div>
       	   </div>
           </div> <!-- Box Body -->
          </div><!-- Box -->
         </div> <!-- col-md-8-->
    </div>
    <div class="row setup-content" id="step-4">
        <div class="col-md-12">
          <div class="box box-solid">
		   <div class="box-body">
		   <div class="row">
             <div class="col-md-1"></div>
         	 <div class="col-md-4">
                <?php
         	 		$i = 0;
         	 		foreach($tech_job_build as $tj) : 
         	 		if($i < 5)
         	 			{
         	 	?>
						<div class="form-group form-group-sm">
						    <div class="checkbox">
						       <label><input type="checkbox" id="tj" name="tj[]" value="<?php echo $tj->tj_prop;?>"><?php echo $tj->tj_name; ?></label>
						    </div>
		                </div><!-- Form Group Ends -->
				<?php 
         	 			} 
         	 		 $i++; 
         	 		 endforeach;
         	 	?>       
            </div>
         
         
         	<div class="col-md-3">
               <?php
         	 		$i = 0;
         	 		foreach($tech_job_build as $tj) : 
         	 		if($i >= 5 && $i < 10)
         	 			{
         	 	?>
						<div class="form-group form-group-sm">
						    <div class="checkbox">
						       <label><input type="checkbox" id="tj" name="tj[]" value="<?php echo $tj->tj_prop;?>"><?php echo $tj->tj_name; ?></label>
						    </div>
		                </div><!-- Form Group Ends -->
				<?php 
         	 			} 
         	 		 $i++; 
         	 		 endforeach;
         	 	?>       
            </div>
            <div class="col-md-3">
               <?php
         	 		$i = 0;
         	 		foreach($tech_job_build as $tj) : 
         	 		if($i >= 10)
         	 			{
         	 	?>
						<div class="form-group form-group-sm">
						    <div class="checkbox">
						       <label><input type="checkbox" id="tj" name="tj[]" value="<?php echo $tj->tj_prop;?>"><?php echo $tj->tj_name; ?></label>
						    </div>
		                </div><!-- Form Group Ends -->
				<?php 
         	 			} 
         	 		 $i++; 
         	 		 endforeach;
         	 	?>       
            </div>
           </div><!-- row -->   
           <div class="row">
       	 		<div class="col-md-12">
       	 			<button class="btn btn-warning prevBtn btn-sm pull-left" type="button" >Back</button>
       				<button class="btn btn-primary nextBtn btn-sm pull-right" type="button" >Next</button>
       			</div>
       	   </div>
           </div> <!-- Box Body -->
          </div><!-- Box -->
         </div> <!-- col-md-8-->
    </div>
    <div class="row setup-content" id="step-5">
        <div class="col-md-12">
          <div class="box box-solid">
		   <div class="box-body">
		   <div class="row">
             <div class="col-md-1"></div>
         	 <div class="col-md-4">
               <?php
         	 		$i = 0;
         	 		foreach($ags_legal_job_build as $alj) : 
         	 		if($i < 5)
         	 			{
         	 	?>
						<div class="form-group form-group-sm">
						    <div class="checkbox">
						       <label><input type="checkbox" id="alj" name="alj[]" value="<?php echo $alj->alj_prop;?>"><?php echo $alj->alj_name; ?></label>
						    </div>
		                </div><!-- Form Group Ends -->
				<?php 
         	 			} 
         	 		 $i++; 
         	 		 endforeach;
         	 	?>    
            </div>
            <div class="col-md-4">
               <?php
         	 		$i = 0;
         	 		foreach($ags_legal_job_build as $alj) : 
         	 		if($i >= 5 && $i < 10)
         	 			{
         	 	?>
						<div class="form-group form-group-sm">
						    <div class="checkbox">
						       <label><input type="checkbox" id="alj" name="alj[]" value="<?php echo $alj->alj_prop;?>""><?php echo $alj->alj_name; ?></label>
						    </div>
		                </div><!-- Form Group Ends -->
				<?php 
         	 			} 
         	 		 $i++; 
         	 		 endforeach;
         	 	?>    
            </div>
           </div><!-- row -->   
           <div class="row">
       	 		<div class="col-md-12">
       	 			<button class="btn btn-warning prevBtn btn-sm pull-left" type="button" >Back</button>
       				<input type="submit" class="btn btn-success btn-sm pull-right" value="Submit the Lead">
       			</div>
       	   </div>
           </div> <!-- Box Body -->
          </div><!-- Box -->
         </div> <!-- col-md-8-->
         
    </div>
    </form>

    <!-- On Screen selection display -->

        <div class="col-lg-4">
            <div class="panel panel-primary">
                  <div class="panel-heading">
                    <i class="fa fa-th-list"></i> <b> Summary of Selection</b>
                  </div>
                  <!-- /.panel-heading -->
                  <div class="panel-body">
                        <div class="list-group display_lead">
                         <!-- Display the summary of selection -->
                        </div>
                  </div>

                  <!-- /.panel-body -->
            </div>
            <!-- /.panel .chat-panel -->
        </div>

    <!-- Display LEAD ID creation -->
		    <div class="col-md-5" id="show_error">
		    	<?php 
		          	if(isset($_SESSION["lead_id"]))
		          	{
		          		echo "<div class='box box-success'>";
		          		echo "<div class='box-body'>";
		          		echo "<form id='assign_job' method='post' action='".base_url('api/assign_job')."'>";
		          		echo "<input type='hidden' name='lead_id' id='lead_id' value='$_SESSION[lead_id]'>";
		          		echo "<p class='text-green'>Lead <b>LD".$_SESSION["lead_id"]."</b> has been created.</p>";
		          		echo "<p>Do you want to assign Jobs? </p>";
		          		echo "<input class='btn btn-success' type='submit' name='yes' id='yes' value='YES' />";
		          		echo "<input class='btn btn-danger pull-right' data-widget='remove' type='button' name='no' id='no' value='NO' />";
		          		echo "</form";
		          		echo "</div>";
		          		echo "</div>";
		          	}
		          	
		          	unset($_SESSION["lead_id"]);
		      ?>
		    </div>
	     </section><!-- Main content ends-->
     </div>
</div>

<script>
   $(document).change(function () {  
          
          var output="";
          //Lead Information Section - Col1
          if ($('input:text').val().length != 0) {
                output += '<h5><p class="text-success"><b>Lead Information:</b></p></h5>';
                var lead_list = [ "source", "name1", "name2", "contact1", "contact2", "email1", "email2"];
                jQuery.each( lead_list, function( i, val ) {
                  if($('#' + val).val()) 
                  {
                     output += '<a href="#" class="list-group-item"><b>';
                     output += val.toUpperCase();
                     output += '</b><span class="pull-right text-muted">';
                     output += $('#' + val).val();
                     output += '</span></a>';
                  }
                });
          }

        if($('input[name="lib[]"]:checked').length > 0)
        {
           output += '<h5><p class="text-danger"><b>Company Registrations:</b></p></h5>';
           output += '<a href="#" class="list-group-item">';
            $('input:checkbox[id=lib]:checked').each(function() 
              {                 
                 var str = $(this).val();
                 str = str.replace("_"," ");
                 str = str.replace("_"," ");
                 output += '<span class="pull-right">';
                 output += str.toUpperCase();
                 output += '</span><br>';
              });             
             output += '</a>';
        }
        if($('input[name="ajb[]"]:checked').length > 0)
        {
           output += '<h5><p class="text-primary"><b>Audit Jobs:</b></p></h5>';
           output += '<a href="#" class="list-group-item">';
            $('input:checkbox[id=ajb]:checked').each(function() 
              {                 
                 var str = $(this).val();
                 str = str.replace("_"," ");
                 str = str.replace("_"," ");
                 output += '<span class="pull-right">';
                 output += str.toUpperCase();
                 output += '</span><br>';
              });             
             output += '</a>';
        }

        if($('input[name="arj[]"]:checked').length > 0)
        {
           output += '<h5><p class="text-inverse"><b>AGS Registration Jobs:</b></p></h5>';
           output += '<a href="#" class="list-group-item">';
            $('input:checkbox[id=arj]:checked').each(function() 
              {                 
                 var str = $(this).val();
                 str = str.replace("_"," ");
                 str = str.replace("_"," ");
                 output += '<span class="pull-right">';
                 output += str.toUpperCase();
                 output += '</span><br>';
              });             
             output += '</a>';
        }

        if($('input[name="tj[]"]:checked').length > 0)
        {
           output += '<h5><p class="text-success"><b>Technology Jobs:</b></p></h5>';
           output += '<a href="#" class="list-group-item">';
            $('input:checkbox[id=tj]:checked').each(function() 
              {                 
                 var str = $(this).val();
                 str = str.replace("_"," ");
                 str = str.replace("_"," ");
                 output += '<span class="pull-right">';
                 output += str.toUpperCase();
                 output += '</span><br>';
              });             
             output += '</a>';
        }

        if($('input[name="alj[]"]:checked').length > 0)
        {
           output += '<h5><p class="text-warning"><b>AGS Legal Jobs:</b></p></h5>';
           output += '<a href="#" class="list-group-item">';
            $('input:checkbox[id=alj]:checked').each(function() 
              {                 
                 var str = $(this).val();
                 str = str.replace("_"," ");
                 str = str.replace("_"," ");
                 output += '<span class="pull-right">';
                 output += str.toUpperCase();
                 output += '</span><br>';
              });             
             output += '</a>';
        }


        $('.display_lead').html(output);
    });
</script>


<script type="text/javascript">
$(document).ready(function () {
	
    var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn'),
            allPrevBtn = $('.prevBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-info').addClass('btn-default');
            $item.addClass('btn-info');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url'],input[type='email']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.prop("disabled","disabled").trigger('click');
    });

    allPrevBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            prevStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a");

        $(".form-group").removeClass("has-error");
        prevStepWizard.prop("disabled","disabled").trigger('click');
    });

    $('div.setup-panel div a.btn-info').trigger('click');
});
  </script>