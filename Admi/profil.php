<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
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
  <link rel="stylesheet" href="../Admi/AddEnseignant.css">
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
        <a href="./Admin.php" class="active">Tableau de bord</a>
        <a href="#"><i class="bi bi-person-fill"></i>Profil</a>
        <input type="hidden" name="ida"  />
        <a  id="AZ" href="../home/Acceuil.php"><i class="bi bi-box-arrow-right"></i> Se déconnecter</a>
        <a  href="#"></a>
        <a href="#"></a>
        <a href="#"></a>
        <a href="#"></a>
        <a href="#"></a>
        
        
       
       
    </nav>
    <div class="main-body">
      <div class="container mt-5">
         
             <div id="A1" class="row row-cols-5">
             <h3>Profil</h3> 
             
             <p> <img  id="add" src="./add.jpg" alt="" ></p> 
             <span>Ajouter votre photo</span>
             
            </div>
            <div id="A2" >
             <h5>Mes informations personnelles</h5>
             <div id="AO">
             <p>NOM: <?php
              echo"  ".$_SESSION['nom']." </p>"; ?>
             </p>
             <p>PRENOM: <?php
              echo"  ".$_SESSION['prenom']." </p>"; ?>
             </p>
            
             <p>NOM D'UTILISATEUR: <?php
              echo"  ".$_SESSION['login']." </p>"; ?>
             </p>
             
             </p><br><br><br><br>


             <div class="container">
    

    <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  <i class="bi bi-lock"></i> Modifier son mot de passe
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         
  
   <!-- CREATION DE COMPTE -->
   <div class="form signup">
                
  
                <form  method="POST" action="./changer.php" enctype="multipart/form-data" id="form">
                    <div class="input-field">
                    <input type="password" placeholder="Entrer votre nouveaau mot de passe" name="password" id="password" required>
                    <!-- <i class="bi bi-person"></i>    -->
                    </div>
                    <input type="hidden"  value="<?php echo $id ?>" name="ida"  />
                    <div class="input-field button">
                        <input type="submit" value="Changer">
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

  
</body>
</html>

</body>

</html>
<style>
    #A1
    {
        background-color: white;
    width: 45%;
    height: 20%;
    display: inline-block;
    vertical-align: top;
    
    }
    #A2
    {
        background-color: white;
    width: 45%;
    height: 20%;
    display: inline-block;
    margin-left: 4%;
    }
    h3
    {
       
        margin-left: 40%;
       

    }
    #add
    {
        width: 120%;
        margin-left: 260%;
    }
    span
    {
        margin-left: 30%;
    }
    h5
    {
        text-align: center;
        margin-left: 3%;
        margin-bottom: 10%;
        margin-top: 5%;

    }
    #AO
    {
        margin-left: 15%;
    }
</style>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="./js/bootstrap.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> 
      <script src="script.js"></script>
