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
			  
			  
<form id="create_lead" class="form-horizontal col-md-7" method="post" action="<?=site_url('api/add_lead')?>" onsubmit="return confirm_update();">
    <div class="row setup-content" id="step-1">
        <div class="col-md-12">
          <div class="box box-solid">
		   <div class="box-body">
		   <div class="row">
            <div class="col-md-8">
                <div class="form-group form-group-sm">
			        <label for="name1" class="formlabel control-label col-xs-3">Source</label>
			        <div class="col-xs-8">
			            <select class="form-control input-sm">
				            <option>Just Dial</option>
				            <option>Web</option>
				            <option>Reference</option>
			            </select>
			        </div>
			    </div>
                 <div class="form-group form-group-sm">
			        <label for="name1" class="formlabel control-label col-xs-3">Name 1</label>
			        <div class="col-xs-8">
			            <input type="text" class="form-control input-sm" required="required" id="name1" value="sakthi">
			        </div>
			    </div>
			    <div class="form-group form-group-sm">
			        <label for="name2" class="formlabel control-label col-xs-3">Name 2</label>
			        <div class="col-xs-8">
			            <input type="text" class="form-control input-sm"  id="name2">
			        </div>
			    </div>
			    <div class="form-group form-group-sm">
			        <label for="contact1" class="formlabel control-label col-xs-3">Contact #1</label>
			        <div class="col-xs-8">
			            <input type="text" class="form-control input-sm" required="required" value="sakthi" id="contact1">
			        </div>
			    </div>
			     <div class="form-group form-group-sm">
			        <label for="contact2" class="formlabel control-label col-xs-3">Contact #2</label>
			        <div class="col-xs-8">
			            <input type="text" class="form-control input-sm" id="contact2">
			        </div>
			    </div>
			    <div class="form-group form-group-sm">
			        <label for="email1" class="formlabel control-label col-xs-3">Email 1</label>
			        <div class="col-xs-8">
			            <input type="email" required="required" class="form-control input-sm" value="sakthi@asakthi.clom" id="email1">
			        </div>
			    </div>
			    <div class="form-group form-group-sm">
			        <label for="email2" class="formlabel control-label col-xs-3">Email 2</label>
			        <div class="col-xs-8">
			            <input type="email" class="form-control input-sm" id="email2">
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
						       <label><input type="checkbox" id="<?php echo $lib->lib_prop;?>" name="<?php echo $lib->lib_prop;?>"><?php echo $lib->lib_name; ?></label>
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
						       <label><input type="checkbox" id="<?php echo $lib->lib_prop;?>" name="<?php echo $lib->lib_prop;?>"><?php echo $lib->lib_name; ?></label>
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
						       <label><input type="checkbox" id="<?php echo $ajb->ajb_prop;?>" name="<?php echo $ajb->ajb_prop;?>"><?php echo $ajb->ajb_name; ?></label>
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
						       <label><input type="checkbox" id="<?php echo $ajb->ajb_prop;?>" name="<?php echo $ajb->ajb_prop;?>"><?php echo $ajb->ajb_name; ?></label>
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
						       <label><input type="checkbox" id="<?php echo $ajb->ajb_prop;?>" name="<?php echo $ajb->ajb_prop;?>"><?php echo $ajb->ajb_name; ?></label>
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
						       <label><input type="checkbox" id="<?php echo $arj->arj_prop;?>" name="<?php echo $arj->arj_prop;?>"><?php echo $arj->arj_name; ?></label>
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
						       <label><input type="checkbox" id="<?php echo $arj->arj_prop;?>" name="<?php echo $arj->arj_prop;?>"><?php echo $arj->arj_name; ?></label>
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
						       <label><input type="checkbox" id="<?php echo $arj->arj_prop;?>" name="<?php echo $arj->arj_prop;?>"><?php echo $arj->arj_name; ?></label>
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
						       <label><input type="checkbox" id="<?php echo $tj->tj_prop;?>" name="<?php echo $tj->tj_prop;?>"><?php echo $tj->tj_name; ?></label>
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
						       <label><input type="checkbox" id="<?php echo $tj->tj_prop;?>" name="<?php echo $tj->tj_prop;?>"><?php echo $tj->tj_name; ?></label>
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
						       <label><input type="checkbox" id="<?php echo $tj->tj_prop;?>" name="<?php echo $tj->tj_prop;?>"><?php echo $tj->tj_name; ?></label>
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
						       <label><input type="checkbox" id="<?php echo $alj->alj_prop;?>" name="<?php echo $alj->alj_prop;?>"><?php echo $alj->alj_name; ?></label>
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
						       <label><input type="checkbox" id="<?php echo $alj->alj_prop;?>" name="<?php echo $alj->alj_prop;?>"><?php echo $alj->alj_name; ?></label>
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
       				<button class="btn btn-success btn-sm pull-right" type="submit" >Submit</button>
       			</div>
       	   </div>
           </div> <!-- Box Body -->
          </div><!-- Box -->
         </div> <!-- col-md-8-->
         
    </div>
    </form>
		    <div class="col-md-5" id="show_error">
		    
		    </div>
	     </section><!-- Main content ends-->
     </div>
</div>
<script>
	function confirm_update() {
		check=false;
		output = '<div class="alert alert-danger col-md-9">';
		output +='<strong>NO</strong> Job is selected, please select a job before submitting the lead';
		output +='</div>';
        var aCheckbox = document.getElementById('create_lead').elements;
        for(i=0;i<aCheckbox.length;++i)
        {
            if(aCheckbox[i].type=='checkbox' && aCheckbox[i].checked)
           {
               check=true;
           }
         }
         if(check==true)
         {
             return confirm("Do u really want to register?\n\nOK to save the lead\nCANCEL to go back to add more Jobs");
        }
        else{
        	$("#show_error").html(output).fadeIn();
        	setTimeout( function(){
           	 $("#show_error").fadeOut();
        	},3000);
            return false;
        }	
   }
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