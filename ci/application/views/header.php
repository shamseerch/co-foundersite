<!DOCTYPE html>
<?php
$this->load->helper('form');
 $this->load->helper('url');?>
<html>
<head>
 


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>js/header.js"></script>
<script type="text/javascript">
 var base_url = '<?php echo base_url(); ?>';

</script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">

<body>

<div id="bgcolor">

	<div id="side1">
		<ul><li id="ul1" onClick="funview(this.id)">StartUp</li><br>
			<ul id="ul1a" class=status_div>
				<li><a href="requst_admin">Start Up Request</a></li><br>
			
				<li><a href="status_admin">Update Status</a></li><br>
				
				<li><a href="payment_admin">Payment</a></li><br>
				<li><a href="pay_admin">Pay Now</a></li><br>
				<li><a href="duration_admin">Set Duration</a></li><br>
				<li><a href="testimonial_admin">Testimonial</a></li><br>
				<li><a href="testimonial_view_admin">Testimonial View</a><br></li>
					
			</ul>
		</ul>
	</div> 
</div>
<div id="text">
 


