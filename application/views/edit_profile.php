						<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>Alliance - A Responsive Bootstrap 3 Admin Dashboard Template</title>
    <meta name="keywords" content="HTML5, Bootstrap 3, Admin Template, UI Theme"/>
    <meta name="description" content="Alliance - A Responsive HTML5 Admin UI Framework">
    <meta name="author" content="ThemeREX">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic' rel='stylesheet'
          type='text/css'>

    <!-- Icomoon CSS(font) -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/fonts/icomoon/icomoon.css">

  
    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/theme.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/select2.css">

     <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url();?>/assets/img/favicon.ico">

    
</head>
<body>
	<section>
		<div class="main">
			<?php echo $header;?>
		</div><div class="container">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<h2 style="margin-top:70px;">User Details</h2>
				<form class="form-horizontal" name="edit_profile" id="edit_profile" role="form"  method="POST" id="basic_data" autocomplete="off" onsubmit="return false" >
					
					<small class="pull-right">Fields marked with <span class="form-man">*</span> are mandatory</small><br/>
					<div class="form-group">
						<label for="name" class="col-md-3 control-label">
							Name <span class="form-man"> * </span>
						</label>
						<div class="col-md-8">
							<input type="text" value="<?php echo $user[0]['Name']; ?>" class="form-control entity-form" name="name" id="name" placeholder="">
							<div class="text-danger" id="name_error"></div>
						</div>
					</div>
					<div class="form-group">
						<label for="username" class="col-md-3 control-label">
							Username <span class="form-man"> * </span>
						</label>
						<div class="col-md-8">
							<input type="text" value="<?php echo $user[0]['userName']; ?>" class="form-control entity-form" name="user" id="user" placeholder="">
							<div class="text-danger" id="username_error"></div>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-md-3 control-label">
							Email ID <span class="form-man"> * </span>
						</label>
						<div class="col-md-8">
							<input type="text" value="<?php echo $user[0]['emailID']; ?>" class="form-control entity-form" name="email" id="email" placeholder="">
							<div class="text-danger" id="email_error"></div>
						</div>
					</div>
					<div class="form-group">
						<label for="address" class="col-md-3 control-label">
							Address <span class="form-man"> * </span>
						</label>
						<div class="col-md-8">
							<textarea class="form-control" name="address" id="address" ><?php echo $user[0]['address']; ?>
							</textarea>
							<div class="text-danger" id="address_error"></div>
						</div>
					</div>
					
					<div class="form-group">
						<label for="role" class="col-md-3 control-label">
							Role <span class="form-man"> * </span>
						</label>
						<div class="col-md-8">
							<div id="">
								<?php foreach($roles as $role) :?>
									<input type="checkbox" class="role" data-value="<?php echo $role['uRoleID'];?>" <?php if(isset($userRole)) if(in_array($role['uRoleID'],$userRole)) echo 'checked';?> value="<?php echo $role['roleName'];?>">&nbsp;&nbsp;<?php echo $role['roleName'];?>&nbsp;&nbsp;
								<?php endforeach;?>
							</div>
							<div class="text-danger" id="role_error"></div>
						</div>
					</div>
					<div class="form-group">
						<label for="status" class="col-md-3 control-label">
							Status <span class="form-man"> * </span>
						</label>
						<div class="col-md-8">
							<select id="status" class="select2">
								<option></option>
								<option value="P" <?php if(isset($user[0]['userID'])) if($user[0]['status']=='P') echo 'selected';?>>Active</option>
								<option value="S" <?php if(isset($user[0]['userID'])) if($user[0]['status']=='S') echo 'selected';?>>InActive</option>
							</select>
							<div class="text-danger" id="status_error"></div>
						</div>
					</div>
					<div class="form-group">
						<input type="hidden" name="userID" id="userID" value="<?php if(isset($user[0]['userID'])) echo $user[0]['userID'];?>">
					</div>
					<div class="entity-action mr-40 text-center">
						<div class="">
							<button class="btn entity-circle" type="submit" id="submit" data-toggle="tooltip" data-placement="top" title="Submit"> <span class="glyphicon glyphicon-ok" aria-hidden="true">Submit</span></button>
							<input type="hidden" id="submit_type" value="0">
						</div>
					</div>
				</form>
			</div>
			<div class="col-md-2"></div>
		</div>
	</section>
		<script src="<?php echo base_url();?>/assets/js/jquery-2.1.4.js"></script>
<script src="<?php echo base_url();?>/assets/js/jquery-ui.min.js"></script>


<!-- Theme Javascript -->
<script src="<?php echo base_url();?>/assets/js/utility.js"></script>
<script src="<?php echo base_url();?>/assets/js/demo.js"></script>
<script src="<?php echo base_url();?>/assets/js/main.js"></script>
<script src="<?php echo base_url();?>/assets/js/select2.js"></script>
<!-- Widget Javascript -->
<script src="<?php echo base_url();?>/assets/js/dashboard1.js"></script>
<script>

$(document).ready(function(){
	$('#submit').on('click',function(){
		var error=0;
		var userID=$('#userID').val();
		var name=$('#name').val();
		var username=$("#user").val();
		var email=$("#email").val();
		var address=$("#address").val();
		var status=$("#status").val();
		//var role=$('#role').val();
		var role = new Array();
		$('.role').each(function(data){
			if($(this).is(':checked'))
				role.push($(this).attr('data-value'));
		});
		if(name==''){
			error++;$("#name_error").html("Please Enter The Name");
		}else{
			$("#name_error").html("");
		}
		if(username==''){
			error++;$("#username_error").html("Please Enter The UserName");
		}else{
			$("#username_error").html("");
		}
		if(email==''){
			error++;$("#email_error").html("Please Enter The EmailID");
		}else{
			$("#email_error").html("");
		}
		if(address==''){
			error++;$("#address_error").html("Please Enter The address");
		}else{
			$("#address_error").html("");
		}
		if(role.length<=0){
			error++;$("#role_error").html("Please Select The Role");
		}else{
			$("#role_error").html("");
		}
		if(status==''){
			error++;$("#status_error").html("Please Select The Status");
		}else{
			$("#status_error").html("");
		}
		if(error==0){
			var formData = new FormData($('#edit_profile')[0]);
			$.ajax({
			url: "/WBSE/home/edit_user_data",
			type: "POST",
			dataType:'json',
			data: {"userID":userID,"name":name,"username":username,"email":email,"address":address,"role":role,"status":status}
			}).done(function(data){
				if(data.status=='success')
				{
					window.location='/WBSE/home/list_users';
				}
			});
		}
	});
	$('.select2').select2({
		placeholder: "Select",
		allowClear: true
	});
});

</script>
	</body>
</html>