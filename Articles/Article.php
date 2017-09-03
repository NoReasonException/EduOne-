<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet" type="text/css" href="./css/ArticleStyle.css">
<link rel="stylesheet" type="text/css" href="./css/style.css">
<?php
  error_reporting(0);
  $config = parse_ini_file('../config/ArticleReader.ini');
  $connectionObject = new mysqli($config['ip_address'],$config['username'],$config['password']);
  if($connectionObject->connect_error){
    header('../err/404.php');
  }


?>
</head>

<body>






</body>
