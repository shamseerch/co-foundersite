var k=0;
function funview(ul_id)
{

	if(k==0)
	{
		$("#"+ul_id+"a").show();
		k=1;
   	}
   	else{
   			$("#"+ul_id+"a").hide();
			k=0;	

   		}				// $("#"+btn_id+"drop").show();
	}
	function funstatus(btn_id)
	{
 
		// $("#"+btn_id+"div").show();
    //  		$("#"+btn_id+"drop").hide();
		//alert(btn_id);
		if($("#"+btn_id).val()=='Change Status')
       		{
            $('#'+btn_id+'datepicker').datepicker({
               autoclose: true
               })

   				$("#"+btn_id).attr('value', 'Update Status');

   					$("#"+btn_id+"div1").hide();
   					$("#"+btn_id+"div2").hide();
   					$("#"+btn_id+"div3").hide();
   					$("#"+btn_id+"drop1").show();
   					$("#"+btn_id+"drop2").show();
   					$("#"+btn_id+"drop3").show();

       		}
       		else if($("#"+btn_id).val()=='Update Status')
       		{ 
       			var status=$("#"+btn_id+"drop3").val();
       			var cname=$("#"+btn_id+"drop2").val();
       			var sdate=$("#"+btn_id+"datepicker").val();
       			$.ajax({
            url:base_url+"index.php/Admin/status_update",
            type:"POST",
            data:{"status":status,"btn_id":btn_id,"cname":cname,"sdate":sdate},
            dataType:"text",
            success:function(result){
   
                if(result==1)
                {
					
					
					document.location.reload(true);
				
                }
            },
            error:function(){
                
            }

    });
       	// 			$("#"+btn_id+"div").show();
   					// $("#"+btn_id+"drop").hide();	
       		}
	}
	function funpayment(bn_id)
	{
		
		if($("#"+bn_id).val()=='Edit')
       		{

   				$("#"+bn_id).attr('value','Save');

   					$("#"+bn_id+"div").hide();
   					$("#"+bn_id+"amount").show();

       		}
       		else if($("#"+bn_id).val()=='Save')
       		{ 
       			var amount=$("#"+bn_id+"amount").val();
       			$.ajax({
            url:base_url+"index.php/Admin/amount_edit",
            type:"POST",
            data:{"amount":amount,"bn_id":bn_id},
            dataType:"text",
            success:function(result){
            	
                if(result==1)
                {
					
					
					document.location.reload(true);
				
                }
            },
            error:function(){
                
            }

    });
       		}
       	}