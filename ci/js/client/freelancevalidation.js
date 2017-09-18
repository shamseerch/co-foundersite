$(function(){
		$("#err_name").hide();
		$("#err_addres").hide();
		$("#err_city").hide();
		$("#err_email").hide();
		$("#err_password").hide();
		$("#err_cpassword").hide();
		$("#err_gender").hide();
		$("err_workdone").hide();
		$("#errmsgdigit").hide();

         
		var err_Name = false;
		var err_Addres = false;
		var err_City = false;
		var err_Email = false;
		var err_Pwd = false;
		var err_Work = false;
		//var err_Cpwd = false;
		
        $( "#Dob" ).datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange:"-100:+0",
         dateFormat:"dd MM yy"
        });
    
    $("#name").keypress(function(event){
        var inputValue = event.which;
        // allow letters and whitespaces only.
        if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)) { 
            event.preventDefault(); 
            $("#name").css("border-color", "#FF0052");
         $("#err_name").html("Characters Only").show();/*.fadeIn(50); */
               return false;
        }
    });

  //called when key is pressed in textbox
  $("#Contact-number").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsgdigit").html("Digits Only").show();/*.fadeIn(50); */
               return false;
    }
    else
    {
        $("#errmsgdigit").hide();
    }
   });
		$("#name").focusout(function()
		{
			check_name();
		});

		$("#addres").focusout(function()
		{
          check_addrs(); 
		});
		$("#city").focusout(function()
		{
             check_city();
		});
		$("#email").focusout(function()
		{
            check_email();
            
		});
		$("#pwd").focusout(function()
		{
          check_password();
		});
		$("#cpwd").focusout(function()
		{
			check_cpassword();
		});
		$("#gender").focusout(function()
		{
			check_gender();
		});
		$("#work").focusout(function()
		{
			check_work();
		});
		function check_gender()
		{
			if($('input[name=gender]:checked').length<=0)
            {
             $("#err_gender").html("please select your gender");
             $("#err_gender").show();
            }
            else
            {
            	$("#err_gender").hide();
            }
		}
	function check_name()
	{
		var username_length = $("#name").val().length;
        
        if(username_length < 5 || username_length > 20) {
            $("#err_name").html("Should be between 5-20 characters");
            $("#err_name").show(); 
            $("#name").css("border-color", "#FF0052");     
            error_Name = true;
        } else {
            $("#err_name").hide();
            $("#name").css("border-color", "");
        } 
    }
       
    function check_addrs()
    {
    	var addr = $("#addres").val().length;
        
        if(addr==false) {
            $("#addres").css("border-color", "#FF0052");
            $("#err_addres").html("please enter the addres");
            $("#err_addres").show();      
            error_Addres = true;
        } else {
            $("#err_addres").hide();
            $("#addres").css("border-color", "");
        } 
    }

    function check_city()
    {
    	var cityy = $("#city").val().length;
        
        if(cityy==false) {
            $("#err_city").html("please enter the City");
            $("#err_city").show();
            $("#city").css("border-color", "#FF0052");      
            error_City = true;
        } else {
            $("#err_city").hide();
            $("#city").css("border-color", "");
        } 
    }

      function check_email() {

        var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
    
        if(pattern.test($("#email").val())) {
            $("#email_error_message").hide();
            $("#email").css("border-color", "");
        } else {
            $("#email_error_message").html("Invalid email address");
            $("#email_error_message").show();
            $("#email").css("border-color", "#FF0052");
            error_email = true;
        }
    }
    function check_password()
    {
    	var password_length = $("#pwd").val().length;
        
        if(password_length < 8) {
            $("#pwd").css("border-color", "#FF0052");
            $("#err_password").html("Password should have At least 8 characters");
            $("#err_password").show();
            error_Pwd = true;
        } else {
            $("#pwd").css("border-color", "");
            $("#err_password").hide();
        }
    }
    function check_cpassword()
    {
    	var password = $("#pwd").val();
        var retype_password = $("#cpwd").val();
        
        if(password !=  retype_password) {
            $("#cpwd").css("border-color", "#FF0052");
            $("#err_cpassword").html("Passwords doesn't match");
            $("#err_cpassword").show();
           err_Cpwd = true;
        } 
        else {
            $("#cpwd").css("border-color", "");
            $("#err_cpassword").hide();
    }
}

function check_work()
{
	var wrk = $("#work").val().length;
        
        if(wrk==false) {
            $("#work").css("border-color", "#FF0052");
            $("#err_workdone").html("please describe about your work");
            $("#err_workdone").show();      
            error_Work = true;
        } else {
            $("#work").css("border-color", "");
            $("#err_workdone").hide();
        }
}
    $("#form").submit(function() {

    	check_name();
    	check_addrs();
    	check_email();
    	ckeck_password();
    	if(err_Name == false && err_Addres== false && err_City == false && err_Email==false && err_pwd==false)
    		return true;
    	else
    	{
    		return false;
    	}

	});
	});