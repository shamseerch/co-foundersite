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
                	<th>Office Name</th>
					<th>Location</th>
					<th>Feedback</th>

                </tr>
                </thead>
                <tbody>
 <tr>   
		
	

	</tr>
	<?php $i=1;
 foreach ($query as $row){ ?>
	
	
	<tr>


		<td><?=$row->testimonial_office_name?></td>
		<td><?=$row->testimonial_current_location?></td>
		<td><?=$row->testimonial_feedback?></td>
		
</tr>
</form>
<?php } ?>
</table>