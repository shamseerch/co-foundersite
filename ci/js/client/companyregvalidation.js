$(function(){
		$("#err_name").hide();
		$("#err_addres").hide();
		$("#err_city").hide();
		$("#err_email").hide();
		$("#err_password").hide();
		$("#err_cpassword").hide();
		$("#err_phone").hide();
		$("#err_service").hide();
		//$("#err_cpwd").hide();


		var error_Name = false;
		var error_Addres = false;
		var error_City = false;
		var error_Email = false;
		var errpr_Pwd = false;
		var error_Work = false;
		//var err_Cpwd = false;
		$(document).ready(function () {
  //called when key is pressed in textbox
  $("#phone").keypress(function (e) {
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
});
		$("#name").focusout(function()
		{
			check_name();
		});

		$("#addres").focusout(function()
		{
          check_addrs(); 
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
		$("#phone").focusout(function()
		{
          check_mobile_number();
		});
		$("#Services").focusout(function()
		{
			check_service();
		})
	function check_name()
	{
		var username_length = $("#name").val().length;
        
        if(username_length < 3 || username_length > 20) {
             $("#name").css("border-color", "#FF0052");
            $("#err_name").html("Should be between 3-20 characters");
            $("#err_name").show();      
            error_Name = true;
        } else {
            $("#err_name").hide();
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
               $("#addres").css("border-color", "");
            $("#err_addres").hide();
        } 
    }

    function check_service()
    {
    	var srvs = $("#Services").val().length;
        
        if(srvs==false) {
             $("#Services").css("border-color", "#FF0052");
            $("#err_service").html("please enter the services you provide");
            $("#err_service").show();      
            error_City = true;
        } else {
               $("#Services").css("border-color", "");
            $("#err_service").hide();
        } 
    }

      function check_email() {

        var email=$("#email").val();
        var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
    
        if(pattern.test($("#email").val())) {
            $.ajax({
             type:'post',
        url:base_url+'index.php/Cofounder/mail/',// put your real file name 
        data:{'email': email},
        
        success:function(msg){
        //alert(email); // your message will come here.  
        if(msg==1) 
        {
            $("#email").css("border-color", "#FF0052");
            $("#err_email").html("Email already registered");
            $("#err_email").show();
            var error_Email = true;

        }
       else
       {
        $("#email").css("border-color", "");
        $("#err_email").hide();
        error_Email = false;
       }
        }
        });
        }
        else {
            $("#err_email").html("Invalid email address");
             $("#email").css("border-color", "#FF0052");
            $("#err_email").show();
            error_Email = true;
        }
    }
    function check_password()
    {
    	var password_length = $("#pwd").val().length;
        
        if(password_length < 8) {
             $("#pwd").css("border-color", "#FF0052");
            $("#err_password").html("At least 8 characters");
            $("#err_password").show();
            error_Pwd = true;
        } else {
            $("#err_password").hide();
             $("#pwd").css("border-color", "");
        }
    }
    function check_cpassword()
    {
    	var password = $("#pwd").val();
        var retype_password = $("#cpwd").val();
        
        if(password !=  retype_password) {
            $("#cpwd").css("border-color", "#FF0052");
            $("#err_cpassword").html("Passwords don't match");
            $("#err_cpassword").show();
           err_Cpwd = true;
        } 
        else {
            $("#err_cpassword").hide();
               $("#cpwd").css("border-color", "");
    }
}


    function check_mobile_number()
    {
        var mobile_length = $("#phone").val().length;
       // var mobile_number=$("#form_").val();
        if((mobile_length==10))
        {
            $("#err_phone").hide();
            $("#phone").css("border-color", "");
        }

         else 
        {
            $("#phone").css("border-color", "#FF0052");
            $("#err_phone").html("should be a 10 digit number");
            $("#err_phone").show();
     
        }
    }
    $("#myform").submit(function() {

    	check_name();
    	check_addrs();
    	check_email();
    	ckeck_password();
    	if(error_Name == false && error_Addres== false && error_City == false && error_Email==false && error_pwd==false)
    		return true;
    	else
    	{
    		return false;
    	}

	});
	});