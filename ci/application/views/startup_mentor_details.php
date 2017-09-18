

            
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Mentor details</h3>

             
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>


</tr>


<tr><td><b>ID </b></td><td><?=$reg_id;?></td></tr>

<tr><td><b>Address </b></td><td><?=$address;?></td></tr>
<tr><td><b>Altrenate Mobile No</b></td><td><?=$amob;?></td></tr>
<tr><td><b>Gender </b></td><td><?=$gender;?></td></tr>
<tr><td><b>Company </b></td><td><?=$company;?></td></tr>
<tr><td><b>Designation </b></td><td><?=$designation;?></td></tr>
<tr><td><b>Area of Expertise </b></td><td><?=$area;?></td></tr>
<tr><td><b>Resume </b></td><td><?=$resume;?></td></tr>

<!-- <input type="hidden" id=id name=id value="<?= $resume;?>">-->
<tr><!-- <td><input type="submit" name="download" class="btn" value="Download" id="<?=$reg_id;?>"></td> -->
	<td><a href="<?=base_url();?>/<?= $resume;?>">download</td>

</tr>
</table></div></div></div></div>