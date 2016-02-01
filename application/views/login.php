
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from alliance-html.themerex.net/ by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 18 Dec 2015 07:58:26 GMT -->
<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>WBSE</title>
    <meta name="keywords" content="HTML5, Bootstrap 3, Admin Template, UI Theme"/>
    <meta name="description" content="Alliance - A Responsive HTML5 Admin UI Framework">
    <meta name="author" content="ThemeREX">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic' rel='stylesheet'
          type='text/css'>

    <!-- Icomoon CSS(font) -->
    <link rel="stylesheet" type="text/css" href="/WBSE/assets/fonts/icomoon/icomoon.css">

  
    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="/WBSE/assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/WBSE/assets/css/theme.css">
	<link rel="stylesheet" type="text/css" href="/WBSE/assets/css/select2.css">

     <!-- Favicon -->
    <link rel="shortcut icon" href="/WBSE/assets/img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="/WBSE/assets/gritter/css/jquery.gritter.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
	.login-mt { margin-top: 12%; }
	.row-border { border: 1px solid #ddd; margin-left: 0px; margin-right: 0px; padding: 15px; margin-bottom: 20px; }
	.pr-10 { padding-right: 10px !important; }
	.pl-10 { padding-left: 10px !important; }
	.nav { padding-left: 0; margin-bottom: 0; list-style: none; }
	.nav-tabs { border-bottom: 1px solid #ddd; }
	.tab-content .active { display: block; }
	.tab-content>.tab-pane { display: none; }
	.fade{ opacity: 1; }
	.pl-50 { padding-left: 50px; }
	.mt-50 { margin-top: 50px; }
	.text-danger { color: #a94442; }
	.form-horizontal .form-group { margin-right: -15px; margin-left: -15px; }
	.input-group { position: relative; display: table; border-collapse: separate; }
	.input-group-addon:first-child { border-right: 0; }
	.fa { display: inline-block; font: normal normal normal 14px/1 FontAwesome; font-size: inherit; text-rendering: auto;     transform: translate(0, 0); }
	.input-group .form-control, .input-group-addon, .input-group-btn { display: table-cell; }
	.input-group .form-control { position: relative; z-index: 2; float: left; width: 100%; margin-bottom: 0; }
	.btn-launch { color: #fff; margin-top: 17px; width: 100%; border-radius: 0px; }
	.bg_dark_purple { background: #1E2349 !important; }
	.btn-group-lg>.btn, .btn-lg { padding: 10px 16px; font-size: 18px; line-height: 1.3333333;} 
	.btn { display: inline-block; margin-bottom: 0;font-weight: 400; text-align: center; white-space: nowrap; vertical-align: middle;touch-action: manipulation; cursor: pointer; -webkit-user-select: none;  border: 1px solid transparent;  } 
	.text-center{text-align:center;}	
	.or-middle { position: relative; height: 270px; }
	.horizontal { vertical-align: middle; position: relative; text-transform: uppercase; color: #999999; font-size: 16px;     display: inline-block; padding: 101px 0; z-index: 1; }
	.or-circle { background-color: #fff; border: 3px solid #FFF; border-radius: 18px; box-shadow: 0 0 2px #888; height: 38px; width: 38px; font-size: 14px; padding-top: 6px; }
	a.social-btn { padding: 0px; color: #FFFFFF; text-decoration: none; display: inline-block; width: 100%;     line-height: 50px; font-size: 16px; margin-bottom: 25px; }
	.google { background-color: #dd4d3b; }
	.text-left { text-align: left; }
	.facebook { background-color: #3c5a98; }
	.icon-fb { background-color: #35508D; padding: 17px; font-size: 20px !important; margin-right: 10px; }
	.icon-google { background-color: #C6472E; padding: 17px; font-size: 20px !important; margin-right: 10px; }
	.width-100p{
		width:100%;
	}
	.bl-1{
		border-left:1;
	}
	.pl-50{padding-left:50px;}
	.pr-50{padding-right:50px;}
</style>
</head>

<body class="dashboard-page">

<!-- Start: Main -->
<div id="main">

	<?php echo $header; ?>
	<div class="container">
		<div class="row" id="pwd-container">
			<div class="col-md-12 login-mt">
				<div class="row-border">
					<section class="row login-form" >
						<div class="col-md-6 "style="left:30%;">
							<div class="col-md-12 ">
								<div class="pr-10 pl-10"></div>
							</div>
						<div class="col-md-12 ">
								<div class=" ">
									<ul class="nav nav-tabs" id="login_page">
										<li class="active" style="border-right:1px solid #ddd;"><a data-toggle="tab" href="#login" style="border:0px;"id="loginForm">Sign In</a></li>
										<li class="inactive"><a style="border:0px; border-bottom:0px;" data-toggle="tab" href="#register"id="registerForm">Sign Up</a></li>
									</ul>
									<div class="tab-content">
										<div class="fade"id="login">
											<form class="form-horizontal" method="post" action="#" onsubmit="return false;" role="login" id="login_form">
												<center><h2></h2><div class="text-danger pl-50" id="login_error"></div></center>
												<div class="form-group">
													<div class="input-group">
														<div class="input-group-addon" style="border-radius:0;"><i class="fa fa-user"></i></div>
														<input type="text" class="form-control" id="username" name="username" placeholder="Email">
													</div>
													<div class="text-danger pl-50" id="username_error"></div>
												</div>
												<div class="form-group">
													<div class="input-group">
														<div class="input-group-addon" style="border-radius:0;"><i class="fa fa-key"></i></div>
														<input type="password" class="form-control entity-form" name="password" id="password" placeholder="Password"/>
													</div>
													<div class="text-danger pl-50" id="password_error"></div>
												</div>
												<div class="form-group">
													<input type="submit" name="go" style="background-color:#32A7B3 !important;" class="btn btn-lg bg_dark_purple btn-launch" id="sign_in" value="Login">
												</div>
												<div class="form-group">
													<a href="javascript:void(0);" id="show_forgot_password">Forgot Password ?</a> Click here to reset password
												</div>
											</form>
											<div id="forget_password" class="hide">
												<form class="form-horizontal" method="post" action="#" onsubmit="return false;" role="forgetPassword" id="forgetPassword_form">
													<label class="success_txt hide" style="color:#169E0D;">Reset link has been sent to your email id</label>
													<label class="not_exist hide" style="color:#FF0000;">This email id does not exist</label>
													<div class="form-group">
														<div class="input-group">
															<div class="input-group-addon" style="border-radius:0;"><i class="fa fa-envelope"></i></div>
															<input type="text" class="form-control entity-form" name="email" id="email" placeholder="Email"/>
														</div>
														<div class="text-danger pl-50" id="email_error"></div>
													</div>
													<div class="form-group">
														<input type="submit" name="email_send" style="background-color:#32A7B3 !important;" class="btn btn-lg bg_dark_purple btn-launch" id="send_email" value="Reset"><!-- Send Email</button>-->
													</div>
												</form>
											</div>
										</div>
										<div class="tab-pane fade" id="register">
											<form class="form-horizontal" method="post" action="#" onsubmit="return false;" role="SignUp" id="register_form">
												<center><h2></h2><div class="text-danger pl-50" id="signup_error"></div></center>
												<div class="form-group">
												<input type="hidden" id="userID" value="">
												</div>
												<div class="form-group">
													<div class="input-group">
														<div class="input-group-addon" style="border-radius:0;"><i class="fa fa-user"></i></div>
														<input type="text" class="form-control" id="reg-name" name="reg-name" placeholder="Name">
													</div>
													<div class="text-danger pl-50" id="reg-name_error"></div>
												</div>
												<div class="form-group">
													<div class="input-group">
														<div class="input-group-addon" style="border-radius:0;"><i class="fa fa-user"></i></div>
													<input type="text" class="form-control" id="reg-username" name="reg-username" placeholder="UserName">
													</div>
												<div class="text-danger pl-50" id="reg-username_error"></div>
												</div>
												<div class="form-group">
													<div class="input-group">
													<div class="input-group-addon" style="border-radius:0;"><i class="fa fa-envelope"></i></div>
													<input type="text" class="form-control" id="reg-email" name="reg-email" placeholder="Email-ID">
													</div>
													<div class="text-danger pl-50" id="reg-email_error"></div>
												</div>
												<div class="form-group">
													<div class="input-group">
														<div class="input-group-addon" style="border-radius:0;"><i class="fa fa-key"></i></div>
													<input type="password" class="form-control entity-form" name="first_password" id="first_password" placeholder="Password">
													</div>
													<div class="text-danger pl-50" id="password_error1"></div>
												</div>
												<div class="form-group">
													<div class="input-group">
													<div class="input-group-addon" style="border-radius:0;"><i class="fa fa-key"></i></div>
													<input type="password" class="form-control entity-form" name="confirm_password" id="confirm_password" placeholder="Re-Enter Password">
													</div>
													<div class="text-danger pl-50" id="password_error2"></div>
												</div>
												<div class="form-group">
													<div class="input-group date" id="datetimepicker1" name="datetimepicker1">
													<span class="input-group-addon">
													<span class="glyphicon fnt-sz-12"><i class="fa fa-calendar"></i></span>
													</span>
													<input type="text" id="startDate" class="form-control" name="startDate" va_req="true" value="" placeholder="Date Of Birth">
													</div>
													<div class="text-danger pl-50" id="startdate_error"></div>
												</div>
												<div class="form-group">
													<div class="input-group">
													<label>Gender</label>
													<span class=" pl-50 pr-50"><input class="gender_type" type="radio" value="male" name="gender_type"> &nbsp;<i class="fa fa-male"></i> &nbsp;Male</span>
													<span class=""><input class="gender_type" type="radio" value="female" name="gender_type"> &nbsp;<i class="fa fa-female"></i>&nbsp;Female</span>
													</div>
													<div class="text-danger pl-50" id="gender_error"></div>
												</div>
												<div class="form-group">
													<div class="input-group col-md-12">
													<div class="col-md-1"><span class="input-group-addon bl-1"><span class="glyphicon"><i class="fa fa-pencil"></i></span></span></div>
													<div class="col-md-11"><textarea placeholder="ADDRESS" rows="5" id="address" class="width-100p"></textarea></div>
													</div>
													<div class="text-danger pl-50" id="address_error"></div>
												</div>
												<div class="form-group">
												<input type="submit" id="signUp" style="background-color:#32A7B3 !important;" name="signUp" class="btn btn-lg bg_dark_purple btn-launch" value="Sign Up">
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>			
					</section>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- End: Main -->

<!-- BEGIN: PAGE SCRIPTS -->
<!-- jQuery -->
<script src="/WBSE/assets/js/jquery-2.1.4.js"></script>
<script src="/WBSE/assets/js/jquery-ui.min.js"></script>


<!-- Theme Javascript -->
<script src="/WBSE/assets/js/utility.js"></script>
<script src="/WBSE/assets/js/demo.js"></script>
<script src="/WBSE/assets/js/main.js"></script>
<script src="/WBSE/assets/js/select2.js"></script>
<!-- Widget Javascript -->
<script src="/WBSE/assets/js/dashboard1.js"></script>
<script  src="/WBSE/assets/gritter/js/jquery.gritter.min.js"type="text/javascript"></script>
<script src="/WBSE/assets/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
<!-- END: PAGE SCRIPTS -->
 <script type="text/javascript">
   
   $(document).ready(function(){
		$('#header-bar').hide();
		$("#datetimepicker1").datepicker({
        format: 'yyyy-mm-dd'
    });
});
		$('#sign_in').on('click',function(){
			//$('.text-danger').html('');
			var username= $('#username').val(), password = $('#password').val();
			if(username == '')
				$('#username_error').html('Invalid Username');
			else if(password == '')
				$('#login_error').html('Failed to authenticate');
			else{
				$.ajax({
					url:'/WBSE/home/login_function',
					data:{'username':username,'password':password},
					type:'POST',
					dataType:'json'
				}).done(function(data){
					if(data.status){
						window.location='/WBSE/';
					}
					else{
					$('.disable_div').remove();
					$.gritter.add({
					title: 'Failed',
					text: 'Please try again later',
					class_name: 'gritter-info gritter-center' + 'gritter-light'
				});
					}
				});
			}
		});

   $('#show_forgot_password').on('click',function(){
		$('#forget_password').removeClass('hide');
	});
	$('#registerForm').on('click',function(){
		$('#login').hide('');
		$('#register').show('');
	});
	$('#loginForm').on('click',function(){
		$('#login').show('');
		$('#register').hide('');
	});
	$("#signUp").on("click",function(){
		var error=0;
		var userID=$("#userID").val();
		var name=$("#reg-name").val();
		var username=$("#reg-username").val();
		var email=$("#reg-email").val();
		var password1=$("#first_password").val();
		var password2=$("#confirm_password").val();
		var date=$("#startDate").val();
		var gender=$('input[name="gender_type"]:checked').val();
		var address=$('#address').val();
		if(name==''){
			error++;$("#reg-name_error").html("Please Enter The Name");
		}
		else
			$("#reg-name_error").html("");
		if(username==''){
			error++;$("#reg-username_error").html("Please Enter The UserName");
		}
		else
			$("#reg-username_error").html("");
		if(email==''){
			error++;$("#reg-email_error").html("Please Enter The EmailID");
		}
		else
			$("#reg-email_error").html("");
		if(date==''){
			error++;$("#startdate_error").html("Please select Date");
		}
		else
			$("#startdate_error").html("");
		if(!$('.gender_type').is(':checked')){
			error++;$("#gender_error").html("Please select Gender");
		}
		else
			$("#gender_error").html("");
		if(address==''){
			error++;$("address_error").html("Please Fill the Address");
		}
		else
			$("#startdate_error").html("");
		if(password1==''){
			error++;$("#password_error1").html("Please Enter a password");
		}
		else{
			$("#password_error1").html("");
			if(password1!=password2){
			error++;$("#password_error2").html("Passwords do not match");	
			}
		}
		if(password1==password2)
			$("#password_error2").html("");
		if(error==0){
			var formData = new FormData($('#Contest_form')[0]);
			$.ajax({
			url: "/WBSE/home/registration",
			type: "POST",
			dataType:'json',
			data : {"userID":userID,"name":name,"username":username,"email":email,"password":password1,"date":date,"gender":gender,"address":address},
		}).done(function(data){
			
			if(data.status==true){
			$('.disable_div').remove();
					$.gritter.add({
					title: 'Success',
					text: 'Successfully Registerd',
					class_name: 'gritter-info gritter-center' + 'gritter-light'
					});
					window.location='/WBSE/';
					
			}
			else{
				$('.disable_div').remove();
					$.gritter.add({
					title: 'Failed',
					text: 'Please try again',
					class_name: 'gritter-info gritter-center' + 'gritter-light'
				});
					}
			//window.location="/WBSE/home/registered/"+data.userID;
		});
		}
		
	});
	$('#send_email').on('click',function(){
		var error=0;
		var mail=$('#email').val();
		if(mail == ''){error++; $("#email_error").html("Please Enter Email");}
		else 
			$("#email_error").html("");
			
	});
        </script>


</body>


<!-- Mirrored from alliance-html.themerex.net/ by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 18 Dec 2015 08:01:30 GMT -->
</html>
