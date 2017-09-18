<script type="text/javascript">
        $(function(){
  $("#coursename").autocomplete({
    source: "<?php echo base_url();?>index.php/Cofounder/searchc/" // path to the search method
  });
  $("#city").autocomplete({
    source: "<?php echo base_url();?>index.php/Cofounder/searchdistrict/" // path to the search method
  });
  $("#stream-name").autocomplete({
    source: "<?php echo base_url();?>index.php/Cofounder/searchstream/" // path to the search method
  });
  $("#email").focusout(function(){
  	var email=$("#email").val();
$.ajax({
    type:'post',
        url:'<?php echo base_url();?>index.php/Cofounder/mail/"',// put your real file name 
        data:{'email': email},
        success:function(msg){
        //alert(msg); // your message will come here.  
        if(msg==1) 
        {
        	$("#emailchk_error_message").html("Email already registered");
        	$("#emailchk_error_message").show();
        }
       else
       {
       	$("#emailchk_error_message").hide();
       }
        }
 });

  });
  
});
 </script>
<?php $this->load->helper('form');?>
<?php echo form_open_multipart('Cofounder/freelancer');?>
<link rel="stylesheet" type="text/css" href="<?php   echo base_url();?>css/jquery-ui.css">
   <link href="<?php echo base_url(); ?>css/client/dobstyle.css">
      <script src="http://code.jquery.com/jquery-1.10.2.js"></script>  
      <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>  
<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Freelancer Registration</h1>
					</div>
				</div>
			</div>
		</div>
        <div class="section">
	    	<div class="container">
				<div class="row">
					<div class="col-sm-5">
						<div class="basic-login">
							<form role="form" method="post" id=form>
								<div class="form-group">
		        				 	<label for="register-name"><i class="icon-user"></i> <b>Name</b></label>
									<input class="form-control" name="Name" id="name" type="text" placeholder="" required="name">
									<span class="error_form" id="err_name"></span>
								</div>
								<div class="form-group">
		        				 	<label for="register-Address"><i class="icon-user"></i> <b>Address</b></label>
									<input class="form-control" id="addres" type="text" placeholder="" name="Address" required="address">
									<span class="error_form" id="err_addres">
								</div>
								<div class="form-group">
		        				 	<label for="register-city"><i class="icon-user"></i> <b>City</b></label>
									<input class="form-control" id="city" type="text" placeholder="" name="city" required="city">
									<span class="error_form" id ="err_city"></span>
								</div>
								<div class="form-group">
		        				 	<label for="DOB"><i class="icon-user"></i><b>DOB</b></label>
									<input class="form-control" id="Dob" type="text" placeholder="" name="dob" required="dob">
								</div>
								<div class="form-group">
		        				 	<label for="register-password"><i class="icon-lock"></i> <b>GENDER</b></label>
		        				 	<div>
									<input id="gender" type="radio" name="gender" value="male" required="gender">MALE<input  id="gender" type="radio" name="gender" value="FEMALE" required="gender">FEMALE</div>
									<span class="error_form" id="err_gender"></span>
								</div>
								<div class="form-group">
		        				 	<label for="register-name"><i class="icon-user"></i> <b>EMAIL</b></label>
									<input class="form-control" id="email" type="text" placeholder=""  name="Email" required="email">
									<span class="error_form" id="emailchk_error_message"></span>
								</div>
								<div class="form-group">
		        				 	<label for="contact number"><i class="icon-user"></i> <b>Contact Number</b></label>
									<input class="form-control" type="text" placeholder="" maxlength="14" id='mobile' name="mobile">
									<span class="error_form" id="mobile_error_message"></span>
								</div>
								<div class="form-group">
		        				 	<label for="password"><i class="icon-user"></i> <b>PASSWORD</b></label>
									<input class="form-control" id="pwd" type="password" placeholder="" name="password">
									<span class="error_form" id="err_password"></span>
								</div>
								<div class="form-group">
		        				 	<label for="register-password2"><i class="icon-lock"></i> <b>Re-enter Password</b></label>
									<input class="form-control" id="cpwd" type="password" placeholder="">
                                     <span class="error_form" id="err_cpassword"></span>
								</div>
								<div class="form-group">
		        				 	<label for="course-name"><i class="icon-user"></i> <b>Course</b></label>
									<input class="form-control" id="coursename" type="text" placeholder="" name="course">
								</div>
								<div class="form-group">
		        				 	<label for="stream-name"><i class="icon-user"></i> <b>Stream</b></label>
									<input class="form-control" id="stream-name" type="text" placeholder="" name="stream">
								</div>
							     <div class="form-group">
		        				 	<label for="works"><i class="icon-user"></i> <b>Works/Experience</b></label>
									<input class="form-control" id="work" type="text" placeholder="" name="Work">
									<span class="error_form" id="err_workdone"></span>
								</div>
								<div class="form-group">
		        				 	<label for="Resume"><i class="icon-user"></i> <b>RESUME</b></label>
									<input class="form-control" id="Resume" type="file" placeholder="" name="image"  >
								</div>
								<div class="form-group">
		        				 	<label for="ADHAR"><i class="icon-user"></i> <b>ADHAR</b></label>
									<input class="form-control" id="stream-name" type="file" placeholder="" name="adhar" >
								</div>
								<div class="form-group">
		        				 	<label for="photo"><i class="icon-user"></i> <b>PHOTO</b></label>
									<input class="form-control" id="photo" type="file" placeholder="" name="photo" >
								</div>
								<div class="form-group">
									<button type="submit" class="btn pull-right" name="submit">Register</button>
									<div class="clearfix"></div>
								</div>
							</form>
						</div>
					</div>
					<div class="col-sm-6 col-sm-offset-1 social-login">
					    <img src="<?php echo base_url()?>css/mPurpose-master/img/freelance.png" alt="Slide 4" />
						<p>You can use your Facebook or Twitter for registration</p>
						<div class="social-login-buttons">
							<a href="#" class="btn-facebook-login">Use Facebook</a>
							<a href="#" class="btn-twitter-login">Use Twitter</a>
						</div>
					</div>
				</div>
			</div>
		</div>