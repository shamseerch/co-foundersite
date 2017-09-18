<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Freelancer Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Address</th>
                  <th>Email</th>
                  <th>Category</th>
                   <th>Resume Path</th>
                </tr>
                </thead>
                <?php
$i=1;
foreach ($h as $row) {
?>  
<tr>
<td><?php $id=$row->reg_id; echo $i;$i++;?></td>
<td><?php echo $row->reg_name;?></td>
<td><?php echo $row->Fl_addr;?></td>
<!--<td><?php //echo $row->Age;?></td>-->
<td><?php echo $row->reg_email;?></td>
<td><?php echo $row->Fl_Category;?></td>
<td><?php echo $row->Fl_Resume_path;?></td>
<td><a href="http://localhost/Co-founder/index.php/Admin/fedit/<?php echo $id; ?>"><button >edit</button></a></td>
<?php
}
?>
                </tfoot>
              </table>
                 </div>
            <!-- /.box-body -->
          </div>