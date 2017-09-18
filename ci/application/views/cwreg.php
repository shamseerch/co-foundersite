<!DOCTYPE html>

<html>
<head>
	<title></title>
	<style type="text/css">
		.error_form {
    font-size: 15px;
    font-family: Arial;
    color: #FF0052;
}input[type=text]
{
    border-width: 1px;
    
}



	</style>
</head>
<body><h1 align="center">Co-Working REGISTRATION</h1>
<form action="" method=post id=cw_form>
 <table align="center">

	<tr>
		<td>
			Name<font color=red>*</font>
		</td>
		<td>
			<input type="text" name="name" id=name>
		</td>
        </tr>
    <tr>
        <td></td>
		<td><span class="error_form" id="username_error_message"></span>
        <br><br></td>
	</tr>
	
		<tr>
		<td>
			Email<font color=red>*</font>
		</td>
		<td>
			<input type="text" name="email" id=email>
		</td>
    </tr>
    <tr>
        <td></td>
		<td><span class="error_form" id="email_error_message"></span><br><br></td>
	</tr>

	<tr>
		<td>
			Mobile<font color=red>*</font>
		</td>
		<td>
			<input type="text" name="mob" id=mobile  maxlength="14">
		</td>
    </tr>
    <tr>
        <td></td>
		<td>
		<span class="error_form" id="mobile_error_message"></span><br><br></td>
	
	</tr>

	<tr>
		<td>
			Alternate Mobile
		</td>
		<td>
			<input type="text" name="amob"  maxlength="14" ><br><br>
		</td>
	</tr>
<tr></tr>
	<tr>
		<td>
			Company Name<font color=red>*</font>
		</td>
		<td>
			<input type="text" name="company" id=company>
		</td>
    </tr>
    <tr>
        <td></td>
		<td>
			<span class="error_form" id="company_error_message"></span>
		<br><br></td>
	</tr>
	<tr>
		<td>
			Company Location<font color=red>*</font>
		</td>
		<td>
			<input type="text" name="companyloc" id=companyloc>
		</td>
    </tr>
    <tr>
        <td></td>
		<td>
			<span class="error_form" id="companyloc_error_message"></span>
		<br><br></td>
	</tr>
    <tr>
        <td>
            Password<font color=red>*</font>
        </td>
        <td>
            <input type="password" name="pass" id=pass>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <span class="error_form" id="pass_error_message"></span>
        <br><br></td>
    </tr>
<tr>
        <td>
            Confirm Password<font color=red>*</font>
        </td>
        <td>
            <input type="password" name="cpass" id=cpass>
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <span class="error_form" id="cpass_error_message"></span>
        <br><br></td>
    </tr>

	<tr>
		<td>
				Membership Type<font color=red>*</font>
		</td>
		<td>
			<select id=member>
				<option value="">Choose your membership type</option>
				<option></option>
				<option></option>
				<option></option>
			</select>
		</td>
	</tr>
	<tr>
        <td></td>
		<td>
			<span class="error_form" id="member_error_message"></span>
		<br><br></td>
	</tr>
	</table>
	<p align="center">
		<input type="submit" id="submit" value="submit">
	</p>
	</form>
</body>
</html>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript">

 $(function() {
    $("#username_error_message").hide();
    $("#email_error_message").hide();
    $("#mobile_error_message").hide();
 	$("#company_error_message").hide();
 	$("#companyloc_error_message").hide();
 	$("#member_error_message").hide();
 	  $("#pass_error_message").hide();
    $("#cpass_error_message").hide();


    var error_username = false;
    var error_company = false;
    var error_email = false;
    var error_mobile_number=false;
    var error_member = false;
    var error_companyloc = false;
     var error_pass = false;
    var error_cpass = false;

	

    $("#name").focusout(function() {

        check_username();
        
    });

    $("#email").focusout(function() {

        check_email();
        
    });
     $("#mobile").focusout(function() {

        check_mobile_number();
        
    });
  $("#company").focusout(function() {

        check_company();
        
    });
  $("#companyloc").focusout(function() {

        check_companyloc();
        
    });
  $("#pass").focusout(function() {

        check_pass();
        
    });
    $("#cpass").focusout(function() {

        check_cpass();
        
    });
    
	$("#member").focusout(function() {

        check_member();
        
    });


    function check_username() {
    var username_length = $("#name").val().length;
        var username= $("#name").val();
        if(username_length < 5 || username_length > 20) {
        	$("#name").css("border-color", "#FF0052");
            $("#username_error_message").html("please recheck your name");
            $("#username_error_message").show();      
            error_username = true;
        } else {
        	$("#name").css("border-color", "");
            $("#username_error_message").hide();
     
        }
    
    }

    function check_email() {

        var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
    
        if(pattern.test($("#email").val())) {
            $("#email_error_message").hide();
            $("#email").css("border-color", "");
        } else {
        	$("#email").css("border-color", "#FF0052");
            $("#email_error_message").html("Invalid email address");
            $("#email_error_message").show();
            error_email = true;
        }
       $.ajax({
            url:"<?php echo base_url(); ?>/index.php/Cofounder/valid",
            type:"POST",
            data:{"email":email},
            dataType:"text",
            success:function(result){
                if(result>=1)
                {
                    $("#email_error_message").html("email address already exists");
                    $("#email_error_message").show();
                }
            },
            error:function(){
                alert("error");
            }
    }
    function check_mobile_number()
    {
        var mobile_length = $("#mobile").val().length;
        var mobile_number=$("#mobile").val();
        if(($.isNumeric(mobile_number))&&&&(mobile_length>9)&&(mobile_length<=14))
        {
            $("#mobile_error_message").hide();
            $("#mobile").css("border-color", "");
        }

         else 
        {
        	$("#mobile").css("border-color", "#FF0052");
            $("#mobile_error_message").html("should be a 10-14 digit number");
            $("#mobile_error_message").show();
     
        }
    }

    function check_company()
    {
    	var company_length = $("#company").val().length;
        var company = $("#company").val();
        if(company_length!=0||company!="")
        {
        	$("#company_error_message").hide();
        	$("#company").css("border-color", "");
        }
        else
        {
        	$("#company").css("border-color", "#FF0052");
            $("#company_error_message").html("should enter your company");
            $("#company_error_message").show();

        }
    }


    function check_companyloc()
    {
    	var companyloc_length = $("#companyloc").val().length;
        var companyloc = $("#companyloc").val();
        if(companyloc_length!=0||companyloc!="")
        {
        	$("#companyloc_error_message").hide();
        	$("#companyloc").css("border-color", "");
        }
        else
        {
        	$("#companyloc").css("border-color", "#FF0052");
            $("#companyloc_error_message").html("should enter your company location");
            $("#companyloc_error_message").show();

        }
    }
      function check_pass()
    {
        var pass=$("#pass").val();
            var pass_length=$("#pass").val().length;
            if(pass_length>7)
                {
                  
           $("#pass_error_message").hide();
            $("#pass").css("border-color", "");

        }
        else
        {  $("#pass").css("border-color", "#FF0052");
            $("#pass_error_message").html("should be atleast 8 characters");
            $("#pass_error_message").show();
             
        }


    }
      function check_cpass()
    {
            var pass=$("#pass").val();
            var cpass=$("#cpass").val();
            var cpass_length=$("#cpass").val().length;
            if(cpass_length>7 && pass===cpass)
                {

                    $("#cpass_error_message").hide();
            $("#cpass").css("border-color", "");
                    
        
        }
        else
        {
                $("#cpass").css("border-color", "#FF0052");
            $("#cpass_error_message").html("please recheck the confirm password");
            $("#cpass_error_message").show();

        }

    }
    
    function check_member()
    {
    		var member=$("#member").val();
    		if(member=="")
    			{
    				$("#member").css("border-color", "#FF0052");
            $("#member_error_message").html("please select your membership type");
            $("#member_error_message").show();
        
        }
        else
        {
        		$("#member_error_message").hide();
        	$("#member").css("border-color", "");

        }

    }

     $("#cw_form").submit(function() {
                                            
        error_username = false;
        error_company = false;
        error_email = false;
        error_mobile_number=false;
 		error_member=false;
        error_pass=false;
        error_cpass=false;
 		 error_companyloc = false;


        check_username();
        check_companyloc();
        check_email();
        check_mobile_number();
        check_company();
        check_member();
        check_cpass();
        check_pass();
         

        if(error_username == false&& error_email == false &&error_company==false&& error_member == false&&error_companyloc==false &&error_pass==false&&error_cpass==false&&error_mobile_number==false) {
            return true;
        } else {
            return false;   
        }

    });


});
	</script>