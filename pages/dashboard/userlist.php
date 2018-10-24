<div class="box">
            <div class="box-header">
              <h3 class="box-title">USER LIST</h3>
               <div style="float: right;"><button data-toggle="modal" data-target="#modal-user" class="btn btn-primary btn-sm" >ADD USER</button></div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>Employee ID</th>
                  <th>Username</th>
                  <th>Name</th>
                <th>Group</th>
                  <th>Email</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1; 
              $quser=mysqli_query($db,"SELECT * from m01_user"); 
  
              while ( $dtus=mysqli_fetch_array($quser)) {
 ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $dtus[EmpID]; ?></td>
                  <td><?php echo $dtus[Username]; ?></td>
                  <td><?php echo $dtus[FirstName]." ".$dtus[LastName];?></td>
                  <td><?php  $nmgrp=mysqli_fetch_array(mysqli_query($db,"select * from m01_groupauthority where ID=$dtus[GroupID]")); echo $nmgrp[Name];  ?></td>
                  <td><?php echo $dtus[Email]; ?></td>
                  <td><a href="index.php?page=edituser&id=<?php echo $dtus[ID] ?>">EDIT</a> | <a href="index.php?page=deluser&id=<?php echo $dtus[ID] ?>">Delete</a></td>
                  
                </tr>
<?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>