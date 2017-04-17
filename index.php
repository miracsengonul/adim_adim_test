<!DOCTYPE html>
<html>
<head>
	<?php require_once('head.php'); ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<meta name="HandheldFriendly" content="true">
	<meta charset="utf-8">
	<title>Eğlenencenin ve Maceranın Alanı</title>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Slabo+27px&amp;subset=latin-ext" rel="stylesheet">

    <?php require_once('db.php'); require_once("sef.php"); ?>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/tr_TR/sdk.js#xfbml=1&version=v2.8";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
               
</head>
<body style="font-family: oswald;background-color: #F7FBFC;overflow-x: hidden;">


<nav class="navbar navbar-default" style="background-color: #fff;padding: 10px">
  <div class="container-fluid">
  <div class="span6 uzunluk" style="float: none; margin: 0 auto;">

    	<div style="text-align:center;padding-top:10px">
 
	  		<img  src="img/logo.png" style="margin-top:-10px" width="100">
 
		</div>
  </div>
</nav>





    <div class="container" style="margin-top: 50px">



		<div class="col-md-8">

		<?php

			$cek = $db->query("SELECT * FROM testler WHERE onay='1' order by id desc",PDO::FETCH_ASSOC); 
			foreach ($cek as $deger) {
			
		?>
		<a href="<?php echo sef($deger['baslik'])."-".$deger['id']; ?>">
			<h1 class="baslikyukseklik">
				<?php echo $deger["baslik"]; ?>
			</h1>
            	<img width="700" src="<?php echo $deger['fotograf']; ?>" class="img-hover img-responsive">
			<h4 style="color:#333;font-family: 'Slabo 27px', serif;" class="yaziyukseklik">
				<?php echo $deger["aciklama"]; ?>
			</h4>
		</a>
            <div class="panel-footer">
               <img src="img/icon/time.png"> <?php echo $deger["tarih"]; ?> tarihinde eklendi.
            </div>
        
			<hr>
		<?php } ?>

		</div>




		<div class="col-md-4">

		<div class="panel panel-default" style="border-radius: 0px">
			<div class="panel-body">
				<h3 style="text-align: center">Sual.me</h3>
				<p>Birbirinden farklı ve heyecanlı testlerle eğlenip,vakit geçirebilirsiniz.</p>
				<img src="img/icon/sosyal.png" style="margin-left:auto;margin-right:auto;display:block" >
			</div>
		</div>
			<!-- Facebook Card -->

			<div  class="fbuzunluk fb-page" 
				  data-href="https://www.facebook.com/Sualme-554980368037822/"
				  data-hide-cover="false"
				  data-show-facepile="false" 
				  data-show-posts="false">
				  
			</div>
			<?php

			$cek = $db->query("SELECT * FROM testler WHERE onay='1' order by okunma desc",PDO::FETCH_ASSOC); 
			foreach ($cek as $deger) {
			
			?>
			<hr>
			<h3 style="text-align: center">Popüler Sualler</h3>
			<br>
			<div class="col-md-12 col-sm-6 col-xs-12">
			   <a href="<?php echo sef($deger['baslik'])."-".$deger['id']; ?>">
				<div class="panel panel-default" style="border-radius: 0px;border: none">
					<div class="panel-heading" style="padding:0px;border: none">
						<img src="<?php echo $deger['fotograf']; ?>" style="width:100%">
					</div>
					
					<h4 class="yaziyukseklik">
					<?php echo mb_substr($deger['baslik'],0,150); ?>
					</h4>
					
				</div>
				</a>
			</div>
			<?php } ?>



		</div>	





	</div>





</body>
</html>