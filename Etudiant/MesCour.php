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
  <!-- <link rel="stylesheet" href="../Admi/AddEnseignant.css"> -->
  <link rel="stylesheet" href="../boostap/css/bootstrap.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../Admi/Admi.css">
	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  
</head>
<body>
  <header class="header">
    <div  class="logo ">
      
    <img id="I1" src="A1.png"/>
      <a style=" color:white;" href="#" > GESTION DE PARTAGE DES RESSOURCES DE LA SECTION INFORMATIQUE</a>
      <!-- <form method="post " action="./recherche.php">
		<input type="text" 	placeholder="Rechercher"  name="search" size="25" maxlength="100" required>
		<button type="submit" name="submit"><i  style='font-size: 100%;'; class="fa-sharp fa-solid fa-magnifying-glass"></i></button>
	</form> -->

    </div>

    <div style=" color:white;" class="header-icons">
      
      <i  class="fas fa-bell"></i>
      <?php
        echo" <p id='Rone'> ".$_SESSION['prenom']." ".$_SESSION['nom']." </p>";
    
        ?>
      <a href="./notification.php"><i  style="font-size: 150%; color:white;" class="bi bi-person-fill"></i></a>
      
      </div>
   
  </header>
  <div class="container1">
    <nav>
      <div class="side_navbar">
        <img  id="prof" src="./Etudpng.png" alt="" >
        <?php
        echo" <p id='Rone'> ".$_SESSION['prenom']."  ".$_SESSION['nom']." </p>";
    
        ?>
        <span style="font-size: 120%; background-color: #eb2f06;text-align:center;color:white"> Etudiant(e)</span>
        <a href="./Etudiant.php"><i class="bi bi-person-fill"></i>Profil</a>
        <a href="#"><i class="bi bi-folder2-open"></i> Mes cours</a>
        <a href="./emploi.php"><i class="bi bi-calendar"></i> Emploi du temps</a>
        <!-- <a href="./notification.php"><i class="bi bi-clock-history"></i> Notification</a> -->
        <a  id="AZ" href="../home/Acceuil.php"><i class="bi bi-box-arrow-right"></i> Se déconnecter</a>
        <a  href="#"></a>
        <a href="#"></a>
        <a href="#"></a>
        <a href="#"></a>
        <a href="#"></a>
        
        
     
       
    </nav>

    <div class="main-body">
      <div class="container mt-5">


     <?php
      $connect=new PDO("mysql:host=localhost;port=3306;dbname=sectioninf","demba","Rone9425", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));
                      //  $re="SELECT  classe FROM module where modul_Ense= $_SESSION[id]";
                      //  $re1=$connect->prepare($re);
                      //  $re1->execute();
                      //  $enseignants = $re1->fetchAll(PDO::FETCH_ASSOC);
                      $re="SELECT idM,classe,matiere FROM module where classe= '$_SESSION[classe]'";
                      $re1=$connect->query($re);
                      ?>
                      <?php while($lig=$re1->fetch()):
                      $a=$lig["idM"];
                       
                        ?>
                        <a style="font-size:100%" href="cour.php? id=<?=$lig["idM"]?>"  class="col btn btn-dark m-2 py-3"> <i style="font-size:200%" class="bi bi-book"></i><br> <?=$lig["matiere"]?></a>
                      <?php endwhile?>
         
      <!-- <?php
  
  try
  {
  $connect=new PDO("mysql:host=localhost;port=3306;dbname=sectioninf","demba","Rone9425", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));
  if($connect)

  

  $re="SELECT matiere,url from module join ressource ON module.idM=ressource.idM_R where classe='$_SESSION[classe]'";
  $re1=$connect->query($re);
 echo' <div class="row">';
 echo' <div class="col-lg-11 col-md-8 col-sm-12" >';
 echo"<div id='AQ'>Mes cours</div>";
echo"<table  class='table table-striped '>";
  echo'<thead>';
    echo"<tr>";
     echo'<th scope="col">Matiere</th>';
     echo'<th scope="col">Nom du document</th>';
    echo'<th scope="col">Télécharger</th>';
     echo' </thead>';
    
     
     echo"</div>";
    echo"</div>";
    
     while($lig=$re1->fetch())
{
$a=$lig['matiere'];
$b=$lig['url'];

echo' <tbody>';
echo"<tr>";
 echo"<td>$a</td>";
 echo"<td>$b</td>";
 echo"<td> <a href='../Enseignant/$b'><i style='font-size:140%;' class='bi bi-download'></i></a> </td>";
 echo"</tr>";
 echo' </tbody>';
 
 echo"</div>";
 echo"</div>";

}
echo"</table>";
 
}
catch(Exception $e)
{
  die('Eureur:'.$e->getMessage());
}

$connect=NULL;
?>    -->
           

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
    #AQ
    {
        text-decoration: underline;
        text-align: center;
        font-size: 120%;
        margin-bottom: 4%;

    }
</style>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="./js/bootstrap.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> 
      <script src="script.js"></script>