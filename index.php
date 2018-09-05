<?php include "head.php"?>
<?php $page=$_GET['page']; 

if ($page=='detail') {
	include "detail.php";
}elseif ($page=='input_pengajuan') {
	include "baru.php";
}elseif ($page=='databarang') {
	include "barang.php";
}else { ?>

	
					<div class="clearfix"> </div>
				</div>
				
				<div class="clearfix"> </div>
			</div>
		</div>

 <?php } include "footer.php"; ?>
		