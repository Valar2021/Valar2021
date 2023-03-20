<?php
// echo'nice <br>';
$connect=new PDO("mysql:host=localhost;port=3306;dbname=sectioninf","demba","Rone9425", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));

$a=$_POST['nom'];
$b=$_POST['prenom'];
$c=$_POST['username'];
$d=$_POST['password'];
$e=$_POST['grade'];
$id= $_POST['ida'];

$req="UPDATE enseignant SET nom='$a',prenom='$b',username='$c',password='$d',grade='$e' where id=$id";
$res=$connect->exec($req);
if($res)
{
    header("location:AddEnseignant.php");
}
$connect=NULL;

?>