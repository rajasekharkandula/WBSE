<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />

<link href='<?php echo base_url();?>assets/css/fullcalendar.css' rel='stylesheet' />
<link href='<?php echo base_url();?>assets/css/fullcalendar.print.css' rel='stylesheet' media='print' />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/theme.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/select2.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap-datepicker.min.css">

</head>
<style>

	body {
		margin: 40px 10px;
		padding: 0;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		font-size: 14px;
	}

	#calendar {
		max-width: 900px;
		margin: 0 auto;
	}

</style>
<body>
<section>
	<?php echo $header;?>
	<div id='calendar' style="margin-top:70px;"></div>
</section>
<!-- Widget Javascript -->
<script src="<?php echo base_url();?>assets/js/jquery-2.1.4.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery-ui.min.js"></script>
<script src="<?php echo base_url();?>assets/js/utility.js"></script>
<script src="<?php echo base_url();?>assets/js/main.js"></script>

<script src='<?php echo base_url();?>assets/js/moment.min.js'></script>
<script src='<?php echo base_url();?>assets/js/jquery.min.js'></script>
<script src='<?php echo base_url();?>assets/js/fullcalendar.min.js'></script>

<script>

	$(document).ready(function() {
		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			selectable: true,
			selectHelper: true,
			select: function(start, end) {
				var title = prompt('Event Title:');
				var eventData;
				if (title) {
					eventData = {
						title: title,
						start: start,
						color: 'black',
						end: end
					};
					
					$('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
				}
				$('#calendar').fullCalendar('unselect');
			},
			editable: true,
			eventLimit: true, // allow "more" link when too many events
			events: [
				<?php foreach($calendar as $cal) :?>
				{
					title:"<?php echo $cal->Holiday_name;?>",
					start:'<?php echo $cal->date;?>',
					color: 'grey',
				}<?php if(sizeof($cal)!=0) echo',';?>
				<?php endforeach;?>
				<?php foreach($attendance as $cal) :?>
				<?php if($signin==$cal->userID) :?>
				{
					title:"<?php echo $cal->attendance;?>",
					start:'<?php echo $cal->date;?>',
					color: 'green',
					text: 'white',
				}<?php if(sizeof($cal)!=0) echo',';?>
				<?php endif;?>
				<?php endforeach;?>
				/*{
					title: 'All Day Event',
					start: '2016-01-01'
				},
				{
					title: 'Long Event',
					start: '2016-01-07',
					end: '2016-01-10'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2016-01-09T16:00:00'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2016-01-16T16:00:00'
				},
				{
					title: 'Conference',
					start: '2016-01-11',
					end: '2016-01-13'
				},
				{
					title: 'Meeting',
					start: '2016-01-12T10:30:00',
					end: '2016-01-12T12:30:00'
				},
				{
					title: 'Lunch',
					start: '2016-01-12T12:00:00'
				},
				{
					title: 'Meeting',
					start: '2016-01-12T14:30:00'
				},
				{
					title: 'Happy Hour',
					start: '2016-01-12T17:30:00'
				},
				{
					title: 'Dinner',
					start: '2016-01-12T20:00:00'
				},
				{
					title: 'Birthday Party',
					start: '2016-01-13T07:00:00'
				},
				{
					title: 'Click for Google',
					url: 'http://google.com/',
					start: '2016-01-28'
				}*/
			],
			eventClick: function(calEvent, jsEvent, view) {

				var title=calEvent.title;
				var d = new Date(calEvent.start);
				//alert(d);
				var formattedDate = d.getDate() + "-" + (d.getMonth() + 1) + "-" + d.getFullYear();
				d = new Date();
				var hours = (d.getHours() < 10) ? "0" + d.getHours() : d.getHours();
				var minutes = (d.getMinutes() < 10) ? "0" + d.getMinutes() : d.getMinutes();
				var formattedTime = hours + ":" + minutes;
				formattedDate = formattedDate + " " + formattedTime;
				$.ajax({
				url: "/WBSE/home/insattndnce",
				type: "POST",
				dataType:'json',
				data: {"title":title,"datetime":formattedDate}
				}).done(function(data){
					if(data.status=='success')
					{
						$(this).css('border-color', 'red');
						window.location='/WBSE/';
					}
				});
				// change the border color just for fun
				

			}
		});
		
	});

</script>

</body>
</html>