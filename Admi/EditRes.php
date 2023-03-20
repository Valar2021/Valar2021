<?php
  $connect=new PDO("mysql:host=localhost;port=3306;dbname=sectioninf","demba","Rone9425", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));
  // echo'connexion etablie <br>';
  $id=$_GET['id'];
  $req=" SELECT * from  responsable where id=$id";
  $res=$connect->query($req);
while($lig=$res->fetch())
{

$a=$lig['nom'];
$b=$lig['prenom'];
$c=$lig['username'];
$d=$lig['password'];
$e=$lig['grade'];
$f=$lig['classe'];


}
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./AddEnseignant.css">
    <link rel="stylesheet" href="../boostap/icons/bootstrap-icons.css"> 
    <link rel="stylesheet" href="../boostap/css/bootstrap.css">
    <title>Modifier</title>
</head>
<body>
   <!-- CREATION DE COMPTE -->
   <div class="container col-lg-5 col-md-8 col-sm-12">
    <a id="back" href="./AddRes.php"> <button type="button" class="btn btn-dark"> <i class="bi bi-arrow-left-circle"></i> Retouner</button> </a> 
    
  
<div class="form signup">
             <span class="title">Modifier responsable</span>

             <form  method="POST" action="./traiteEditRes.php" enctype="multipart/form-data" id="form">
                 <div class="input-field">
                 <input type="text" placeholder="Entrer son nom" name="nom" id="nom"  value="<?php echo $a ?>" required>
                 <!-- <i class="bi bi-person"></i>    -->
                 </div>
                 <div class="input-field">
                     <input type="text" placeholder="Entrer son prenom" name="prenom" id="prenom" value="<?php echo $b ?>" required>
                     <i class="uil uil-user"></i>
                 </div>
                 
                 <div class="input-field">
                     <input type="text" placeholder="Entrer son nom d'utlisateur" name="username" id="username" value="<?php echo $c ?>" required>
                     <i class="uil uil-envelope icon"></i>
                 </div>
                 <div class="input-field">
                     <input type="password" class="password" placeholder="Entrer son mot de passe" name="password" id="password" value="<?php echo $d ?>"  required>
                     <i class="uil uil-lock icon"></i>
                     <i class="uil uil-eye-slash showHidePw"></i>
                 </div>
                 <div class="input-field">
                     <input type="text" class="password" placeholder="Entrer sa grade" name="grade" id="grade" value="<?php echo $e ?>" required>
                     <i class="uil uil-lock icon"></i>
                     <i class="uil uil-eye-slash showHidePw"></i>
                 </div>
                 <div class="input-field">
                     <input type="text" class="" placeholder="Entrer sa classe à gérer" name="classe" id="classe" value="<?php echo $f ?>" required>
                     <i class="uil uil-lock icon"></i>
                     <i class="uil uil-eye-slash showHidePw"></i>
                 </div>
                 <div id="error" style="color: red; "></div>
                 <div class="checkbox-text">
                    
                 </div>
                 <input type="hidden"  value="<?php echo $id ?>" name="ida"  /> <br/>
                 <div class="input-field button">
                     <input type="submit" value="Modifier">
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
