<div class="box">
            <div class="box-header">
              <h3 class="box-title">GROUP LIST</h3>
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
                  <div id="modal-authority" class="modal">
 <?php include 'authority.php'; ?>  
</div>
                <?php $no = 1; 
              $qgroup=mysqli_query($db,"SELECT * from m01_groupauthority"); 
  
              while ( $dgroup=mysqli_fetch_array($qgroup)) {
 ?>
                <tr>
                  <div id="modal-authority" class="modal">
 <?php include 'authority.php'; ?>  
</div>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $dgroup[Name]; ?></td>
                  <td><?php echo $dgroup[IsActive]; ?></td>
                  <td><?php echo $dgroup[Flag]; ?></td>
                  <td><a href="index.php?page=editgroup&id=<?php echo $dgroup[ID] ?>">EDIT</a> | <a href="index.php?page=delgroup&id=<?php echo $dgroup[ID] ?>">Delete</a> | <a href="#" data-target="#modal-authority<?php echo $dgroup['ID']; ?>" onclick='document.getElementById("modal-authority").style.display="block"' >Group Authority</a></td>
                  
                </tr>
<?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>