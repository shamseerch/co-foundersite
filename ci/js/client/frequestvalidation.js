$(function(){
		$("#err_name").hide();
		$("#err_skill").hide();
		$("#err_otherskills").hide();
		$("#err_wage").hide();
		$("#err_jobdescription").hide();

		var err_Name = false;
		var err_skill = false;
		var err_otherskills = false;
		var err_wage = false;
		var err_jobdescription = false;
		//var err_Cpwd = false;
		
		$("#name").focusout(function()
		{
			check_name();
		});

		$("#skill").focusout(function()
		{
          check_skills(); 
		});
		$("#otherskills").focusout(function()
		{
            check_otherskills();
		});
		$("#wage").focusout(function()
		{
          check_wage();
		});
		$("#jobdescription").focusout(function()
		{
			check_job();
		});
	function check_name()
	{
		var username_length = $("#name").val().length;
        
        if(username_length < 5 || username_length > 20) {
            $("#err_name").html("Name Should be between 5-20 characters");
            $("#err_name").show();      
            error_Name = true;
        } else {
            $("#err_name").hide();
        } 
    }

    function check_skills()
    {
    	var addr = $("#skill").val().length;
        
        if(addr==false) {
            $("#err_skill").html("please enter Skills the candidate should have");
            $("#err_skill").show();      
            error_Addres = true;
        } else {
            $("#err_skill").hide();
        } 
    }

    function check_otherskills()
    {
    	var srvs = $("#otherskills").val().length;
        
        if(srvs==false) {
            $("#err_otherskills").html("please enter the skills you need");
            $("#err_otherskills").show();      
            error_City = true;
        } else {
            $("#err_otherskills").hide();
        } 
    }
    function check_wage()
    {
        var srvs = $("#wage").val().length;
        
        if(srvs==false) {
            $("#err_wage").html("please enter the wage/hr you provide");
            $("#err_wage").show();      
            error_City = true;
        } else {
            $("#err_wage").hide();
        } 
    }
    function check_job()
    {
        var srvs = $("#jobdescription").val().length;
        
        if(srvs==false) {
            $("#err_jobdescription").html("please enter the skills you need");
            $("#err_jobdescription").show();      
            error_City = true;
        } else {
            $("#err_jobdescription").hide();
        } 
    }

    $("#myform").submit(function() {

    	check_name();
    	check_addrs();
    	check_email();
    	ckeck_password();
    	if(err_name == false && err_Addres== false && err_City == false && err_Email==false && err_pwd==false)
    		return true;
    	else
    	{
    		return false;
    	}

	});
	});