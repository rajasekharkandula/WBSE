
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
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/select2.css">

     <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo base_url();?>/assets/img/favicon.ico">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
	.header-name{font-size: 35px !important; text-transform: uppercase;}
	.ml-35{margin-left:35px !important;}
	.bg-white{background-color:white;}
	.width-100
	{
		width:100%;
		height:37px;
	}
	.border-solid
	{
		border-style:solid;
		display: inline-block;
		width: 100%;
	}
	th
	{
		font-size:medium !important;
		color:black;
		min-width:80px;
	}
	.fs-med
	{
		font-size:medium;
	}
	td
	{
		font-size:15px !important;
	}
	.bg-yellow
	{
		background-color:rgba(255,255,0,0.2) !important;
	}
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
                        <a href="dashboard1.html">
                            <span class="fa fa-home"></span>
                        </a>
                    </li>
                    <li class="crumb-active">
                        <a href="dashboard1.html">Budget
                    <li class="crumb-link">
                        <a href="index-2.html">Home</a>
                    </li>
                    <li class="crumb-trail">Budget</li>
                </ol>
            </div>
        </header>
        <!-- End: Topbar -->

        <!-- Begin: Content -->
        <section id="content" class="animated fadeIn">
			<div class = "panel panel-default">
					<div class="row">
						<div class="col-md-12">
							<a href="<?php echo base_url('home/recovery_create');?>" class="btn btn-danger hidden-xs"><i class="fa fa-plus"></i> &nbsp;  New </a>
						</div>	
					</div>	
					<br>
					<div class="border-solid">
							<table class = "table">
								<tr>
									<th>SNO</th>
									<th>HEAD/COMPANY NAME</th>
									<th>AMOUNT</th>
									<th>DATE</th>
									<th>MODE OF PAYMENT</th>
									<th>REALISED</th>
									<th>Edit</th>
								</tr>
								<?php if(isset($recoveries)) : ?>
								<?php foreach($recoveries as $v) :?>
								<tr>
									<td><?php echo $v['recoveryID']?></td>	
									<td><?php echo $v['companyName']?></td>
									<td><?php echo $v['recoveryAmount']?></td>
									<td><?php echo $v['recoveryDate']?></td>
									<td><?php echo $v['modePayment']?></td>
									<td><?php echo $v['realise']?></td>
									<td><a href="<?php echo base_url();?>home/recovery_create/<?php echo $v['recoveryID'];?>" class="edit"><i class="fa fa-edit"></i></a></td>
								</tr>
								<?php endforeach;?>
								<?php endif;?>
							</table>
						</div>
			</div>

        </section>
        <!-- End: Content -->

     </section>
    <!-- End: Content-Wrapper -->

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
<script src="<?php echo base_url();?>/assets/js/select2.js"></script>
<!-- Widget Javascript -->
<script src="<?php echo base_url();?>/assets/js/dashboard1.js"></script>
<!-- END: PAGE SCRIPTS -->

</body>


<!-- Mirrored from alliance-html.themerex.net/ by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 18 Dec 2015 08:01:30 GMT -->
</html>
