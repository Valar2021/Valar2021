<?php
// echo'nice <br>';
$connect=new PDO("mysql:host=localhost;port=3306;dbname=sectioninf","demba","Rone9425", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));

$a=$_POST['nom'];
$b=$_POST['prenom'];
$c=$_POST['username'];
$d=$_POST['password'];
$e=$_POST['grade'];
$f=$_POST['classe'];
$id= $_POST['ida'];

$req="UPDATE responsable SET nom='$a',prenom='$b',username='$c',password='$d',grade='$e',classe='$f' where id=$id";
$res=$connect->exec($req);
if($res)
{
    header("location:AddRes.php");
}
$connect=NULL;

?>