
<?php
try
{
$connect=new PDO("mysql:host=localhost;port=3306;dbname=sectioninf","demba","Rone9425", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));
if($connect)
echo'connect';
if(isset($_POST["nom"]) &&isset($_POST["prenom"]) &&isset($_POST["username"]) &&isset($_POST["password"])&&isset($_POST["grade"])&&isset($_POST["classe"]))
   
 

      $req="INSERT INTO responsable (nom,prenom,username,password,grade,classe ) VALUES(:nom,:prenom,:username,:password,:grade,:classe)";
// $res=$connect->exec($req);
      $res=$connect->prepare($req); 

      $res->bindValue(':nom',$_POST['nom']);
      $res->bindValue(':prenom',$_POST['prenom'] );
      $res->bindValue(':username',$_POST['username']);
      $res->bindValue(':password',$_POST['password'] );
      $res->bindValue(':grade',$_POST['grade'] );
      $res->bindValue(':classe',$_POST['classe'] );
      
      $res_ok=$res->execute();
  
     if( $res_ok)
      header("location:AddRes.php");

    else
     echo'Echec  <br>';
    }


catch(Exception $e)
 {
   die('Eureur:'.$e->getMessage());
 }

 $connect=NULL;
?>
