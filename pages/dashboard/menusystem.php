<div class="box">
            <div class="box-header">
              <h3 class="box-title">Menu System</h3>
                     <div style="float: right;"><button data-toggle="modal" data-target="#modal-menu" class="btn btn-primary btn-sm" >ADD Menu</button></div>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>NO</th>
                  <th>Description</th>
                  <th>Parrent ID</th>
                  <th>Icon Code</th>
                  <th>LinkPage</th>                 
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                  
<div class="modal" id="modal-auth">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header"> Edit menu System
                <button onclick="document.getElementById('modal-auth').style.display='none'" type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body popupauth" style="display: none;">
               
              </div>
            </div>
          </div>
            </div>

                <?php $no = 1; 
              $qmenu=mysqli_query($db,"SELECT * from m01_menusystem"); 
  
              while ( $dmenu=mysqli_fetch_array($qmenu)) {
 ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $dmenu[Description]; ?></td>
                  <td><?php $parrent=mysqli_fetch_array(mysqli_query($db,"SELECT * FROM m01_menusystem WHERE ID=$dmenu[ParentID]"));    echo $parrent[Description]; ?></td>
                  <td><?php echo $dmenu[IconCode]; ?></td>
                  <td><?php echo $dmenu[LinkPage]; ?></td>
                  <td><a href="index.php?page=editmenu&id=<?php echo $dmenu[ID] ?>">EDIT</a> | <a href="../../function/menu.php?service=delete&id=<?php echo $dmenu[ID] ?>">Delete</a> 
                  
                </tr>
<?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
