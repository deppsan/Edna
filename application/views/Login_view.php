<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<title>Edna | BETA</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="width=device-width, initial-scale=1" name="viewport"/>
		<meta content="" name="description"/>
		<meta content="" name="author"/>
		<!-- BEGIN GLOBAL MANDATORY STYLES -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
		<link href="<?php echo base_url();?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
		<link href="<?php echo base_url();?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
		<link href="<?php echo base_url();?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<link href="<?php echo base_url();?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
		<link href="<?php echo base_url();?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
		<!-- END GLOBAL MANDATORY STYLES -->
		<!-- BEGIN PAGE LEVEL STYLES -->
		<link href="<?php echo  base_url();?>assets/global/plugins/select2/select2.css" rel="stylesheet" type="text/css"/>
		<link href="<?php echo base_url();?>assets/admin/pages/css/login-soft.css" rel="stylesheet" type="text/css"/>
		<!-- END PAGE LEVEL SCRIPTS -->
		<!-- BEGIN THEME STYLES -->
		<link href="<?php echo base_url();?>assets/global/css/components.css" rel="stylesheet" type="text/css"/>
		<link href="<?php echo base_url();?>assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
		<link href="<?php echo base_url();?>assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
		<link id="style_color" href="<?php echo base_url();?>assets/admin/layout/css/themes/default.css" rel="stylesheet" type="text/css"/>
		<link href="<?php echo base_url();?>assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
		<link href="<?php echo base_url();?>assets/global/plugins/bootstrap-toastr/toastr.min.css" rel="stylesheet" type="text/css"/>

		<!-- END THEME STYLES -->
		<link rel="shortcut icon" href="favicon.ico"/>
	</head>
	<script>
		function cancelSubmit(){
			
			if (event.keyCode == 13){ 
				event.cancelBubble = true;
				event.returnValue = false;       
				if(document.getElementById("txtUserName").value != ""){
					if(document.getElementById("txtPassword").value != ""){
						$("#lnkLogin").click();
					}else{
						document.getElementById("txtPassword").focus();
					}
				}
	         }
		}		
		
	</script>
<body class="login" >
	<!-- BEGIN LOGIN -->
	<div class="logo">
			
	</div>
	<div class="content">
		<!-- BEGIN LOGIN FORM -->
		<form class="login-form" action="<?php echo site_url('index.php/logon_controller/validar')?>" method="post" id="frmLogin">
			<h3 class="form-title">Login to your account</h3>
			<div class="alert alert-danger display-hide">
				<button class="close" data-close="alert"></button>
				<span>
				Enter any username and password. </span>
			</div>
			<div class="form-group">
				<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
				<label class="control-label visible-ie8 visible-ie9">Username</label>
				<div class="input-icon">
					<i class="fa fa-user"></i>
					<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="txtUserName" id="txtUserName" onkeydown="cancelSubmit()"//>
				</div>
			</div>
			<div class="form-group">
				<label class="control-label visible-ie8 visible-ie9">Password</label>
				<div class="input-icon">
					<i class="fa fa-lock"></i>
					<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="txtPassword" id="txtPassword" onkeydown="cancelSubmit()"/>
				</div>
			</div>
			<div class="form-actions row">
				<a class="btn blue pull-right" id="lnkLogin" href="javascript:;">
				Login <i class="m-icon-swapright m-icon-white"></i>
				</a>
			</div>
			<?php if($error){echo '<div class="row alert alert-danger" id="error">Your user and/or password are incorrect, please validate.</div>';}else{echo '<div class="row alert alert-danger" style="display:none;" id="error">Your user and/or password are incorrect, please validate.</div>';} ?>
			<div class="login-options">
				<h4>Or login with</h4>
				<ul class="social-icons">
					<li>
						<a class="googleplus" data-original-title="Goole Plus" href="#">
						</a>
					</li>
				</ul>
			</div>
			<div class="forget-password">
				<h4>Forgot your password ?</h4>
				<p>
					 no worries, click <a href="javascript:;" id="forget-password">
					here </a>
					to reset your password.
					
				</p>
			</div>
		</form>

		<!-- END LOGIN FORM -->
		<!-- BEGIN FORGOT PASSWORD FORM -->
		<form class="forget-form" action="index.jsp" method="post">
			<h3>&Oacute;lvidaste tu Contrase&ntilde;a?</h3>
			<p>
				 Introduce tu Correo para reestableces tu Contrase&ntilde;a
			</p>
			<div class="form-group">
				<div class="input-icon">
					<i class="fa fa-envelope"></i>
					<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email"/>
				</div>
			</div>
			<div class="form-actions">
				<button type="button" id="back-btn" class="btn">
				<i class="m-icon-swapleft"></i> Regresar </button>
				<button type="submit" class="btn green pull-right">
				Aceptar <i class="m-icon-swapright m-icon-white"></i>
				</button>
			</div>
		</form>
		<!-- END FORGOT PASSWORD FORM -->
		
	</div>

	</body>
		<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->
	<!--[if lt IE 9]>
	<script src="<?php echo base_url();?>assets/global/plugins/respond.min.js"></script>
	<script src="<?php echo base_url();?>assets/global/plugins/excanvas.min.js"></script> 
	<![endif]-->
	<script src="<?php echo base_url();?>assets/global/plugins/jquery-1.11.0.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/global/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="<?php echo base_url();?>assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
	<!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script src="<?php echo base_url();?>assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/global/plugins/select2/select2.min.js"></script>
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="<?php echo base_url();?>assets/global/scripts/metronic.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/admin/pages/scripts/login-soft.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/global/plugins/bootstrap-toastr/toastr.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/functions.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/js/login.js" type="text/javascript"></script>

	<!-- END PAGE LEVEL SCRIPTS -->
	<script>
	
	jQuery(document).ready(function() {     
	  Metronic.init(); // init metronic core components
	Layout.init(); // init current layout
	QuickSidebar.init(); // init quick sidebar
	//Demo.init(); // init demo features
	  Login.init();
	       // init background slide images
	       $.backstretch([
	        "<?php echo base_url();?>assets/admin/pages/media/bg/1.jpg",
	        "<?php echo base_url();?>assets/admin/pages/media/bg/2.jpg",
	        "<?php echo base_url();?>assets/admin/pages/media/bg/3.jpg",
	        "<?php echo base_url();?>assets/admin/pages/media/bg/4.jpg"
	        ], {
	          fade: 1000,
	          duration: 8000
	    }
	    );
	});
	var urlBase = "<?php echo base_url() ?>";
	</script>
	<!-- END JAVASCRIPTS -->
	
</html>