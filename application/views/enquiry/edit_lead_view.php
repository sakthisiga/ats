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
                  <div class="panel panel-success">
                    <div class="panel-heading">
                            <strong>Review and Modify Leads</strong>
                    </div>
                        <!-- /.panel-heading -->
                    <div class="panel-body">
                      <div class="table-responsive">

                       <table id="lead_table" class="table table-bordered table-condensed" width="100%">
                       <thead>
                          <tr>
                            <th class="bg-gray-active color-palette" nowrap></th>
                            <th class="bg-maroon color-palette" nowrap colspan="6">Lead Information</th>
                            <th class="bg-yellow color-palette" nowrap colspan="9">Company Registration</th>
                            <th class="bg-purple color-palette" nowrap colspan="6">Audit Jobs</th>
                            <th class="bg-red color-palette" nowrap colspan="9">AGS Registration Jobs</th>
                            <th class="bg-blue color-palette" nowrap colspan="6">Technology Jobs</th>
                            <th class="bg-teal color-palette" nowrap colspan="5">AGS Legal Jobs</th>
                            <th class="bg-gray-active color-palette" nowrap></th>
                          </tr>
                          <tr class="bg-gray color-palette">
                            <th nowrap>S.No</th>
                            <th nowrap>Date</th>
                            <th nowrap>Lead ID</th>
                            <th nowrap>Source</th>
                            <th nowrap>Name 1</th>
                            <!-- <th nowrap>Name 2</th> -->
                            <th nowrap>Contact-1</th>
                            <!-- <th nowrap>Contact-2</th> -->
                            <th nowrap>Email 1</th>
                            <!-- <th nowrap>Email 2</th> -->
                        <!-- Company registration -->
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
                            <th nowrap>Service Tax Filing</th>
                            <th nowrap>Professional Tax Filing</th>
                            <th nowrap>TDS Filing</th>
                            <th nowrap>IT Filing</th>
                            <th nowrap>Consultation</th>
                            <th nowrap>Sales Tax Registration</th>
                            <th nowrap>Service Tac Registration</th>
                            <th nowrap>Professional Tax Registration</th>
                            <th nowrap>MSME Registration</th>
                            <th nowrap>Food License</th>
                            <th nowrap>Fire License</th>
                            <th nowrap>IE Code</th>
                            <th nowrap>Lease Deed</th>
                            <th nowrap>Partnership Deed</th>
                            <th nowrap>Website</th>
                            <th nowrap>Mail</th>
                            <th nowrap>LOGO</th>
                            <th nowrap>Letterpad</th>
                            <th nowrap>Visiting Card</th>
                            <th nowrap>Consultation</th>
                            <th nowrap>Trademark Registration</th>
                            <th nowrap>Trademark Queries Reply</th>
                            <th nowrap>Copyright</th>
                            <th nowrap>Patent Right</th>
                            <th nowrap>Consultation</th>
                            <th nowrap>Created By</th>
                          </tr>
                        </thead>
                        <tbody>
                        
                        <?php 
                          $count = 1;
                           foreach($leads as $row) : ?>
                            <tr>
                              <td nowrap> <?php echo $count; ?> </td>
                              <td nowrap> <?php echo $row->date; ?> </td>
                              <td nowrap> <a href="/home/etc/<?=$row->lid?>" lead_name="<?=$row->name_1?>" class="open-AddBookDialog lead_id"><?php echo "LD".$row->lid; ?>
                                 </a>
                              </td>
                              <td nowrap> <?php echo $row->source; ?> </td>
                              <td nowrap> <?php echo $row->name_1; ?> </td>
                             <!-- <td nowrap> <?php echo $row->name_2; ?> </td> -->
                              <td nowrap> <?php echo $row->contact_1; ?> </td>
                             <!-- <td nowrap> <?php echo $row->contact_2; ?> </td> -->
                              <td nowrap> <?php echo $row->email_1; ?> </td>
                             <!-- <td nowrap> <?php echo $row->email_2; ?> </td> -->
                        <!-- Company registration -->
                              <td nowrap> <small class="label label-success"><?php if($row->new_pvt_company == "Y") echo "YES";?></small> </td>
                              <td nowrap> <small class="label label-success"><?php if($row->new_opc_company == "Y") echo "YES"; ?></small> </td>
                              <td nowrap> <small class="label label-success"><?php if($row->new_llp_company == "Y") echo "YES"; ?></small> </td>
                              <td nowrap> <small class="label label-success"><?php if($row->new_trust == "Y") echo "YES"; ?></small> </td>
                              <td nowrap> <small class="label label-success"><?php if($row->alteration_of_capital == "Y") echo "YES"; ?></small> </td>
                              <td nowrap> <small class="label label-success"><?php if($row->lib_consultation == "Y") echo "YES"; ?></small>  </td>
                              <td nowrap> <small class="label label-success"><?php if($row->address_change == "Y") echo "YES"; ?></small>  </td>
                              <td nowrap> <small class="label label-success"><?php if($row->roc_compliances == "Y") echo "YES"; ?></small>  </td>
                              <td nowrap> <small class="label label-success"><?php if($row->alteration_of_directors == "Y") echo "YES"; ?></small>  </td>
                              <td nowrap> <small class="label label-success"><?php if($row->sales_tax_filing == "Y") echo "YES"; ?></small>  </td>
                              <td nowrap> <small class="label label-success"><?php if($row->service_tax_filing == "Y") echo "YES"; ?></small>  </td>
                              <td nowrap> <small class="label label-success"><?php if($row->prof_tax_filing == "Y") echo "YES"; ?></small>  </td>
                              <td nowrap> <small class="label label-success"><?php if($row->tds_filing == "Y") echo "YES"; ?></small>  </td>
                              <td nowrap> <small class="label label-success"><?php if($row->it_filing == "Y") echo "YES"; ?></small>  </td>
                              <td nowrap> <small class="label label-success"><?php if($row->ajb_consultation == "Y") echo "YES"; ?></small>  </td>
                              <td nowrap> <small class="label label-success"><?php if($row->sales_tax_registration == "Y") echo "YES"; ?></small>  </td>
                              <td nowrap> <small class="label label-success"><?php if($row->service_tax_registration == "Y") echo "YES"; ?></small>  </td>
                              <td nowrap> <small class="label label-success"><?php if($row->prof_tax_registration == "Y") echo "YES"; ?></small>  </td>
                              <td nowrap> <small class="label label-success"><?php if($row->msme_registration == "Y") echo "YES"; ?></small>  </td>
                              <td nowrap> <small class="label label-success"><?php if($row->food_license == "Y") echo "YES"; ?></small>  </td>
                              <td nowrap> <small class="label label-success"><?php if($row->fire_license == "Y") echo "YES"; ?></small>  </td>
                              <td nowrap> <small class="label label-success"><?php if($row->ie_code == "Y") echo "YES"; ?></small>  </td>
                              <td nowrap> <small class="label label-success"><?php if($row->lease_deed == "Y") echo "YES"; ?></small>  </td>
                              <td nowrap> <small class="label label-success"><?php if($row->partnership_deed == "Y") echo "YES"; ?></small>  </td>
                              <td nowrap> <small class="label label-success"><?php if($row->website == "Y") echo "YES"; ?></small>  </td>
                              <td nowrap> <small class="label label-success"><?php if($row->mail == "Y") echo "YES"; ?></small>  </td>
                              <td nowrap> <small class="label label-success"><?php if($row->logo == "Y") echo "YES"; ?></small>  </td>
                              <td nowrap> <small class="label label-success"><?php if($row->letter_pad == "Y") echo "YES"; ?></small>  </td>
                              <td nowrap> <small class="label label-success"><?php if($row->visiting_card == "Y") echo "YES"; ?></small>  </td>
                              <td nowrap> <small class="label label-success"><?php if($row->tj_consultation == "Y") echo "YES"; ?></small>  </td>
                              <td nowrap> <small class="label label-success"><?php if($row->trademark_registration == "Y") echo "YES"; ?></small>  </td>
                              <td nowrap> <small class="label label-success"><?php if($row->trademark_queries_reply == "Y") echo "YES"; ?></small>  </td>
                              <td nowrap> <small class="label label-success"><?php if($row->copyright == "Y") echo "YES"; ?></small>  </td>
                              <td nowrap> <small class="label label-success"><?php if($row->patent_right == "Y") echo "YES"; ?></small>  </td>
                              <td nowrap> <small class="label label-success"><?php if($row->alj_consultation == "Y") echo "YES"; ?></small>  </td>

                              <td nowrap> <small class="label label-warning"><?php echo $row->user; ?></small> </td>
                            </tr>
                       <?php $count++; endforeach;?>
                </tbody>
              </table>
              </div> <!-- table-responsive -->
              </div> <!-- Panel-body -->
             </div> <!-- col-xs-12 -->
            </div> <!-- container container-main -->
          </section>
        </div> <!--container container-main -->
  </div> <!-- content-wrapper -->

<script>

     $(function () {
            $('#lead_table').DataTable({
              "paging": true,
              "lengthChange": true,
              "searching": true,
              "ordering": true
            });
          });
     $(".lead_id").click(function(e){
       e.preventDefault();
    //alert($(this).attr('href'));

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
          title:    "LD: " + $(this).attr('lead_name'),
          size:     { width: 400, height: 200 },
          position: "center",
          theme:    "primary",
          content: $(this).attr('href')
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