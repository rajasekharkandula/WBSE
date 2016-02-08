<!DOCTYPE html>
<html>
<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>WBSE - Category Creation</title>
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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/theme.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap-datepicker.min.css">
     <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url();?>/assets/img/favicon.ico">


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
				<form method="post" action="<?php echo base_url('home/create_category');?>">
					<div class="form-group">
						<input type="hidden" class="form-control" id="categoryID" name="categoryID" value="<?php if(isset($categories->categoryID))echo $categories->categoryID;?>">
					</div>
					<div class="form-group">
						<label for="categoryName">Category Name:</label>
						<input type="text" class="form-control" id="categoryName" placeholder="Catergory Name" name="categoryName" size="40" required value="<?php if(isset($categories->categoryName))echo $categories->categoryName;?>">
					</div>
					<div class="form-group">
					  <label for="categoryDesc">Category Description:</label>
					  <textarea class="form-control" rows="5" id="categoryDesc" placeholder="Category Description" name="categoryDesc" required><?php if(isset($categories->categoryDesc))echo $categories->categoryDesc;?></textarea>
					</div>
					
					<div class="form-group"> 
						<label for="categoryStatus">Select Status</label>
						<select name="categoryStatus" id="categoryStatus" class="width-100" required>
							<option disabled>SELECT</option>
							<option value="Active" <?php if(isset($categories->status))if($categories->status=='Active') echo 'selected';?>>Active</option>
							<option value="Inactive" <?php if(isset($categories->status))if($categories->status=='Inactive') echo 'selected';?>>In Active </option>
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
<script src="<?php echo base_url();?>assets/js/jquery-2.1.4.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery-ui.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap-datepicker.min.js"></script>
<!-- Theme Javascript -->
<script src="<?php echo base_url();?>assets/js/utility.js"></script>
<script src="<?php echo base_url();?>assets/js/demo.js"></script>
<script src="<?php echo base_url();?>assets/js/main.js"></script>
<!-- Widget Javascript -->
<script src="<?php echo base_url();?>assets/js/dashboard1.js"></script>
<!-- END: PAGE SCRIPTS -->
<script>

</script>
</body>
</html>