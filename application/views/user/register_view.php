 <div class="content-wrapper">
        <div class="container">
          <!-- Content Header (Page header) -->
           <section class="content-header">
            <h1>
              
              <small></small>
            </h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> User</a></li>
              <li><a href="#">Register</a></li>
              
            </ol>
          </section>
          
          <section class="content">
          
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">User Registration</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              </div>
            </div><!-- /.box-header -->
          	<div class="box-body">
			<div class="col-md-3"></div>
			<div class="col-md-4">
  
     
        <form id="register-form" class="form-signin" method="post" action="<?=site_url('api/register')?>">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="fname" placeholder="First Name">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="lname" placeholder="Last Name">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          
          <div class="form-group has-feedback">
            <input type="email" class="form-control" name="email" placeholder="Email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
           <div class="form-group has-feedback">
            <select name="group" class="form-control" placeholder="Group">
					<option value="" disabled selected>-- Group --</option>
					<option value="0">Standard</option>
					<option value="1">Admin</option>
			</select>
          </div>
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="user" placeholder="User Name">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
         
          
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="confirm_password" placeholder="Retype password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
            </div><!-- /.col -->
          </div>
        </form>

      </div><!-- /.form-box -->
      
      



<div class="col-md-4">

	     <div id="notify"><!-- Error/Success/Warning Notifications go here.. --></div>	

</div>
</div>
     </div><!-- Box Ends -->
          </section><!-- /.content -->
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->

    <script type="text/javascript">
$(function(){
    $("#register-form").submit(function(evt){
        evt.preventDefault();
        var url = $(this).attr('action');
        var postData = $(this).serialize();
        
        $.post(url, postData, function(o){
           if(o.result == 1) {
               window.location.href = '<?=site_url('home')?>';
           } 
           else
           {
        	   Display.error(o.error);   
           }
        },'json');
    });
});
</script>
    </body>