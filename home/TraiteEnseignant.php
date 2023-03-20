<?php
session_start();
 try
{
$connect=new PDO("mysql:host=localhost;port=3306;dbname=sectioninf","demba","Rone9425", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));
if($connect)
echo'connexion etablie <br>';
echo"<br>";
if(isset($_POST['username1'])&& isset($_POST['pwd1']))
 $login1=$_POST['username1'] ;
 $password=$_POST['pwd1'];

$req1="SELECT id,nom,prenom, username,password,grade FROM enseignant where username=? and password=? ";
  $re1=$connect->prepare($req1);
  $re1->execute(array($login1,$password));
  if($row=$re1->fetch())
  {
    
   
    $_SESSION['prenom']=$row['prenom'];
    $_SESSION['nom']=$row['nom'];
    $_SESSION['grade']=$row['grade'];
    $_SESSION['username']=$row['username'];
    $_SESSION['password']=$row['password'];
    $_SESSION['id']=$row['id'];
    setcookie('login1',$login1, time()+7*24*3600);   
  
    
        header("location:../Enseignant/Enseignant.php");
   
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