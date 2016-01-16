<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aanoor Tax Solutions | Portal</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
 <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?=base_url()?>public/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?=base_url()?>public/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?=base_url()?>public/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?=base_url()?>public/boot/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="<?=base_url()?>public/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?=base_url()?>public/css/_all-skins.min.css">
    <link rel="stylesheet" href="<?=base_url()?>public/boot/datepicker/datepicker3.css">
    <link rel="stylesheet" href="<?=base_url()?>public/boot/daterangepicker/daterangepicker-bs3.css">
        
        

 <!-- jQuery 2.1.4 -->
    <script src="<?=base_url()?>public/js/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?=base_url()?>public/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>public/boot/datatables/jquery.dataTables.min.js"></script>
    <script src="<?=base_url()?>public/boot/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="<?=base_url()?>public/boot/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?=base_url()?>public/boot/fastclick/fastclick.min.js"></script>
    
    <script src="<?=base_url()?>public/boot/datepicker/bootstrap-datepicker.js"></script>
    <script src="<?=base_url()?>public/boot/daterangepicker/daterangepicker.js"></script>
    <!-- AdminLTE App -->
    <script src="<?=base_url()?>public/boot/dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?=base_url()?>public/boot/dist/js/demo.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
     <!-- Project Enablement Section -->
     
     		<script src="<?=base_url()?>public/js/js_home/dashboard/template.js"></script>
        	<script src="<?=base_url()?>public/js/js_home/dashboard/event.js"></script>
     		<script src="<?=base_url()?>public/js/js_home/dashboard/display.js"></script>  
        	<script src="<?=base_url()?>public/js/js_home/dashboard.js"></script>
        	
      <!-- FAVICON file -->
		<link rel="shortcut icon" href="<?php echo base_url();?>public/img/favicon.png">  	
        
     <script type="text/javascript">
            //Init the Dashboard Application
            $(function() {
                // Init application
            var dashboard = new Dashboard();
            });

        </script>    
        
  </head>
  <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
  <body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">

      <header class="main-header">
        <nav class="navbar navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <a href="/ats" class="navbar-brand"><b>Aanoor</b>TAX</a>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
              <ul class="nav navbar-nav">
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Enquiry <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="<?=base_url()?>enquiry/addLead">New Lead</a></li>
                    <li><a href="">From Existing Customer</a></li>
                    <li><a href="#">View/Modify Enquiry</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Allocation of Work</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Service Tax <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="<?=base_url()?>Srvtax/addClient">Add Client</a></li>
                    <li><a href="<?=base_url()?>Srvtax/viewClient">View/Edit Client</a></li>
                    <li><a href="#">Invoice</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Sample1</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Sample2</a></li>
                  </ul>
                </li>
              </ul>

            </div><!-- /.navbar-collapse -->
            <!-- Navbar Right Menu -->
              <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">

                  <!-- User Account Menu -->
	                   <li class="dropdown">
	                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?=$this->session->userdata('fname')?> <span class="caret"></span></a>
	                  <ul class="dropdown-menu" role="menu">
	                  <?php 
	                  if($this->session->userdata('group') > 0) {?>
	                  	<li><a href="<?=base_url()?>login/register">Register</a></li>
	                  <?php }?>
	                    <li><a href="#">Profile</a></li>
	                    <li><a href="<?=base_url()?>login/logout">Logout</a></li>
	                  </ul>
	                </li>
                 </ul>
              </div><!-- /.navbar-custom-menu -->
          </div><!-- /.container-fluid -->
        </nav>
      </header>
