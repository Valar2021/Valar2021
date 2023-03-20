
<?php
try
{
$connect=new PDO("mysql:host=localhost;port=3306;dbname=sectioninf","demba","Rone9425", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));
if($connect)
echo'connect';
if(isset($_POST["nom"]) &&isset($_POST["prenom"]) &&isset($_POST["username"]) &&isset($_POST["password"])&&isset($_POST["grade"]))
   
 

      $req="INSERT INTO enseignant (nom,prenom,username,password,grade ) VALUES(:nom,:prenom,:username,:password,:grade)";
// $res=$connect->exec($req);
      $res=$connect->prepare($req); 

      $res->bindValue(':nom',$_POST['nom']);
      $res->bindValue(':prenom',$_POST['prenom'] );
      $res->bindValue(':username',$_POST['username']);
      $res->bindValue(':password',$_POST['password'] );
      $res->bindValue(':grade',$_POST['grade'] );
      
      $res_ok=$res->execute();
  
     if( $res_ok)
      header("location:AddEnseignant.php");

    else
     echo'Echec  <br>';
    }


catch(Exception $e)
 {
   die('Eureur:'.$e->getMessage());
 }

 $connect=NULL;
?>
