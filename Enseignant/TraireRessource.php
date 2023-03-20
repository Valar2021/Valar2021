
<?php
try
{
$connect=new PDO("mysql:host=localhost;port=3306;dbname=sectioninf","demba","Rone9425", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));
if($connect)
// echo'connect';
if(isset($_POST["idModule"]) &&isset($_POST["fichier"]) )
$idM_R=$_POST["idModule"];
setlocale(LC_TIME, 'fra_fra');
foreach($_FILES["fichier"]["tmp_name"] as $i=>$fichier)
{
  $max_size=$_POST["MAX_FILE_SIZE"];
  $extention_ok=array('pdf','txt','docx');
    $file_ext=strtolower(substr(strrchr($_FILES['fichier']['name'][$i],'.'),1));

    if(in_array($file_ext ,$extention_ok))
    {
      $nomPH = $_FILES["fichier"]["name"][$i];
      $tmp=$_FILES['fichier']['tmp_name'][$i];
       $dest="fichier/".$nomPH;
     $date_now=date("dmY_His",time());
     $dest="fichier/". $date_now.$nomPH;
      move_uploaded_file( $tmp, $dest);
      $req="INSERT INTO ressource (idM_R,url,date ) VALUES(:idModule,:dest,:date)";
      $res=$connect->prepare($req); 
      $res->bindValue(':idModule',$_POST["idModule"]);
      $res->bindValue(':dest',$dest);
      $res->bindValue(':date',strftime('%A %d %B %Y, %H:%M'));
      
      $res_ok=$res->execute();  
    }   
  
     if( $res_ok)
      header("location:ressources.php");

    else
     echo'Echec  <br>';
    }

   
   


}
catch(Exception $e)
 {
   die('Eureur:'.$e->getMessage());
 }

//  select prenom,nom, matiere,date from module M join ressource R on M.idM=R.idM_R join enseignant E on M.modul_Ense= E.Id WHERE classe='L2'


 $connect=NULL;
?>
