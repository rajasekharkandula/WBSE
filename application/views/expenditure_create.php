
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
	td
	{
		font-size:15px !important;
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
                        <a href="dashboard1.html">Expenditure Entry</a></li>
                    <li class="crumb-link">
                        <a href="index-2.html">Home</a>
                    </li>
                    <li class="crumb-trail">Expenditure Entry</li>
                </ol>
            </div>
        </header>
        <!-- End: Topbar -->

        <!-- Begin: Content -->
        <section id="content" class="animated fadeIn">
			<div class="row">
			<div class="col-md-12">
				<div class="col-md-5 bg-white">
					<h2 class="c-heading">Expenditure Creation</h2>
						<form method=post action="<?php echo base_url();?>home/create_expenditure/">
							<br>
						<div class="form-group">
						<input type="hidden" class="form-control" id="eid" name="eid" value="<?php if(isset($expenditures[0]['expenditureID']))echo $expenditures[0]['expenditureID'];?>">
						<input type="hidden" class="form-control" id="gid" name="gid" value="<?php echo $groupID;?>">
						</div>
							<!--<div class="form-group"> 
								<label for="selectcat">Select Catergory</label>
								<select name="selectcat" id="selectcat" class="width-100">
						<?php /*  if(isset($categories)) : ?>
						<?php foreach($categories as $v) :?>
							<option value="<?php echo $v['categoryName']?>" <?php if(isset($expenditures[0]['categoryName']))if($expenditures[0]['categoryName']==$v['categoryName']) echo 'selected';?>><?php echo $v['categoryName'];?></option>
						<?php endforeach;?>
						<?php endif;  */ ?> 
								</select>
							</div>
							<div class="form-group"> 
								<label for="selecttask">Select Task:</label>
								<select name="selecttask" id="selecttask" class="width-100">
								<?php  /*  if(isset($tasks)) : ?>
								<?php foreach($tasks as $v) :?>
									<option value="<?php echo $v['taskName']?>" <?php if(isset($expenditures[0]['taskName']))if($expenditures[0]['taskName']==$v['taskName']) echo 'selected';?>><?php echo $v['taskName'];?>
								<?php endforeach;?>
								<?php endif;  */ ?>
									</select>
							</div> -->

							<div class="form-group"> 
								<label for="selectcat">Select Catergory</label>
								<select name="selectcat" id="selectcat" class="width-100">
									<option>SELECT</option>
									<?php if(isset($categories)) : ?>
									<?php foreach($categories as $v) :?>
										<option value="<?php echo $v['categoryID'];?>"  <?php if(isset($expenditures[0]['categoryID']))if($expenditures[0]['categoryID']==$v['categoryID']) echo 'selected';?>><?php echo $v['categoryName'];?></option>
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
										<option value="<?php echo $v['taskID'];?>"  <?php if(isset($expenditures[0]['taskID']))if($expenditures[0]['taskID']==$v['taskID']) echo 'selected';?>><?php echo $v['taskName'];?></option>
									<?php endforeach;?>
									<?php endif;?>
								</select> 
							</div> 
							<div class="form-group">
								<label for="ecost">Cost:</label>
								<input type="text" class="form-control" id="ecost" placeholder="Cost" name="ecost" value="<?php if(isset($expenditures[0]['expenditureCost']))echo $expenditures[0]['expenditureCost'];?>">
							</div>
							<div class="form-group">
								<label for="date">Date:</label>
								<div class="input-group date" id="datetimepicker1">
									<input type="text" class="form-control" td="expdate" name="expdate" value="<?php if(isset($expenditures[0]['expDate']))echo $expenditures[0]['expDate'];?>">
									<span class="input-group-addon">
										<span class="fa fa-calendar"></span>
									</span>
								</div>
							</div>
						<!--	<div class="form-group">
								<label for="empid">EMP ID:</label>
								<input type="text" class="form-control" id="empid" placeholder="Employee ID" name="empid" value="<?php if(isset($expenditures[0]['employeeID']))echo $expenditures[0]['employeeID'];?>">
							</div>
							<div class="form-group">
								<label for="ename">Employee Name:</label>
								<input type="text" class="form-control" id="ename" placeholder="Employee Name" name="ename" disabled value="<?php if(isset($expenditures[0]['employeeName']))echo $expenditures[0]['employeeName'];?>">
							</div> -->
							<div class="form-group">
								<label for="reason">Reason:</label>
								<textarea class="form-control" rows="5" id="reason" placeholder="Expenditure Reason" name="reason" value=""><?php if(isset($expenditures[0]['reason']))echo $expenditures[0]['reason'];?></textarea>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-default">Submit</button>
								<button type="reset" class="btn btn-default">Cancel</button>
							</div>
						</form>
				</div>
				<div class="col-md-7 bg-white">
					<h2 class="c-heading">Expenditure List</h2>
					<br>
					<div class="">
							<table class = "table">
								<tr>
									<th class="hide">SNO</th>
									<th>CATEGORY NAME</th>
									<th>TASK NAME</th>
									<th>WBSE</th>
									<th>COST</th>
									<th>DATE</th>
							<!--		<th>EMP ID</th>
									<th>EMP NAME</th> -->
									<th>REASON FOR EXPENDITURE</th>
									<th>Edit</th>
								</tr>
								<?php if(isset($expendituregroup)) : ?>
								<?php foreach($expendituregroup as $v) :?>
								<tr>
									<td class="hide"><?php echo $v['expenditureID'];?></td>
									<td><?php echo $v['categoryName'];?></td>
									<td><?php echo $v['taskName'];?></td>
									<td><?php echo $v['wbse'];?></td>
									<td><?php echo $v['expenditureCost'];?></td>
									<td><?php echo $v['expDate'];?></td>
								<!--	<td><?php /* echo $v['employeeID']; */ ?></td>
									<td> <?php /* echo $v['employeeName']; */?></td> -->
									<td><?php echo $v['reason'];?></td> 
									<td><a href="<?php echo base_url();?>home/expenditure_create/<?php echo $v['expenditureID'];?>" class="edit"><i class="fa fa-edit"></i></a></td>

								</tr>
								<?php endforeach;?>
								<?php endif;?>

							</table>
							<br>
						</div		
					</div>
			</div>
        </section>
        <!-- End: Content -->

     </section>
    <!-- End: Content-Wrapper -->
	</div>
</div>
<!-- End: Main -->

<!-- BEGIN: PAGE SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo base_url();?>/assets/js/jquery-2.1.4.js"></script>
<script src="<?php echo base_url();?>/assets/js/jquery-ui.min.js"></script>

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
	  /*  var html=" <label for='selecttask'>Select Task</label><select name='selecttask' id='selecttask' class='width-100'><?php if(isset($tasks)) : ?>	<?php foreach($tasks as $v) :?><option value='<?php echo $v['taskID'];?>'  <?php if(isset($values1[0]['taskID']))if(($values1[0]['taskID']==$v['taskID']) &&(option==$tasks[0]['categoryID'])) echo 'selected';?>><?php echo $v['taskName'];?></option>	<?php endforeach;?><?php endif;?></select>";
	   $("#task1").html(html); */
   }); 
});
</script>
<!-- END: PAGE SCRIPTS -->

</body>


<!-- Mirrored from alliance-html.themerex.net/ by HTTrack Website Copier/3.x [XR&CO'2010], Fri, 18 Dec 2015 08:01:30 GMT -->
</html>
