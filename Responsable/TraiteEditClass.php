<?php
// echo'nice <br>';
$connect=new PDO("mysql:host=localhost;port=3306;dbname=sectioninf","demba","Rone9425", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));

$a=$_POST['matiere'];
$b=$_POST['idEnsignant'];
$c=$_POST['horaire'];
$d=$_POST['jour'];
$e=$_POST['classe'];
$id= $_POST['ida'];

$req="UPDATE module SET matiere='$a',modul_Ense='$b',horaire='$c',Jour='$d',classe='$e' where idM=$id";
$res=$connect->exec($req);
if($res)
{
    header("location:gererClasse.php");
}
$connect=NULL;

?>