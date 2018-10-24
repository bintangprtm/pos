    <?php 
    include '../../function/db.php';
      $idg=$_POST['post_id'];
    ?>
<form class="modal-content animate" method="post" action="../../function/gauth.php?group=<?php echo $idg; ?>">
       


    <div class="container">
      <?php 
      $num=1;
              $menuauth=mysqli_query($db,"SELECT * FROM m01_MenuSystem where ParentID='0'");
while($menuath=mysqli_fetch_array($menuauth)){
 ?>        
<div class="form-group">
                  <div class="checkbox">
                    <label>
                      <input <?php $prvlgmn=mysqli_fetch_array(mysqli_query($db,"SELECT * from m01_groupprivileges where MenuID=$menuath[ID] AND GroupID=$idg ")); if($prvlgmn[Permission]=='1'){echo "checked='checked'";} ?> type="checkbox" value="<?php echo $menuath[ID]; ?>" name="auth[]"><?php echo $menuath[Description]; ?> 
                    </label>
                  </div>
<?php               
$ambilsubmenuath=mysqli_query($db,"SELECT * FROM m01_MenuSystem where ParentID=$menuath[ID]");
while($submenuath=mysqli_fetch_array($ambilsubmenuath)){

?>
<div class="checkbox" style="margin-left: 2%;">
  <label>
            <input type="checkbox" <?php $prvls=mysqli_fetch_array(mysqli_query($db,"SELECT * from m01_GroupPrivileges where MenuID=$submenuath[ID] AND GroupID=$idg")); if ($prvls[Permission]=='1') { echo "checked='checked'";} ?> value="<?php echo $submenuath[ID]; ?>" name="auth[]"><?php echo $submenuath[Description]; ?>
          </label></div>
           <?php } ?>
<?php  }?>


      <button type="submit">Submit</button>
      
    </div>
    
  </form>
  