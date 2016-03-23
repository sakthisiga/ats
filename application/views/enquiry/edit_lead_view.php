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
	         
	         <button id="jspanel-open" type="button" class="btn btn-info btn-sm sample">Open Metro Pop-up</button>
	          </div>
          </section>
       </div>
</div>
<script>
$('#jspanel-open').click(function () {
	"use strict";
	$.jsPanel ({
		addClass: {
			header: false,
			content: false,
			footer: false
		},
		ajax: false,
		autoclose: false,
		bootstrap: false,
		callback: undefined,
		content:  false,
		controls:  {
			buttons:  true,
			iconfont: false
		},
		draggable: {
			handle:  'div.jsPanel-hdr, div.jsPanel-ftr',
			stack:   '.jsPanel',
			opacity: 0.6
		},
		id: function(){
			$(this).first().uniqueId()
		},
		load: false,
		paneltype: false,
		offset: {
			top: 0,
			left: 0
		},
		overflow: 'hidden',
		position: 'auto',
		removeHeader: false,
		resizable: {
			handles: 'e, s, w, se, sw',
			autoHide: false,
			minWidth: 250,
			minHeight: 93
		},
		rtl: false,
		selector: 'body',
		show: 'fadeIn',
		size: {
			width:  400,
			height: 222
		},
		theme: 'light',
		title: function(){
			return 'jsMetro No ' + ($('.jsPanel').length + 1)
		},
		toolbarFooter: false,
		toolbarHeader: false
	});
});
</script>
</script>      