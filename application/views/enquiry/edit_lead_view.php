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
                  <div class="panel panel-primary">
                    <div class="panel-heading">
                            <strong>Review and Modify Leads</strong>
                    </div>
                        <!-- /.panel-heading -->
                    <div class="panel-body">
                      <div id="notify"><!-- Error/Success/Warning Notifications go here.. --></div>
                    <div id="edit_lead">
                     <!-- Lead edit Form goes here -->
                      </div>
                      <div class="table-responsive">

                       <table id="lead_table" class="table table-bordered table-condensed" width="100%">
                       <thead>
                          <tr>
                            
                            <th class="bg-maroon color-palette" nowrap colspan="6">Lead Information</th>
                            <th class="bg-yellow color-palette" nowrap colspan="9">Company Registration</th>
                            <th class="bg-purple color-palette" nowrap colspan="6">Audit Jobs</th>
                            <th class="bg-red color-palette" nowrap colspan="9">AGS Registration Jobs</th>
                            <th class="bg-blue color-palette" nowrap colspan="6">Technology Jobs</th>
                            <th class="bg-teal color-palette" nowrap colspan="5">AGS Legal Jobs</th>
                            <th class="bg-gray-active color-palette" nowrap></th>
                          </tr>
                          <tr class="bg-gray color-palette">
                            
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

                         <tfoot>
                            <tr class="bg-gray color-palette">
                       
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
                        </tfoot>
                        <tbody>
                        
                        <?php 
                        
                           foreach($leads as $row) : ?>
                            <tr>
                          
                              <td nowrap> <?php echo $row->date; ?> </td>
                              <td nowrap> <a href="../api/edit_lead_info" data-id="<?=$row->lid; ?>" class="open-AddBookDialog lead_id"><?php echo "LD".$row->lid; ?>
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

<script>

  $("#company_edit").click(function() {
       alert("hai");
  });



$(document).ready(function() {
  var d = new Date();
  var month = d.getMonth()+1;
var day = d.getDate();
var year = d.getFullYear();
var hours = d.getHours();   //get hour using date object
var minutes = d.getMinutes();    //get minutes using date object
var date = month + "-" + day + "-" + year + "_" + hours + "h-" + minutes + "m";
    // Setup - add a text input to each footer cell
    $('#lead_table tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" placeholder="Search"/>' );
    } );
 
    // DataTable
    var table =   $('#lead_table').DataTable({
              "paging": true,
              "searching": true,
              "ordering": true,
              "dom": 'Bfrtip<"bottom"l>',
              "pagingType": "full_numbers",
                 buttons: [{
                        extend: 'copy'
                    },
                    {
                        extend: 'excelHtml5',
                        title: 'AanoorTax_Lead_Details_' + date
                    }],
                       "blengthChange": true
            });
 
    // Apply the search
    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );
} );
/*
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
              top:    80,
              right:  20,
              bottom: 50,
              left:   20
                  },
          title:    "LD: " + $(this).attr('lead'),
          size:     { width: 1100, height: 500 },
          position: "center",
          theme:    "primary",
          content: function(){
        $(this).load("../enquiry/modifyLead");
    }
 });
});

     */
</script>     