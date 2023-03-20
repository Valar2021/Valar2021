<?php
session_start();
 try
{
$connect=new PDO("mysql:host=localhost;port=3306;dbname=sectioninf","demba","Rone9425", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));
if($connect)
echo'connexion etablie <br>';
echo"<br>";
if(isset($_POST['nce'])&& isset($_POST['password']))
 $nce=$_POST['nce'] ;
 $password=$_POST['password'];

$req1="SELECT id,nom,prenom, nce,password,classe,email,date,tel FROM etudiant where nce=? and password=? ";
  $re1=$connect->prepare($req1);
  $re1->execute(array($nce,$password));
  if($row=$re1->fetch())
  {
    
   
    $_SESSION['prenom']=$row['prenom'];
    $_SESSION['nom']=$row['nom'];
    $_SESSION['nce']=$row['nce'];
    $_SESSION['classe']=$row['classe'];
    $_SESSION['password']=$row['password'];
    $_SESSION['email']=$row['email'];
    $_SESSION['date']=$row['date'];
    $_SESSION['tel']=$row['tel'];
    setcookie('nce',$nce, time()+7*24*3600);   
  
    
        header("location:../Etudiant/Etudiant.php");
   
  }
  else
  {
    header("location:Acceuil.php");
  }
}
catch(Exception $e)
 {
   die('Eureur:'.$e->getMessage());
 }

 $connect=NULL;

?>