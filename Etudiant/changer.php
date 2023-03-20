<?php
// echo'nice <br>';
$connect=new PDO("mysql:host=localhost;port=3306;dbname=sectioninf","demba","Rone9425", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));
$d=$_POST['password'];
$id= $_POST['ida'];
$req="UPDATE etudiant SET password='$d' where id=$id";
$res=$connect->exec($req);
if($res)
{
    header("location:Etudiant.php");
}
$connect=NULL;

?>