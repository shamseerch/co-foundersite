
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">StartUp Status</h3>
            </div>
<div class="box-body">
<!--<div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select>  entries</label></div></div><div class="col-sm-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info"> 
                
             </label></div></div></div> </div>-->  
                
                
                 <!-- /.box-header -->
            
              <table id="example1" class="table table-bordered table-hover">
                <tr>
                  <th>Sl. No.</th>
                  <th>Name</th>
                 <th> Email</th>
                 <th> Mobile No.</th>
                 <th> Starting Date</th>
                 <th> Startup Company</th>
                  <th> Status</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>        

<?php $i=1;
 foreach ($query as $row){ ?>
  
  <form name=sub_form method=post>
         <tr>
            <td><?php echo $i; $i++;?></td>
             <td><?= $row->reg_name;?></td>
                 <td><?= $row->reg_email;?></td>
                 <td><?= $row->reg_mobile_no;?></td>
                 <td><div id="<?php  echo $row->reg_id."div1"?>">
                     <?= $row->start_up_starting_date;?>
                    </div>
                    <div class="status_div" id="<?php  echo $row->reg_id."drop1"?>">
                    

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" value="<?= $row->start_up_starting_date;?>" class="form-control pull-right" id="<?php  echo $row->reg_id."datepicker"?>">
                </div>

                  
                 </div>
                   <!--  <input type="text" value="<?= $row->start_up_starting_date;?>" id="php  echo $row->reg_id."drop1"" size=20px/> -->
                    </td>
                 <td>
                    <div id="<?php  echo $row->reg_id."div2"?>">
                      <?= $row->start_up_company_name;?>
                    </div>
                    <input type="text" value="<?= $row->start_up_company_name;?>" class="status_div" id="<?php  echo $row->reg_id."drop2"?>" size=10px/>
                  </td>
                <td> <?php if($row->reg_status==0)
                		{
                			$str="STARTUP BEGINS";
                		}	
                		else if($row->reg_status==1)
                			{
                			$str="DOING";
                		}
                		else if($row->reg_status==2)
                			{
                			$str="MIGRATE FROM COFOUNDER";
                		}
                		// echo($str);
                		?> 
                		<div id="<?php  echo $row->reg_id."div3"?>">

                		<?=$str?> 
                		</div>
                		<select class="status_div" id="<?php  echo $row->reg_id."drop3"?>">
                			<option value=0>STARTUP BEGINS</option>
                			<option value=1>DOING</option>
                			<option value=2>MIGRATE FROM COFOUNDER</option>
                		</select>
</td>
 <input type="hidden" id=id name=id value="<?= $row->reg_id;?>">
<td><input type="button" name="more" class="btn" value="Change Status" id="<?php  echo $row->reg_id ?>" onClick="funstatus(this.id)"></td>
              <!--  $("#status").attr('value', 'Save'); -->  
                  </tr>
                  </form>
<?php }?>

