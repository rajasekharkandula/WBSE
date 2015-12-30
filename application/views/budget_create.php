
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
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/bootstrap-datepicker.min.css">

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
			<div class="col-md-12">
				<div class="col-md-5 bg-white">
					<h1 style="color:grey">Budget Creation</h1>
				</div>
			</div>
			<div class="col-md-12">
				<div class="col-md-5 bg-white">
						<form method=post action="<?php echo base_url();?>home/create_budget">
							<br>
							<div class="form-group">
								<input type="hidden" class="form-control" id="bid" name="bid" value="<?php if(isset($budget[0]['budgetID']))echo $budget[0]['budgetID'];?>">
							</div>
							<div class="form-group"> 
								<label for="selectcat">Select Catergory</label>
								<select name="selectcat" id="selectcat" class="width-100">
									<option>SELECT</option>
									<?php if(isset($categories)) : ?>
									<?php foreach($categories as $v) :?>
										<option value="<?php echo $v['categoryID'];?>"  <?php if(isset($budget[0]['categoryID']))if($budget[0]['categoryID']==$v['categoryID']) echo 'selected';?>><?php echo $v['categoryName'];?></option>
									<?php endforeach;?>
									<?php endif;?>
								</select>
							</div>
							
							<div class="form-group" id="task1"> 
								<label for="selecttask">Select Task</label>
								<select name="selecttask" id="selecttask" class="width-100">
									<option>SELECT</option>
									<?php if(isset($tasks)) : ?>
									<?php foreach($tasks as $v) :?>
										<option value="<?php echo $v['taskID'];?>"  <?php if(isset($budget[0]['taskID']))if($budget[0]['taskID']==$v['taskID']) echo 'selected';?>><?php echo $v['taskName'];?></option>
									<?php endforeach;?>
									<?php endif;?>
								</select>
							</div> 
							<div class="form-group">
								<label for="budget">Budget:</label>
								<input type="text" class="form-control" id="budget" placeholder="Budget" name="budget" value="<?php if(isset($budget[0]['budget']))echo $budget[0]['budget'];?>">
							</div>
							<div class="form-group">
								<label for="selectmonth">Month:</label>
								<div class="input-group date" id="datetimepicker1">
									<input type="text" class="form-control" td="selectmonth" name="selectmonth" value="<?php if(isset($budget[0]['budgetDate']))echo $budget[0]['budgetDate'];?>">
									<span class="input-group-addon">
										<span class="fa fa-calendar"></span>
									</span>
								</div>
							</div>
							<div class="form-group">
								<label for="status">Select Status:</label>
								<select name="status" id="status" class="width-100">
									<option value="Active" <?php if(isset($budget[0]['status']))if($budget[0]['status']=='Active') echo 'selected';?>>Active</option>
									<option value="InActive" <?php if(isset($budget[0]['status']))if($budget[0]['status']=='InActive') echo 'selected';?>>In Active </option>
								</select>
							</div>
							<div class="form-group">
							<button type="submit" class="btn btn-default">Submit</button>
							</div>
						</form>
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
	  /*  var html=" <label for='selecttask'>Select Task</label><select name='selecttask' id='selecttask' class='width-100'><?php if(isset($tasks)) : ?>	<?php foreach($values2 as $v) :?><option value='<?php echo $v['taskID'];?>'  <?php if(isset($budget[0]['taskID']))if(($budget[0]['taskID']==$v['taskID']) &&(option==$values2[0]['categoryID'])) echo 'selected';?>><?php echo $v['taskName'];?></option>	<?php endforeach;?><?php endif;?></select>";
	   $("#task1").html(html); */
   }); 
});
</script>
</body>


<!-- Mirrored from alliance-html.themerex.net/ by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 18 Dec 2015 08:01:30 GMT -->
</html>
