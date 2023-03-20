
<!DOCTYPE html>

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
    <a id="back" href="./Acceuil.php"> <button type="button" class="btn btn-dark"> <i class="bi bi-arrow-left-circle"></i> Retouner</button> </a> 
    
  
    <div class="form signup">
              <span class="title">INSCRIPTION</span>

              <form  method="POST" action="./TraiteEtudiant.php" enctype="multipart/form-data" id="form">
                  <div class="input-field">
                  <input type="text" placeholder="Entrer votre nom" name="nom" id="nom"required>
                  <!-- <i class="bi bi-person"></i>    -->
                  </div>
                  <div class="input-field">
                      <input type="text" placeholder="Entrer votre prenom" name="prenom" id="prenom" required>
                      <i class="uil uil-user"></i>
                  </div>
                  
                  <div class="input-field">
                      <input type="text" placeholder="Entrer votre numero carte d'etudiant" name="nce" id="nce"required>
                      <i class="uil uil-envelope icon"></i>
                  </div>
                  <div class="input-field">
                      <input type="password" class="password" placeholder="Entrer votre de mot de passe" name="password" id="password" required>
                      <i class="uil uil-lock icon"></i>
                      <i class="uil uil-eye-slash showHidePw"></i>
                  </div>
                  <div class="input-field">
                      <input type="text" class="password" placeholder="Entrer votre classe" name="classe" id="classe"required>
                      <i class="uil uil-lock icon"></i>
                      <i class="uil uil-eye-slash showHidePw"></i>
                  </div>
                  <div class="input-field">
                      <input type="email" class="email" placeholder="Entrer votre email" name="email" id="email"required>
                      <i class="uil uil-lock icon"></i>
                      <i class="uil uil-eye-slash showHidePw"></i>
                  </div>
                  <div class="input-field">
                      <input type="date" class="date" placeholder="Entrer votre date de naissance" name="date" id="date"required>
                      <i class="uil uil-lock icon"></i>
                      <i class="uil uil-eye-slash showHidePw"></i>
                  </div>
                  <div class="input-field">
                      <input type="number" class="tel" placeholder="Entrer votre numero de téléphone" name="tel" id="tel"required>
                      <i class="uil uil-lock icon"></i>
                      <i class="uil uil-eye-slash showHidePw"></i>
                  </div>
                  
                  <div id="error" style="color: red; "></div>
                  <div class="checkbox-text">
                     
                  </div>
                  <div class="input-field button">

                      <input type="submit" value="INCRIPTION">
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