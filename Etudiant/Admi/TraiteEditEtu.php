<?php
// echo'nice <br>';
$connect=new PDO("mysql:host=localhost;port=3306;dbname=sectioninf","demba","Rone9425", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));

$a=$_POST['nom'];
$b=$_POST['prenom'];
$c=$_POST['nce'];
$d=$_POST['password'];
$e=$_POST['classe'];
$f=$_POST['email'];
$g=$_POST['date'];
$h=$_POST['tel'];
$id= $_POST['ida'];

$req="UPDATE etudiant SET nom='$a',prenom='$b',nce='$c',password='$d',classe='$e' where id=$id";
$res=$connect->exec($req);
if($res)
{
    header("location:AddEtudiant.php");
}
$connect=NULL;

?>