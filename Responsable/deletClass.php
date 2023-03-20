<?php
try
{
if(isset($_GET['id']))

// echo'nice <br>';
$connect=new PDO("mysql:host=localhost;port=3306;dbname=sectioninf","demba","Rone9425", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));
if($connect)
// echo'connexion etablie <br>';
$a=$_GET['id'];
$req=$connect->prepare("DELETE  FROM module where idM=? ");
$req_ok=$req->execute(array($a));
if($req_ok)
header("location:gererClasse.php");
}
catch(Exception $e)
{
  die('Eureur:'.$e->getMessage());
}
?>