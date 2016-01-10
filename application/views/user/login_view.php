 <div class="content-wrapper">
        <div class="container">
          <!-- Content Header (Page header) -->
          <section class="content-header">
    <div class="login-box">
    
    <div class="span4 offset4">
    	 <div id="notify"><!-- Error/Success/Warning Notifications go here.. --></div>	
    </div>
    
      <div class="login-logo">
        <a href="<?=base_url()?>login"><b>Aanoor TAX </b><small>| Portal</small></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <form id="login_page" class="form-signin" method="post" action="<?=site_url('api/login')?>">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" id="username" name= "username" placeholder="User Name">
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
           
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
          </div>
        </form>

        <a href="#">I forgot my password</a><br>
        

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

      
            
          </section><!-- /.content -->
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
  

<script type="text/javascript">
$(function(){
	    $("#login_page").submit(function(evt){
	        evt.preventDefault();
	        var url = $(this).attr('action');
	        var postData = $(this).serialize();
	        //var dataType = "json";
	        
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
    
