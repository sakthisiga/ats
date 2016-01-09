 <div class="content-wrapper">
        <div class="container">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              
              <small></small>
            </h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Service Tax</a></li>
              <li><a href="#">Add Client</a></li>
              
            </ol>
          </section>

          <!-- Main content -->
          <section class="content">
            
            
             <!-- SELECT2 EXAMPLE -->
          <div class="box box-success">
          <div id="notify"><!-- Error/Success/Warning Notifications go here.. --></div>	
            <div class="box-header with-border">
              <h3 class="box-title">Client Registration</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
            </div><!-- /.box-header -->
            <div class="box-body">
           <form id="create_client" class="form-horizontal" method="post" action="<?=site_url('api/add_client')?>">
              <div class="row">
              
              
                <div class="col-md-6">
                  <div class="form-group">
                    
                      <div class="box-body">
                      
                    	<div class="form-group form-group-sm">
      						<label class="col-sm-3 control-label" for="sm">Date</label>
      						<div class="col-sm-8">
        						<input class="form-control" type="text" id="cdate" name="cdate" value="<?=date('d'.'/'.'m'.'/'.'Y');?>">
      						</div>
    					</div>
    					
    					<div class="form-group form-group-sm">
      						<label class="col-sm-3 control-label" for="sm">Name</label>
      						<div class="col-sm-8">
        						<input class="form-control" type="text" id="name" name="name">
      						</div>
    					</div>
    					
    					<div class="form-group form-group-sm">
      						<label class="col-sm-3 control-label" for="sm">Type</label>
      						<div class="col-sm-8">
        						<input class="form-control" type="text" id="type" name="type">
      						</div>
    					</div>
    					
    					<div class="form-group form-group-sm">
      						<label class="col-sm-3 control-label" for="sm">Contact Person</label>
      						<div class="col-sm-8">
        						<input class="form-control" type="text" id="contactperson" name="contactperson">
      						</div>
    					</div>
    					
    					<div class="form-group form-group-sm">
      						<label class="col-sm-3 control-label" for="sm">Contact No</label>
      						<div class="col-sm-8">
        						<input class="form-control" type="text" id="contactno" name="contactno">
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
        						<input class="form-control" type="text" id="tinno" name="tinno">
      						</div>
    					</div>
    					
    					<div class="form-group form-group-sm">
      						<label class="col-sm-3 control-label" for="sm">CST No</label>
      						<div class="col-sm-8">
        						<input class="form-control" type="text" id="cstno" name="cstno">
      						</div>
    					</div>
    					
    					<div class="form-group form-group-sm">
      						<label class="col-sm-3 control-label" for="sm">PAN No</label>
      						<div class="col-sm-8">
        						<input class="form-control" type="text" id="panno" name="panno">
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
              <div class="col-sm-5"></div>
            <div class="col-sm-3">
              <button type="submit" class="btn btn-primary">Register</button>
              <button type="reset" class="btn btn-default">Reset</button>
            </div><!-- /.col -->
            <div class="col-sm-3"></div>
            
          </div>
          
          </form>
           <div class="col-sm-12">
              
              <a data-toggle="modal" title="Add this item" 
										class="btn btn-success pull-right" 
										href="#myModal"><b><i class="fa fa-plus-square"></i> Import Clients</b></a>
            </div><!-- /.col -->
            </div><!-- /.box-body -->
            <div class="box-footer">
              Here some description about the form 
            </div>
          </div><!-- /.box -->
          
           <div id="myModal" class="modal fade" role="dialog">
				  <div class="modal-dialog modal-sm">
				
				    <!-- Modal content-->
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" onclick="pageload()">&times;</button>
				        <h4 class="modal-title"><strong>Upload the CSV File</strong></h4>
				      </div>
				      <div class="modal-body">
				      			<form method="post" action="<?=site_url('api/do_upload')?>" enctype="multipart/form-data" id="upload_csv" />
									<input type="file" name="userfile" size="10" class="btn btn-primary btn-sm" /><br />
									<input type="submit" value="upload" class="btn btn-warning btn-xs" />
								</form>
				       </div>
				    </div>
				  </div>
				 </div>
				 
				   
            
            
          </section><!-- /.content -->
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
      
      <script>
      $(function () {
		//Date Picker
		$('#cdate').datepicker({
			 startDate: '0d',
			 format: 'dd/mm/yyyy',
		     autoclose: true
		});
      });
    </script>
    
    