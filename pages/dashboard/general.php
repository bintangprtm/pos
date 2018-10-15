<div class="box">
            <div class="box-header">
              <h3 class="box-title">GENERAL</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>Curency</th>
                  <th>TimeZone</th>
                  <th>Actions</th>
                  <th>Update At</th>
                  <th>Updated By</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1; 
              $qgnrl=mysqli_query($db,"SELECT * from m02_general"); 
  
              while ( $dtgnrl=mysqli_fetch_array($qgnrl)) {
 ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $dtgnrl[Curency]; ?></td>
                  <td><?php echo $dtgnrl[TimeZone]; ?></td>
                  <td><?php echo $dtgnrl[Updated_At]; ?></td>
                  <td><?php echo $dtgnrl[Updated_By]; ?></td>
                  <td><a href="index.php?page=editgeneral&id=<?php echo $dtgnrl[ID] ?>">EDIT</a> | <a href="index.php?func=delete&type=general&id=<?php echo $dtgnrl[ID] ?>">Delete</a></td>
                  
                </tr>
<?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>