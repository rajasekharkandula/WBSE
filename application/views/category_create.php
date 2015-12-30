<!DOCTYPE html>
<html>
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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/fonts/icomoon/icomoon.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/theme.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/bootstrap-datepicker.min.css">

     <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url();?>/assets/img/favicon.ico">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
	.width-100
	{
		width:100%;
		height:37px;
	}
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
                        <a href="<?php echo base_url('home/categories');?>">Categories</a>
                    </li>
                    <li class="crumb-link">
                        <a href="<?php echo base_url();?>">Home</a>
                    </li>
                    <li class="crumb-link">  
						<a href="<?php echo base_url('home/categories');?>">Categories</a>
					</li>
					<li class="crumb-trail">  Category Creation</li>
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
				<h2 class="c-heading">Category Creation</h2>
				<form method="post" action="http://localhost:8081<?php echo base_url();?>/home/create_category">
					<div class="form-group">
						<input type="hidden" class="form-control" id="cid" name="cid" value="<?php if(isset($categories[0]['categoryID']))echo $categories[0]['categoryID'];?>">
					</div>
					<div class="form-group">
						<label for="cname">Category Name:</label>
						<input type="text" class="form-control" id="cname" placeholder="Catergory Name" name="cname" size="30" required value="<?php if(isset($categories[0]['categoryName']))echo $categories[0]['categoryName'];?>">
					</div>
					<div class="form-group">
					  <label for="cdesc">Category Description:</label>
					  <textarea class="form-control" rows="5" id="cdesc" placeholder="Category Description" name="cdesc" required><?php if(isset($categories[0]['categoryDesc']))echo $categories[0]['categoryDesc'];?></textarea>
					</div>
					<div class="form-group">
						<label for="texpdate">Created Date:</label>
						<div class="input-group date datepicker"  id="datetimepicker1" >
							<input type="text" class="form-control"  name="createddate" value="<?php if(isset($categories[0]['expiryDate']))echo $categories[0]['createdDate'];?>">
							<span class="input-group-addon">
								<i class="fa fa-calendar"></i>
							</span>
						</div>
					</div>
					<div class="form-group"> 
						<label for="selectstatus">Select Status</label>
						<select name="selectstatus" id="selectstatus" class="width-100" required>
							<option disabled>SELECT</option>
							<option value="Active" <?php if(isset($categories[0]['status']))if($categories[0]['status']=='Active') echo 'selected';?>>Active</option>
							<option value="InActive" <?php if(isset($categories[0]['status']))if($categories[0]['status']=='InActive') echo 'selected';?>>In Active </option>
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
</div>
<!-- End: Main -->

<!-- BEGIN: PAGE SCRIPTS -->
<!-- jQuery -->
<script src="<?php echo base_url();?>/assets/js/jquery-2.1.4.js"></script>
<script src="<?php echo base_url();?>/assets/js/jquery-ui.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/bootstrap-datepicker.min.js"></script>
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
<script>
$(document).ready(function(){
	$('#datetimepicker2').datepicker({
   format: 'yyyy-mm-dd'
   });
});
</script>
</body>


<!-- Mirrored from alliance-html.themerex.net/ by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 18 Dec 2015 08:01:30 GMT -->
</html>
