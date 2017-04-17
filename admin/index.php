<?php
require_once("../db.php");

if(!empty($_POST["kadi"]) and !empty($_POST["password"])){
    $kadi = htmlentities($_POST['kadi']);
    $sifre = hash('sha512',$_POST['password']);

    $bak = $db->query("SELECT  * FROM user WHERE kadi='{$kadi}' and sifre='{$sifre}'",PDO::FETCH_ASSOC);
    $uyekontrol=$bak->rowCount();

    if($uyekontrol==1){
    	$_SESSION['kadi']=$kadi;
    	$kadi = $_SESSION['kadi'];
        echo '<script>window.location="panel.php"</script>';
    }
}



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html>
<head>
	<title>Sual.me</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<center>
		<form name="post" style="margin-top:55px" action="" method="post">
			<input type="text" name="kadi" placeholder="Kullanıcı">	<br>
			<input type="password" name="password" placeholder="Şifre">	<br>
			<input type="submit" value="Gönder" name=""><br>
		</form>
</center>
</body>
</html>