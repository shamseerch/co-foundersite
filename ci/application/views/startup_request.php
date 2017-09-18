<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">StartUp Request</h3>
            </div>
<div class="box-body">
<!--<div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap"><div class="row"><div class="col-sm-6"><div class="dataTables_length" id="example1_length"><label>Show <select name="example1_length" aria-controls="example1" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select>  entries</label></div></div><div class="col-sm-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info"> 
                
             </label></div></div></div> </div>-->  
                
                
                 <!-- /.box-header -->
            
              <table id="example1" class="table table-bordered table-hover">
                <tr><thead>
                  <th>Sl. No.</th>
                  <th>Name</th>
                 <th> Email</th>
                 <th> Mobile No.</th>
                  <th> City</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                <?php $i=1;
 foreach ($query as $row){ ?>
  
  <form method=post>
         <tr>
            <td><?php echo $i; $i++;?></td>
             <td><?= $row->reg_name;?></td>
                 <td><?= $row->reg_email;?></td>
                 <td><?= $row->reg_mobile_no;?></td>
                  <td><?= $row->start_up_city;?></td>
                  <input type="hidden" name=id value="<?= $row->reg_id;?>">
                 <td><input type="submit" name="more" class="btn btn-primary" value="more">
                 
             </tr>

             </form> 
         <?php } ?> 
         
                </tbody></table>
                
                
                
                
                
                                
                
                
                
              </table></div></div><!-- <div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example1_info" role="status" aria-live="polite"></div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example1_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">Next</a></li></ul></div></div> --></div></div>

           
