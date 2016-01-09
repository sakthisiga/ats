<div class="content-wrapper">
        <!-- Content Header (Page header) -->
   <section class="content">
          <div class="row">
          	<div class="col-md-6 col-md-offset-3">
          		<div class="callout callout-danger">
                    <h4>Error in File Upload</h4>
                    <p><?php echo $error;?></p>
                  </div>
                 <a data-toggle="modal" title="Add this item" 
										class="btn btn-success pull-right" 
										href="#myModal"><b><i class="fa fa-plus-square"></i> Import Clients</b></a>
          		</div>
          </div>
          
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
   </section>
</div>