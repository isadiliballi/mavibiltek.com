<?php
include "adminphp/baglanti.php";


if(isset($_POST['buton']))
{

    $k_adi = mysqli_real_escape_string($baglanti,$_POST['kullaniciadi']);
    $k_sifre = mysqli_real_escape_string($baglanti,$_POST['sifre']);

    if ($k_adi == "" && $k_sifre == "")
    {
        $mesaj = "<script>alert('Lütfen Boş Alan Bırakmayın!')</script>";
        echo $mesaj;
    }
    else if ($k_adi != "" && $k_sifre != "")
    {
        $sorgu = "select count(*) as cntUser from admin where kullaniciadi='".$k_adi."' and sifre='".$k_sifre."'";
        $sonuc = mysqli_query($baglanti,$sorgu);
        $kc = mysqli_fetch_array($sonuc);

        $say = $kc['cntUser'];

        if($say > 0)
        {
            $_SESSION['uname'] = $k_adi;
            header('Location: adminpaneli.html');
        }
        else
        {
           
            $mesaj2 = "<script>alert('Kullanıcı Adı veya Şifre Yanlış!')</script>";
                echo $mesaj2;
        }

    }

}
?>

<html lang="tr">
    <meta charset="utf-8">
   

    <title>Yetkili Girişi</title>
    <link rel="stylesheet" type="text/css" href="admincss/admin.css">

    <header>
        <body class="arkaplan" background="resim/background.jpg" width="500" height="500"></body>
            <div class="kare"></div>
            <div class="daire"></div>

            <img class="resim" src="resim/logo/logo.png" width="100" height="100">

             
<div>
<form action="" method="POST">
  
        <div>
<input class="giris1" type="text" id="text" placeholder="Kullanıcı Adı:" name="kullaniciadi"><br>
</div>
<div>
<input class="giris2" type="password" id="text" placeholder="Şifre:" name="sifre"><br>
</div>
<div>
<input class="buton" type="submit" name="buton" value="Giriş Yap">
</div>

</form>



</div>



    </body>


    </header>
   

</html>
