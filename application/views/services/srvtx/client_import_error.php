<div class="content-wrapper">
        <!-- Content Header (Page header) -->
   <section class="content">
   
   <div class="error-page">
            <h2 class="headline text-red"><i class="fa fa-exclamation-circle"></i></h2>
            <div class="error-content">
              <h3>Oops! Error in importing the CSV data into application.</h3>
              <p>
                <b><?php echo $error;?></b>Please try again by click the "Import Clients" or <a href="<?=base_url()?>Srvtax/addClient">click here</a> to the Client Registration Form.
              </p>
                 <a data-toggle="modal" title="Add this item" 
										class="btn btn-warning" 
										href="#myModal"><b>Import Clients</b></a>
            </div>
          </div><!-- /.error-page -->
   
   
         
          
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