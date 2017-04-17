	<?php require_once("../db.php"); ?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<link href="https://fonts.googleapis.com/css?family=Slabo+27px&amp;subset=latin-ext" rel="stylesheet">	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="https://www.appelsiini.net/projects/chained/jquery.chained.js?v=0.9.10"></script>
	<script type="text/javascript">
		    $(document).ready(function() {
		    $("#series").chainedTo("#mark"); 
		    var maximum_secenek_sayisi      = 10; 
		    var wrapper         = $(".input_fields_wrap"); 
		    var buton_ekle      = $(".buton_kimlik_alani");

		    var x = 1; 
		    $(buton_ekle).click(function(e){ 
			e.preventDefault();
			if(x < maximum_secenek_sayisi){
			    x++; 
			    $(wrapper).append('<div><hr><input type="text" class="form-control" style="border-radius:0px;margin-bottom: 10px;color: black" name="secenek[]" placeholder="Lütfen Soruya Hitaben Yanıtı Yazınız."/><a href="#" class="alani_sil btn btn-sm btn-danger" style="border-radius:0px">Sil</a></div>'); 
			}
		    });

		    $(wrapper).on("click",".alani_sil", function(e){ 
			e.preventDefault(); $(this).parent('div').remove(); x--;
		    })
		});
		</script>
	</head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<?php

	
   
  if(empty($_SESSION["kadi"])){
   	@header("location:../index.php");
   	echo '<script>window.location="../index.php"</script>';
   	exit;
   }  

	
	if(isset($_POST['baslik'])) {    

     	$hedef_klasor = "../fotograf/";
     	$isim = hash('sha512',$_FILES["testfotograf"]["name"]).".".pathinfo($_FILES["testfotograf"]["name"], PATHINFO_EXTENSION);
     	$isim = base64_encode($isim).date('m-d-Y h:i:s');
     	$isim = md5($isim);
		$hedef_dosya = $hedef_klasor . basename($isim).".".pathinfo($_FILES["testfotograf"]["name"], PATHINFO_EXTENSION);
		$tarih = date("d-m-Y H:i");

		    if (move_uploaded_file($_FILES["testfotograf"]["tmp_name"], $hedef_dosya)) {
		    	$ekle = $db->prepare("INSERT INTO testler SET baslik=?,aciklama=?,fotograf=?,tarih=?,ekleyen=?")->execute(array($_POST['baslik'],$_POST['aciklama'],$hedef_dosya,$tarih,$_SESSION['kadi']));
		 			
		    	move_uploaded_file($_FILES["testfotograf"]["tmp_name"], $hedef_dosya);
		       	if($ekle){

		       		echo '<div style="font-weight:bold;border-radius:0px;text-align:center;color:black;" class="well">
  <p><img src="../img/icon/tick.png" width="32"></p><br>
  <label style="font-size:18px">Başarıyla Eklendi<label></label></label></div>';
		       	}
		   
		}

     }


     	if(isset($_POST['soru'])) {    

     	$hedef_klasor = "../fotograf/";


     	$sorufotograf = hash('sha512',$_FILES["sorufotograf"]["name"]).".".pathinfo($_FILES["sorufotograf"]["name"], PATHINFO_EXTENSION);
     	$soruisim = base64_encode($sorufotograf).date('m-d-Y h:i:s');
     	$soruisim = md5($soruisim);
		$soru_dosya = $hedef_klasor . basename($soruisim).".".pathinfo($_FILES["sorufotograf"]["name"], PATHINFO_EXTENSION);


		$tarih = date("d-m-Y  , H:i");
		$soru = $_POST["soru"];
		$testID = $_POST["testID"];
		$cocukID = $_POST["cocukID"];

		if($cocukID==""){
			$cocukID = NULL;
		}

		    if ( isset($_POST["soru"])) {

		    	$ekle = $db->prepare("INSERT INTO sorular SET testID=?,cocukID=?,fotograf=?,soru=?");
		    	$ekle =$ekle->execute(array($_POST['testID'],$_POST['cocukID'],$soru_dosya,$soru));
		 			
		    	move_uploaded_file($_FILES["sorufotograf"]["tmp_name"], $soru_dosya);

		    	if($ekle){

		       		echo '<div style="font-weight:bold;border-radius:0px;text-align:center;color:black;" class="well">
  <p><img src="../img/icon/tick.png" width="32"></p><br>
  <label style="font-size:18px">Başarıyla Eklendi<label></label></label></div>';
		       	}
		       	
		   
		}

     }


     if(isset($_POST["secenek"])){

     	$soruID = $_POST["soruID"];
     	$secenek = $_POST["secenek"];
     	$hatamesaji = $_POST["hatamesaji"];
		$sonucmesaji = $_POST["sonucmesaji"];
     	$turu = $_POST["turu"];

     	$hedef_klasor = "../fotograf/";

     	if(!empty($_FILES["hatafotograf"]["name"])){
	     	$hatafotograf = hash('sha512',$_FILES["hatafotograf"]["name"]).".".pathinfo($_FILES["hatafotograf"]["name"], PATHINFO_EXTENSION);
	     	$hataisim = base64_encode($hatafotograf).date('m-d-Y h:i:s');
	     	$hataisim = md5($hataisim);
			$hata_dosya = $hedef_klasor . basename($hataisim).".".pathinfo($_FILES["hatafotograf"]["name"], PATHINFO_EXTENSION);
		}else{
			$hata_dosya ="";
		}


		if(!empty($_FILES["sonucfotograf"]["name"])){
	     	$sonucfotograf = hash('sha512',$_FILES["sonucfotograf"]["name"]).".".pathinfo($_FILES["sonucfotograf"]["name"], PATHINFO_EXTENSION);
	     	$sonucisim = base64_encode($sonucfotograf).date('m-d-Y h:i:s');
	     	$sonucisim = md5($sonucisim);
			$sonuc_dosya = $hedef_klasor . basename($sonucisim).".".pathinfo($_FILES["sonucfotograf"]["name"], PATHINFO_EXTENSION);
		}else{
			$sonuc_dosya ="";
		}

		if(!empty($_FILES["secenekfotograf"]["name"])){
	     	$secenekfotograf = hash('sha512',$_FILES["secenekfotograf"]["name"]).".".pathinfo($_FILES["secenekfotograf"]["name"], PATHINFO_EXTENSION);
	     	$secenek_dosyaisim = base64_encode($secenekfotograf).date('m-d-Y h:i:s');
	     	$secenek_dosyaisim = md5($secenek_dosyaisim);
			$secenek_dosya = $hedef_klasor . basename($secenek_dosyaisim).".".pathinfo($_FILES["secenekfotograf"]["name"], PATHINFO_EXTENSION);
		}else{
			$secenek_dosya ="";
		}

     	$ekle = $db->prepare("INSERT INTO secenekler SET fotograf=?,soruID=?,yanit=?,turu=?,hataFotografi=?,hataMesaji=?,sonucFotografi=?,sonucMesaji=?")->execute(array($secenek_dosya,$soruID,$secenek,$turu,$hata_dosya,$hatamesaji,$sonuc_dosya,$sonucmesaji));
     	move_uploaded_file($_FILES["hatafotograf"]["tmp_name"], $hata_dosya);
		move_uploaded_file($_FILES["sonucfotograf"]["tmp_name"], $sonuc_dosya);
		move_uploaded_file($_FILES["secenekfotograf"]["tmp_name"], $secenek_dosya);
     	if($ekle){

		       		echo '<div style="font-weight:bold;border-radius:0px;text-align:center;color:black;" class="well">
  <p><img src="../img/icon/tick.png" width="32"></p><br>
  <label style="font-size:18px">Başarıyla Eklendi<label></label></label></div>';
		       	}
     }



	?>

<ul class="nav nav-tabs " style="font-family: 'Slabo 27px', serif;font-size:15px;font-weight:bold;color:black">
    <li style="font-weight:bold;color:black" class="active"><a data-toggle="tab" href="#home" aria-expanded="true"><img src="https://image.flaticon.com/icons/svg/182/182321.svg" width="32"> Test Ekle</a></li>
    <li style="font-weight:bold;color:black" class=""><a data-toggle="tab" href="#menu1" aria-expanded="false"><img src="https://image.flaticon.com/icons/svg/182/182330.svg" width="32">Soru Ekle</a></li>
    <li style="font-weight:bold;color:black" class=""><a data-toggle="tab" href="#menu2" aria-expanded="false"><img src="https://image.flaticon.com/icons/svg/182/182318.svg" width="32"> Seçenek Ekle</a></li>
  </ul>
<div style="font-family: 'Slabo 27px', serif;font-size:18px" class="tab-content">

<div id="home" class="tab-pane fade in active">
<div class="container" style="margin-top: 55px;">
	<div class="panel panel-default">
		<div class="panel-heading" style="text-align: center;font-weight: bold">Test Ekle</div>
		<panel class="body" style="padding: 15px">
		<form action="" method="post" enctype="multipart/form-data">
				<input type="text" name="baslik" placeholder="Testin Başlığı" class="form-control" style="border-radius:0px;margin-bottom: 10px;color: black">
			

				<input type="file" name="testfotograf" placeholder="Testin Fotoğrafı" class="form-control" style="border-radius:0px;margin-bottom: 10px">

				<textarea style="border-radius: 0px;color: black"  name="aciklama" placeholder="Açıklama" class="form-control"></textarea><br>
				<center><input type="submit" style="border-radius: 0px" value="Kaydet" class="btn btn-sm btn-success"></center>
		</form>
		</panel>
	</div>
  </div>
</div>

<br>
<br>
<div id="menu1" class="tab-pane fade">
<div class="container">
	<div class="panel panel-success"   >
		<div class="panel-heading" style="background-color:lightgreen;text-align: center;font-weight: bold">Soru Ekle</div>
		<panel class="body" style="padding:15px">
		<form action="" method="post" enctype="multipart/form-data">
				
			<center><label style="font-weight: bold" >Hangi TEST'in sorusu olacak ?</label></center>
				<select id="mark" name="testID" class="form-control" style="border-radius: 0px">
					
					<?php
						$testler = $db->query("SELECT * FROM testler WHERE ekleyen='{$_SESSION['kadi']}' order by id desc",PDO::FETCH_ASSOC);
						foreach ($testler as $test) {
							echo "<option value=".$test["id"].">".$test["baslik"]."</option>";
						}
					?>
				</select>
				<br>
				<center><label style="font-weight: bold" >Hangi seçeneğe tıklarsak yeni bir soru açılacak ?</label></center>
			<select  id="series"  name="cocukID" class="form-control" style="border-radius: 0px">
					<option value="" selected>Hangi Seçeneğin Devamı Olacak ? Boş ise bu seçenek seçili kalsın.</option>
					<?php
						$secenekler = $db->query("SELECT * FROM secenekler where turu='Doğru' or 'Sonuç' order by id desc ",PDO::FETCH_ASSOC);
						foreach ($secenekler as $secenek) {
							//soruıd bul sonrada soruıd'den testıd bulup classa yaz
							$secenekSoruID = $secenek["soruID"];
							$testbul = $db->query("SELECT * FROM sorular WHERE id='{$secenekSoruID}'")->fetch(PDO::FETCH_ASSOC);

						

							echo "<option class=".$testbul['testID']." value=".$secenek["id"].">".$secenek["yanit"]."</option>";
						} 
					?>
				</select>
				<br>

			    <center><label style="color:Red;font-weight: normal;">sorunun fotoğrafı</label></center>

				<input type="file" name="sorufotograf" placeholder="Sorunun Fotoğrafı" class="form-control" style="border-radius:0px;margin-bottom: 10px">

				<br><center><label style="color:Red;font-weight: normal;">sorunuzu yazınız.</label></center>

				<input type="text" name="soru" placeholder="Sorunun Başlığı" class="form-control" style="border-radius:0px;margin-bottom: 10px;color: black">
				<br>

			
				<center><input type="submit" style="border-radius: 0px" value="Kaydet" class="btn btn-sm btn-danger"></center>
		</form>
		</panel>
	   </div>
	</div>
</div>




<div id="menu2" class="tab-pane fade">
<div class="container">
	<div class="panel panel-default">
		<!--<div class="panel-heading" style="visibility:hidden;text-align: center;font-weight: bold">Seçenek Ekle</div> !-->
		<div class="panel-heading" style="background-color:lightgreen;text-align: center;font-weight: bold">Seçenek Ekle</div>
		<panel class="body" style="padding: 15px">
		<form action="" method="post" enctype="multipart/form-data">

				
				<div class="input_fields_wrap">
				<center>
				    <button class="buton_kimlik_alani btn btn-sm btn-warning" style="visibility:hidden;border-radius: 0px">Seçenek Ekle +</button><br><br>
				</center>
				<center><label style="font-weight: bold" >Soruya Hitaben Yanıtı Yazınız.</label></center>
				    <div><input class="form-control" placeholder="Lütfen Soruya Hitaben Yanıtı Yazınız." type="text" name="secenek" style="border-radius:0px;margin-bottom: 10px;color: black"></div>
				    <br>
				    <center><label style="font-weight: bold" >Seçeneğin Fotoğrafını Seçiniz.</label></center>
				    <input type="file" name="secenekfotograf" placeholder="Seçenek Fotoğrafı" class="form-control" style="border-radius:0px;margin-bottom: 10px">
				</div>
				<hr>
				<!--
				<input type="file" name="testfotograf" placeholder="Testin Fotoğrafı" class="form-control" style="border-radius:0px;margin-bottom: 10px">
				!-->
				<center><label style="font-weight: bold" >Hangi sorunun seçeneği olacak ?</label></center>
				<select name="soruID" class="form-control">
					<?php
						$sorular = $db->query("SELECT * FROM sorular  order by id desc limit 0,10",PDO::FETCH_ASSOC);
						foreach ($sorular as $soru) {
							echo "<option value=".$soru["id"].">".$soru["soru"]."</option>";
						}
					?>
				</select>
				<br>
				<center><label style="font-weight: bold" >Seçeneğin Türü Nedir ?</label></center>
				<select name="turu" class="form-control">
					<option value="Doğru">Doğru</option>
					<option value="Yanlış">Yanlış</option>
					<option value="Sonuç">Sonuç</option>
				</select>
				<br>

				 <center><label style="color:Red;font-weight: normal;">ziyaretçinin  <b>yanlış seçeneği</b> seçmesi durumunda  gösterilecek fotoğraf</label></center>

				<input type="file" name="hatafotograf" placeholder="Hatalı Fotoğrafı" class="form-control" style="border-radius:0px;margin-bottom: 10px">

				<br><center><label style="color:Red;font-weight: normal;">ziyaretçinin <b>yanlış seçeneği</b> seçmesi durumunda  gösterilecek yazı.</label></center>

				<textarea type="text" name="hatamesaji" placeholder="Hata Mesajı" class="form-control" style="border-radius:0px;margin-bottom: 10px;color: black"></textarea>


				<br>
				<hr><hr><hr>


				<center><label style="color:blue;font-weight: normal;"><b>Sonuca</b> ulaştıktan sonra gösterilecek fotoğraf</label></center>

				<input type="file" name="sonucfotograf" placeholder="Hatalı Fotoğrafı" class="form-control" style="border-radius:0px;margin-bottom: 10px">

				<br><center><label style="color:blue;font-weight: normal;"><b>Sonuca</b> ulaştıktan sonra gösterilecek yazı.</label></center>

				<textarea type="text" name="sonucmesaji" placeholder="Sonuç Mesajı" class="form-control" style="border-radius:0px;margin-bottom: 10px;color: black"></textarea>


				<center><input type="submit" style="border-radius: 0px" value="Kaydet" class="btn btn-sm btn-success"></center>
		</form>
		</panel>
	</div>

</div>
</div>


</div>
