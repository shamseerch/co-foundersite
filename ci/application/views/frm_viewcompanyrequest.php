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
                  <th>Job Description</th>
                  <th>Skills</th>
                </tr>
                </thead>
                <?php
                $i=1;
foreach($h->result() as $row)
{
?>
<tr>
<td><?php /*echo $row->Fr_request_id;*/echo $i;$i++;?></td>
<td><?php echo $row->Fr_job_description;?></td>
<td><?php echo $row->Fr_skill;?></td>
<?php
}
?>
                </tfoot>
              </table>
                 </div>
            <!-- /.box-body -->
          </div>