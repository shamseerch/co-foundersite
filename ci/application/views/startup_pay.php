<!DOCTYPE html>
<?php $this->load->helper('url');
   $this->load->helper('form');?>
<html>
<head>
	<title></title>
	<script type='text/javascript' src="<?php echo base_url(); ?>js/jquery.js"></script>
<script type='text/javascript' src="<?php echo base_url(); ?>js/jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/jquery-ui.css">

<script type="text/javascript">
	$(document).ready(function(){

		$("#name").autocomplete({
			source:"<?php echo base_url();?>index.php/Admin/searchc/"
		});
        $("#currency").autocomplete({
            source:"<?php echo base_url();?>index.php/Admin/search_currency/"
        });
    }
		);
		</script>

<style type="text/css">
		.error_form {
    font-size: 15px;
    font-family: Arial;
    color: #FF0052;
}
input[type=text]
{
    border-width: 1px;

}



	</style>

</head>
<body>

        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Payment Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">StartUp Company</label>

                  <div class="col-sm-10">
                    <input type="text" name="name" id="name" class="form-control" required="company name" placeholder="Company Name"/>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Month and Year of Payment</label>

                  <div class="col-sm-10">
                    <input type="text" name="month" id="month" required="month and year" class="form-control" placeholder="Month and Year of Payment"/>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Amount</label>

                  <div class="col-sm-10">
                    <input type="text" name="name" id="name" class="form-control" required="company name" placeholder="Amount"/>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Currency</label>

                  <div class="col-sm-10">
                    <input type="text" id=currency name=currency required="currency" class="form-control" placeholder="currency"/>
                  </div>
                </div>
                </div>
              
              <!-- /.box-body -->
              <div class="box-footer">
             
                <button type="submit" name="submit" class="btn btn-info pull-right">Submit</button>
            </div></form></div>
    
    
</body>
</html>

<script type="text/javascript">
// 	$(function(){

// 	$("#name_error_message").hide();
//     $("#month_error_message").hide();
//     $("#amount_error_message").hide();
//     $("#currency_error_message").hide();

//     var error_name = false;
//     var error_month = false;
//     var error_amount = false;
//     var error_currency = false;

//      $("#name").focusout(function() {

//         check_name();
        
//     });
//       $("#month").focusout(function() {

//         check_month();
        
//     });
//        $("#amount").focusout(function() {

//         check_amount();
        
//     });
//         $("#currency").focusout(function() {

//         check_currency();
        
//     });
//         function check_name() {
   
      
//         var username= $("#name").val();
//         if(username ="")
//         {
//         	//$("#name").css("border-color", "#FF0052");
//             $("#name_error_message").html("please recheck the name");
//             $("#name_error_message").show();      
//             error_name = true;
//         } 
//         else {
//         	//$("#name").css("border-color", "");
//             $("#name_error_message").hide();
     
//         }
    
//     }
//     function check_month() {
   
//       var username_length = $("#month").val().length;
//         var month= $("#month").val();
//         if(month ="")
//         {
//         	$("#month").css("border-color", "#FF0052");
//             $("#month_error_message").html("please recheck the month");
//             $("#month_error_message").show();      
//             error_month = true;
//         } 
//         else {
//         	$("#month").css("border-color", "");
//             $("#month_error_message").hide();
     
//         }
    
//     }
//     function check_amount() {
   
//       var amount_length = $("#amount").val().length;
//         var amount= $("#amount").val();
//         if(amount ="")
//         {
//         	$("#amount").css("border-color", "#FF0052");
//             $("#amount_error_message").html("please recheck the amount");
//             $("#amount_error_message").show();      
//             error_amount = true;
//         } 
//         else {
//         	$("#amount").css("border-color", "");
//             $("#amount_error_message").hide();
     
//         }
    
//     }
//     function check_currency() {
   
//       var currency_length = $("#currency").val().length;
//         var currency= $("#currency").val();
//         if(currency ="")
//         {
//         	$("#currency").css("border-color", "#FF0052");
//             $("#currency_error_message").html("please recheck the currency");
//             $("#currency_error_message").show();      
//             error_currency = true;
//         } 
//         else {
//         	$("#currency").css("border-color", "");
//             $("#currency_error_message").hide();
     
//         }
    
//     }

//     $("#payment").submit(function() {
                                            
//         error_name = false;
//         error_amount = false;
//         error_month = false;
//         error_currency=false;
               

//         check_name();
//         //  check_amount();
//         // check_month();
//         // check_currency();
        


//         if(error_name == false&&error_amount == false&&error_month == false&&       error_currency==false) 
//             { 
//               return true;
//         } else {
//             return false;   
//         }

//     });


// });

	

</script>
 
  


