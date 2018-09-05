<?php session_start();include "function/db.php";
 if($_SESSION['uname'] == false){
  header('Location:login/index.php');
 }
$nama=$_SESSION['nama'];
 $pos=$_SESSION['posisi'];
?>
<!DOCTYPE HTML>
<html>
<head>
<title>OFON</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="OFON E-Pengajuan" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
 <script type="text/javascript">
function add_row()
{
 $rowno=$("#tabel_barang tr").length;
 $rowno=$rowno+1;
 $("#tabel_barang tr:last").after("<tr id='row"+$rowno+"'><td><label> Nama Barang/Jasa</label> </td> <td>:</td><td><input type='text' class='form-control1' name='nama[]' placeholder='Nama Barang/Jasa'></td><td><label> Harga Satuan</label> </td> <td>:</td><td><input class='form-control1' type='text' name='harga[]' placeholder='Harga Satuan'></td></td><td><label> Jumlah</label> </td> <td>:</td><td><input class='form-control1' type='text' name='jumlah[]' placeholder='Jumlah'></td><td><input type='button' value='X' onclick=delete_row('row"+$rowno+"')></td></tr>");
}
function delete_row(rowno)
{
 $('#'+rowno).remove();
}

</script>

<script src="js/jquery-1.11.1.min.js">
	
</script>
<script src="js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='fonts/gf' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->
<!--Calender-->
  <link rel="stylesheet" href="css/jquery-ui.css">
  <script src="js/jquery-1.12.4.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker,#datepicker2,#datepicker3" ).datepicker({ dateFormat: 'dd MM yy',showOtherMonths: true,
            selectOtherMonths: true,
            autoclose: true,

            orientation: "right bottom",
            changeMonth: true,
            changeYear: true });
  } );
  </script>
  <style type="text/css">
  	.datepickerjadwal{z-index:1151 !important;}
  </style>
<!--End Calender-->
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
		<div class=" sidebar" role="navigation">
            <div class="navbar-collapse">
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left"  id="cbp-spmenu-s1">
					<ul class="nav" id="side-menu">
						
						
						
<?php 
include "function/db.php";
$gid = $_SESSION['gid'];
$prv=mysqli_query($db,"SELECT * FROM a_groupprivileges where group_id='$gid' AND permission='1'");
while($prvl=mysqli_fetch_array($prv)){
$ambilmenu=mysqli_query($db,"SELECT * FROM a_menu where id='$prvl[menu_id]'");
while($menu=mysqli_fetch_array($ambilmenu)){
?>

						<li>
							<a href="<?php echo $menu[link]; ?>"><i class="<?php echo $menu[icon_code];?>"></i><?php echo $menu[menu]; if($menu[link]=='#'){?> <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
<?php								
$ambilsubmenu=mysqli_query($db,"SELECT * FROM a_menu where parrent_id=$menu[id]");
while($submenu=mysqli_fetch_array($ambilsubmenu)){
?>
								<li>
									<a href="<?php echo $submenu[link]; ?>"><?php echo $submenu[menu]; ?></a>
								</li>
							<?php } ?>	
							</ul>
						<?php } else {echo '</a>';} ?>
							<!-- /nav-second-level -->
						</li>
					<?php } } ?>
					</ul>
					<!-- //sidebar-collapse -->
				</nav>
			</div>
		</div>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<!--logo -->
				<div class="logo">
					<a href="#">
						<h1>OFON</h1>
						<span>AdminPanel</span>
					</a>
				</div>
				<!--//logo-->
				<!--search-box-->
				
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				<div class="profile_details_left"><!--notifications of menu start -->
					<ul class="nofitications-dropdown">
						<li class="dropdown head-dpdn">



<?php
if($pos=='Head Of General Affair'){
$sql="SELECT * FROM data_pengajuan where progres='2'";
$sql2="SELECT count(*)  FROM data_pengajuan where progres='2'";
} elseif ($pos=='Head Of Sales' OR $pos=='Head Of Marketing Communication' OR $pos=='Head Of Business Development' OR $pos=='Head Of Product Management' OR $pos=='Head Of Management Information System' OR $pos=='Head Of Operation' OR $pos=='Head Of Finance' ) {
$sql="SELECT * FROM data_pengajuan where progres='1' AND unit_kerja='$_SESSION[divisi]'";
$sql2="SELECT count(*) FROM data_pengajuan where progres='1' AND unit_kerja='$_SESSION[divisi]'";
} else {
	$sql="SELECT * FROM data_pengajuan where progres='5' AND unit_kerja='$_SESSION[divisi]'";
$sql2="SELECT count(*)  FROM data_pengajuan where progres='5' AND unit_kerja='$_SESSION[divisi]'";
} ; $b1 = mysqli_query($db,$sql);
$sss=mysqli_query($db,$sql2);
$asd=mysqli_fetch_array($sss);
?>


							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge"><?php echo $asd[0];  ?></span></a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<?php if($asd==true){ ?>
										<h3>You have <?php echo $asd[0]; ?> new messages</h3> <?php } else {  ?><h3>You have no messages</h3> <?php } ?>
									</div>
								</li>

								<?php  while ( $b2=mysqli_fetch_array($b1)) { if ($b2['progres']!=='5') {
									# code... ?>
								<li><a href="index.php?page=detail&id=<?php echo $b2['form_code']; ?>">
								   <div class="notification_desc">

									<p>Ada Pengajuan <?php echo $b2['jenis_pengajuan']; ?> dari <?php echo $b2['created_by']; ?> </p>
									<p><span><?php echo $b2['created_at']; ?></span></p>
									</div>
								   <div class="clearfix"></div>	
								</a></li> <?php } else{ ?>      
<li><a href="#">
								   <div class="notification_desc">

									<p>Ada Pembelanjaan <?php echo $b2['jenis_pengajuan']; ?> dari <?php echo $b2['created_by']; ?> </p>
									<p><span><?php echo $b2['created_at']; ?></span></p>
									</div>
								   <div class="clearfix"></div>	
								</a></li>
								<?php } } ?>
								</ul>
					<div class="clearfix"> </div>
				</div>
				<!--notification menu end -->
				<div class="profile_details">		
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">	
									
									<div class="user-name">
										<p><?php echo $nama; ?></p>
										<span><?php echo $pos; ?></span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>	
								</div>	
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="index.php?page=account"><i class="fa fa-cog"></i> Account Setting</a> </li> 
								<li> <a href="function/usersession.php?act=logout"><i class="fa fa-sign-out"></i> Logout</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>