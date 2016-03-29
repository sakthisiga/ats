 <div class="content-wrapper">
        <div class="container container-main">
	          <section class="content-header"><!-- Content Header Starts (Page header) -->
	            <h1>
	              <small></small>
	            </h1>
	            <ol class="breadcrumb">
	              <li><a href="#"><i class="fa fa-dashboard"></i> Enquiry</a></li>
	              <li><a href="#">View / Edit Lead</a></li>   
	            </ol>
	          </section><!-- Content Header Ends (Page header) -->
          <section class="content"><!-- Main content ends-->	        
	         <div class="container container-main">
              <div class="col-xs-12">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                            Review and Modify Leads
                    </div>
                        <!-- /.panel-heading -->
                    <div class="panel-body">
                      <div class="table-responsive">

                       <table id="lead_table" class="table table-bordered table-condensed" width="100%">
                        <thead>
                          <tr class="bg-gray-active color-palette">
                            <th nowrap>Date</th>
                            <th nowrap>Lead ID</th>
                            <th nowrap>Source</th>
                            <th nowrap>Name 1</th>
                            <th nowrap>Name 2</th>
                            <th nowrap>Contact-1</th>
                            <th nowrap>Contact-2</th>
                            <th nowrap>Email 1</th>
                            <th nowrap>Email 2</th>
                            <th nowrap>New PVT Company</th>
                            <th nowrap>New OPC Company</th>
                            <th nowrap>New LLP Company</th>
                            <th nowrap>New Trust</th>
                            <th nowrap>Alteration of Capital</th>
                            <th nowrap>Consultation</th>
                            <th nowrap>Address Change</th>
                            <th nowrap>ROC Compliances</th>
                            <th nowrap>Alteration of Directors</th>
                            <th nowrap>Sales Tax Filing</th>
                            <th nowrap>User</th>
                          </tr>
                        </thead>
                        <tbody>
                        
                        <?php foreach($leads as $row) : ?>
                            <tr>
                              <td nowrap> <?php echo $row->date; ?> </td>
                              <td nowrap> <a class="open-AddBookDialog"><?php echo "LD".$row->lid; ?>
                                 </a>
                              </td>
                              <td nowrap> <?php echo $row->source; ?> </td>
                              <td nowrap> <?php echo $row->name_1; ?> </td>
                              <td nowrap> <?php echo $row->name_2; ?> </td>
                              <td nowrap> <?php echo $row->contact_1; ?> </td>
                              <td nowrap> <?php echo $row->contact_2; ?> </td>
                              <td nowrap> <?php echo $row->email_1; ?> </td>
                              <td nowrap> <?php echo $row->email_2; ?> </td>
                              <td nowrap> <?php echo $row->new_pvt_company; ?> </td>
                              <td nowrap> <?php echo $row->new_opc_company; ?> </td>
                              <td nowrap> <?php echo $row->new_llp_company; ?> </td>
                              <td nowrap> <?php echo $row->new_trust; ?> </td>
                              <td nowrap> <?php echo $row->alteration_of_capital; ?> </td>
                              <td nowrap> <?php echo $row->lib_consultation; ?> </td>
                              <td nowrap> <?php echo $row->address_change; ?> </td>
                              <td nowrap> <?php echo $row->roc_compliances; ?> </td>
                              <td nowrap> <?php echo $row->alteration_of_directors; ?> </td>
                              <td nowrap> <?php echo $row->sales_tax_filing; ?> </td>
                              <td nowrap> <?php echo $row->user; ?> </td>
                            </tr>
                       <?php endforeach;?>
                </tbody>
              </table>
              </div> <!-- table-responsive -->
              </div> <!-- Panel-body -->
             </div> <!-- col-xs-12 -->
            </div> <!-- container container-main -->
          </section>
        </div> <!--container container-main -->
  </div> <!-- content-wrapper -->



	           <!-- <button id="btn1" type="button" class="btn btn-info btn-sm sample">Open Metro Pop-up</button> -->

<script>

     $(function () {
            $('#lead_table').DataTable({
              "paging": true,
              "lengthChange": true,
              "searching": true,
              "ordering": true
            });
          });


        $('#btn1').click(function(e){
            e.preventDefault();
           $.jsPanel({
           		 dblclicks: {
			        title:   "maximize"
			    },

           	 	draggable: {
        					drag: function( event, ui ) {
    							ui.position.top = Math.min( 10, ui.position.bottom )
    							ui.position.bottom = Math.min( 50, ui.position.top )
 									 					}
    					},
  				maximizedMargin: {
        			top:    60,
        			right:  20,
        			bottom: 50,
        			left:   20
    							},
			    title:    "New Lead",
    			size:     { width: 400, height: 200 },
    			position: "center",
    			theme:    "success"
});
        });
</script>     