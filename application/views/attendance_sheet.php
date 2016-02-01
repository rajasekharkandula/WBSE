<!DOCTYPE HTML>
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
	
</head>
<body>
	<table class="table">
	<tr>
		<th class="">Name</th>
		<th class="">1</th>
		<th class="">2</th>
		<th class="">3</th>
		<th class="">4</th>
		<th class="">5</th>
		<th class="">6</th>
		<th class="">7</th>
		<th class="">8</th>
		<th class="">9</th>
		<th class="">10</th>
		<th class="">11</th>
		<th class="">12</th>
		<th class="">13</th>
		<th class="">14</th>
		<th class="">15</th>
		<th class="">16</th>
		<th class="">17</th>
		<th class="">18</th>
		<th class="">19</th>
		<th class="">20</th>
		<th class="">21</th>
		<th class="">22</th>
		<th class="">23</th>
		<th class="">24</th>
		<th class="">25</th>
		<th class="">26</th>
		<th class="">27</th>
		<th class="">28</th>
		<th class="">29</th>
		<th class="">30</th>
		<th class="">31</th>
	</tr>
	<?php foreach($details as $d):?>
	<?php foreach($attendance as $a):?>
	<tr>
		<td class=""><?php echo $d['userName'];?></td>
		<td class=""><?php  if($d['userID']==$a->userID)echo $a->attendance;?> </td>
		<td class=""></td>
		<td class=""></td>
		<td class=""></td>
		<td class=""></td>
		<td class=""></td>
		<td class=""></td>
		<td class=""></td>
		<td class=""></td>
		<td class=""></td>
		<td class=""></td>
		<td class=""></td>
		<td class=""></td>
		<td class=""></td>
		<td class=""></td>
		<td class=""></td>
		<td class=""></td>
		<td class=""></td>
		<td class=""></td>
		<td class=""></td>
		<td class=""></td>
		<td class=""></td>
		<td class=""></td>
		<td class=""></td>
		<td class=""></td>
		<td class=""></td>
		<td class=""></td>
		<td class=""></td>
		<td class=""></td>
	</tr>
	<?php endforeach;?>
	<?php endforeach;?>
</table>
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
</html>