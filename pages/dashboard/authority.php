   <div class="settle" style="background-color: #fff; width: 40%; margin: 4% auto 15% auto;">
    <span onclick="document.getElementById('modal-authority').style.display='none'" class="close" title="Close PopUp">&times;</span>
    <form class="modal-content animate" method="post" action="gauth.php">
        
    <div class="imgcontainer">
      <h1 style="text-align:center">Setting Group Authority</h1>
    </div>

    <div class="container">
      <?php 
      $num=1;
      $idg=$_POST['rowid'];
              $menuauth=mysqli_query($db,"SELECT * FROM m01_MenuSystem where ParentID='0'");
while($menuath=mysqli_fetch_array($menuauth)){
 ?>        
<div class="form-group">
                  <div class="checkbox">
                    <label>
                      <input <?php $prvlgmn=mysqli_fetch_array(mysqli_query($db,"SELECT * from m01_groupprivileges where MenuID=$menuath[ID] AND GroupID=$idg ")); if($prvlgmn[ID]==true){echo "checked='checked'";} ?> type="checkbox" value="1" name="gauth<?php echo $num++; ?>"><?php echo $menuath[Description]; ?> 

                    </label>
                  </div>
<?php  }?>
      <button type="submit">Submit</button>
      
    </div>
    
  </form>
    </div>