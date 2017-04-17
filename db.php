<?php
error_reporting(0);
session_start();
ob_start();
try{
	$db = new PDO("mysql:host=localhost;dbname=xxx;charset=utf8","root","password",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

}catch (PDOException $e){
     print $e->getMessage();
}

date_default_timezone_set('Etc/GMT-3');

?>