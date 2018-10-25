<?php 
include '../../function/db.php'
 $idg=$_POST['post_id'];
 $dta=mysqli_fetch_array(mysqli_query($db,"SELECT * FROM item where id=idg"));
?><tr>
                                        <td><?php echo $dta[Name]; ?></td>
                                        <td>2</td>
                                        <td><?php echo $dta[Price]; ?></td>
                                    </tr>