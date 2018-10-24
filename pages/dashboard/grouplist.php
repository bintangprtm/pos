<div class="box">
            <div class="box-header">
              <h3 class="box-title">GROUP LIST</h3>
                     <div style="float: right;"><button data-toggle="modal" data-target="#modal-group" class="btn btn-primary btn-sm" >ADD GROUP</button></div>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>Group Name</th>
                  <th>Group Mode</th>
                  <th>Flag</th>                 
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                  
<div class="modal" id="modal-auth">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header"> Edit Group Authority
                <button onclick="document.getElementById('modal-auth').style.display='none'" type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body popupauth" style="display: none;">
               
              </div>
            </div>
          </div>
            </div>

                <?php $no = 1; 
              $qgroup=mysqli_query($db,"SELECT * from m01_groupauthority"); 
  
              while ( $dgroup=mysqli_fetch_array($qgroup)) {
 ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $dgroup[Name]; ?></td>
                  <td><?php echo $dgroup[IsActive]; ?></td>
                  <td><?php echo $dgroup[Flag]; ?></td>
                  <td><a href="index.php?page=editgroup&id=<?php echo $dgroup[ID] ?>">EDIT</a> | <a href="../../function/userfunc.php?service=delgroup&id=<?php echo $dgroup[ID] ?>">Delete</a> | <a href="#" class="push" id="<?php echo $dgroup[ID] ?>" >Group Authority</a></td>
                  
                </tr>
<?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
