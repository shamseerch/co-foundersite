
 $(function() {

    $("#mname_error_message").hide();
  $("#memail_error_message").hide();
     $("#mmobile_error_message").hide();
    $("#mamobile_error_message").hide();
     $("#mgender_error_message").hide();
 	 $("#maddress_error_message").hide();
 	 $("#mexpertise_error_message").hide();
 	 $("#mdesigntion_error_message").hide();
   $("#mcompany_error_message").hide();
      $("#mpass_error_message").hide();
       $("#mcpass_error_message").hide();
 	 $("#mcheck_error_message").hide();

    var error_name = false;
     var error_address = false;
    var error_email = false;
    var error_mobile_number=false;
    var error_amobile_number=false;
	 var error_expertise = false;
   var error_designtion = false;
     var error_gender=false;
    var error_pass = false;
    var error_cpass = false;
    var error_checkbox = false;
    var error_company = false;

$("#mmobile").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && e.which != 43 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#mmobile_error_message").html("Digits Only").show();/*.fadeIn(50); */
               return false;
    }
    else
    {
        $("#mmobile_error_message").hide();
    }
   });
$("#mamobile").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && e.which != 43 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#mamobile_error_message").html("Digits Only").show();/*.fadeIn(50); */
               return false;
    }
    else
    {
        $("#mamobile_error_message").hide();
    }
   });
$("#mname").keypress(function(event){
        var inputValue = event.which;
        // allow letters and whitespaces only.
        if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)) { 
            // event.preventDefault(); 
            $("#mname_error_message").html("Characters Only").show();/*.fadeIn(50); */
               return false;
        }
    });
$("#mdesignation").keypress(function(event){
        var inputValue = event.which;
        // allow letters and whitespaces only.
        if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)) { 
            // event.preventDefault(); 
            $("#mdesignation_error_message").html("Characters Only").show();/*.fadeIn(50); */
               return false;
        }
    });

    $("#mname").focusout(function() {

        check_name();
        
    });

    $("#memail").focusout(function() {

        check_email();
        
     });
     $("#mmobile").focusout(function() {

        check_mobile_number();
        
    });
      $("#mgender").focusout(function() {

        check_gender();
        
    });
   $("#maddress").focusout(function() {

        check_address();
        
     });
   $("#mexpertise").focusout(function() {

        check_expertise();
        
    });
   $("#mcompany").focusout(function() {

        check_company();
        
    });
  $("#mdesignation").focusout(function() {

        check_designation();
        
    });
  $("#mpass").focusout(function() {

        check_pass();
        
    });
    $("#mcpass").focusout(function() {

        check_cpass();
        
    });
    

   $("#mcheckbox").focusout(function() {

        check_checkbox();
        
    });

    function check_name() {
   
      var mname_length = $("#mname").val().length;
        var mname= $("#mname").val();
        if(mname_length < 5 || mname_length > 20)
        {
        	$("#mname").css("border-color", "#FF0052");
            $("#mname_error_message").html("Please recheck your name");
            $("#mname_error_message").show();      
            error_name = true;
        } 
        else {
        	$("#mname").css("border-color", "");
            $("#mname_error_message").hide();
     
        }
    
    }

 function check_email() {
        var email=$("#memail").val();
        

        var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
        
        if(pattern.test($("#memail").val())) {



            $("#memail_error_message").hide();
            $("#memail").css("border-color", "");
        } 
        else {
            $("#memail").css("border-color", "#FF0052");
            $("#memail_error_message").html("Invalid email address");
            $("#memail_error_message").show();
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
                    $("#memail").css("border-color", "#FF0052");
                    $("#memail_error_message").html("Email address already exists");
                    $("#memail_error_message").show();
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
        var mobile_length = $("#mmobile").val().length;
        var mobile_number=$("#mmobile").val();
        if((mobile_length>9)&&(mobile_length<=14))
        {
            $("#mmobile_error_message").hide();
            $("#mmobile").css("border-color", "");
        }

         else 
        {
        	$("#mmobile").css("border-color", "#FF0052");
            $("#mmobile_error_message").html("Please enter your correct number");
            $("#mmobile_error_message").show();
            error_mobile_number=true;
        }
    }
     function check_gender(){
        
        if($('input[name=gender]:checked').length<=0)
        {
           // $("#gender").css("border-color", "#FF0052");
            $("#mgender_error_message").html("Please select your gender");
            $("#mgender_error_message").show();
            error_gender=true;

        }else{
            $("#mgender_error_message").hide();
           // $("#gender").css("border-color", "");
        }

        }

    function check_address()
    {
    	var address_length = $("#maddress").val().length;
        var address=$("#maddress").val();
        if(address_length!=0)
        {
        	$("#maddress_error_message").hide();
        	$("#maddress").css("border-color", "");
        }
        else
        {
        	$("#maddress").css("border-color", "#FF0052");
            $("#maddress_error_message").html("Please enter your address");
            $("#maddress_error_message").show();
            error_address=true;
        }
    }
    function check_expertise(){
    	var expertise_length = $("#mexpertise").val().length;
    	if(expertise_length==0)
    	{
    		$("#mexpertise").css("border-color", "#FF0052");
            $("#mexpertise_error_message").html("Please enter your area of expertise");
            $("#mexpertise_error_message").show();
            error_expertise=true;

        }else{
        	$("#mexpertise_error_message").hide();
        	$("#mexpertise").css("border-color", "");
        }

    	}

function check_company()
    {
        var company_length = $("#mcompany").val().length;
        var company = $("#mcompany").val();
        if(company_length!=0||company!="")
        {
            $("#mcompany_error_message").hide();
            $("#mcompany").css("border-color", "");
        }
        else
        {
            $("#mcompany").css("border-color", "#FF0052");
            $("#mcompany_error_message").html("Please enter your company");
            $("#mcompany_error_message").show();
            error_company=true;

        }
    }        

    	function check_designation()
        {

    	var designation_length = $("#mdesignation").val().length;
    	
    	if(designation_length==0)
    	{
    		$("#mdesignation").css("border-color", "#FF0052");
            $("#mdesignation_error_message").html("Please enter your designation");
            $("#mdesignation_error_message").show();
            error_designtion=true;

        }else{
        	$("#mdesignation_error_message").hide();
        	$("#mdesignation").css("border-color", "");
        }

    	}
        function check_pass()
        {
            var pass=$("#mpass").val();
            var pass_length=$("#mpass").val().length;
            if(pass_length>7)
                {
                  
           $("#mpass_error_message").hide();
            $("#mpass").css("border-color", "");

        }
        else
        {  $("#mpass").css("border-color", "#FF0052");
            $("#mpass_error_message").html("Please be atleast 8 characters");
            $("#mpass_error_message").show();
             
        }


    }
      function check_cpass()
    {
            var pass=$("#mpass").val();
            var cpass=$("#mcpass").val();
            var cpass_length=$("#mcpass").val().length;
            if(cpass_length>7 && pass===cpass)
                {

                    $("#mcpass_error_message").hide();
            $("#mcpass").css("border-color", "");
                    
        
        }
        else
        {
                $("#mcpass").css("border-color", "#FF0052");
            $("#mcpass_error_message").html("Please recheck the confirm password");
            $("#mcpass_error_message").show();

        }

    }
    

    	function check_checkbox()
    	{
    		if($("#mcheckbox").prop("checked")== false)
    		{
  				$("#mcheck_error_message").html("**You must agree with the terms and conditions");
  				$("#mcheck_error_message").show();
                error_checkbox=true;
    			//alert('hg');
    			// $("#checkbox").css("color", "#FF0052");
    		}	// prop("checked") == true)val()==checked
    		else
    		{
    			$("#mcheck_error_message").hide();
    		}

    	}


     $("#mentor_form").submit(function() {
                                            
        error_name = false;
         error_address = false;
        error_email = false;
         error_mobile_number=false;
        error_designtion = false;
        error_expertise = false;
        error_pass=false;
        error_cpass=false;
        error_checkbox=false;
        error_gender=false;
        error_company=false;        

        check_name();
        check_address();
        check_email();
         check_mobile_number();
        check_designation();
        check_expertise();
        check_pass();
        check_cpass();
        check_gender();
        check_checkbox();
        check_company();


        if(error_name ==false&&error_email == false&&error_mobile_number==false&&error_address == false&&error_designtion == false&&error_expertise == false&&error_checkbox==false&&error_gender==false&&error_company==false) 
            { 
              return true;
        } else {
            return false;   
        }

    });


});