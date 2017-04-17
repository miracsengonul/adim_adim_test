<?php
	
	function sef($deger) {
	 $tr = array("ş","Ş","ı","I","İ","ğ","Ğ","ü","Ü","ö","Ö","Ç","ç","(",")","/",":",",","?","!","'");
	 $eng = array("s","s","i","i","i","g","g","u","u","o","o","c","c","","","-","-","","","","");
	 $deger = str_replace($tr,$eng,$deger);
	 $deger = strtolower($deger);
	 $deger = preg_replace("/&amp;amp;amp;amp;amp;amp;amp;amp;amp;.+?;/", "", $deger);
	 $deger = preg_replace("/\s+/", "-", $deger);
	 $deger = preg_replace("|-+|", "-", $deger);
	 $deger = preg_replace("/#/", "", $deger);
	 $deger = str_replace(".", "", $deger);
	 $deger = trim($deger, "-");
	 return $deger;
	}

 ?>