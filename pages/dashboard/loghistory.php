<div class="box">
            <div class="box-header">
              <h3 class="box-title">LOG HISTORY</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>LOG</th>
                  <th>USER</th>
                  <th>TimeStamp</th>
                  <th>Category</th>
                  <th>Group</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1; 
              $qu=mysqli_query($db,"SELECT * from m01_loghistory"); 
  
              while ( $dt=mysqli_fetch_array($qu)) {
 ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $dt[log]; ?></td>
                  <td><?php echo $dt[user]; ?></td>
                  <td><?php echo $dt[timestamp]; ?></td>
                  <td><?php echo $dt[category]; ?></td>
                  <td><?php echo $dt[group]; ?></td>
                  
                </tr>
<?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>