
<?php
try
{
$connect=new PDO("mysql:host=localhost;port=3306;dbname=sectioninf","demba","Rone9425", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));
if($connect)
echo'connect';
 

if(isset($_POST["matiere"]) &&isset($_POST["idEnsignant"]) &&isset($_POST["horaire"])&&isset($_POST["classe"])&&isset($_POST["jour"]))

      $req="INSERT INTO module (matiere,modul_ense,horaire,jour,classe) VALUES(:matiere,:idEnsignant,:horaire,:jour,:classe)";
// $res=$connect->exec($req);
      $res=$connect->prepare($req); 

      $res->bindValue(':matiere',$_POST['matiere']);
      $res->bindValue(':idEnsignant',$_POST['idEnsignant'] );
      $res->bindValue(':horaire',$_POST['horaire'] );
      $res->bindValue(':jour',$_POST['jour'] );
      $res->bindValue(':classe',$_POST['classe'] );
      
      
      $res_ok=$res->execute();
  
     if( $res_ok)
      header("location:gererClasse.php");

    else
     echo'Echec  <br>';
    }


catch(Exception $e)
 {
   die('Eureur:'.$e->getMessage());
 }

 $connect=NULL;
?>
