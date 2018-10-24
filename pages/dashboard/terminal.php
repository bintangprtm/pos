<div class="box">
            <div class="box-header">
              <h3 class="box-title">TERMINAL</h3>
            </div>
            <!-- /.box-header -->

<div class="modal" id="modal-terminal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header"> Edit Terminal
                <button onclick="document.getElementById('modal-terminal').style.display='none'" type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body popupauth" style="display: none;">
               
              </div>
            </div>
          </div>
            </div>

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
              $qu=mysqli_query($db,"SELECT * from m02_terminal"); 
  
              while ( $dt=mysqli_fetch_array($qu)) {
 ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $dt[TypeFrontEnd]; ?></td>
                  <td><?php echo $dt[PrinterSet]; ?></td>
                  <td><?php echo $dt[UpdatedAt]; ?></td>
                  <td><?php echo $dt[UpdatedBy]; ?></td>
                  <td><a href="#" class="psh" id="<?php echo $dt[ID] ?>">EDIT</a></td>
                  
                </tr>
<?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>