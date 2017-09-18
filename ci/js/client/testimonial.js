

 $(function() {
    $("#tusername_error_message").hide();
    $("#temail_error_message").hide();
    $("#tmobile_error_message").hide();
    $("#taddress_error_message").hide();
    $("#tloc_error_message").hide();
    $("#tfeed_error_message").hide();

    var error_username = false;
    var error_company = false;
    var error_email = false;
    var error_mobile_number=false;
    var error_loc = false;
    var error_feed=false;

    $("#tmobile").keypress(function (e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#tmobile_error_message").html("Digits Only").show();/*.fadeIn(50); */
               return false;
    }
    else
    {
        $("#tmobile_error_message").hide();
    }
   });
$("#tname").keypress(function(event){
        var inputValue = event.which;
        // allow letters and whitespaces only.
        if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)) { 
            // event.preventDefault(); 
            $("#tusername_error_message").html("Characters Only").show();/*.fadeIn(50); */
               return false;
        }
    });

    $("#tname").focusout(function() {

        check_username();
        
    });

    $("#temail").focusout(function() {

        check_email();
        
    });
     $("#tmobile").focusout(function() {

        check_mobile_number();
        
    });
  $("#tcompany").focusout(function() {

        check_company();
        
    });
    $("#tloc").focusout(function() {

        check_loc();
        
    });
    $("#tfeed").focusout(function() {

        check_feed();
        
    });

    function check_username() {
    
        var username_length = $("#tname").val().length;
        var username= $("#tname").val();
        if(username_length < 5 || username_length > 20) {
            $("#tname").css("border-color", "#FF0052");
            $("#tusername_error_message").html("please recheck your name");
            $("#tusername_error_message").show();      
            error_username = true;
        } else {
            $("#tname").css("border-color", "");
            $("#tusername_error_message").hide();
     
        }
    
    }

    function check_email() {

        var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
    
        if(pattern.test($("#temail").val())) {
            $("#temail_error_message").hide();
            $("#temail").css("border-color", "");
        } else {
            $("#temail").css("border-color", "#FF0052");
            $("#temail_error_message").html("Invalid email address");
            $("#temail_error_message").show();
            error_email = true;
        }
    
    }
    function check_mobile_number()
    {
        var mobile_length = $("#tmobile").val().length;
        var mobile_number=$("#tmobile").val();
        if(($.isNumeric(mobile_number))&&(mobile_length>9)&&(mobile_length<=14))
        {
            $("#tmobile_error_message").hide();
            $("#tmobile").css("border-color", "");
        }

         else 
        {
            $("#tmobile").css("border-color", "#FF0052");
            $("#tmobile_error_message").html("should be a 10-14 digit number");
            $("#tmobile_error_message").show();
      error_mobile_number = true;
        }
    }

    function check_company()
    {
        var company_length = $("#tcompany").val().length;
        var company=$("#tcompany").val();
        if(company_length!=0)
        {
            $("#tcompany_error_message").hide();
            $("#tcompany").css("border-color", "");
        }
        else
        {
            $("#tcompany").css("border-color", "#FF0052");
            $("#tcompany_error_message").html("should enter your company name");
            $("#tcompany_error_message").show();
             error_company = true;
        }
    }
    function check_loc()
    {
            var loc=$("#tloc").val();
            if(loc=="")
                {
                    $("#tloc").css("border-color", "#FF0052");
            $("#tloc_error_message").html("should select your city");
            $("#tloc_error_message").show();
         error_loc = true;
        }
        else
        {
                $("#tloc_error_message").hide();
            $("#tloc").css("border-color", "");

        }

    }
    function check_feed()
    {
            var feed=$("#tfeed").val();
            if(feed=="")
                {
                    $("#tfeed").css("border-color", "#FF0052");
            $("#tfeed_error_message").html("should select your city");
            $("#tfeed_error_message").show();
         error_feed = true;
        }
        else
        {
                $("#tfeed_error_message").hide();
            $("#tfeed").css("border-color", "");

        }

    }

     $("#test_form").submit(function() {
                                            
        error_username = false;
        error_company = false;
        error_email = false;
        error_mobile_number=false;
        error_loc=false;
        error_feed=false;
                 

        check_username();
        check_company();
        check_email();
        check_mobile_number();
        check_loc();
         check_feed();

        if(error_username == false && error_company == false && error_email == false &&error_loc==false&&error_mobile_number==false&&error_feed==false) {
            return true;
        } else {
            return false;   
        }

    });


});
  
