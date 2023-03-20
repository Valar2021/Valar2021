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

  <link rel="stylesheet" href="../boostap/css/bootstrap.css">
  <script  type="text/javascript" src="./confirmation.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./Admi.css">
	<link rel="stylesheet" href="./AddEnseignant.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  
</head>
<body>
  <header class="header">
    <div class="logo">
    <img id="I1" src="A1.png"/>
      <a style=" color:white;" href="#" > GESTION DE PARTAGE DES RESSOURCES DE LA SECTION INFORMATIQUE</a>
      <div class="search_box">
        <input type="text" placeholder="Search ">
        <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
        
       </div>
       <a style="color: white;" href="./Admin.php">Tableau de bord</a></li>
    </div>
      
  </header>
  <div class="container">
    

  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
<i class="bi bi-plus-lg"></i> Ajouter responsable de classe
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
              <span class="title">Ajouter responsable de classe</span>

              <form  method="POST" action="./TraiteRes.php" enctype="multipart/form-data" id="form">
                  <div class="input-field">
                  <input type="text" placeholder="Entrer son nom" name="nom" id="nom" required>
                  <!-- <i class="bi bi-person"></i>    -->
                  </div>
                  <div class="input-field">
                      <input type="text" placeholder="Entrer son prenom" name="prenom" id="prenom" required>
                      <i class="uil uil-user"></i>
                  </div>
                  
                  <div class="input-field">
                      <input type="text" placeholder="Entrer son nom d'utlisateur" name="username" id="username" required>
                      <i class="uil uil-envelope icon"></i>
                  </div>
                  <div class="input-field">
                      <input type="password" class="password" placeholder="Entrer son mot de passe" name="password" id="password" required>
                      <i class="uil uil-lock icon"></i>
                      <i class="uil uil-eye-slash showHidePw"></i>
                  </div>
                  <div class="input-field">
                      <input type="text" class="password" placeholder="Entrer sa grade" name="grade" id="grade" required>
                      <i class="uil uil-lock icon"></i>
                      <i class="uil uil-eye-slash showHidePw"></i>
                  </div>
                  <div class="input-field">
                      <input type="text" class="classe" placeholder="Entrer sa classe à gerer" name="classe" id="classe" required>
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
  $re="SELECT  id,nom,prenom,username,password,grade,classe FROM responsable ;";
  $re1=$connect->query($re);
 echo' <div class="row">';
 echo' <div class="col-lg-8 col-md-8 col-sm-12" >';
 
echo"<table  class='table table-striped '>";
  echo'<thead>';
    echo"<tr>";
     echo' <th scope="col">Id</th>';
     echo'<th scope="col">Nom</th>';
     echo'<th scope="col">Prenom</th>';
     echo' <th scope="col">login</th>';
     echo' <th scope="col">Mot de passe</th>';
     echo' <th scope="col">Grade</th>';
     echo' <th scope="col">Classe gérer</th>';
     echo'  <th scope="col">Detail</th>';
     echo' </tr>';
     echo' </thead>';
    
     
     echo"</div>";
    echo"</div>";
    
     while($lig=$re1->fetch())
{
$a=$lig['id'];
$l=$lig['nom'];
$b=$lig['prenom'];
$c=$lig['username'];
$d=$lig['password'];
$e=$lig['grade'];
$f=$lig['classe'];

echo' <tbody>';
echo"<tr>";
 echo"<td>$a</td>";
 echo"<td>$l</td>";
 echo"<td>$b</td>";
 echo"<td>$c</td>";
 echo"<td>$d</td>";
 echo"<td>$e</td>";
 echo"<td>$f</td>";
 echo"<td> 
 <a href='EditRes.php?id=$a'><i   style='font-size:130%' class='bi bi-pencil-fill'></i></a>
 <a href='deletRes.php?id=$a'><i  style='color :red;font-size:130%' class='bi bi-trash ' onclick='return confirmation();'></i></a><br><br>

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
  </div>
</div>
<div>


<style>
  body
{
  background-color: #fff;
}
table
{
  margin-left: 25%;
  
  text-align: center;
}
button
{
  margin-left: 40%;
}

</style>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="./js/bootstrap.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> 
      <script src="script.js"></script>
      
  