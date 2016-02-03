<!DOCTYPE html>
<html>
<head>
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
<style>
.circle_icon{
    background-color: grey;
    width: 20px;
    height: 20px;
    border-radius: 25px;
    padding: 5px 5px;
}
button.circle_icon{
    background-color: grey;
    width: 20px;
    height: 20px;
    border-radius: 25px;
    padding: 0px 0px;
}
td .circle_icon{
 color:#fff;
}
.th-center{text-align:center;}

.mt-75{margin-top:75px;}

</style>
</head>
<body>
	<section>
	  <div class="main">
		<?php echo $header;?>
	   </div>
	  <div class="container">
		<a href="/WBSE/home/edit_roles/">
			<div class="col-md-3 mt-80">
				<div class="add-rule">ADD ROLE</div>
			</div>
		</a>
		<div class="col-md-3"><h2 class="mt-75">List of Roles</h2></div>
	   <table class="text-center table" style="width:100%">
			<thead>
				 <tr>
					  <th class="th-center">Roles</th>
					  <th  class="th-center">Description</th>
					  <th  class="th-center">Status</th>
					  <th  class="th-center">Actions</th>
				 </tr>
			</thead>
			<tbody>
				<?php foreach($roles as $r):?>
				 <tr>
					  <td><?php echo $r->roleName;?></td>
					  <td><?php echo $r->roleDescription;?></td>
					  <td><?php  if($r->roleStatus=="P") echo 'Active';else echo 'In Active';?></td>
					  <td>
						<a class="btn" href="/WBSE/home/edit_roles/<?php echo $r->uRoleID;?>" data-toggle="tooltip" data-placement="top" title="Edit"><i class="circle_icon fa fa-edit"></i></a>&nbsp;<button class="btn circle_icon delete_btn" value="<?php echo $r->uRoleID;?>" data-toggle="tooltip" data-placement="top" title="delete"><i class=" fa fa-remove"></i></button>
					  </td>
				 </tr>
				<?php endforeach;?>
			</tbody>
	   </table>
	</div>
 </section>
<script src="<?php echo base_url();?>/assets/js/jquery-2.1.4.js"></script>
<script src="<?php echo base_url();?>/assets/js/jquery-ui.min.js"></script>


<!-- Theme Javascript -->
<script src="<?php echo base_url();?>/assets/js/utility.js"></script>
<script src="<?php echo base_url();?>/assets/js/demo.js"></script>
<script src="<?php echo base_url();?>/assets/js/main.js"></script>
<script src="<?php echo base_url();?>/assets/js/select2.js"></script>
<!-- Widget Javascript -->
<script src="<?php echo base_url();?>/assets/js/dashboard1.js"></script>
<script>
$('.delete_btn').on('click',function(){
 var id=$(this).val();
 $.ajax({
 url: "/WBSE/home/deleteRoles",
 type: "POST",
 dataType:'json',
 data: {"roleID":id}
 }).done(function(data){
  if(data)
  {
   window.location.reload();
  }
 });
});
</script>
</body>
</html>