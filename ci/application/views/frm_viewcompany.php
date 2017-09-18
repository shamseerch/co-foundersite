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
                  <th>Company Name</th>
                  <th>Company Address</th>
                  <th>Industry</th>
                  <th>Services</th>
                   <th>Email</th>
                </tr>
                </thead>
                  <?php
foreach($h->result() as $row){
  ?>
  <tr>
    <td><?php $id=$row->reg_id; echo $id;?></td>
    <td><?php echo $row->Flco_name;?></td>
    <td><?php echo $row->Flco_addr;?></td>
    <td><?php echo $row->Flco_industry;?></td>
    <td><?php echo $row->Flco_other_service;?></td>
    <td><?php echo $row->reg_email;?></td>
  </tr>
  <?php
}
?>

                  </tfoot>
              </table>
                 </div>
            <!-- /.box-body -->
          </div>