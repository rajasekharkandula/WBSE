
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
				<form method="post" action="http://localhost:8081/WBSE/home/create_task">
					<div class="form-group"> 
						<div class="form-group">
						<input type="hidden" class="form-control" id="tid" name="tid" value="<?php if(isset($values1[0]['taskID']))echo $values1[0]['taskID'];?>">
						</div>
						<label for="selectcat">Select Catergory</label>
						
						<select name="selectcat" id="selectcat" class="width-100" required>
						<option disabled selected>SELECT</option>
						<?php if(isset($categories)) : ?>
						<?php foreach($categories as $v) :?>
							<option value="<?php echo $v['categoryID']?>" <?php if(isset($task[0]['categoryID']))if($task[0]['categoryID']==$v['categoryID']) echo 'selected';?>><?php echo $v['categoryName'];?></option>
						<?php endforeach;?>
						<?php endif;?>
						</select>

					</div>
					<div class="form-group">
						<label for="tname">Task Name:</label>
						<input type="text" class="form-control" id="tname" placeholder="Task Name" name="tname" required value="<?php if(isset($task[0]['taskName']))echo $task[0]['taskName'];?>">
					</div>
					<div class="form-group">
						<label for="wbse">WBSE</label>
						<input type="text" class="form-control" id="wbse" placeholder="WBSE Number" name="wbse" value="<?php if(isset($task[0]['wbse']))echo $task[0]['wbse'];?>">
					</div>
					<div class="form-group">
					  <label for="tdesc">Description:</label>
					  <textarea class="form-control" rows="5" id="tdesc" placeholder="Task Description" name="tdesc" required value=""><?php if(isset($task[0]['taskDesc']))echo $task[0]['taskDesc'];?></textarea>
					</div>
					<div class="form-group">
						<label for="tbudget">Default Budget:</label>
						<input type="text" class="form-control" id="tbudget" placeholder="Task Budget" name="tbudget" required value="<?php if(isset($task[0]['defBudget']))echo $task[0]['defBudget'];?>">
					</div>
					<div class="form-group">
						<label for="texpdate">Expiry Date:</label>
						<div class="input-group date datepicker"  id="datetimepicker1" >
							<input type="text" class="form-control"  name="texpdate" value="<?php if(isset($task[0]['expiryDate']))echo $task[0]['expiryDate'];?>">
							<span class="input-group-addon">
								<i class="fa fa-calendar"></i>
							</span>
						</div>
					</div>
					<div class="form-group">
						<label for="tstatus">Status:</label>
						<select name="tstatus" id="tstatus" class="width-100" required>
							<option disabled>SELECT</option>
							<option value="Active" <?php if(isset($task[0]['status']))if($task[0]['status']=='Active') echo 'selected';?>>Active</option>
							<option value="InActive" <?php if(isset($task[0]['status']))if($task[0]['status']=='InActive') echo 'selected';?>>In Active </option>
						</select>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Submit</button>
						<button type="reset" class="btn btn-default">Cancel</button>
					</div>
				</form>
			</div>
			<div class="col-md-7 bg-white">
				<h2 class="c-heading">List Of Tasks</h2>
				<br>
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
						<?php foreach($tasks as $v) :?>
						<tr>
							<td class="hide"><?php echo $v['taskID'];?></td>
							<td><?php echo $v['taskName'];?></td>
							<td><?php echo $v['categoryName'];?></td>
							<td><?php echo $v['wbse'];?></td>
							<td><?php echo $v['taskDesc'];?></td>
							<td><?php echo $v['defBudget'];?></td>
							<td><?php echo $v['expiryDate'];?></td>
							<td><?php echo $v['status'];?></td>
							<td><a href="<?php echo base_url();?>home/task_create/<?php echo $v['taskID'];?>" class="edit"><i class="fa fa-edit"></i></a></td>
						</tr>
						<?php endforeach;?>
						<?php endif;?>
					</tbody>
				</table>
			</div>
		</div>
	</section>
	<!-- End: Content -->

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
</body>


<!-- Mirrored from alliance-html.themerex.net/ by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 18 Dec 2015 08:01:30 GMT -->
</html>
