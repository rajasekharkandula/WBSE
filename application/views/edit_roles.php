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
<style>
.row-border{border: 1px solid #fff; height: 400px;}
.form-man{color:red;}
.btn-center{text-align:center;}
</style>
    
</head>
<body>
 <section>
	  <div class="main">
		<?php echo $header;?>
	   </div>
	  <div class="container">
		   <h2 style="margin-top:70px;">Roles</h2>
		   <small class="pull-right">Fields marked with <span class="form-man">*</span> are mandatory</small><br/>
		   <div class="col-md-2"></div>
		   <div class="row-border"><br>
			   <div class="col-md-8">
					<form class="form-horizontal" name="roles_form" role="form"  method="POST" id="roles_form" onSubmit="return false;">
						<input type="hidden" value="<?php if(isset($roles[0]->uRoleID))echo $roles[0]->uRoleID;?>" id="roleID">
						<div class="form-group">
							<label for="roleTitle" class="col-md-3 field_titles">
								Role Title <span class="form-man"> * </span>
							</label>
							<div class="col-md-8">
								<input type="text" class="form-control" name="roleTitle" id="roleTitle" va_req="true" value="<?php if(isset($roles[0]->roleName))echo $roles[0]->roleName;?>" />
							</div><br><br>
							<div  class="btn-center form-man"id="roleTitle_error"></div>
						</div>
						<div class="form-group">
							<label for="roleDescription" class="col-md-3 field_titles">
								Description <span class="form-man"> * </span>
							</label>
							<div class="col-md-8">
								<textarea class="form-control" id="roleDescription" name="roleDescription"><?php if(isset($roles[0]->roleDescription))echo $roles[0]->roleDescription;?></textarea>
							</div><br><br><br>
							<div  class="btn-center form-man" id="roleDescription_error"></div>
						</div>
						<div class="form-group">
							<label for="roleStatus" class="col-md-3">
								Role Status <span class="form-man"> * </span>
							</label>
							<div class="col-md-8 ">
								<select class="select2" id="roleStatus" name="roleStatus" va_req="true">
									<option value=""></option>
									<option value="P" <?php if(isset($roles[0]->roleStatus)){if($roles[0]->roleStatus == "P")echo 'selected';}?>>Active</option> 
									<option value="S" <?php if(isset($roles[0]->roleStatus)){if($roles[0]->roleStatus == "S")echo 'selected';}?>>In Active</option>
								</select>
								<div  class="btn-center form-man" id="roleStatus_error"></div>
							</div>
						</div>
						<div class="btn-center"><button class="btn text-center"type="submit" id="roleSubmit">SUBMIT</button></div>
				   </form>
				   
			   </div>
		   <div class="col-md-2"></div>
		  
		  </div>
	  </div>
 </section>
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
<script>
 $(document).ready(function(){
		$('.select2').select2({
			placeholder: "Select",
			allowClear: true
		});
		
	});	
	
$('#roleSubmit').on('click',function(){
	var error=0;
	var roleTitle=$('#roleTitle').val();
	var roleDescription=$('#roleDescription').val();
	var roleStatus=$('#roleStatus').val();
	if(roleTitle == ''){
		error++;
	$('#roleTitle_error').html('Please Enter Role Title');}
	else $('#roleTitle_error').html('');
	if(roleDescription == ''){
		error++;
	$('#roleDescription_error').html('Please Enter Role Description');}
	else $('#roleDescription_error').html('');
	if(roleStatus == ''){
	error++;$('#roleStatus_error').html('Plese Select Status');}
	else $('#roleStatus_error').html('');
		if(error==0){
			var roleID=$('#roleID').val();
			var roleTitle=$('#roleTitle').val();
			var roleDescription=$('#roleDescription').val();
			var roleStatus=$('#roleStatus').val();
			$.ajax({
				url:'/WBSE/home/InsUpdRoles',
				type:'POST',
				dataType:'json',
				data:{'roleID':roleID,'roleTitle':roleTitle,'roleDescription':roleDescription,'roleStatus':roleStatus}
			}).done(function(data){
				
			if(data){
			$('.disable_div').remove();
					$.gritter.add({
					title: 'Success',
					text: 'Successfully Registerd',
					class_name: 'gritter-info gritter-center' + 'gritter-light'
					});
					window.location='/WBSE/home/roles';
					
			}
			else{
				$('.disable_div').remove();
					$.gritter.add({
					title: 'Failed',
					text: 'Please try again',
					class_name: 'gritter-info gritter-center' + 'gritter-light'
				});
					}
			});
		}
			
});
</script>
</body>
</html>