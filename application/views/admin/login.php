<!DOCTYPE html>
<html>
<!-- BEGIN HEAD -->
<head>
  <meta charset="utf-8" />
  <title>Wizard Admin Login</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="description" />
  <meta content="" name="author" />
  <link href="<?=base_url()?>assets/admin/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?=base_url()?>assets/admin/css/metro.css" rel="stylesheet" />
  <link href="<?=base_url()?>assets/admin/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="<?=base_url()?>assets/admin/css/style.css" rel="stylesheet" />
  <link href="<?=base_url()?>assets/admin/css/style_responsive.css" rel="stylesheet" />
  <link href="<?=base_url()?>assets/admin/css/style_default.css" rel="stylesheet" id="style_color" />
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/admin/uniform/css/uniform.default.css" />
  <link href="<?=base_url()?>assets/admin/css/login-soft.css" rel="stylesheet" />
  <link rel="shortcut icon" href="<?=base_url()?>assets/admin/img/favicon.ico" />
  <script type="text/javascript">var base_url= '<?=base_url();?>',token= '<?=$this->security->get_csrf_hash();?>';</script>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
   <!-- BEGIN LOGO -->
   <div class="logo">
       <img src="<?=base_url()?>assets/admin/img/logo-big.png" alt="" /> 
   </div>
   <!-- END LOGO -->
   <!-- BEGIN LOGIN -->
   <div class="content">
      <!-- BEGIN LOGIN FORM -->
      <form class="form-vertical login-form" action="" method="post" enctype="multipart/form-data">
         <h3 class="form-title">Login to your account</h3>
         <div class="alert alert-error hide">
            <button class="close" data-dismiss="alert"></button>
            <span>Enter any username and password.</span>
         </div>
         <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Username</label>
            <div class="input-icon">
               <i class="icon-user"></i>
               <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username"/>
            </div>
         </div>
         <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Password</label>
            <div class="input-icon">
               <i class="icon-lock"></i>
               <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"/>
            </div>
         </div>
         <div class="form-actions">
            <label class="checkbox">
            <input type="checkbox" name="remember" value="1"/> Remember me
            </label>
            <button type="button" class="btn blue pull-right" id="_btnLogin">
            Login <i class="m-icon-swapright m-icon-white"></i>
            </button>            
         </div>
         <div class="forget-password">
            <h4>Forgot your password ?</h4>
            <p>
               no worries, click <a href="javascript:;"  id="forget-password">here</a>
               to reset your password.
            </p>
         </div>
      </form>
      <!-- END LOGIN FORM -->        
      <!-- BEGIN FORGOT PASSWORD FORM -->
      <form class="forget-form" action="" method="post">
         <h3 >Forget Password ?</h3>
         <p>Enter your e-mail address below to reset your password.</p>
         <div class="form-group">
            <div class="input-icon">
               <i class="icon-envelope"></i>
               <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" />
               <input type="hidden" name="token" value="<?=$this->security->get_csrf_hash();?>" />
            </div>
         </div>
         <div class="form-actions">
            <button type="button" id="back-btn" class="btn">
            <i class="m-icon-swapleft"></i> Back
            </button>
            <button type="submit" class="btn blue pull-right">
            Submit <i class="m-icon-swapright m-icon-white"></i>
            </button>            
         </div>
      </form>
      <!-- END FORGOT PASSWORD FORM -->
   </div>
   <!-- END LOGIN -->
   <!-- BEGIN COPYRIGHT -->
   <div class="copyright">
      2014 &copy; Wizardww Admin.
   </div>
   <!-- END COPYRIGHT -->
   <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
   <!-- BEGIN CORE PLUGINS -->   
   <!--[if lt IE 9]>
   <script src="assets/plugins/respond.min.js"></script>
   <script src="assets/plugins/excanvas.min.js"></script> 
   <![endif]-->   
  <script src="<?=base_url()?>assets/admin/js/jquery-1.8.3.min.js"></script>
  <script src="<?=base_url()?>assets/admin/uniform/jquery.uniform.min.js"></script> 
   <script src="<?=base_url()?>assets/admin/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
  <script src="<?=base_url()?>assets/admin/js/login-soft.js"></script>
  <script src="<?=base_url()?>assets/admin/js/login.js"></script>
   <!-- END PAGE LEVEL SCRIPTS --> 
	<script type="text/javascript">
		$(function(){
			Login.init();		
		});
	</script>
   <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>