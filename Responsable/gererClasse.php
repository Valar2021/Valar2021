

<?php
session_start();

?>


<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Dashboard | By Code Info</title>
  <!-- <link rel="stylesheet" href="style.css" /> -->
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
  <link rel="stylesheet" href="../boostap/icons/bootstrap-icons.css"> 
  <link rel="stylesheet" href="../Admi/AddEnseignant.css">
  <link rel="stylesheet" href="../boostap/css/bootstrap.css">
  <script  type="text/javascript" src="./confirmation.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../Admi/Admi.css">
	
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
        <img  id="prof" src="./teacher.png" alt="" >
        <?php
        echo" <p id='Rone'> ".$_SESSION['prenom']."  ".$_SESSION['nom']." </p>";
    
        ?>
        <span style="font-size: 120%; background-color: #eb2f06;text-align:center;color:white"> Enseignant(e) responsable</span>
        <a href="./Responsable.php"><i class="bi bi-person-fill"> </i>Profil</a>
        <a href='#'> <i class='bi bi-boxes'></i> Gérer ma classe</a>
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
 
      echo" <h2 style='margin-left:20%';>Responsable de la classe  ".$_SESSION['classe']."</h2>";
?>



<div class="container">
    

  <!-- Button trigger modal -->
<button style="margin-left: 33%;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
<i class="bi bi-plus-lg"></i> Ajouter module
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
             

              <form  method="POST" action="./RecupClass.php" enctype="multipart/form-data" id="form">
                  <div class="input-field">
                  <input type="text" placeholder="Entrer sa matiere" name="matiere" id="matiere" required>
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
                      <label> Entrer le nom du professeur</label>
                      <select class="form-select form-select-sm" aria-label=".form-select-sm example"name="idEnsignant">
                        <?php foreach($enseignants as $enseignant):?>
                        <option value="<?=$enseignant['id']?>"><?=$enseignant['prenom'].' '.$enseignant['nom']?></option>
                        <?php endforeach?>
                      </select>
                  </div>
                  
                  <div class="input-field">
                      <input type="text" placeholder="Entrer son horaire" name="horaire" id="horaire"  required>
                      <i class="uil uil-envelope icon"></i>
                  </div>
                  <div class="input-field">
                      <input type="text" placeholder="Entrer le jour" name="jour" id="jour"  required>
                      <i class="uil uil-envelope icon"></i>
                  </div>
                  <div class="input-field">
                      <input type="text" class="" placeholder="Entrer la classe conserné" name="classe" id="classe" value="<?php echo "$_SESSION[classe]"  ?>" required>
                      <i class="uil uil-lock icon"></i>
                      <i class="uil uil-eye-slash showHidePw"></i>
                  </div>
                  
                  <div id="error" style="color: red; "></div>
                  <div class="checkbox-text">
                     
                  </div>

                  <div class="input-field button">
                      <input type="submit" value="Ajouter">
                  </div>
              </form>
              
             
          </div>
      </div>
  </div>
    </div>
   
  </div>
</div>




<?php
  
  try
  {
  $connect=new PDO("mysql:host=localhost;port=3306;dbname=sectioninf","demba","Rone9425", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));
  if($connect)

  

  $re="SELECT  idM,matiere,prenom,nom,horaire,jour,classe FROM module join enseignant  ON module.modul_ense = enseignant.id where classe='$_SESSION[classe]'";
  $re1=$connect->query($re);
 echo' <div class="row">';
 echo' <div class="col-lg-8 col-md-8 col-sm-12" >';
 
echo"<table  class='table table-striped '>";
  echo'<thead>';
    echo"<tr>";
     echo' <th scope="col">IdM</th>';
     echo'<th scope="col">Matiere</th>';
     echo'<th scope="col">Professeur</th>';
     echo' <th scope="col">Horaire</th>';
     echo' <th scope="col">Jour</th>';
     echo' <th scope="col">Classe</th>';
     echo'  <th scope="col">Detail</th>';
     echo' </tr>';
     echo' </thead>';
    
     
     echo"</div>";
    echo"</div>";
    
     while($lig=$re1->fetch())
{
$a=$lig['idM'];
$l=$lig['matiere'];
$b=$lig['nom'];
$f=$lig['prenom'];
$c=$lig['horaire'];
$d=$lig['jour'];
$e=$lig['classe'];

echo' <tbody>';
echo"<tr>";
 echo"<td>$a</td>";
 echo"<td>$l</td>";
 echo"<td>$f $b</td>";
 echo"<td>$c</td>";
 echo"<td>$d</td>";
 echo"<td>$e</td>";
 echo"<td> 
 <a href='EditClass.php?id=$a'><i   style='font-size:130%' class='bi bi-pencil-fill'></i></a>
 <a href='deletClass.php?id=$a'><i  style='color :red;font-size:130%' class='bi bi-trash ' onclick='return confirmation();'></i></a><br><br>

 </td>";
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
?>
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
    table
    {
      margin-left: 18%;
    }
</style>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="./js/bootstrap.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> 
      <script src="script.js"></script>