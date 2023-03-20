
<?php
try
{
$connect=new PDO("mysql:host=localhost;port=3306;dbname=sectioninf","demba","Rone9425", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));
if($connect)
echo'connect';
if(isset($_POST["nom"]) &&isset($_POST["prenom"]) &&isset($_POST["nce"])&&isset($_POST["password"])&&isset($_POST["classe"])&&isset($_POST["email"])&&isset($_POST["date"])&&isset($_POST["tel"]))
   
 

      $req="INSERT INTO etudiant (nom,prenom,nce,password,classe,email,date,tel ) VALUES(:nom,:prenom,:nce,:password,:classe,:email,:date,:tel)";
// $res=$connect->exec($req);
      $res=$connect->prepare($req); 

      $res->bindValue(':nom',$_POST['nom']);
      $res->bindValue(':prenom',$_POST['prenom'] );
      $res->bindValue(':nce',$_POST['nce'] );
      $res->bindValue(':password',$_POST['password'] );
      $res->bindValue(':classe',$_POST['classe'] );
      $res->bindValue(':email',$_POST['email'] );
      $res->bindValue(':date',$_POST['date'] );
      $res->bindValue(':tel',$_POST['tel'] );
      
      
      $res_ok=$res->execute();
  
     if( $res_ok)
      header("location:Acceuil.php");

    else
     echo'Echec  <br>';
    }


catch(Exception $e)
 {
   die('Eureur:'.$e->getMessage());
 }

 $connect=NULL;
?>
