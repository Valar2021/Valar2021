<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../boostap/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
      <link rel="stylesheet" href="../boostap/icons/bootstrap-icons.css"> 
      <link rel="stylesheet" href="./acceuil.css"> 
      
    <title>acceuil</title>
</head>
<body>

<nav  class="navbar navbar-expand-lg navbar-dark " > 
<img id="I1" src="A1.png"/> <span style="font-style: italic;  color:white;" >GESTION DE PARTAGE  DES RESSOURCES DE LA SECTION INFORMATIQUE </span>
         <a class="navbar-brand" href="#"></a> 
         
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
       
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav mr-auto" class="navlinks">
             <li class="nav-item active">
               <a class="nav-link" href="#"> <span >ACCUEIL </span ></a>
             </li>
             <li class="nav-item active  ">
               <a class="nav-link" href="#"><span > CONTACT</span> </a>
             </li>
           </ul> 
</nav>
<div class=" " id="A1">
        
        <div id="myCarousel" class="carousel slide border" data-ride="carousel">
           <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
               
            </ol>
            <div class="carousel-inner">

           <div class="carousel-inner">
              <div class="carousel-item active">
                 <img id="I2" class="d-block w-100 " src="./section.jpeg" alt="Leopard">
                 <div class="carousel-caption d-none d-sm-block">
                    <h5 style="font-weight:bold ;background-color: #eb2f06; "> UNIVERSITE CHEIKH ANTA DIOP DE DAKAR </h5>
                    <h5 style="font-weight:bold;background-color: #eb2f06">FACULTE DES SCIENCES ET TECHNIQUES </h5>
                    <H5 style="font-weight:bold;background-color: #eb2f06">Département de Mathématiques et Informatique </H5>
                    <H5 style="font-weight:bold;background-color: #eb2f06"> Section Informatique</H5>
                    
                 </div>
              </div>
              <div class="carousel-item">
                 <img id="I2"class="d-block w-100"  src="./A3.jpg" alt="Cat">
                 <div class="carousel-caption d-none d-sm-block">
                    <h5>Black Cat</h5>
                    <small>
                   <p style="text-align: center;font-size:20px">A black cat is a domestic cat with black fur that may be a mixed or specific breed</p>
                    </small>
                 </div>
              </div>
              <div class="carousel-item">
                 <img id="I2" class="d-block w-100" src="A2.jpg" alt="Lion">
                 <div class="carousel-caption d-none d-sm-block">
                    <h5>Lion</h5>
                    <small>
                      <p style="text-align: center;font-size:20px"> The lion (Panthera leo) is a species in the cat family (Felidae).
                       A muscular, deep-chested cat, it has a short, rounded head,
                       a reduced neck and round ears 
                    </p>
                    
                    </small>
                 </div>
              </div>
           </div>
          
          
       </div>
           <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
           </a>
           <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
           </a>
        </div>
     </div>

     <div class="row">
     <div class="col-lg-3 col-md-8 col-sm-12">
     <div id="A5">
     <p id="B1"><img id="I3" src="./etudiant.png" alt=""> ETUDIANTS</p>
       <p id="B2">Espace étudiants</p>
       
        <!-- Button trigger modal -->
   <p><button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">
      Cliqué ici
</button></p>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> <span class="title">CONNECTION / CREATION DE COMPTE</span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!-- CONNECTION -->
    <div class="container">
      <div class="forms">
          <div class="form login">
              <span class="title">CONNECTION</span>

              <form method="post" action="./traiteEtudiantForm.php" enctype="multipart/form-data">
                  <div class="input-field">
                      <input type="text" placeholder="Entrer votre numéro carte d'etudiant" name="nce" required 
                      <?php
                        if(isset($_COOKIE['nce']))
                       echo "value= '".$_COOKIE['nce']."'";
                     ?>>
                      <i class="uil uil-envelope icon"></i>
                  </div>
                  <div class="input-field">
                      <input type="password" class="password" placeholder="Entrer votre mot de passe" name="password" required>
                      <i class="uil uil-lock icon"></i>
                      <i class="uil uil-eye-slash showHidePw"></i>
                  </div>

                  <div class="checkbox-text">
                      <div class="checkbox-content">
                          <input type="checkbox" id="logCheck">
                          <label for="logCheck" class="text">Se souviens de moi</label>
                      </div>
                      
                      <a href="#" class="text">Mot de passe oublié?</a>
                  </div>

                  <div class="input-field button">
                      <input type="submit" value="Se connecter">
                  </div>
              </form>

              <div class="login-signup">
                  <span class="text">Vous n'étes pas un membre?
                      <a href="inscription.php" class="text signup-link">S'inscrire maintenant</a>
                  </span>
              </div>
          </div>

         
      </div>
  </div>
    </div>
   
  </div>
</div>



     </div>
     </div>
     </div>
     <div class="col-lg-3 col-md-8 col-sm-12">
     <div id="A6">
     <p id="B1"><img id="I3" src="./prof (1).png" alt=""> ENSEIGNANTS</p>
       <p id="B2">Espace enseignants</p>

       <p><button type="button" class="btn btn-dark" data-toggle="modal" data-target="#studentmodal">
          Cliqué ici
       </button></p>
    

<!-- Modal -->
<div class="modal fade" id="studentmodal" tabindex="-1" role="dialog" aria-labelledby="studentmodalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="studentmodalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <!-- CONNECTION -->
    <div class="container">
      <div class="forms">
          <div class="form login">
              <span class="title">CONNECTION</span>

              <form method="post" action="./TraiteEnseignant.php" enctype="multipart/form-data">
                  <div class="input-field">
                      <input type="text" placeholder="Entrer votre nom d'utilisateur" name="username1" required 
                      <?php
                        if(isset($_COOKIE['login1']))
                       echo "value= '".$_COOKIE['login1']."'";
                     ?>>
                      <i class="uil uil-envelope icon"></i>
                  </div>
                  <div class="input-field">
                      <input type="password" class="password" placeholder="Entrer votre mot de passe" name="pwd1" required>
                      <i class="uil uil-lock icon"></i>
                      <i class="uil uil-eye-slash showHidePw"></i>
                  </div>

                  <div class="checkbox-text">
                      <div class="checkbox-content">
                          <input type="checkbox" id="logCheck">
                          <label for="logCheck" class="text">Se souviens de moi</label>
                      </div>
                      
                      <a href="#" class="text">Mot de passe oublié?</a>
                  </div>

                  <div class="input-field button">
                      <input type="submit" value="Se connecter">
                  </div>
              </form>

             
          </div>

   
  </div>
</div>

      </div>
      
    </div>
  </div>
</div>

     </div>

     </div>
     <div class="col-lg-3 col-md-8 col-sm-12">
     <div id="A7">
       <p id="B1"><img id="I3" src="./prof (2).png" alt=""> RESPONSABLE
       </p>

       <p id="B2">Espace enseignants responsables</p>
       <p><button type="button" class="btn btn-dark" data-toggle="modal" data-target="#resmodal">
          Cliqué ici
       </button></p>
        
       
<!-- Modal -->
<div class="modal fade" id="resmodal" tabindex="-1" role="dialog" aria-labelledby="resmodalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="resmodalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <!-- CONNECTION -->
    <div class="container">
      <div class="forms">
          <div class="form login">
              <span class="title">CONNECTION</span>

              <form method="post" action="./TraiteResponsable.php" enctype="multipart/form-data">
                  <div class="input-field">
                      <input type="text" placeholder="Entrer votre nom d'utilisateur" name="username2" required 
                      <?php
                        if(isset($_COOKIE['login2']))
                       echo "value= '".$_COOKIE['login2']."'";
                     ?>>
                      <i class="uil uil-envelope icon"></i>
                  </div>
                  <div class="input-field">
                      <input type="password" class="password" placeholder="Entrer votre mot de passe" name="pwd2" required>
                      <i class="uil uil-lock icon"></i>
                      <i class="uil uil-eye-slash showHidePw"></i>
                  </div>

                  <div class="checkbox-text">
                      <div class="checkbox-content">
                          <input type="checkbox" id="logCheck">
                          <label for="logCheck" class="text">Se souviens de moi</label>
                      </div>
                      
                      <a href="#" class="text">Mot de passe oublié?</a>
                  </div>

                  <div class="input-field button">
                      <input type="submit" value="Se connecter">
                  </div>
              </form>

             
          </div>

   
  </div>
</div>

      </div>
      
    </div>
  </div>
</div>
     </div>
     </div>
     <div class="col-lg-3 col-md-8 col-sm-12">
     <div id="A8">
       <p id="B1"><img id="I4" src="./R.png" alt=""> ADMINISTRATEUR</p>
       <p id="B2">Espace administrateur</p>
       <p><button type="button" class="btn btn-dark" data-toggle="modal" data-target="#Admimodal">
          Cliqué ici
       </button></p>
         
       
<!-- Modal -->
<div class="modal fade" id="Admimodal" tabindex="-1" role="dialog" aria-labelledby="AdmimodalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="AdmimodalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <!-- CONNECTION -->
    <div class="container">
      <div class="forms">
          <div class="form login">
              <span class="title">CONNECTION</span>

              <form method="post" action="./TraitementAdmi.php" enctype="multipart/form-data">
                  <div class="input-field">
                      <input type="text" placeholder="Entrer votre nom d'utilisateur" name="username" required 
                      <?php
                        if(isset($_COOKIE['login']))
                       echo "value= '".$_COOKIE['login']."'";
                     ?>>
                      <i class="uil uil-envelope icon"></i>
                  </div>
                  <div class="input-field">
                      <input type="password" class="password" placeholder="Entrer votre mot de passe" name="pwd" required>
                      <i class="uil uil-lock icon"></i>
                      <i class="uil uil-eye-slash showHidePw"></i>
                  </div>

                  <div class="checkbox-text">
                      <div class="checkbox-content">
                          <input type="checkbox" id="logCheck">
                          <label for="logCheck" class="text">Se souviens de moi</label>
                      </div>
                      
                      <a href="#" class="text">Mot de passe oublié?</a>
                  </div>

                  <div class="input-field button">
                      <input type="submit" value="Se connecter">
                  </div>
              </form>

             
          </div>

   
  </div>
</div>

      </div>
      
    </div>
  </div>
</div>
       
     </div>

     </div>
     </div>
     <footer class="text-center text-white" style="background-color: #f1f1f1;">
  <!-- Grid container -->
  <div class="container1 pt-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-linkedin"></i
      ></a>
      <!-- Github -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center  p-3" style="background-color: #212c3b;">
    © 2020 Copyright:
    <a class="" style="color: white;" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
    
    
            
</body>
</html>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="./js/bootstrap.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> 
      <script src="script.js"></script>