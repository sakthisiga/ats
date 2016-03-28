 <div class="content-wrapper">
        <div class="container">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              
              <small></small>
            </h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Service Tax</a></li>
              <li><a href="#">View/Edit Client</a></li>
            </ol>
          </section>

          <!-- Main content -->
          <section class="content"> 
          	<div class="box box-warning">
          			
		          	<?php 
		          	if(isset($_GET['msg']))
		          	{
		          		echo "<div class='alert alert-success'>";
		          		echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
		          		echo "<h4>	<i class='icon fa fa-check'></i> Alert!</h4>";
		          		echo "New Client added Successfully";
		          		echo "</div>";
		          	}
		          	if(isset($_GET['msg_import']))
		          	{
		          		echo "<div class='alert alert-success'>";
		          		echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
		          		echo "<h4>	<i class='icon fa fa-check'></i> Alert!</h4>";
		          		echo "All Clients have been added Successfully";
		          		echo "</div>";
		          	}
		
		          	?>
		             <div class="box-header with-border">
		              <h3 class="box-title">View and Update Client Details</h3>
			              <div class="box-tools pull-right">
			                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
			              </div>
		              </div><!-- /.box-header -->
		           	  <div class="col-xs-12">
		                <div class="box-body">
		                   <table id="client_table" class="table table-bordered table-condensed">
		                    <thead>
		                      <tr class="bg-gray-active color-palette">
		                        <th>Client ID</th>
		                        <th>Name</th>
		                        <th>Type</th>
		                        <th>Contact No</th>
		                        <th>Email</th>
		                      </tr>
		                    </thead>
		                    <tbody>
		                    
		                      <?php foreach($clients as $row) : ?>
									<tr>
										<td> <a data-toggle="modal" 
												data-cid="<?php echo $row->client_id; ?>" 
												data-cname="<?php echo $row->cname; ?>"
												data-type="<?php echo $row->type; ?>"
												data-cperson="<?php echo $row->cperson; ?>"
												data-type="<?php echo $row->type; ?>"
												data-cnumber="<?php echo $row->cnumber; ?>"
												data-email="<?php echo $row->email; ?>"
												data-address="<?php echo $row->address; ?>"
												data-tin="<?php echo $row->tin; ?>"
												data-cst="<?php echo $row->cst; ?>"
												data-pan="<?php echo $row->pan; ?>"
												data-vatuser="<?php echo $row->vatuser; ?>"
												data-vatpass="<?php echo $row->vatpass; ?>"
												data-fileloc="<?php echo $row->fileloc; ?>"
												title="View or Update Client" 
												class="open-AddBookDialog" 
												href="#client-update"><?php echo "ATS".$row->client_id; ?>
											 </a>
										</td>
										<td> <?php echo $row->cname; ?> </td>
										<td> <?php echo $row->type; ?> </td>
										<td> <?php echo $row->cnumber; ?> </td>
										<td> <?php echo $row->email; ?> </td>
									</tr>
							   <?php endforeach;?>
		                    </tbody>
		                  </table>

		                  <!-- Modal -->
								<div id="client-update" class="modal fade" role="dialog">
								  <div class="modal-dialog modal-lg">
								
								    <!-- Modal content-->
								    <div class="modal-content">
								      <div class="modal-header">
								        <button type="button" class="close" data-dismiss="modal" onclick="pageload()">&times;</button>
								        <h4 class="modal-title"><strong>Client Information</strong> - Update</h4>
								      </div>
								      <div class="modal-body">
										 <div class="box-body">
						           <form id="update_client" class="form-horizontal" method="post" action="<?=site_url('api/update_client')?>">
						              <div class="row">
						              	<div id="notify"><!-- Error/Success/Warning Notifications go here.. --></div>
						                  <div class="col-md-6">
						                    <div class="form-group">
						                      <div class="box-body">
						                      
						                      <div class="form-group form-group-sm">
						      						<label class="col-sm-3 control-label" for="sm">Client ID</label>
						      						<div class="col-sm-8">
						        						<input class="form-control" type="text" id="cid" name="cid" disabled>
						        						<input class="form-control" type="hidden" id="hcid" name="hcid">
						      						</div>
						    					</div>
						    					
						    					<div class="form-group form-group-sm">
						      						<label class="col-sm-3 control-label" for="sm">Firm Name</label>
						      						<div class="col-sm-8">
						        						<input class="form-control" type="text" id="cname" name="cname" value>
						      						</div>
						    					</div>
						    					
						    					<div class="form-group form-group-sm">
						      						<label class="col-sm-3 control-label" for="sm">Type</label>
						      						<div class="col-sm-8">
						        						<select name="type" id="type" class="form-control" placeholder="Type">
															<option disabled selected> -- State --</option>
																<?php foreach($types as $type) : 
																if($row->type == $type->type)
																{
																	echo "<option selected>$type->type</option>";
																}else 
																{
																	echo "<option>$type->type</option>";
																}
																	
																endforeach;
																?>
														</select>
						      						</div>
						    					</div>
						    					
						    					<div class="form-group form-group-sm">
						      						<label class="col-sm-3 control-label" for="sm">Contact Person</label>
						      						<div class="col-sm-8">
						        						<input class="form-control" type="text" id="cperson" name="cperson">
						      						</div>
						    					</div>
						    					
						    					<div class="form-group form-group-sm">
						      						<label class="col-sm-3 control-label" for="sm">Contact No</label>
						      						<div class="col-sm-8">
						        						<input class="form-control" type="text" id="cnumber" name="cnumber">
						      						</div>
						    					</div>
						    					
						    					<div class="form-group form-group-sm">
						      						<label class="col-sm-3 control-label" for="sm">Email</label>
						      						<div class="col-sm-8">
						        						<input class="form-control" type="email" id="email" name="email">
						      						</div>
						    					</div>
						    					<div class="form-group form-group-sm">
						      						<label class="col-sm-3 control-label" for="sm">Address</label>
						      						<div class="col-sm-8">
						        						<textarea class="form-control" rows="5" id="address" name="address"></textarea>
						      						</div>
						    					</div>
						                     </div>
						                  </div><!-- /.form-group -->
						                </div><!-- /.col -->
						                
						                
						                <div class="col-md-6">
						                  <div class="form-group">
						                    
						                      <div class="box-body">
						                      
						                    	<div class="form-group form-group-sm">
						      						<label class="col-sm-3 control-label" for="sm">TIN No</label>
						      						<div class="col-sm-8">
						        						<input class="form-control" type="text" id="tin" name="tin">
						      						</div>
						    					</div>
						    					
						    					<div class="form-group form-group-sm">
						      						<label class="col-sm-3 control-label" for="sm">CST No</label>
						      						<div class="col-sm-8">
						        						<input class="form-control" type="text" id="cst" name="cst">
						      						</div>
						    					</div>
						    					
						    					<div class="form-group form-group-sm">
						      						<label class="col-sm-3 control-label" for="sm">PAN No</label>
						      						<div class="col-sm-8">
						        						<input class="form-control" type="text" id="pan" name="pan">
						      						</div>
						    					</div>
						    					
						    					<div class="form-group form-group-sm">
						      						<label class="col-sm-3 control-label" for="sm">VAT User</label>
						      						<div class="col-sm-8">
						        						<input class="form-control" type="text" id="vatuser" name="vatuser">
						      						</div>
						    					</div>
						    					
						    					<div class="form-group form-group-sm">
						      						<label class="col-sm-3 control-label" for="sm">VAT Pass</label>
						      						<div class="col-sm-8">
						        						<input class="form-control" type="text" id="vatpass" name="vatpass">
						      						</div>
						    					</div>
						    					
						    					<div class="form-group form-group-sm">
						      						<label class="col-sm-3 control-label" for="sm">File Location</label>
						      						<div class="col-sm-8">
						        						<textarea class="form-control" rows="8" id="fileloc" name="fileloc"></textarea>
						      						</div>
						    					</div>
						    					
						    					
						    					
						                     </div><!-- Box-Body -->
						                  </div><!-- /.form-group -->
						                </div><!-- /.col -->
						              </div><!-- /.row -->
						              <div class="row">
							              <div class="form-group form-group-sm">
							    			<div class="col-sm-5"></div>
							            		<div class="col-sm-3">
									        		<button type="submit" class="btn btn-primary">Update</button>
									        		<button type="reset" class="btn btn-danger" disabled>Delete</button>
							            		</div><!-- /.col -->	
							    		 </div>
							    	  </div>
		          	  			</form>
		          	  </div><!-- Box Body Ends -->
		            </div><!-- Modal Body Ends -->
				</div> <!-- Modal Content Ends -->
			 </div><!-- Modal Dialog Ends -->
		</div> <!-- Modal Ends -->
								
								
		                </div><!-- /.box-body -->
		
		            </div><!-- /.col -->
            <div class="box-footer">
              Here some description about the table 
            </div>
          </div><!-- /.box -->
            
            
            
          </section><!-- /.content -->
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
    <script>
    function pageload() {
	    location.reload();
	}
	
      $(function () {
        $('#client_table').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true
        });
      });

      $(document).on("click", ".open-AddBookDialog", function () {
    	  var cid = $(this).data('cid');
    	  cid= "ATS"+cid;
  	      $(".modal-body #cid").val( cid );

  	   	  var hcid = $(this).data('cid');
	      $(".modal-body #hcid").val( hcid );

  	     var cname = $(this).data('cname');
 	     $(".modal-body #cname").val( cname );

 	     var select_type = $(this).data('type');
	     	var type = document.getElementById('type');
		    for(var i = 0, j = type.options.length; i < j; ++i) {
		        if(type.options[i].innerHTML === select_type) {
		           type.selectedIndex = i;
		           break;
		        }
		    }

	     var cperson = $(this).data('cperson');
 	     $(".modal-body #cperson").val( cperson );

 	     var cnumber = $(this).data('cnumber');
	     $(".modal-body #cnumber").val( cnumber );

	     var email = $(this).data('email');
 	     $(".modal-body #email").val( email );

 	     var address = $(this).data('address');
	     $(".modal-body #address").val( address );

	     var tin = $(this).data('tin');
 	     $(".modal-body #tin").val( tin );

 	     var cst = $(this).data('cst');
	     $(".modal-body #cst").val( cst );

	     var pan = $(this).data('pan');
 	     $(".modal-body #pan").val( pan );

 	     var vatuser = $(this).data('vatuser');
	     $(".modal-body #vatuser").val( vatuser );
	     
 	     var vatpass = $(this).data('vatpass');
 	     $(".modal-body #vatpass").val( vatpass );

 	     var fileloc = $(this).data('fileloc');
 	     $(".modal-body #fileloc").val( fileloc );
	});
   	
    </script>
    