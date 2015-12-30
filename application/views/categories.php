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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/fonts/icomoon/icomoon.css">

  
    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/theme.css">

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

<!-- Start: Main -->
<div id="main">

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
                    <li class="crumb-trail">Categories</li>
                </ol>
            </div>
        </header>
        <!-- End: Topbar -->
	</section>
    <!-- End: Content-Wrapper -->
	
	<section id="content">
			
		<!-- dashboard tiles -->
		<div class="row">
			<div class="col-md-12">
				<a href="<?php echo base_url('home/category_create');?>" class="btn btn-danger hidden-xs"><i class="fa fa-plus"></i> &nbsp;  New </a>
			</div>	
		</div>	
		<br/>
		<div class="row">
			<div class="col-md-12">
				<table class="table">
					<thead>
						<tr>
							<th class="text-center">SNO</th>
							<th>Category Name</th>
							<th>Category Description</th>
							<th>Created Date</th>
							<th>Modified Date</th>
							<th>Status</th>
							<th>Edit</th>
						</tr>
					</thead>
					<tbody>
						<?php if(isset($categories)) : ?>
						<?php foreach($categories as $v) :?>
						<tr>
							<td><?php echo $v['categoryID'];?></td>
							<td><?php echo $v['categoryName'];?></td>
							<td><?php echo $v['categoryDesc'];?></td>
							<td><?php echo $v['createdDate'];?></td>
							<td><?php echo $v['modifiedDate'];?></td>
							<td><?php echo $v['status'];?></td>
							<td><a href="<?php echo base_url();?>home/category_create/<?php echo $v['categoryID'];?>" class="edit"><i class="fa fa-edit"></i></a></td>
						</tr>
						<?php endforeach;?>
						<?php endif;?>
					</tbody>
				</table>
		
			</div>
		</div>
		<!-- end: .tray-center -->

	</section>
	<!-- End: Content -->

</div>
<!-- End: Main -->

<!-- BEGIN: PAGE SCRIPTS -->
<!-- jQuery -->
<script src="<?php echo base_url();?>/assets/js/jquery-2.1.4.js"></script>
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
/* $(".edit").on("click",function(){
	var id=$(this).data("value");
	alert(id);
	$.ajax({
   url: '<?php echo base_url();?>home/editfun',
   type: 'POST',
   data: {'id':id},
   dataType: 'json'
  }).done(function(data){
   if(data){
		window.location="<?php echo $base_url();?>/home/category_create/data.categoryID";
   }
  });
});
 */
});

</script>
</body>


<!-- Mirrored from alliance-html.themerex.net/ by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 18 Dec 2015 08:01:30 GMT -->
</html>
