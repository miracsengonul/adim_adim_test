<!DOCTYPE html>
<html>
<head>
    <?php
    require_once("db.php");
    require_once("sef.php");
    require_once("head.php");

	
    $testID = htmlentities($_GET["test"]);
     
    $testgecirlimi = $db->query("SELECT * FROM testler WHERE id='{$testID}'");
    $testgecirlimi = $testgecirlimi->rowCount();
    if($testgecirlimi==0){
    	header("location:index.php");
    }       

    $testbilgisi = $db->query("SELECT * FROM testler WHERE id='{$testID}'")->fetch(PDO::FETCH_ASSOC);



    $testadi = $testbilgisi['baslik'];
    $testaciklama = $testbilgisi['aciklama'];
    $okunma = $testbilgisi['okunma']+1;
    $ekleyen = $testbilgisi["ekleyen"];
    $testtarih = $testbilgisi["tarih"]; 

    $usercek = $db->query("SELECT * FROM user WHERE kadi='{$ekleyen}'")->fetch(PDO::FETCH_ASSOC);
    $isim = $usercek["isim"];
    $unuvan  = $usercek["unvan"];
    $kisifoto = $usercek["fotograf"]; 
    

    $degis = $db->prepare("UPDATE testler SET okunma='{$okunma}' WHERE id='{$testID}'")->execute();
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<meta name="HandheldFriendly" content="true">
	<meta charset="utf-8">
	<title><?php echo $testbilgisi['baslik'];?></title>
	<meta name="description" content="<?php echo $testbilgisi['aciklama']; ?>">
  	<meta name="author" content="<?php echo $ekleyen; ?>">
	<meta property="og:url"           content="<?php echo $_SERVER['SERVER_NAME']."/".sef($testbilgisi['baslik'])."-".$testbilgisi['id']; ?>" />
	<meta property="og:type"          content="website" />
	<meta property="og:title"         content="<?php echo $testbilgisi['baslik'];?>" />
	<meta property="og:description"   content="<?php echo $testbilgisi['aciklama'];?>" />
	<meta property="og:image"         content="<?php echo str_replace('../','http://sual.me/',$testbilgisi['fotograf']);?>'>" />

	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@sual_mee">
	<meta name="twitter:title" content="<?php echo $testbilgisi['baslik'];?>">
	<meta name="twitter:description" content="<?php echo $testbilgisi['aciklama']; ?>">
	<meta name="twitter:creator" content="@creator_username">
	<meta name="twitter:image" content="<?php echo str_replace('../','http://sual.me/',$testbilgisi['fotograf']);?>">
	<meta name="twitter:domain" content="<?php echo $_SERVER['SERVER_NAME']; ?>">

	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/jspatch.js"></script>
	<link rel="stylesheet" href="css/buton.css"/>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Slabo+27px&amp;subset=latin-ext" rel="stylesheet">
	<script>
	function popupMerkez(url, title, w, h) {
	var left = (screen.width/2)-(w/2);
	var top = (screen.height/2)-(h/2);
	return window.open(url, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
	}
	</script>
	<div id="fb-root"></div>
	<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : 'FBIDCode',
      xfbml      : true,
      version    : 'v2.8'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
	<script>
	  (function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/tr_TR/sdk.js#xfbml=1&version=v2.8";
	  fjs.parentNode.insertBefore(js, fjs);
	  }(document, 'script', 'facebook-jssdk'));
    </script>
	<script>
			
            $(document).ready(function(){
            	$(".css-checkbox").prop('checked', false);
            	$( window ).bind('beforeunload', function(){
   					$(".css-checkbox").prop('checked', false);
   					$(".css-checkbox").prop('disabled',false);
				});

                <?php           

                $test = $db->query("SELECT * FROM sorular WHERE testID='{$testID}'",PDO::FETCH_ASSOC);
                foreach($test as $sorular){             

                    $soru = $db->query("SELECT * FROM secenekler WHERE soruID='{$sorular['id']}'",PDO::FETCH_ASSOC);

                        foreach($soru as $secenekler){

                   if($secenekler["turu"]=="Doğru"){
                    $cocuk = $db->query("SELECT * FROM sorular WHERE cocukID='{$secenekler['id']}'")->fetch(PDO::FETCH_ASSOC);

                ?>
                   
                    $(".secenekID<?php echo $secenekler['id'];?>").click(function(){
                	$(".soruID<?php echo $sorular['id'];?>").prop('disabled',true);
                    $(".soruID<?php echo $cocuk['id'];?>").slideDown();
                    $('html, body').animate({scrollTop: $('.soruID<?php echo $cocuk['id'];?>').offset().top }, 500); 
                });

                <?php }  
                    if($secenekler["turu"]=="Yanlış"){
                        $yanlisID = $secenekler['id'];
                        $yanlisSoru = $secenekler['soruID'];
                ?>

                $(".secenekID<?php echo $secenekler['id']; ?> ").click(function(){
                    $(".hataID<?php echo $yanlisID; ?>").slideDown(); 
                    $('html, body').animate({scrollTop: $('.hataID<?php echo $yanlisID; ?>').offset().top }, 500);
                    $(".soruID<?php echo $yanlisSoru; ?>").prop('disabled',true);
                });
                <?php }elseif($secenekler["turu"]=="Sonuç"){ 
                		$sonucdegerID = $secenekler['id'];
                		$sonucdegerSoru = $secenekler['soruID'];
                	?>

                	$(".secenekID<?php echo $secenekler['id']; ?> ").click(function(){
                    $(".sonucID<?php echo $sonucdegerID; ?>").slideDown(); 
                    $('html, body').animate({scrollTop: $('.sonucID<?php echo $sonucdegerID; ?>').offset().top }, 500);
                    $(".soruID<?php echo $sonucdegerSoru; ?>").prop('disabled',true);
                });

                <?php } } } ?>


               
            });
        </script>
</head>
<body style="font-family: oswald;background-color: #F7FBFC">

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


		<div class="col-md-4 col-sm-4 col-xs-4">
			
			<div  class="fb-share-button" data-href="" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" >Facebook'ta Paylaş</a></div>

		</div>	
		<div class="col-md-4 col-sm-4 col-xs-4">
			<a style="" class="twitter-share-button" class="twitter-share-button" target="_blank"
				  href="https://twitter.com/intent/tweet?original_referer=https%3A%2F%2Fdev.twitter.com%2Fweb%2Ftweet-button&ref_src=twsrc%5Etfw&related=twitterapi%2Ctwitter&text=&tw_p=&url=&via=sual_mee&hashtag=sualme"
				  data-size="large">
				  Tweet</a>
				  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
		</div>	
		<div class="col-md-4 col-sm-4 col-xs-4" style="margin-bottom:35px">
		<img src="img/icon/eye.png" width="32">

		 <strong> <?php echo $okunma; ?></strong>	okunma
		</div>	
			
			<h1 class="baslikyukseklik"><?php echo $testadi; ?></h1>
			<h4 style="color:#333;font-family: 'Slabo 27px', serif;" class="yaziyukseklik">
				<?php echo $testaciklama; ?>
			</h4>
			<hr>

			<?php

		        $test = $db->query("SELECT * FROM sorular WHERE testID='{$testID}'",PDO::FETCH_ASSOC);

		        $ilkDeger = $db->query("SELECT * FROM sorular WHERE testID='{$testID}' LIMIT 0,1")->fetch(PDO::FETCH_ASSOC);
		        $ilk = $ilkDeger['id'];

		                foreach($test as $key=>$sorular){             
		                    
		                    $key = $key+1;

		                    if($sorular['id']==$ilk){
		                        $gorunur = "";
		                    }else{
		                        $gorunur = "style='display:none'";
		                    }


	        ?>
	    <div class="col-md-12 col-sm-12 col-xs-12">
			<div class="soruID<?php echo $sorular['id'];?>" <?php echo $gorunur; ?>>

			<?php if(empty($sorular['fotograf'])){
				echo '<div class="container">';
			 } 
			 ?>
				<h2 class="mini-baslik-font etiketyukseklik" style="color:#333;"><?php echo $key.". ".$sorular['soru'];?></h2>
			<?php if(!empty($sorular['fotograf'])){  ?>

				<img width="800" class="img-responsive" alt="<?php echo $sorular['soru'];?>" src="<?php echo $sorular['fotograf'];?>" style="margin-bottom: 15px">


				<?php }if(empty($sorular['fotograf'])){ echo '</div>'; }
            	$soru = $db->query("SELECT * FROM secenekler WHERE soruID='{$sorular['id']}'",PDO::FETCH_ASSOC);

                        foreach($soru as $secenekler){
            	
            	if(!empty($secenekler['fotograf'])){ ?>

            	<div class="col-md-6 col-sm-6 col-xs-12">
            		<label style="width:100%;" for="secenekID<?php echo $secenekler['id']; ?>" class="css-label tiklama radGroup1 radGroup2">
    					<img src="<?php echo $secenekler['fotograf']; ?>" class="img-responsive" style="height:240px;width:100%;margin-bottom:-9px">
    				</label>           	
            	<?php } ?>

				<div class="well" style="margin-bottom: 5px; padding:8px;border-radius:0px;border:none;width:100%">
					<input type="checkbox" name="radiog_dark" id="secenekID<?php echo $secenekler['id']; ?>" class="css-checkbox secenekID<?php echo $secenekler['id']; ?> soruID<?php echo $sorular['id']; ?>" />
					<label style="width:100%;word-wrap: break-word;" for="secenekID<?php echo $secenekler['id']; ?>" class="css-label tiklama radGroup1 radGroup2">
                		<h4 class="mini-font"><?php echo $secenekler['yanit']; ?></h4>
                	</label>
                </div>
                


<?php if(!empty($secenekler['fotograf'])){ ?> </div> <?php } ?>


             <?php }   ?>
			</div>
			</div>
			<?php
			$soru = $db->query("SELECT * FROM secenekler WHERE soruID='{$sorular['id']}'",PDO::FETCH_ASSOC);
			foreach($soru as   $secenekler){
			?>
			<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="container-fluid">
			<div class="hataID<?php echo $secenekler['id'];?>" style="display:none">
	        		<img width="800" class="img-responsive" alt="<?php echo $secenekler['hataMesaji'];?>" src="<?php echo $secenekler['hataFotografi'];?>">
	        		<h2 class=" mini-font baslikyukseklik" style="background-color:darkred;padding:15px;color:white;margin-top:0px;text-align:center;margin-bottom:45px;word-wrap: break-word;"><?php echo $secenekler['hataMesaji'];?></h2>


	        		<button class="btn btn-warning btn-lg" style="border-radius:0px;margin-bottom:25px;margin-left:auto;margin-right:auto;display:block;color:black;box-shadow:2px 2px 3px #333" onclick="window.location.reload(false)">Yeniden Oyna <img src="img/icon/refresh.png" width="24"> </button>

	        </div>

	        <div class="sonucID<?php echo $secenekler['id'];?>" style="display:none">
	        		<img width="800" alt="<?php echo $secenekler['sonucMesaji'];?>" class="img-responsive" src="<?php echo $secenekler['sonucFotografi'];?>">
	        		<h2 class="mini-font baslikyukseklik" style="background-color:lightgreen;padding:15px;margin-top:0px;word-wrap: break-word;"><?php echo $secenekler['sonucMesaji'];?></h2>
	        		<?php
	        		$fb ="https://www.facebook.com/dialog/feed?app_id=168792160277326&display=popup&caption=Sual.me&link=http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']."&name=".$secenekler['sonucMesaji']."&picture=http://".$_SERVER['SERVER_NAME'].str_replace('..','',$secenekler['sonucFotografi'])."&redirect_uri=http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'].""; 

  					?>

  					<div class="col-md-4 col-sm-4 col-xs-6">
	        		<a onclick="javascript:popupMerkez('<?php echo $fb; ?>','', 600,600);" href="#"><img src="img/icon/facebook.png" style="margin-left:auto;margin-right:auto;display:block" class="img-responsive" width="64">
  					</a>
  					</div>

  					<div class="col-md-4 col-sm-4 col-xs-6">
  					<a href="https://plus.google.com/share?url=http://<?php echo $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>" onclick="javascript:popupMerkez(this.href,'',600,600);return false;"><img style="margin-left:auto;margin-right:auto;display:block" src="img/icon/google.png" class="img-responsive" alt="Share on Google+"/></a>
  					</div>

  					<div class="col-md-4 col-sm-4 col-xs-6">
  					<a href="http://twitter.com/share?text=<?php echo $secenekler['sonucMesaji'];?>&url=http://<?php echo $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>&hashtags=sualme" onclick="javascript:popupMerkez(this.href,'',600,600);return false;"><img src="img/icon/twitter.png" style="margin-left:auto;margin-right:auto;display:block" class="img-responsive" alt="Share on Twitter"/></a>
  					</div>

  					<div class="visible-xs">
  						<a href="whatsapp://send?text=<?php echo $secenekler['sonucMesaji']." - http://www.".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>" data-action="share/whatsapp/share"  onclick="javascript:popupMerkez(this.href,'',600,600);return false;"><img src="img/icon/whatsapp.png" style="margin-left:auto;margin-right:auto;display:block" class="img-responsive" alt="Share on Whatsapp"/></a>
  					</div>
  					  <p style="margin-top:105px;background-color:yellow;padding:15px;font-size:17px;color:black;box-shadow:2px 2px 7px black;text-align:center">#Sonucunu paylaş ve arkadaşlarınla kendini karşılaştır !</p>
	        </div>
	   </div>
</div>
			<?php } ?>
		
	
        	
        <?php } ?>
			
        <div style="margin-top:25px;" class="fb-comments" data-href="http://sual.me/detay.php?test=<?php echo $testID;?>" data-numposts="5"></div>
		</div>



		<div class="col-md-4">

		<div class="panel panel-default" style="border-radius: 0px">
			<div class="panel-body">
				<div class="col-md-3 col-sm-2"><img width="64" class="img-circle" src="<?php echo $kisifoto; ?>"></div>
				<div class="col-md-9 col-sm-10">
				<?php echo $isim; ?>
				<p style="font-family: 'Slabo 27px', serif;font-weight: bold;color: #414A4D"><?php echo $unuvan; ?></p>
				<p style="font-size:12.7px;color: #4A5B61;margin-top:5px"><?php echo $testtarih; ?> tarihinde ekledi.</p>
				</div>

			</div>
		</div>
			<!-- Facebook Card -->
			<div  class="fbuzunluk fb-page" 
				  data-href="https://www.facebook.com/Sualme-554980368037822/"
				  data-hide-cover="false"
				  data-show-facepile="false" 
				  data-show-posts="false">
				  
			</div>
			<hr>
			<h3 style="text-align: center">Popüler Sualler</h3>
			<?php

			$cek = $db->query("SELECT * FROM testler WHERE onay='1' order by okunma desc limit 0,20",PDO::FETCH_ASSOC); 
			foreach ($cek as $deger) {
			
			?>
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





</body>
</html>
