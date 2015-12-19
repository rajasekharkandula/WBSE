
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

     <!-- Favicon -->
    <link rel="shortcut icon" href="/WBSE/assets/img/favicon.ico">

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
		min-width:100px;
	}
	.fs-med
	{
		font-size:medium;
	}
	.table-vertical
	{
		border-left: solid 1px black;
	}
	td
	{
		font-size:15px !important;
	}
	.bg-pink
	{
		background-color:pink;
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
				<div class = "panel-heading"> <h1>Project Budgeted Cost</h1></div>
					<div class="border-solid">
							<table class = "table">
								<tr>
									<th>PRODUCT TASKS</th>
									<th>WBS ELEMENT</th>
									<th colspan="2" class="table-vertical"><center>Jan</center></th>
									<th colspan="2" class="table-vertical"><center>Feb</center></th>
									<th colspan="2" class="table-vertical"><center>Mar</center></th>
									<th colspan="2" class="table-vertical"><center>TOTAL</center></th>
								</tr>
								<tr>
									<th></th>
									<th></th>
									<th class="table-vertical">Budgeted</th>
									<th>Actual</th>
									<th class="table-vertical">Budgeted</th>
									<th>Actual</th>
									<th class="table-vertical">Budgeted</th>
									<th>Actual</th>
									<th class="table-vertical">Budgeted</th>
									<th>Actual</th>
								</tr>
								<tr>
									<td>Develop Functiona Specifications</td>
									<td>SAPDES0001</td>
									<td class="table-vertical">25.0</td>
									<td>20.00</td>
									<td class="table-vertical">1.0</td>
									<td>10.00</td>
									<td class="table-vertical bg-pink">1.0</td>
									<td>0.00</td>
									<td class="table-vertical">27.0</td>
									<td>30.0</td>
								</tr>
								<tr>
									<td>Develop System Architecture</td>
									<td>SAPDES0002</td>
									<td class="table-vertical">1.0</td>
									<td>0.0</td>
									<td class="table-vertical">1.0</td>
									<td>0.0</td>
									<td class="table-vertical">1.0</td>
									<td>0.0</td>
									<td class="table-vertical">3.0</td>
									<td>0.0</td>
								</tr>
								<tr>
									<td>Develop Preliminary Design Specifications</td>
									<td>SAPDES0003</td>
									<td class="table-vertical">1.0</td>
									<td>10.0</td>
									<td class="table-vertical bg-pink">1.0</td>
									<td>10.0</td>
									<td class="table-vertical">1.0</td>
									<td>0.00</td>
									<td class="table-vertical">3.0</td>
									<td>20.0</td>
								</tr>
								<tr>
									<td>Develop Detailed Design Specifications</td>
									<td>SAPDES0004</td>
									<td class="table-vertical">1.0</td>
									<td>10.0</td>
									<td class="table-vertical">1.0</td>
									<td>10.0</td>
									<td class="table-vertical">1.0</td>
									<td>0.0</td>
									<td class="table-vertical">3.0</td>
									<td>20.0</td>
								</tr>
								<tr>
									<td>Develop Acceptance Test Plan</td>
									<td>SAPDES0005</td>
									<td class="table-vertical">1.0</td>
									<td>0.0</td>
									<td class="table-vertical">1.0</td>
									<td>0.0</td>
									<td class="table-vertical">1.0</td>
									<td>0.00</td>
									<td class="table-vertical">3.0</td>
									<td>0.0</td>
								</tr>
								<tr>
									<th>Sub Total</th>
									<th></th>
									<th class="table-vertical bg-yellow">29.0</th>
									<th class="bg-yellow">40.0</th>
									<th class="table-vertical bg-yellow">$5.0</th>
									<th class="bg-yellow">$30.0</th>
									<th class="table-vertical bg-yellow">$5.0</th>
									<th class="bg-yellow">$0.0</th>
									<th class="table-vertical bg-yellow">$109.0</th>
									<th class="bg-yellow">$70.0</th>
								</tr>
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
<script src="/WBSE/assets/js/jquery-2.1.4.js"></script>
<script src="/WBSE/assets/js/jquery-ui.min.js"></script>


<!-- Theme Javascript -->
<script src="/WBSE/assets/js/utility.js"></script>
<script src="/WBSE/assets/js/demo.js"></script>
<script src="/WBSE/assets/js/main.js"></script>
<script src="/WBSE/assets/js/select2.js"></script>
<!-- Widget Javascript -->
<script src="/WBSE/assets/js/dashboard1.js"></script>
<!-- END: PAGE SCRIPTS -->

</body>


<!-- Mirrored from alliance-html.themerex.net/ by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 18 Dec 2015 08:01:30 GMT -->
</html>
