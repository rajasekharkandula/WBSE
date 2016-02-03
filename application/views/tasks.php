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
                       <a href="<?php echo base_url('home/tasks');?>">Tasks</a>
                    </li>
                    <li class="crumb-link">
                        <a href="<?php echo base_url();?>">Home</a>
                    </li>
                    <li class="crumb-trail">Tasks</li>
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
				<a href="<?php echo base_url('home/task_create');?>" class="btn btn-danger hidden-xs"><i class="fa fa-plus"></i> &nbsp;  New </a>
			</div>	
		</div>	
		<br/>
		<div class="row">
			<div class="col-md-12">
				<table class="table">
					<thead>
						<tr>
							<th class="text-center hide">SNO</th>
							<th>Task Name</th>
							<th>Category Name</th>
							<th>WBSE</th>
							<th>Task Desc</th>
							<th>Default Budget</th>
							<th>Expiry Date</th>
							<th>Status</th>
							<th>Edit</th>
						</tr>
					</thead>
					<tbody>
						<?php if(isset($tasks)) : ?>
						<?php $i=0;foreach($tasks as $v) :?>
						<tr>
							<td class="hide"><?php echo $i;?></td>
							<td><?php echo $v->taskName;?></td>
							<td><?php echo $v->categoryName;?></td>
							<td><?php echo $v->wbse;?></td>
							<td><?php echo $v->taskDesc;?></td>
							<td><?php echo $v->defBudget;?></td>
							<td><?php echo $v->expiryDate;?></td>
							<td><?php echo $v->status;?></td>
							<td><a href="<?php echo base_url();?>home/task_create/<?php echo $v->taskID;?>" class="edit"><i class="fa fa-edit"></i></a></td>
						</tr>
						<?php $i++;endforeach;?>
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

</body>


<!-- Mirrored from alliance-html.themerex.net/ by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 18 Dec 2015 08:01:30 GMT -->
</html>
