<?php
  $connect=new PDO("mysql:host=localhost;port=3306;dbname=sectioninf","demba","Rone9425", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));
  // echo'connexion etablie <br>';
  $id=$_GET['id'];
  $req=" SELECT * from  etudiant where id=$id";
  $res=$connect->query($req);
while($lig=$res->fetch())
{

$a=$lig['nom'];
$b=$lig['prenom'];
$c=$lig['nce'];
$d=$lig['password'];
$e=$lig['classe'];
$f=$lig['email'];
$g=$lig['date'];
$h=$lig['tel'];


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
    <a id="back" href="./AddEtudiant.php"> <button type="button" class="btn btn-dark"> <i class="bi bi-arrow-left-circle"></i> Retouner</button> </a> 
    
  
    <div class="form signup">
              <span class="title">Modifier etudiant</span>

              <form  method="POST" action="./TraiteEditEtu.php" enctype="multipart/form-data" id="form">
                  <div class="input-field">
                  <input type="text" placeholder="Entrer son nom" name="nom" id="nom" value="<?php echo $a ?>"required>
                  <!-- <i class="bi bi-person"></i>    -->
                  </div>
                  <div class="input-field">
                      <input type="text" placeholder="Entrer son prenom" name="prenom" id="prenom"value="<?php echo $b ?>" required>
                      <i class="uil uil-user"></i>
                  </div>
                  
                  <div class="input-field">
                      <input type="text" placeholder="Entrer son numéro de carte d'étudiant" name="nce" id="nce" value="<?php echo $c?>"required>
                      <i class="uil uil-envelope icon"></i>
                  </div>
                  <div class="input-field">
                      <input type="password" class="password" placeholder="Entrer son mot de passe" name="password" id="password"value="<?php echo $d?>" required>
                      <i class="uil uil-lock icon"></i>
                      <i class="uil uil-eye-slash showHidePw"></i>
                  </div>
                  <div class="input-field">
                      <input type="text" class="password" placeholder="Entrer sa classe" name="classe" id="classe" value="<?php echo $e ?>" required>
                      <i class="uil uil-lock icon"></i>
                      <i class="uil uil-eye-slash showHidePw"></i>
                  </div>
                  <div class="input-field">
                      <input type="email" class="email" placeholder="Entrer son email" name="email" id="email"  value="<?php echo $f ?>"required>
                      <i class="uil uil-lock icon"></i>
                      <i class="uil uil-eye-slash showHidePw"></i>
                  </div>
                  <div class="input-field">
                      <input type="date" class="date" placeholder="Entrer sa date de naissance" name="date" id="date"   value="<?php echo $g ?>"required>
                      <i class="uil uil-lock icon"></i>
                      <i class="uil uil-eye-slash showHidePw"></i>
                  </div>
                  <div class="input-field">
                      <input type="number" class="tel" placeholder="Entrer son numero de téléphone" name="tel" id="tel"  value="<?php echo $h ?>"required>
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
