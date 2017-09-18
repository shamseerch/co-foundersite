 <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Payment</h3>
            </div>
<div class="box-body">
<!--<div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select>  entries</label></div></div><div class="col-sm-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info"> 
                
             </label></div></div></div> </div> --> 
                
                
                 <!-- /.box-header -->
            
              <table id="example1" class="table table-bordered table-hover">
                <tr>
                 <th>Sl. No.</th>
                <th>Name</th>
                <th> Email</th>
                <th> Mobile No.</th>
                <th>Amount</th>
                <th>Currency</th>
                <th>Month</th>

                </tr>
                </thead>
                <tbody>
 <tr>                
<?php $i=1;
 foreach ($query as $row){ ?>
  
  <form method=post action="">
         <tr>
            	<td><?php echo $i; $i++;?></td>
             	<td><?= $row->reg_name;?></td>
                <td><?= $row->reg_email;?></td>
                <td><?= $row->reg_mobile_no;?></td>
                
           		<td>
              <div id="<?= $row->P_id."div"?>"><?= $row->p_Amount;?></div>
           		<input type="text" class="status_div" id="<?php echo $row->P_id."amount";?>" name="amount" value="<?php echo $row->p_Amount;?>" size='10px'></td>
              <td><?= $row->P_currency;?></td>
           		<td><?= $row->month_of_payment;?></td>
              
                 <td><input type="button" name="Edit" id="<?php echo $row->P_id ?>" value="Edit" onClick="funpayment(this.id)"></td> 
                <!--  <td><input type="button" name="more" class="btn" value="Change Status" id="" onClick="funstatus(this.id)"></td> -->
                  </tr></form><?php }?>
</table>