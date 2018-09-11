<?php
$divid=$data['unit_kerja'];
$atasan=mysqli_fetch_array(mysqli_query($db,"SELECT nama,posisi,email FROM user where divisi='$divid' AND posisi like 'Head Of %'"));
$pembelian=mysqli_fetch_array(mysqli_query($db,"SELECT nama,posisi,email FROM user where nama='$data[pj_pembelian]'"));
$pengaju=mysqli_fetch_array(mysqli_query($db,"SELECT nama,posisi,email FROM user where nama='$data[created_by]'"));
$headga=mysqli_fetch_array(mysqli_query($db,"SELECT nama,posisi,email FROM user where posisi='Head Of General Affair'"));
$direktur=mysqli_fetch_array(mysqli_query($db,"SELECT nama,posisi,email FROM user where posisi='Direktur Utama'"));

if($data['progres']=='1'){	$sapaan="Dear $atasan[nama]";}elseif($data['progres']=='2'){ $sapaan="Dear Ibu Wismayanti";}elseif($data['progres']=='3'){ $sapaan="Dear Bapak Pratama";}elseif($data['progres']=='4'){$sapaan="Dear $pembelian[nama]";}elseif($data['progres']=='5'){$sapaan="Dear $pengaju[nama]";};
	


	$laporan="<table width=\"75%\" border=\"0\" align=\"left\" cellpadding=\"3\" cellspacing=\"0\">";
	$laporan .="<tr>";
	$laporan .="<td colspan='3'>$sapaan ,</td>";
	$laporan .="</tr>";
	$laporan .="<tr>";
	$laporan .="<td colspan='3'> </td>";
	$laporan .="</tr>";
	$laporan .="<tr>";
	$laporan .="<td colspan='3'><b>Terdapat Pembelian baru untuk segera di proses</b> dengan detail sebagai berikut :</td>";
	$laporan .="</tr>";		
	$laporan .="<tr>";
	$laporan .="<td width=\"20%\">ID FORM</td>";
	$laporan .="<td  width=\"5%\">:</td>";
	$laporan .="<td>$data[form_code]</td>";
	$laporan .="</tr>";
	$laporan .="<tr>";
	$laporan .="<td>Jenis Pengajuan</td>";
	$laporan .="<td>:</td>";
	$laporan .="<td>$data[jenis_pengajuan]</td>";
	$laporan .="</tr>";
	$laporan .="<tr>";
	$laporan .="<td>Maksud</td>";
	$laporan .="<td>:</td>";
	$laporan .="<td>$data[maksud]</td>";
	$laporan .="</tr>";
	$laporan .="<tr>";
	$laporan .="<td>Saran</td>";
	$laporan .="<td>:</td>";
	$laporan .="<td>$data[saran]</td>";
	$laporan .="</tr>";
	$laporan .="<tr>";
	$laporan .="<td>Keterangan</td>";
	$laporan .="<td>:</td>";
	$laporan .="<td>$data[keterangan]</td>";
	$laporan .="</tr>";
	$laporan .="<tr>";
	$laporan .="<td>Created / Creator</td>";
	$laporan .="<td>:</td>";
	$laporan .="<td>$data[created_at] / $data[created_by]</td>";
	$laporan .="</tr>";
	$laporan .="<tr>";
	$laporan .="<td>Progress Terakhir</td>";
	$laporan .="<td>:</td>";
	$laporan .="<td>$data[last_action]</td>";
	$laporan .="</tr>";
	$laporan .="<tr>";
	$laporan .="<td colspan='3'>Untuk detail bisa dilihat di https://pengajuan.ofon.co.id?page=detail&id=$data[form_code] </td>";
	$laporan .="</tr>";
	$laporan .="<tr>";
	$laporan .="<td colspan='3'> </td>";
	$laporan .="</tr>";
	$laporan .="<tr>";
	$laporan .="<td>Salam</td>";
	$laporan .="</tr>";
	$laporan .="<tr>";
	$laporan .="<td>E-Pengajuan</td>";
	$laporan .="</tr>";		
	$laporan .="</table>";
	
try {
	$mail = new PHPMailer(true); //New instance, with exceptions enabled
	$body             = $laporan;
	$body             = preg_replace('/\\\\/','', $body); //Strip backslashes
	$mail->IsSMTP();                           // tell the class to use SMTP
	$mail->SMTPAuth   = true;                  // enable SMTP authentication
    $mail->SMTPSecure = "ssl";
	$mail->Port       = 465;                    // set the SMTP server port
	$mail->Host       = "smtp.gmail.com"; // SMTP server
	$mail->Username   = "bintang.pratama@ofon.co.id";     // SMTP server username
	$mail->Password   = "hibiniyu";            // SMTP server password

	//$mail->IsSendmail();  // tell the class to use Sendmail
	$mail->AddReplyTo("bintang.pratama@ofon.co.id","Admin OFON");
	$mail->From       = "bintang.pratama@ofon.co.id";
	$mail->FromName   = "E-Pengajuan OFON";

	// $to = "teknik@ofon.co.id";
	if($data['progres']=='1'){	$to = "$atasan[email]";}elseif($data['progres']=='2'){ $to="$headga[email]";}elseif($data['progres']=='3'){ $to = "$direktur[email]";}elseif($data['progres']=='4'){$to= "$pembelian[email]";}elseif($data['progres']=='5'){$to="$pengaju[email]";};
	$mail->AddAddress($to);
	$mail->Subject  = "E-Pengajuan : Data Permintaan pengajuan baru - $data[form_code]";



	//$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

	//$mail->WordWrap   = 80; // set word wrap

	$mail->MsgHTML($body);
	$mail->IsHTML(true); // send as HTML
	$mail->Send();

} catch (phpmailerException $e) {

	echo $e->errorMessage();

}
?>