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
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/select2.css">

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
    </section>
    <!-- End: Content-Wrapper -->
        <!-- Begin: Content -->
        <section class="c-padding">
			<div class="row">
				<div class="col-md-5 bg-white">
					<h2 class="c-heading">Budget Creation</h2>
					<form method="post" action="<?php echo base_url();?>home/create_budget">
						<div class="form-group">
							<input type="hidden" class="form-control" id="budgetID" name="budgetID" value="<?php if(isset($budget->budgetID))echo $budget->budgetID;?>">
						</div>
						<div class="form-group"> 
							<label for="categoryID">Select Catergory</label>
							<select name="categoryID" id="categoryID" class="width-100" required>
								<option value="">SELECT</option>
								<?php if(isset($categories)) : ?>
								<?php foreach($categories as $v) :?>
									<option value="<?php echo $v->categoryID;?>"  <?php if(isset($budget->categoryID))if($budget->categoryID==$v->categoryID) echo 'selected';?>><?php echo $v->categoryName;?></option>
								<?php endforeach;?>
								<?php endif;?>
							</select>
						</div>
						<div class="form-group" id="task1"> 
							<label for="taskID">Select Task</label>
							<select name="taskID" id="taskID" class="width-100" required>
								<option value="">SELECT</option>
								<?php if(isset($tasks)) : ?>
								<?php foreach($tasks as $v) :?>
									<option value="<?php echo $v->taskID;?>"  <?php if(isset($budget->taskID))if($budget->taskID==$v->taskID) echo 'selected';?>><?php echo $v->taskName;?></option>
								<?php endforeach;?>
								<?php endif;?>
							</select>
						</div> 
						<div class="form-group">
							<label for="budget">Budget:</label>
							<input type="text" class="form-control" id="budget" placeholder="Budget" name="budget" value="<?php if(isset($budget->budget))echo $budget->budget;?>" required>
						</div>
						<div class="row form-group">
							<div class="col-md-6" style="padding-left:12px;">
								<label for="month">Month:</label>
								<select name="month" id="month" class="width-100" required>
									<option value="">SELECT</option>
									<option value="01">January</option>
									<option value="02">February</option>
									<option value="03">March</option>
									<option value="04">April</option>
									<option value="05">May</option>
									<option value="06">June</option>
									<option value="07">July</option>
									<option value="08">August</option>
									<option value="09">September</option>
									<option value="10">October</option>
									<option value="11">November</option>
									<option value="12">December</option>
								</select>
							</div>
							<div class="col-md-6">
								<label for="year">Year:</label>
								<select name="year" id="year" class="width-100" required>
									<option value="">SELECT</option>
									<?php for($i=2012;$i<2500;$i++){ ?>
									<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="status">Select Status:</label>
							<select name="status" id="status" class="width-100">
								<option value="Active" <?php if(isset($budget->status))if($budget->status=='Active') echo 'selected';?>>Active</option>
								<option value="InActive" <?php if(isset($budget->status))if($budget->status=='InActive') echo 'selected';?>>In Active </option>
							</select>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Submit</button>
							<a href="<?php echo base_url('home/budget');?>" type="reset" class="btn btn-default">Cancel</a>
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
    $("#selectcat").on('change',function(){
	   var option=$(this).val();
	   $.ajax({
	   url: '<?php echo base_url(); ?>home/getTaskList',
	   type: 'POST',
	   data: {'option':option},
	   dataType:'JSON',
	  }).done(function(data){
	   var i=0,html=''; 
	   html+='<label for="selecttask">Select Task</label>	<select name="selecttask" id="selecttask" class="width-100"><option>SELECT</option>';
		for(i=0;i<data.length;i++){
		html+='<option value="'+data[i]['taskID']+'">'+data[i]['taskName']+'</option>';
		}
		html+='</select>';
	   $('#task1').html(html);
	   
	  });
	 
   }); 
});
</script>
</body>
</html>
