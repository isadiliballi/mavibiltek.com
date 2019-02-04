<?php
include "baglanti.php";

// Check user login or not
if(!isset($_SESSION['k_adi'])){
    header('Location: admin.php');
}

// logout
if(isset($_POST['cikisbuton'])){
    session_destroy();
    header('Location: admin.php');
}
?>
<!doctype html>
<html>
    <head></head>
    <body>
        <h1>Ana Sayfa</h1>
        <form method='post' action="">
            <input type="submit" value="Çıkış" name="cikisbuton">
        </form>
    </body>
</html>