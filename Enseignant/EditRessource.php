<?php
  $connect=new PDO("mysql:host=localhost;port=3306;dbname=sectioninf","demba","Rone9425", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));
  // echo'connexion etablie <br>';
  $id=$_GET['id'];
  $req=" SELECT * from  ressource where idR=$id";
  $res=$connect->query($req);
while($lig=$res->fetch())
{

$a=$lig['idM_R'];
$c=$lig['url'];



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
             <span style="margin-top:10% ;" class="title">Modifier ma classe</span>

             <form  method="POST" action="" enctype="multipart/form-data" id="form">
             <label for="">Entrer le matiere<br>
                        <!-- <input type="text" class="password" placeholder="Entrer le nom du professeur" name="proff" id="proff" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i> -->
                        <?php
                         $connect=new PDO("mysql:host=localhost;port=3306;dbname=sectioninf","demba","Rone9425", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));
                         $re="SELECT  idM,matiere FROM module   ";
                         $re1=$connect->prepare($re);
                         $re1->execute();
                         $modules = $re1->fetchAll(PDO::FETCH_ASSOC);
                         
                        ?>
                        
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="idModule">
                          <?php foreach($modules as $modules):?>
                          <option value="<?=$modules['idM']?>"><?=$modules['matiere']?></option>
                          <?php endforeach?>
                        </select>
                    
                        </label><br><br>
                         <label for="">Inserer le fichier  <br>
                         <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="fichier[]" multiple accept="fichier/*" size="80">
                         <input type="hidden" name="MAX_FILE_SIZE" value="9000000000000000000000000000000000000" />
                        </label>
                    
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
