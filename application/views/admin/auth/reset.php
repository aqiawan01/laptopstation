<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title><?php echo $title ?> - Laptop Station</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />
<!-- BEGIN CORE CSS FRAMEWORK -->
<link href="/assets/admin/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="/assets/admin/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="/assets/admin/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="/assets/admin/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="/assets/admin/css/animate.min.css" rel="stylesheet" type="text/css"/>
<!-- END CORE CSS FRAMEWORK -->
<!-- BEGIN CSS TEMPLATE -->
<link href="/assets/admin/css/style.css" rel="stylesheet" type="text/css"/>
<link href="/assets/admin/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="/assets/admin/css/magic_space.css" rel="stylesheet" type="text/css"/>
<link href="/assets/admin/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
<!-- END CSS TEMPLATE -->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="error-body no-top lazy"  data-original="/assets/admin/img/work.jpg"  style="background-image: url('/assets/admin/img/work.jpg')"> 
  <div class="container">
    <div class="row login-container animated fadeInUp">  
      <div class="col-md-7 col-md-offset-2 tiles white no-padding">
		    <div class="p-t-30 p-l-40 p-b-20 xs-p-t-10 xs-p-l-10 xs-p-b-10"> 
          <h2 class="normal"><?php echo $title; ?></h2>
        </div>
      <div class="tiles grey p-t-20 p-b-20 text-black">
        <?php
	        $attributes = [ 'name' => 'formResetPassword', 'id' => 'formResetPassword', 'class' => 'animated fadeIn']; 
	        echo form_open('', $attributes);
	      ?>     
	        <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
            <div class="col-md-6 col-sm-6">
              <input name="new_password" id="new_password" type="password" class="form-control" placeholder="New Password">
            </div>
          </div>
          <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
            <div class="col-md-6 col-sm-6">
              <input name="retype_password" id="retype_password" type="password"  class="form-control" placeholder="Retype Password">
            </div>
          </div>
        <div class="row p-t-10 m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
          <div class="control-group  col-md-10">
			<button type="submit" class="btn btn-primary btn-cons" id="login_toggle"><?php echo $title; ?></button>
          </div>
        </div>
      <?php echo form_close(); ?>	
  	</div>   
  </div>   
</div>
</div>
<!-- END CONTAINER -->
<!-- BEGIN CORE JS FRAMEWORK-->
<script src="/assets/admin/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="/assets/admin/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/assets/admin/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="/assets/admin/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="/assets/admin/plugins/jquery-lazyload/jquery.lazyload.min.js" type="text/javascript"></script>
<script src="/assets/admin/js/login_v2.js" type="text/javascript"></script>
<!-- BEGIN CORE TEMPLATE JS -->
<!-- END CORE TEMPLATE JS -->
</body>
</html>