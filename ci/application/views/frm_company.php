<script type="text/javascript" src="<?php echo base_url();?>js/client/companyregvalidation
.js"></script>
<script type="text/javascript">
var base_url="<?=base_url()?>";
	//$(function(){
	
	
	// $("#email").focusout(function(){
	// 	var email=$("#email").val();
	// 		$.ajax({
 //    type:'post',
 //        url:'?php echo base_url();?index.php/Cofounder/mail/"',// put your real file name 
 //        data:{'email': email},
 //        success:function(msg){
 //        //alert(email); // your message will come here.  
 //        if(msg==1) 
 //        {
 //        	$("#err_email").html("Email already registered");
 //        	$("#err_email").show();
 //        	var err_Email = true;

 //        }
 //       else
 //       {
 //       	$("#err_email").hide();
 //       	var err_Email = false;
 //       }
 //        }
 // });
// });
// });
</script>
<link rel = "stylesheet" type = "text/css" 
   href = "<?php echo base_url(); ?>css/freelancestyle.css">
<!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Company Register</h1>
					</div>
				</div>
			</div>
		</div>
        
        <div class="section">
	    	<div class="container">
				<div class="row">
					<div class="col-sm-5">
						<div class="basic-login">
							<form method="post" name="myform" id="myform" action="">
								<div class="form-group">
		        				 	<label for="register-companyname"><i class="icon-user"></i> <b>Name of Company</b></label>
									<input class="form-control" id="name" type="text" placeholder="" name="name" required="name">
									<span class="error_form" id="err_name"></span>
								</div>
								<div class="form-group">
		        				 	<label for="register-Address"><i class="icon-lock"></i> <b>Address</b></label>
									<input class="form-control" name="Address" id="addres"  type="text" placeholder="" required="Address">
									<span class="error_form" id="err_addres"></span>
								</div>
								<div class="form-group">
		        				 	<label for="register-Email"><i class="icon-lock"></i> <b>Email</b></label>
									<input class="form-control" name="email" id="email" type="text" placeholder="" required="email">
									<span class="error_form" id="err_email"></span>
								</div>
								<div class="form-group">
		        				 	<label for="register-Email"><i class="icon-lock"></i> <b>Contact Number</b></label>
									<input class="form-control" type="text" placeholder="" name="phone" id="phone" required="phone" maxlength=14>
									 <span class="error_form" id="err_phone"></span>
								</div>
								<div class="form-group">
		        				 	<label for="register-Industry"><i class="icon-lock"></i> <b>Industry</b></label>
									<input class="form-control" id="register-Industry" type="text" placeholder="" name="Industry">
									<span id="err_phone"></span>
								</div>
								<div class="form-group">
		        				 	<label for="register-Services"><i class="icon-lock"></i> <b>Services</b></label>
									<input class="form-control" id="Services" type="text" placeholder="" name="Services" required="Services">
									<span class="error_form" id="err_service"></span>
								</div>
								<div class="form-group">
									<button type="submit" name="submit" value="submit" class="btn pull-right">Register</button>
									<div class="clearfix"></div>
								</div>
							</form>
						</div>
					</div>
					<div class="col-sm-6 col-sm-offset-1 social-login">
					     <img src="<?php echo base_url()?>css/mPurpose-master/img/company.jpg" alt="Slide 4" />
						<p>You can use your Facebook or Twitter for registration</p>
						<div class="social-login-buttons">
							<a href="#" class="btn-facebook-login">Use Facebook</a>
							<a href="#" class="btn-twitter-login">Use Twitter</a>
						</div>
					</div>
				</div>
			</div>
		</div>
