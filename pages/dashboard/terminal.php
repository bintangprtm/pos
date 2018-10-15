<div class="box">
            <div class="box-header">
              <h3 class="box-title">TERMINAL</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>Type Front End</th>
                  <th>Printer Set</th>
                  <th>Update At</th>
                  <th>Updated By</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1; 
              $qu=mysqli_query($db,"SELECT * from m01_user"); 
  
              while ( $dt=mysqli_fetch_array($qu)) {
 ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $dt[TypeFrontEnd]; ?></td>
                  <td><?php echo $dt[PrinterSet]; ?></td>
                  <td><?php echo $dt[Updated_At]; ?></td>
                  <td><?php echo $dt[Updated_By]; ?></td>
                  <td><a href="index.php?page=editterminal&id=<?php echo $dt[ID] ?>">EDIT</a> | <a href="index.php?func=delete?type=terminal&id=<?php echo $dt[ID] ?>">Delete</a></td>
                  
                </tr>
<?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>