<?php
session_start();
 try
{
$connect=new PDO("mysql:host=localhost;port=3306;dbname=sectioninf","demba","Rone9425", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));
if($connect)
echo'connexion etablie <br>';
echo"<br>";
if(isset($_POST['username'])&& isset($_POST['pwd']))
 $login=$_POST['username'] ;
 $password=$_POST['pwd'];

$req1="SELECT id,nom,prenom, login,password FROM users where login=? and password=? ";
  $re1=$connect->prepare($req1);
  $re1->execute(array($login,$password));
  if($row=$re1->fetch())
  {
    
   
    $_SESSION['prenom']=$row['prenom'];
    $_SESSION['nom']=$row['nom'];
    $_SESSION['login']=$row['login'];
    setcookie('login',$login, time()+7*24*3600);   
  
    
        header("location:../Admi/Admin.php");
   
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