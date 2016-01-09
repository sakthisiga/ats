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
          	<div id="notify"><!-- Error/Success/Warning Notifications go here.. --></div>	
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
								<td> <?php echo "ATS".$row->client_id; ?></td>
								<td> <?php echo $row->cname; ?> </td>
								<td> <?php echo $row->type; ?> </td>
								<td> <?php echo $row->cnumber; ?> </td>
								<td> <?php echo $row->email; ?> </td>
							</tr>
					   <?php endforeach;?>
                    </tbody>
                  </table>
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
      $(function () {
        $('#client_table').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true
        });
      });
    </script>
    