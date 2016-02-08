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
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/jasny-bootstrap.min.css" />

     <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url();?>/assets/img/favicon.ico">
<style>
.user-img{position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;}
</style>
    
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
							User Image <span class="form-man"> * </span>
						</label>
						<div class="col-md-8">
							<div style="position:relative;">
								<a class='btn btn-primary' href='javascript:;'>
									Choose Image...
									
										
									<input type="file" class="user-img" name="file_source" size="40"  onchange='readURL(this);'id="blah1" value="">
								</a>
									<br><br>
									<img id="blah" src="<?php echo base_url();?><?php if(isset($user[0]['profilePic']))echo $user[0]['profilePic']; ?>" width="200"height="200"alt="your image" />
									 <span class='label label-info' id="blah"></span>
							</div>
						</div>
					</div>
					
					<div class="form-group">
						<label for="name" class="col-md-3 control-label">
							First Name <span class="form-man"> * </span>
						</label>
						<div class="col-md-8">
							<input type="text" value="<?php if(isset($user[0]['firstName']))echo $user[0]['firstName']; ?>" class="form-control entity-form" name="firstName" id="firstName" placeholder="">
							<div class="text-danger" id="firstName_error"></div>
						</div>
					</div>
					<div class="form-group">
						<label for="name" class="col-md-3 control-label">
							Last Name <span class="form-man"> * </span>
						</label>
						<div class="col-md-8">
							<input type="text" value="<?php if(isset($user[0]['lastName']))echo $user[0]['lastName']; ?>" class="form-control entity-form" name="lastName" id="lastName" placeholder="">
							<div class="text-danger" id="lastName_error"></div>
						</div>
					</div>
					<div class="form-group">
						<label for="username" class="col-md-3 control-label">
							Username <span class="form-man"> * </span>
						</label>
						<div class="col-md-8">
							<input type="text" value="<?php if(isset($user[0]['userName']))echo $user[0]['userName']; ?>" class="form-control entity-form" name="user" id="user" placeholder="">
							<div class="text-danger" id="username_error"></div>
						</div>
					</div>
					<div class="form-group">
						<label for="username" class="col-md-3 control-label">
							Password <span class="form-man"> * </span>
						</label>
						<div class="col-md-8">
							<input type="Password" value="<?php if(isset($user[0]['password']))echo $user[0]['password']; ?>" class="form-control entity-form" name="Password" id="Password" placeholder="">
							<div class="text-danger" id="psw_error"></div>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-md-3 control-label">
							Email ID <span class="form-man"> * </span>
						</label>
						<div class="col-md-8">
							<input type="text" value="<?php if(isset($user[0]['emailID']))echo $user[0]['emailID']; ?>" class="form-control entity-form" name="email" id="email" placeholder="">
							<div class="text-danger" id="email_error"></div>
						</div>
					</div>
					<div class="form-group">
						<label for="address" class="col-md-3 control-label">
							Address <span class="form-man"> * </span>
						</label>
						<div class="col-md-8">
							<textarea class="form-control" name="address" id="address"><?php if(isset($user[0]['address']))echo $user[0]['address']; ?></textarea>
							<div class="text-danger" id="country_error"></div>
						</div>
					</div>
					<div class="form-group">
						<label for="address" class="col-md-3 control-label">
							Country <span class="form-man"> * </span>
						</label>
						<div class="col-md-5">		
							<select class="form-control entity-type select2" id="country" name="country">
								<option> </option>
								<?php 
									foreach($countries as $cList){
										if($cList->countryID == $user[0]['country'])
											echo "<option value='".$cList->countryID."' selected>".$cList->countryName."</option>";
										else
											echo "<option value='".$cList->countryID."'>".$cList->countryName."</option>";
									}
								?>
							</select>
							<span id="country_error"></span>
						</div>
					</div>
					<div class="form-group">
						<label for="address" class="col-md-3 control-label">
							State <span class="form-man"> * </span>
						</label>
						<div class="col-md-5">		
							<select class="form-control entity-type select2" id="state" name="state">
								<option> </option>
							</select>
							<span id="country_error"></span>
						</div>
					</div>
					<div class="form-group">
						<label for="address" class="col-md-3 control-label">
							City <span class="form-man"> * </span>
						</label>
						<div class="col-md-5">		
							<select class="form-control entity-type select2" id="city" name="city">
								<option> </option>
							</select>
							<span id="country_error"></span>
						</div>
					</div>	
						<!--<div class="col-md-4">
							Country<input type="text" name="country" id="country" value="<?php if(isset($user[0]['country']))echo $user[0]['country']; ?>">
							<div class="text-danger" id="country_error"></div>
						</div>
						<div class="col-md-4">
							City <input type="text" name="city" id="city" value="<?php if(isset($user[0]['city']))echo $user[0]['city']; ?>">
							<div class="text-danger" id="city_error"></div>
						</div>
					</div>-->
					
					<div class="form-group">
						<label for="role" class="col-md-3 control-label">
							Role <span class="form-man"> * </span>
						</label>
						<div class="col-md-8">
							<div id="">
								<?php $i=0;foreach($roles as $role) :?>
									<input type="checkbox" class="role"name="role<?php echo $i++;?>" data-value="<?php if(isset($role['uRoleID']))echo $role['uRoleID'];?>" <?php if(isset($userRole)) if(in_array($role['uRoleID'],$userRole)) echo 'checked';?> value="<?php if(isset($role['uRoleID']))echo $role['uRoleID'];?>">&nbsp;&nbsp;<?php if(isset($role['roleName']))echo $role['roleName'];?>&nbsp;&nbsp;
								<?php endforeach;?>
							</div>
							<div class="text-danger" id="role_error"></div>
						</div>
					</div>
					<div class="form-group">
						<label for="status" class="col-md-3 control-label">
							Status <span class="form-man"> * </span>
						</label>
						<div class="col-md-5">
							<select id="status"name="status" class="select2 form-control">
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
<script src="<?php echo base_url();?>/assets/js/jasny-bootstrap.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/dashboard1.js"></script>
<script>
 $(document).ready(function(){
		$('#country').trigger('change');
		$('.select2').select2({
			placeholder: "Select",
			allowClear: true
		});
	});
	function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(100)
                    .height(100);
            };

            reader.readAsDataURL(input.files[0]);
     var filename = $('#blah1').val();
            //alert(filename);
   $(this).html(filename);

        }
    }
	$('#submit').on('click',function(){
		var error=0;
		var userID=$('#userID').val();
		var image = $('#blah1').val();
		var firstName=$('#firstName').val();
		var username=$("#user").val();
		var password=$("#Password").val();
		var email=$("#email").val();
		var status=$("#status").val();
		//var role=$('#role').val();
		var role = new Array();
		$('.role').each(function(data){
			if($(this).is(':checked'))
				role.push($(this).attr('data-value'));
		});
		if(firstName==''){
			error++;$("#firstName_error").html("Please Enter The FirstName");
		}else{
			$("#firstName_error").html("");
		}
		
		if(username==''){
			error++;$("#username_error").html("Please Enter The UserName");
		}else{
			$("#username_error").html("");
		}
		if(password==''){
			error++;$("#psw_error").html("Please Enter The Password");
		}else{
			$("#psw_error").html("");
		}
		if(email==''){
			error++;$("#email_error").html("Please Enter The EmailID");
		}else{
			$("#email_error").html("");
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
			var userID=$('#userID').val();
		//var image = formData;
		//alert(image);
		var firstName=$('#firstName').val();
		var lastName=$('#lastName').val();
		var username=$("#user").val();
		var password=$("#Password").val();
		var email=$("#email").val();
		var address=$("#address").val();
		var country=$("#country").val();
		var state=$("#state").val();
		var city=$("#city").val();
		var status=$("#status").val();
		//var role=$('#role').val();
		var role = new Array();
		$('.role').each(function(data){
			if($(this).is(':checked'))
				role.push($(this).attr('data-value'));
		});
			$.ajax({
			url: "/WBSE/home/edit_user_data/",
			type: "POST",
			dataType:"json",
			data: formData,
			processData: false,
			contentType: false
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
$('#country').on('change',function(){
	$('#state').empty();
	var stateID='<?php if(isset($ids->state))echo $ids->state;?>';
	$.ajax({
		url:"/WBSE/home/getStateDetails",
		type:"POST",
		dataType:"json",
		data:{"countryID":this.value}
	}).done(function(data){
		//$('#state').empty();
		var i=0; var html='';
			for(i;i<data.length;i++){
				html+='<option value="'+data[i]['stateID']+'" ';
				if(data[i]['stateID']==stateID)
					html+=' selected ';
				else
					html+=' ';
				html+='>'+data[i]['stateName']+'</option>';
			}
			$('#state').html(html);
			$('.select2').select2();
			if(stateID!='')
				$('#state').trigger('change');		
	});
	
});
$('#state').on('change',function(){
	$('#city').empty();
	var cityID='<?php if(isset($ids->city))echo $ids->city;?>';
	$.ajax({
		url:"/WBSE/home/getCityDetails",
		type:"POST",
		dataType:"json",
		data:{"stateID":this.value}
	}).done(function(data){
		//$('#city').empty();
		var i=0; var html='';
			for(i;i<data.length;i++){
				html+='<option value="'+data[i]['cityID']+'" ';
				if(data[i]['cityID']==cityID)
					html+=' selected ';
				else
					html+=' ';
				html+='>'+data[i]['cityName']+'</option>';
			}
			$('#city').html(html);	
			$('.select2').select2();
	})
});
</script>
	</body>
</html>