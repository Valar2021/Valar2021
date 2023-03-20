<?php 


$sName = "localhost";
$uName="root";
$pass="";
$db_name="sectioninf";

try {
    $conn = new PDO("mysql:host=$sName;db_name=$db_name",$uName,$pass);
 $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
   echo "Connection echoue : ".$e->getMessage();
}

