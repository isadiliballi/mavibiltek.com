<?php 

ob_start();

$ad	= $_POST['ad'];   
$email = $_POST['email'];
$msg = $_POST['mesaj'];

$mailtanim = "MIME-Version: 1.0\r\n"; 
$mailtanim .= "Content-type: text/plain; charset=iso-8859-9\r\n";
$mailtanim .= "From: $email\r\n";
$mailtanim .= "Reply-To: $email\r\n"; 	

	
	$msgdecode = iconv("UTF-8", "ISO-8859-9", $msg);
	
$mailsonuc = mail("isadiliballi@outlook.com", "$ad Kişisinden Mesajınız Var!" ,stripslashes($msgdecode), $mailtanim); 


if($mailsonuc == true) 
{ 
	$mesaj = "<script>alert('Mesajınız Gönderildi!')</script>";
	echo $mesaj;
	header("Refresh: 2; url=http://quitfollow.com/iletisim.html"); 
	
	
	
}
else
{
	$mesaj2 = "<script>alert('Mail Gönderilemedi, Lütfen Tekrar Deneyin!')</script>";
	echo $mesaj2;
	header("Refresh: 2; url=http://quitfollow.com/iletisim.html"); 
}


?>