<?php
session_start();
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Dashboard | By Code Info</title>
  <!-- <link rel="stylesheet" href="style.css" /> -->
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
  <link rel="stylesheet" href="../boostap/icons/bootstrap-icons.css"> 

  <link rel="stylesheet" href="../boostap/css/bootstrap.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./Admi.css">
	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  
</head>
<body>
  <header class="header">
    <div class="logo">
    <img id="I1" src="A1.png"/>
      <a style=" color:white;" href="#" > GESTION DE PARTAGE DES RESSOURCES DE LA SECTION INFORMATIQUE</a>
      <div class="search_box">
        <input type="text" placeholder="Search">
        <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
      </div>
    </div>

    <div style=" color:white;" class="header-icons">
      
      <i  class="fas fa-bell"></i>
      <?php
        echo" <p id='Rone'> ".$_SESSION['prenom']." ".$_SESSION['nom']." </p>";
    
        ?>
      <i  style="font-size: 150%;" class="bi bi-person-fill"></i>
      
      </div>
   
  </header>
  <div class="container1">
    <nav>
      <div class="side_navbar">
        <img  id="prof" src="./prof .png" alt="" >
        <?php
        echo" <p id='Rone'> ".$_SESSION['prenom']."  ".$_SESSION['nom']." </p>";
    
        ?>
        <span style="font-size: 120%; background-color: #eb2f06;text-align:center;color:white"> Administrateur</span>
        <a href="#" class="active">Tableau de bord</a>
        <a href="./profil.php"><i class="bi bi-person-fill"></i>Profil</a>
        <a  id="AZ" href="../home/Acceuil.php"><i class="bi bi-box-arrow-right"></i> Se déconnecter</a>
        <a  href="#"></a>
        <a href="#"></a>
        <a href="#"></a>
        <a href="#"></a>
        <a href="#"></a>
        
        
       
       
    </nav>

    <div class="main-body">
    <div class="container mt-5">
         <div class="container text-center">
             <div class="row row-cols-5">
               <a href="./AddEnseignant.php" 
                  class="col btn btn-dark m-2 py-3">
                 <i class="fa fa-user-md fs-1" aria-hidden="true"></i><br>
                  Enseignants
               </a> 
               <a href="./AddEtudiant.php" class="col btn btn-dark m-2 py-3">
                 <i class="fa fa-graduation-cap fs-1" aria-hidden="true"></i><br>
                  Etudiants
               </a> 
               <a href="./AddRes.php" 
                  class="col btn btn-dark m-2 py-3">
                 <i class="fa fa-user-md fs-1" aria-hidden="true"></i><br>
                  Responsables
               </a> 
               <a href="" class="col btn btn-dark m-2 py-3">
               <i class="fa fa-user-circle fs-1" aria-hidden="true"></i><br>
                  Administrateur
               </a> 
             
               <a  href="../home/Acceuil.php" class="col btn btn-warning m-5 py-3 col-11">
                 <i class="fa fa-sign-out fs-1" aria-hidden="true"></i><br>
                  Logout
               </a> 
               
               
             </div>
         </div>
     </div>
    
    

    </div>
  </div>
</body>
</html>

</body>

</html>
