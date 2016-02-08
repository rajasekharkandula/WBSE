<!DOCTYPE html>
<html lang="en">
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
	.login-mt { margin-top: 5%; }
	.fa{font-size:20em;color:#DA5F5F;}
	body{min-height:0px;height:auto;}
	.header-text{font-size:5em;}
	.header-error{font-size:3em;}
	.header-desc{font-size:1.1em;}
</style>
</head>

<body style="background: #e9e9e9;">


<!-- Start: Header -->
<header class="navbar navbar-fixed-top bg-dark">
	<ul class="nav navbar-nav navbar-left ml-35">
		<li class="dropdown menu-merge hidden-xs">
			<a href="<?php echo base_url();?>" class="header-name">WBSE </a>
		</li>
	</ul>
</header>
<div class="container login-mt">

	<div class="row">
		<div class="col-md-12 text-center">
			<i class="fa fa-thumbs-o-down"></i><br>
			<span class="header-text">401</span> <span class="header-error">Un-authorized entry</span><br>
			<span class="header-desc">Your session might be expired OR You may mistype the url. Please go back and check the session<br><br><a href="<?php echo base_url();?>" class="btn btn-danger">Go Home</a></span>
		</div>
	</div>
</div>

<!-- End: Main -->

</body>
</html>
