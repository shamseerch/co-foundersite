 <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>Mentor Register</h1>
					</div>
				</div>
			</div>
		</div>
        
        <div class="section">
	    	<div class="container">
				<div class="row">
					<div class="col-sm-5">
						<div class="basic-login">
						<?php echo form_open_multipart('Cofounder/mentorreg');?>
							<form role="form" method=post id=mentor_form>
								<div class="form-group">
		        				 	<label for="register-username"><i class="icon-user"></i> <b>Name<font color=red>*</font></b></label>
									<input class="form-control" name="name" id="mname" type="text" placeholder="" required="name">
									<span class="error_form" id="mname_error_message"></span>
								</div>
								<div class="form-group">
		        				 	<label for="register-username"><i class="icon-user"></i><b>Email<font color=red>*</font></b></label>
									<input class="form-control" id="memail" type="text" name=email placeholder="" required="email">
									<span class="error_form" id="memail_error_message"></span>
								</div>
								<div class="form-group">
		        				 	<label for="register-username"><i class="icon-user"></i> <b>Mobile<font color=red>*</font></b></label>
									<input class="form-control" id="mmobile" type="text" name=mobile placeholder="" maxlength="14" required="number">
									<span class="error_form" id="mmobile_error_message"></span>
								</div>
								<div class="form-group">
		        				 	<label for="register-username"><i class="icon-user"></i> <b>Alternate Mobile</b></label>
									<input class="form-control" id="mamobile" name="amobile" maxlength="14" type="text" placeholder="">
									<span class="error_form" id="mamobile_error_message"></span>
								</div>
								<div class="form-group">
		        				 	<label for="register-username"><i class="icon-user"></i> <b>Address<font color=red>*</font></b></label>
									<textarea class="form-control" name="address" id=maddress placeholder=""></textarea>
									<span class="error_form" id="maddress_error_message"></span>
								</div>
								<div class="form-group">
		        				 	<label for="register-username"><i class="icon-user"></i><b>Gender<font color=red>*</font></b></label>
		        				 	<div>
										<input type="radio" name='gender' id=mgender value='male'> Male 
            							<input type="radio" name='gender' id=mgender value='female'> Female
            						</div>
									<span class="error_form" id="mgender_error_message"></span>
								</div>
								<div class="form-group">
		        				 	<label for="register-username"><i class="icon-user"></i><b>Area of expertise<font color=red>*</font></b></label>
									<textarea class="form-control" name="expertise" id=mexpertise required="expertise" placeholder=""></textarea>
									<span class="error_form" id="mexpertise_error_message"></span>
								</div>
								
								
								<div class="form-group">
		        				 	<label for="register-username"><i class="icon-user"></i><b>Company Name<font color=red>*</font></b></label>
									<input class="form-control" name="company" id=mcompany required="company" placeholder="" >
									<span class="error_form" id="mcompany_error_message"></span>
								</div>
								<div class="form-group">
		        				 	<label for="register-username"><i class="icon-user"></i> <b>Designation<font color=red>*</font></b></label>
									<input class="form-control" type="text" name="designation" id=mdesignation required="designation" placeholder="">
									<span class="error_form" id="mdesignation_error_message"></span>
								</div>
								<div class="form-group">
		        				 	<label for="register-password"><i class="icon-lock"></i> <b>Password<font color=red>*</font></b></label>
									<input class="form-control" id="mpass" type="password" name="pass" placeholder="">
									<span class="error_form" id="mpass_error_message"></span>
								</div>
								<div class="form-group">
		        				 	<label for="register-password2"><i class="icon-lock"></i><b>Re-enter Password<font color=red>*</font></b></label>
									<input class="form-control" name="cpass" id="mcpass" type="password" placeholder="">
									<span class="error_form" id="mcpass_error_message"></span>
								</div>
								<div class="form-group">
		        				 	<label for="register-username"><i class="icon-user"></i> <b>Resume</b></label>
									<input class="form-control" type="file" name='userfile' placeholder="">
								</div>
								<div class="form-group">
		        				 	<label for="register-password2"><i class="icon-lock"></i>
									<input type="checkbox" name="check" id=mcheckbox required="check">  I agree with the <a>Terms of services and privacy</a> of CoFounder
									<span class="error_form" id="mcheck_error_message"></span>
								</div>
								<div class="form-group">
									<button type="submit" class="btn pull-right" name=submit value="submit">Register</button>
									<div class="clearfix"></div>
								</div>
							</form>
						</div>
					</div>
					
					<div class="col-sm-6 col-sm-offset-1 social-login">
					<img src="<?php echo base_url()?>css/mPurpose-master/img/mentor1.jpg" alt="Slide 1" /><p>A mentor’s accumulated wisdom and expertise must be passed on to the next generation. Good mentors make this process conscious, discussing challenges and satisfactions of mentorship with mentees. While the actual moment of transition from mentee to mentor varies according to circumstances, the mentor must feel that the mentee has achieved real expertise and has a coping, generous personality to make this leap. Often, some event within the mentor’s area — a retirement, a new grant, or a major project — creates the need for a new mentor to join the ranks.Mentorship is a relationship in which a more experienced or more knowledgeable person helps to guide a less experienced or less knowledgeable person</p>
					<p>
					Mentors must recognize that disagreements and misunderstandings are almost inevitable in these relationships and that the mentor, not the mentee, is responsible for avoiding or repairing rifts. Smart mentors do not allow sores to fester or spats to escalate. They intervene early to keep the relationship on track. For instance, in the second example above, the mentor could have created an open, cards-on-the-table relationship that would have encouraged the mentee to be more honest about their needs, or at least inquired about the underlying issues behind the mentee’s challenges before suggesting a leave of absence.Mentors trade away hours they could use to pursue their own career goals and spend them on someone else’s. Although the prospect of having an energetic, personable junior partner for a multitude of projects is appealing, having the wrong mentee can be painful.</p>
						<!-- <p>You can use your Facebook or Twitter for registration</p>
						<div class="social-login-buttons">
							<a href="#" class="btn-facebook-login">Use Facebook</a>
							<a href="#" class="btn-twitter-login">Use Twitter</a> -->
						<!-- </div> -->
					</div>
				</div>
			</div>
		</div>
