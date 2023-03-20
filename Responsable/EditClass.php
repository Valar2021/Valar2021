<?php
  $connect=new PDO("mysql:host=localhost;port=3306;dbname=sectioninf","demba","Rone9425", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));
  // echo'connexion etablie <br>';
  $id=$_GET['id'];
  $req=" SELECT * from  module where idM=$id";
  $res=$connect->query($req);
while($lig=$res->fetch())
{

$a=$lig['matiere'];
$c=$lig['horaire'];
$d=$lig['Jour'];
$e=$lig['classe'];


}
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Admi/AddEnseignant.css">
    <link rel="stylesheet" href="../boostap/icons/bootstrap-icons.css"> 
    <link rel="stylesheet" href="../boostap/css/bootstrap.css">
    <title>Modifier</title>
</head>
<body>
   <!-- CREATION DE COMPTE -->
   <div class="container col-lg-5 col-md-8 col-sm-12">
    <a id="back" href="gererClasse.php"> <button type="button" class="btn btn-dark"> <i class="bi bi-arrow-left-circle"></i> Retouner</button> </a> 
    
  
<div class="form signup">
             <span class="title">Modifier ma classe</span>

             <form  method="POST" action="./TraiteEditClass.php" enctype="multipart/form-data" id="form">
                  <div class="input-field">
                  <input type="text" placeholder="Entrer sa matiere" name="matiere" id="matiere" value="<?php echo $a ?>" required>
                  <!-- <i class="bi bi-person"></i>    -->
                  </div>
                  <div class="input-field">
                      <!-- <input type="text" class="password" placeholder="Entrer le nom du professeur" name="proff" id="proff" required>
                      <i class="uil uil-lock icon"></i>
                      <i class="uil uil-eye-slash showHidePw"></i> -->
                      <?php
                       $connect=new PDO("mysql:host=localhost;port=3306;dbname=sectioninf","demba","Rone9425", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));
                       $re="SELECT  id,nom,prenom FROM enseignant ";
                       $re1=$connect->prepare($re);
                       $re1->execute();
                       $enseignants = $re1->fetchAll(PDO::FETCH_ASSOC);
                      ?>
                      <select name="idEnsignant">
                        <?php foreach($enseignants as $enseignant):?>
                        <option value="<?=$enseignant['id']?>"><?=$enseignant['prenom'].' '.$enseignant['nom']?></option>
                        <?php endforeach?>
                      </select>
                  </div>
                  
                  <div class="input-field">
                      <input type="text" placeholder="Entrer son horaire" name="horaire" id="horaire" value="<?php echo $c ?>" required>
                      <i class="uil uil-envelope icon"></i>
                  </div>
                  <div class="input-field">
                      <input type="text" placeholder="Entrer le jour" name="jour" id="jour" value="<?php echo $d?>" required>
                      <i class="uil uil-envelope icon"></i>
                  </div>
                  <div class="input-field">
                      <input type="text" class="" placeholder="Entrer la classe conserné" name="classe" id="classe" value="<?php echo $e?>" required>
                      <i class="uil uil-lock icon"></i>
                      <i class="uil uil-eye-slash showHidePw"></i>
                  </div>
                  
                  <div id="error" style="color: red; "></div>
                  <div class="checkbox-text">
                     
                  </div>
                  <input type="hidden"  value="<?php echo $id ?>" name="ida"  /> <br/>
                  <div class="input-field button">
                      <input type="submit" value="modifier">
                  </div>
              </form>
                
             
            
         </div>
     </div>
 </div>
   </div>
  
 </div> 
 </div>
</body>
</html>
<style>
  button
  {
    margin-top: 8%;
    margin-bottom: 6%;
  }
</style>
