 <div class="content-wrapper">
        <div class="container">
	          <section class="content-header"><!-- Content Header Starts (Page header) -->
	            <h1>
	              <small></small>
	            </h1>
	            <ol class="breadcrumb">
	              <li><a href="#"><i class="fa fa-dashboard"></i> Enquiry</a></li>
	              <li><a href="#">Add Lead</a></li>   
	            </ol>
	          </section><!-- Content Header Ends (Page header) -->
          
	          <section class="content"><!-- Main content ends-->
	          <form id="create_keynote" class="form-horizontal" method="post" action="<?=site_url('api/lead_details')?>">
					<div class="container" id="myWizard">
					  <div class="col-sm-10">
					   <div class="navbar">
					      <div class="navbar-inner">
					            <ul class="nav nav-tabs">
					               <li class="active"><a href="#step1" data-toggle="tab" data-step="1">LEAD DETAILS</a></li>
					               <li><a href="#step2" data-toggle="tab" data-step="2">AUDIT JOBS</a></li>
					               <li><a href="#step3" data-toggle="tab" data-step="3">AGS - REGISTRATION JOBS</a></li>
					               <li><a href="#step4" data-toggle="tab" data-step="4">TECHNOLOGY JOBS</a></li>
					               <li><a href="#step5" data-toggle="tab" data-step="5">AGS - LEGAL JOBS</a></li>
					            </ul>
					      </div>
					   </div>
					   <div class="tab-content">
					   		
					<!-- Lead Details Form -->
					      <div class="tab-pane fade in active" id="step1">
					      	<div class="box box-solid">
					      	  <div class="box-body">
					      	  
					            <div class="col-md-6">
				                     		<div class="form-group">
						                        <label for="inputEmail" class="col-sm-3">Source</label>
						                        <div class="col-sm-4">
						                          <select name="source" class="form-control input-sm">
						                          <option>Just Dial</option>
						                          <option>Web</option>
						                          <option>Reference</option>
						                          </select>
						                        </div>
						                      </div>
						                      <div class="form-group">
						                        <label for="inputEmail" class="col-sm-3">Name 1</label>
						                        <div class="col-sm-8">
						                          <input type="text" class="form-control input-xs" id="kusername" name="kusername">
						                        </div>
						                      </div>
						                      <div class="form-group">
						                        <label for="inputName" class="col-sm-3">Name 2</label>
						                        <div class="col-sm-8">
						                          <input type="text" class="form-control input-xs" id="kpassword" name="kpassword">
						                        </div>
						                      </div>
						                      <div class="form-group">
						                        <label for="inputName" class="col-sm-3">Contact #1</label>
						                        <div class="col-sm-6">
						                          <input type="text" class="form-control input-xs" id="kdescription" name="kdescription">
						                        </div>
						                      </div>
						                      <div class="form-group">
						                        <label for="inputName" class="col-sm-3">Contact #2</label>
						                        <div class="col-sm-6">
						                          <input type="text" class="form-control input-xs" id="kdescription" name="kdescription">
						                        </div>
						                      </div>
						                      <div class="form-group">
						                        <label for="inputName" class="col-sm-3">Email 1</label>
						                        <div class="col-sm-8">
						                          <input type="text" class="form-control input-xs" id="kdescription" name="kdescription">
						                        </div>
						                      </div>
						                      <div class="form-group">
						                        <label for="inputName" class="col-sm-3">Email 2</label>
						                        <div class="col-sm-8">
						                          <input type="text" class="form-control input-xs" id="kdescription" name="kdescription">
						                        </div>
						                      </div>
				                 			</div><!-- /.col 5 ends -->
				                 			  
						                      		  
						                     
				                 <div class="col-md-4">
				                     		<div class="form-group">
								                      <div class="checkbox">
								                        <label><input type="checkbox">New PVT Compant</label>
								                      </div>
				                 </div><!-- /.col 5 ends -->
				                 
				                 
				               </div> <!-- Box-Body Ends -->
				              </div> <!-- Box ends -->
					        <div class="pull-right">
					         	<input type="button" class="btn btn-primary btn-sm next" href="#" value="Continue">
					        </div> 
					       
					      </div>
					      
					<!-- Audit Jobs Form -->     
					      <div class="tab-pane fade" id="step2">
					         <div class="well"> 
					          
					           <h2>Step 2</h2> Add another step here..
					            
					         </div>
					          <div class="pull-right">
					          <a class="btn btn-primary btn-sm back" href="#">Back</a>
					         	<a class="btn btn-primary btn-sm next" href="#">Continue</a>
					         </div> 
					      </div>
					      
					<!-- AGS Registration Form -->
					     <div class="tab-pane fade" id="step3">
					         <div class="well"> 
					          
					           <h2>Step 3</h2> Add another step here..
					            
					         </div>
					          <div class="pull-right">
					          	<a class="btn btn-primary btn-sm back" href="#">Back</a>
					         	<a class="btn btn-primary btn-sm next" href="#">Continue</a>
					         </div> 
					     </div>
					
					<!-- Technology Jobs Form -->     
						 <div class="tab-pane fade" id="step4">
					         <div class="well"> 
					          
					           <h2>Step 4</h2> Add another step here..
					            
					         </div>
					          <div class="pull-right">
					         	<a class="btn btn-primary btn-sm back" href="#">Back</a>
					         	<a class="btn btn-primary btn-sm next" href="#">Continue</a>
					         </div> 
					      </div>
					
					<!-- Technology Jobs Form -->     
						 <div class="tab-pane fade" id="step5">
					         <div class="well"> 
					          
					           <h2>Step 5</h2> Done here..!!!1
					            
					         </div>
					          <div class="pull-right">
					          	<a class="btn btn-primary btn-sm back" href="#">Back</a>
					         	<input class="btn btn-success btn-sm" type="submit" value="Submit">
					         </div> 
					      </div>    
					   </div> <!--tab content -->
					 </div><!-- Cols 8 ends -->
					 <!-- <div class="progress">
					     <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="5" style="width: 20%;">
					       Step 1 of 5
					     </div>
					   </div> -->
					</div> <!-- Wizard Container -->
					</form>
	          </section><!-- Main content ends-->
        </div>
</div>


<script>
$('.next').click(function(){

	  var nextId = $(this).parents('.tab-pane').next().attr("id");
	  $('[href=#'+nextId+']').tab('show');
	  return false;
	  
	})
$('.back').click(function(){

	  var backId = $(this).parents('.tab-pane').prev().attr("id");
	  $('[href=#'+backId+']').tab('show');
	  return false;
	  
	})
	$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
	  
	  //update progress
	  var step = $(e.target).data('step');
	  var percent = (parseInt(step) / 5) * 100;
	  
	  $('.progress-bar').css({width: percent + '%'});
	  $('.progress-bar').text("Step " + step + " of 5");
	  
	  //e.relatedTarget // previous tab
	  
	})

	$('.first').click(function(){

	  $('#myWizard a:first').tab('show')

	})
</script>