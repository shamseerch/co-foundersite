


 $(function() {
    $("#username_error_message").hide();
    $("#email_error_message").hide();
    $("#mobile_error_message").hide();
 	$("#address_error_message").hide();
 	$("#city_error_message").hide();
 	$("#count_error_message").hide();
 	$("#idea_error_message").hide();
 	$("#desc_error_message").hide();
    $("#pass_error_message").hide();
 	$("#cpass_error_message").hide();
    $("#check_error_message").hide();


    var error_username = false;
    var error_address = false;
    var error_email = false;
    var error_mobile_number=false;
    var error_city = false;
	var error_count = false;
    var error_level = false;
    var error_idea = false;
    var error_desc = false;
    var error_pass = false;
    var error_cpass = false;
    var error_checkbox = false;
$("#mobile").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && e.which != 43 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#mobile_error_message").html("Digits Only").show();/*.fadeIn(50); */
               return false;
    }
    else
    {
        $("#mobile_error_message").hide();
    }
   });
$("#amobile").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && e.which != 43 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#amobile_error_message").html("Digits Only").show();/*.fadeIn(50); */
               return false;
    }
    else
    {
        $("#amobile_error_message").hide();
    }
   });
$("#name").keypress(function(event){
        var inputValue = event.which;
        // allow letters and whitespaces only.
        if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)) { 
            // event.preventDefault(); 
            $("#username_error_message").html("Characters Only").show();/*.fadeIn(50); */
               return false;
        }
    });
$("#city").keypress(function(event){
        var inputValue = event.which;
        // allow letters and whitespaces only.
        if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)) { 
            // event.preventDefault(); 
            $("#city_error_message").html("Characters Only").show();/*.fadeIn(50); */
               return false;
        }
    });

    $("#name").focusout(function() {

        check_username();
        
    });

    $("#email").focusout(function() {

        check_email();
        
    });
     $("#mobile").focusout(function() {

        check_mobile_number();
        
    });
  $("#address").focusout(function() {

        check_address();
        
    });
	$("#city").focusout(function() {

        check_city();
        
    });
    $("#count").focusout(function() {

        check_count();
        
    });
    $("#level").focusout(function() {

        check_level();
        
    });
    $("#idea").focusout(function() {

        check_idea();
        
    });
    $("#desc").focusout(function() {

        check_desc();
        
    });
$("#pass").focusout(function() {

        check_pass();
        
    });
    $("#cpass").focusout(function() {

        check_cpass();
        
    });
    

 	$("#checkbox").focusout(function() {

        check_checkbox();
        
    });


    function check_username() {
         var username_length = $("#name").val().length;
        if(username_length < 5 || username_length > 20)
         {$("#name").css("border-color", "#FF0052");
            $("#username_error_message").html("Please recheck your name");
            $("#username_error_message").show();      
            error_username = true;
        	
        }
         else {	
     $("#name").css("border-color", "");
            $("#username_error_message").hide();
        }
    
    }

    function check_email() {
        var email=$("#email").val();
        

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
            url:base_url+"/index.php/Cofounder/valid",
            type:"POST",
            data:{"email":email},
            dataType:"text",
            success:function(result){
                if(result>=1)
                {
                    $("#email_error_message").html("Email address already exists");
                    $("#email_error_message").show();
                    error_email = true;
                }
            },
            error:function(){
                error_email = false;
            }
    });
    
    }
    function check_mobile_number()
    {
        var mobile_length = $("#mobile").val().length;
        var mobile_number=$("#mobile").val();
        if(($.isNumeric(mobile_number))&&(mobile_length>9)&&(mobile_length<=14))
        {
            $("#mobile_error_message").hide();
            $("#mobile").css("border-color", "");
        }

         else 
        {
        	$("#mobile").css("border-color", "#FF0052");
            $("#mobile_error_message").html("Please enter your correct number");
            $("#mobile_error_message").show();
            error_mobile_number = true;
     
        }
    }

    function check_address()
    {
    	var address_length = $("#address").val().length;
        var address=$("#address").val();
        if(address_length!=0)
        {
        	$("#address_error_message").hide();
        	$("#address").css("border-color", "");
            
        }
        else
        {
        	$("#address").css("border-color", "#FF0052");
            $("#address_error_message").html("Please enter your address");
            $("#address_error_message").show();
            error_address = true;

        }
    }
    function check_city()
    {
    		var city=$("#city").val();
    		if(city=="")
    			{
    				$("#city").css("border-color", "#FF0052");
            $("#city_error_message").html("Please select your city");
            $("#city_error_message").show();
        error_city = true;
        }
        else
        {
        		$("#city_error_message").hide();
        	$("#city").css("border-color", "");

        }

    }
    function check_count()
    {
    		var count=$("#count").val();
    		if(count==""||count<0)
    			{
    				$("#count").css("border-color", "#FF0052");
            $("#count_error_message").html("Please enter total number of people");
            $("#count_error_message").show();
            error_count=true;
        }
        else
        {
        		$("#count_error_message").hide();
        	$("#count").css("border-color", "");

        }

    }
    function check_level()
    {
    		var level=$("#level").val();
    		if(level=="")
    			{
    				$("#level").css("border-color", "#FF0052");
            $("#level_error_message").html("Please select your level");
            $("#level_error_message").show();
            error_level=true;
        
        }
        else
        {
        		$("#level_error_message").hide();
        	$("#level").css("border-color", "");

        }

    }
     function check_idea()
     {
   		 var idea_length=$("#idea").val().length;
   	 	var idea=$("#idea").val();
    		if(idea==""||idea_length<4)
    			{
    				$("#idea").css("border-color", "#FF0052");
            $("#idea_error_message").html("Please recheck your idea entered");
            $("#idea_error_message").show();
            error_idea=true;
        
        }
        else
        {
        		$("#idea_error_message").hide();
        	$("#idea").css("border-color", "");

        }

    }
    function check_desc()
    {
    		var desc_length=$("#desc").val().length;
    		if(desc_length<20)
    			{
    				$("#desc").css("border-color", "#FF0052");
            $("#desc_error_message").html("Please briefly describe in atleast 20 characters");
            $("#desc_error_message").show();
        error_desc = true;
        }
        else
        {
        		$("#desc_error_message").hide();
        	$("#desc").css("border-color", "");

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
            $("#pass_error_message").html("Please enter atleast 8 characters");
            $("#pass_error_message").show();
             error_pass=true;
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
            $("#cpass_error_message").html("Please recheck the confirm password");
            $("#cpass_error_message").show();
            error_cpass=true;
        }

    }
    
    
    function check_checkbox()
    	{
    		if($("#checkbox").prop("checked")== false)
    		{
  				$("#check_error_message").html("**Should fill this");
  				$("#check_error_message").show();
                error_checkbox=true;
    			//alert('hg');
    			// $("#checkbox").css("color", "#FF0052");
    		}	// prop("checked") == true)val()==checked
    		else
    		{
    			$("#check_error_message").hide();
    		}

    	}

    
     $("#start_form").submit(function() {
                                            
        error_username = false;
        error_address = false;
        error_email = false;
        error_mobile_number=false;
 		error_city=false;
 		error_count=false;
 		error_level=false;
 		error_idea=false;
 		error_desc=false;
        error_pass=false;
        error_cpass=false;
        error_checkbox=false;           

        check_username()
        check_address()
        check_email();
        check_mobile_number();
        check_city();
         check_count();
         check_level();
         check_idea();
        check_desc();
        check_pass();
        check_cpass();
        check_checkbox();

        if(error_username == false&&error_address == false&&error_email == false&&error_mobile_number==false&&error_city==false&&error_count==false&&error_level==false&&error_idea==false&&error_desc==false&&error_pass==false&&error_cpass==false&&error_checkbox==false) {
            return true;
        } else {
            return false;   
        }

    });


});
	
