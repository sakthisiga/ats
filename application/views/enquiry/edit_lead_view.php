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
	         
	         <button id="btn1" type="button" class="btn btn-info btn-sm sample">Open Metro Pop-up</button>
	          </div>
          </section>
       </div>
</div>

<script>
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