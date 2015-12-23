
<!DOCTYPE html>
<html>


<!-- Mirrored from alliance-html.themerex.net/ by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 18 Dec 2015 07:58:26 GMT -->
<head>
    <!-- Meta, title, CSS, favicons, etc. -->
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
    <link rel="stylesheet" type="text/css" href="/WBSE/assets/fonts/icomoon/icomoon.css">

  
    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="/WBSE/assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/WBSE/assets/css/theme.css">
	<link rel="stylesheet" type="text/css" href="/WBSE/assets/css/select2.css">
	<link rel="stylesheet" type="text/css" href="/WBSE/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/WBSE/assets/css/bootstrap-datepicker.min.css">
	
     <!-- Favicon -->
    <link rel="shortcut icon" href="/WBSE/assets/img/favicon.ico">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
	
	</style>
</head>

<body class="dashboard-page">

	<?php echo $header; ?>
	
    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">
	
        <!-- Start: Topbar -->
        <header id="topbar" class="alt">
            <div class="topbar-left">
                <ol class="breadcrumb">
                    <li class="crumb-icon">
                        <a href="<?php echo base_url();?>">
                            <span class="fa fa-home"></span>
                        </a>
                    </li>
                    <li class="crumb-active">
                        <a href="<?php echo base_url('home/tasks');?>">Tasks
                    <li class="crumb-link">
                       <a href="<?php echo base_url();?>">Home</a>
                    </li>
                    <li class="crumb-link">  
						<a href="<?php echo base_url('home/tasks');?>">Tasks</a>
					</li>
                    <li class="crumb-trail">Task Creation</li>
                </ol>
            </div>
        </header>
        <!-- End: Topbar -->
	</section>
    <!-- End: Content-Wrapper -->
	
	<!-- Begin: Content -->
	<section class="c-padding">
		<div class="row">
			<div class="col-md-5 bg-white">
				<h2 class="c-heading">Task Creation</h2>
				<form method="post" action="http://localhost:8081/WBSE/home/task">
					<div class="form-group"> 
						<label for="selectcat">Select Catergory</label>

						<select name="selectcat" id="selectcat" class="width-100" required>
						<?php if(isset($values)) : ?>
						<?php foreach($values as $v) :?>
							<option value="<?php echo $v['categoryName']?>"><?php echo $v['categoryName'];?></option>
						<?php endforeach;?>
						<?php endif;?>
						</select>

					</div>
					<div class="form-group">
						<label for="tname">Task Name:</label>
						<input type="text" class="form-control" id="tname" placeholder="Task Name" name="tname" required>
					</div>
					<div class="form-group">
						<label for="wbse">WBSE</label>
						<input type="text" class="form-control" id="wbse" placeholder="WBSE Number" name="wbse">
					</div>
					<div class="form-group">
					  <label for="tdesc">Description:</label>
					  <textarea class="form-control" rows="5" id="tdesc" placeholder="Task Description" name="tdesc" required></textarea>
					</div>
					<div class="form-group">
						<label for="tbudget">Default Budget:</label>
						<input type="text" class="form-control" id="tbudget" placeholder="Task Budget" name="tbudget" required>
					</div>
					<div class="form-group">
						<label for="texpdate">Expiry Date:</label>
						<div class="input-group date datepicker"  id="datetimepicker1" >
							<input type="text" class="form-control"  name="texpdate">
							<span class="input-group-addon">
								<i class="fa fa-calendar"></i>
							</span>
						</div>
					</div>
					<div class="form-group">
						<label for="tstatus">Status:</label>
						<select name="tstatus" id="tstatus" class="width-100" required>
							<option value="active">Active</option>
							<option value="inactive">Inactive</option>
						</select>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Submit</button>
						<button type="reset" class="btn btn-default">Cancel</button>
					</div>
				</form>
			</div>
		</div>
	</section>
	<!-- End: Content -->

<!-- BEGIN: PAGE SCRIPTS -->
<!-- jQuery -->

<script src="<?php echo base_url();?>/assets/js/jquery-2.1.4.js"></script>
<script src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/jquery-ui.min.js"></script>
<!-- Theme Javascript -->
<script src="<?php echo base_url();?>/assets/js/utility.js"></script>
<script src="<?php echo base_url();?>/assets/js/demo.js"></script>
<script src="<?php echo base_url();?>/assets/js/main.js"></script>
<!-- Widget Javascript -->
<script src="<?php echo base_url();?>/assets/js/dashboard1.js"></script>
<!-- END: PAGE SCRIPTS -->
<script>
$(document).ready(function(){
	$('#datetimepicker1').datepicker({
   format: 'yyyy-mm-dd'
   });
});
</script>
</body>


<!-- Mirrored from alliance-html.themerex.net/ by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 18 Dec 2015 08:01:30 GMT -->
</html>
