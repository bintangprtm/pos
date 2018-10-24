<?php 
    include '../../function/db.php';
      $idss=$_POST['post_id'];
      $dt=mysqli_fetch_array(mysqli_query($db,"SELECT * FROM m02_terminal where ID=$idss"));
    ?>
<form class="modal-content animate" method="post" action="../../function/gauth.php?group=<?php echo $idg; ?>">
       

    

<div class="form-group">
                  <label for="name" class="col-sm-2 control-label">Type FrontEnd</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="typefrontend" value="<?php echo $dt[TypeFrontEnd]; ?>">
                  </div>
                </div>
                <div class="form-group">
                  <label for="name" class="col-sm-2 control-label">Printer Set</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="printerset" value="<?php echo $dt[PrinterSet]; ?>">
                  </div>
                </div>
    <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
</form>