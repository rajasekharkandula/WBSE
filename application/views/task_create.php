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
						<input type="hidden" class="form-control" id="taskID" name="taskID" value="<?php if(isset($values1->taskID))echo $values1->taskID;?>">
						</div>
						<label for="categoryID">Select Catergory</label>
						
						<select name="categoryID" id="categoryID" class="width-100" required>
						<option disabled selected>SELECT</option>
						<?php if(isset($categories)) : ?>
						<?php foreach($categories as $v) :?>
							<option value="<?php echo $v->categoryID;?>" <?php if(isset($task->categoryID))if($task->categoryID==$v->categoryID) echo 'selected';?>><?php echo $v->categoryName;?></option>
						<?php endforeach;?>
						<?php endif;?>
						</select>

					</div>
					<div class="form-group">
						<label for="taskName">Task Name:</label>
						<input type="text" class="form-control" id="taskName" placeholder="Task Name" name="taskName" required value="<?php if(isset($task->taskName))echo $task->taskName;?>">
					</div>
					<div class="form-group">
						<label for="wbse">WBSE</label>
						<input type="text" class="form-control" id="wbse" placeholder="WBSE Number" name="wbse" value="<?php if(isset($task->wbse))echo $task->wbse;?>">
					</div>
					<div class="form-group">
					  <label for="taskDesc">Description:</label>
					  <textarea class="form-control" rows="5" id="taskDesc" placeholder="Task Description" name="taskDesc" required value=""><?php if(isset($task->taskDesc))echo $task->taskDesc;?></textarea>
					</div>
					<div class="form-group">
						<label for="defBudget">Default Budget:</label>
						<input type="text" class="form-control" id="defBudget" placeholder="Task Budget" name="defBudget" required value="<?php if(isset($task->defBudget))echo $task->defBudget;?>">
					</div>
					<div class="form-group">
						<label for="expiryDate">Expiry Date:</label>
						<div class="input-group date datepicker"  id="datetimepicker1" >
							<input type="text" class="form-control"  name="expiryDate" value="<?php if(isset($task->expiryDate))echo $task->expiryDate;?>">
							<span class="input-group-addon">
								<i class="fa fa-calendar"></i>
							</span>
						</div>
					</div>
					<div class="form-group">
						<label for="taskStatus">Status:</label>
						<select name="taskStatus" id="taskStatus" class="width-100" required>
							<option disabled>SELECT</option>
							<option value="Active" <?php if(isset($task->taskStatus))if($task->taskStatus=='Active') echo 'selected';?>>Active</option>
							<option value="Inactive" <?php if(isset($task->taskStatus))if($task->taskStatus=='Inactive') echo 'selected';?>>In Active </option>
						</select>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Submit</button>
						<a href="<?php echo base_url('home/tasks');?>" type="reset" class="btn btn-default">Cancel</a>
					</div>
				</form>
			</div>
			<div class="col-md-7 bg-white hide">
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

</html>
