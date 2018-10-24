<div class="modal fade" id="modal-group">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
           Add Group
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
              
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="../../function/userfunc.php?service=addgroup">
              <div class="box-body">
                <div class="form-group">
                  <label for="name" class="col-sm-2 control-label">Group Name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="groupname" placeholder="Group Name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="flag" class="col-sm-2 control-label">FLAG</label>

                  <div class="col-sm-10">
                    <div class="radio">
                    <label>
                      <input type="radio" name="flag" value="1">
                      Enable
                    </label>
                    <label>
                      <input type="radio" name="flag" value="0">
                      Disable
                    </label>
                  </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="flag" class="col-sm-2 control-label">Group Mode</label>

                  <div class="col-sm-10">
                    <div class="radio">
                    <label>
                      <input type="radio" name="mode" value="1">
                      Enable
                    </label>
                    <label>
                      <input type="radio" name="mode" value="0">
                      Disable
                    </label>
                  </div>
                  </div>
                </div>
                
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>

            </form>
              </div>
              
            </div>

          </div>
         
        </div>
         <!-- /.modal-group -->
  <div class="modal fade" id="modal-user">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
           Add User
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
              
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" action="../../function/userfunc.php?service=adduser">
              <div class="box-body">
                <div class="form-group">
                  <label for="empid" class="col-sm-2 control-label">Employee ID</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="empid" placeholder="Employee ID">
                  </div>
                </div>
                <div class="form-group">
                  <label for="username" class="col-sm-2 control-label">Username</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                  </div>
                </div>
                <div class="form-group">
                  <label for="username" class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                  </div>
                </div>
                <div class="form-group">
                  <label for="username" class="col-sm-2 control-label">Firstname</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="firstname" placeholder="Firstname">
                  </div>
                </div>
                <div class="form-group">
                <label for="username" class="col-sm-2 control-label">Lastname</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="lastname" placeholder="Lastname">
                  </div>
                </div>
                <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                  </div>
                </div>
 <div class="form-group">
                  <label for="flag" class="col-sm-2 control-label">Auth ID</label>

                  <div class="col-sm-10">
                    <div class="radio">
                    <label>
                      <input type="radio" name="flag" value="1">
                      1
                    </label>
                    <label>
                      <input type="radio" name="flag" value="2">
                      2
                    </label>
                  </div>
                  </div>
                </div>


                <div class="form-group">
                <label class="col-sm-2 control-label">Group</label>
                <div class="col-sm-10">
                <select name="group" class="form-control select2">
                  <?php 
                  $query=mysqli_query($db,"SELECT * FROM m01_groupauthority");
                  while ( $grp=mysqli_fetch_array($query)) {
                   ?>
                  <option value="<?php echo $grp[ID]; ?>" ><?php echo $grp[Name]; ?></option>
                <?php } ?>
                </select>
              </div>
              </div>


               
                
                
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>

            </form>
              </div>
              
            </div>

          </div>
         
        </div>
         <!-- /.modal-user -->