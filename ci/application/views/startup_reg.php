 <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Start-Up Register</h1>
					</div>
				</div>
			</div>
		</div>
        
        <div class="section">
	    	<div class="container">
				<div class="row">
					<div class="col-sm-5">
						<div class="basic-login">
							<form  role="form" action="" method=post id=start_form>
								<div class="form-group">
		        				 	<label for="register-username"><i class="icon-user"></i> <b>Name<font color=red>*</font></b></label>
									<input class="form-control" name="name" id="name" type="text" placeholder="">
									<span class="error_form" id="username_error_message"></span>
								</div>
								<div class="form-group">
		        				 	<label for="register-username"><i class="icon-user"></i><b>Email<font color=red>*</font></b></label>
									<input class="form-control" id="email" type="text" name=email placeholder="">
									<span class="error_form" id="email_error_message"></span>
								</div>
								<div class="form-group">
		        				 	<label for="register-username"><i class="icon-user"></i> <b>Mobile<font color=red>*</font></b></label>
									<input class="form-control" id="mobile" type="text" name=mobile placeholder="" maxlength="14">
									<span class="error_form" id="mobile_error_message"></span>
								</div>
								<div class="form-group">
		        				 	<label for="register-username"><i class="icon-user"></i> <b>Alternate Mobile</b></label>
									<input class="form-control" id="amobile" name="amobile" maxlength="14" type="text" placeholder="">
									<span class="error_form" id="amobile_error_message"></span>
								</div>
								<div class="form-group">
		        				 	<label for="register-username"><i class="icon-user"></i> <b>Address<font color=red>*</font></b></label>
									<textarea class="form-control" name="address" id=address placeholder=""></textarea>
									<span class="error_form" id="address_error_message"></span>
								</div>
								<div class="form-group">
		        				 	<label for="register-username"><i class="icon-user"></i><b>City<font color=red>*</font></b></label>
									<input class="form-control" id="city" type="text" name=city placeholder="" >
									<span class="error_form" id="city_error_message"></span>
								</div>
								<div class="form-group">
		        				 	<label for="register-username"><i class="icon-user"></i><b>No. of people<font color=red>*</font></b></label>
									<input class="form-control" type="number" name="count" id=count  placeholder="">
									<span class="error_form" id="count_error_message"></span>
								</div>
								<div class="form-group">
		        				 	<label for="register-username"><i class="icon-user"></i><b>Current Level<font color=red>*</font></b></label>
		        				 	<select class="form-control" name=level id=level>
									<option value="">select your level.....</option>
									<option> Basic idea</option>
 									<option>Idea Selection</option>
									<option>Decide to Build where</option>
 									<option>Develop Alpha</option>
 									<option>Discover first Customer</option>
									</select>
									<span class="error_form" id="level_error_message"></span>
								</div>
								<div class="form-group">
		        				 	<label for="register-username"><i class="icon-user"></i><b>What is your idea?<font color=red>*</font></b></label>
									<input class="form-control" id="idea" type="text" name=idea placeholder="" >
									<span class="error_form" id="idea_error_message"></span>
								</div>
								<div class="form-group">
		        				 	<label for="register-username"><i class="icon-user"></i> <b>Please briefly describe your idea<font color=red>*</font></b></label>
									<textarea class="form-control" name="idea_desc" id=desc placeholder=""></textarea>
									<span class="error_form" id="desc_error_message"></span>
								</div>
								<div class="form-group">
		        				 	<label for="register-password"><i class="icon-lock"></i> <b>Password<font color=red>*</font></b></label>
									<input class="form-control" id="pass" type="password" name="pass" placeholder="">
									<span class="error_form" id="pass_error_message"></span>
								</div>
								<div class="form-group">
		        				 	<label for="register-password2"><i class="icon-lock"></i><b>Re-enter Password<font color=red>*</font></b></label>
									<input class="form-control" name="cpass" id="cpass" type="password" placeholder="">
									<span class="error_form" id="cpass_error_message"></span>
								</div>
								<div class="form-group">
		        				 	<label for="register-username"><i class="icon-user"></i> <b>Additional Comments</b></label>
									<textarea class="form-control" name="comment" id=comment placeholder=""></textarea>
								</div>
								<div class="form-group">
		        				 	<label for="register-password2"><i class="icon-lock"></i>
									<input type="checkbox" name="check" id=checkbox> I agree with the <a>Terms of services and privacy</a> of CoFounder
									<span class="error_form" id="check_error_message"></span>
								</div>
								<div class="form-group">
									<button type="submit" class="btn pull-right" name=submit value="submit">Register</button>
									<div class="clearfix"></div>
								</div>
							</form>
						</div>
					</div>
					
					<div class="col-sm-6 col-sm-offset-1 social-login">
					<img src="<?php echo base_url()?>css/mPurpose-master/img/startup.jpg" alt="Slide 1" /><p>CoFounder is a great place to convert your StartUp into establish business in limited preiod.The newest companies that could change the world.New high-growth companies are entrepreneurial  ventureswith the ambition of achieving substantial sales of, for example, Dfl. 50 million or employing, say, 100 staff within five years of their foundation. During this period, what began as a start-up should have become an established enterprise. This is a significant distinction compared to less ambitious company foundations.
					<br><br>Research shows that startups who work in a co-working space are four times more likely to succeed than those who don’t. Working in these spaces ensures one will always be surrounded by like-minded, talented individuals and teams which can really benefit you in the short and long term. 
					</p>						<!-- <p>You can use your Facebook or Twitter for registration</p>

						<div class="social-login-buttons">
							<a href="#" class="btn-facebook-login">Use Facebook</a>
							<a href="#" class="btn-twitter-login">Use Twitter</a>
						</div> -->
					</div>
				</div>
			</div>
		</div>
