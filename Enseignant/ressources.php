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
  <link rel="stylesheet" href="../Admi/AddEnseignant.css">
  <link rel="stylesheet" href="../boostap/css/bootstrap.css">
   <script src="./confirmation.js"></script>
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
        <span style="font-size: 120%; background-color: #eb2f06;text-align:center;color:white"> Enseignant(e)</span>
        <a href="./Enseignant.php"><i class="bi bi-person-fill"></i>Profil</a>
        <a href="./espace.php"><i class="bi bi-folder-symlink"></i> Espace cours</a>
        <a href="./emploi.php"><i class="bi bi-calendar"></i> Emploi du temps</a>
        <a href="./historique.php"><i class="bi bi-clock-history"></i> Historique d'accés</a>
        <a  id="AZ" href="../home/Acceuil.php"><i class="bi bi-box-arrow-right"></i> Se déconnecter</a>
        <a  href="#"></a>
        <a href="#"></a>
        <a href="#"></a>
        <a href="#"></a>
        <a href="#"></a>
        
        
       
       
    </nav>

    <div class="main-body">
      <div class="container mt-5">
         
     
<div class="container">
    

    <!-- Button trigger modal -->
  <button style="margin-left: 33%;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  <i class="bi bi-plus-lg"></i> Ajouter des ressources
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
               
  
                <form  method="POST" action="./TraireRessource.php" enctype="multipart/form-data" id="comment_form">
                   
                         <label for="">Entrer le matiere
                        <!-- <input type="text" class="password" placeholder="Entrer le nom du professeur" name="proff" id="proff" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i> -->
                        <?php
                         $connect=new PDO("mysql:host=localhost;port=3306;dbname=sectioninf","demba","Rone9425", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));
                         $re="SELECT  idM,matiere FROM module where  modul_Ense= $_SESSION[id]  ";
                         $re1=$connect->prepare($re);
                         $re1->execute();
                         $modules = $re1->fetchAll(PDO::FETCH_ASSOC);
                         
                        ?>
                        
                        <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="idModule">
                          <?php foreach($modules as $modules):?>
                          <option id="subject" value="<?=$modules['idM']?>"><?=$modules['matiere']?></option>
                          <?php endforeach?>
                        </select>
                    
                        </label><br><br>
                         <label for="">Inserer le fichier  <br>
                         <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="fichier[]" multiple accept="fichier/*" id="comment" size="80">
                         <input type="hidden" name="MAX_FILE_SIZE" value="9000000000000000000000000000000000000" />
                        </label>
                    
                    
                    <div class="input-field button">
                        <input type="submit" value="Ajouter">
                    </div>
                </form>
                
               
            </div>
        </div>
    </div>
      </div>
     
    </div>


    <?php
                       $connect=new PDO("mysql:host=localhost;port=3306;dbname=sectioninf","demba","Rone9425", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION ));
                      $re="SELECT idR,idM,classe,matiere,url FROM ressource join module on ressource.idM_R=module.idM where modul_Ense= $_SESSION[id] ";
                      $re1=$connect->query($re);
                      
                      echo' <div class="row">';
                      
                      echo' <div class="col-lg-11 col-md-8 col-sm-12" >';
                      echo' <div id="A11">Liste des ressources ajouter </div>';
                      echo' <br> ';
                     echo"<table  class='table table-striped '>";
                       echo'<thead>';
                         echo"<tr>";
                        
                          echo' <th scope="col">IdRessource</th>';
                          echo'<th scope="col">Matiere</th>';
                          echo'<th scope="col">Nom du fichier</th>';
                          echo'<th scope="col">Classe</th>';
                          echo'<th scope="col">Action</th>';
                          echo' </tr>';
                          echo' </thead>';
                          echo"</div>";
                          echo"</div>";
                         
                          while($lig=$re1->fetch())
                     {
                     $a=$lig['idR'];
                     $b=$lig['matiere'];
                     $c=$lig['url'];
                     $d=$lig['classe'];
                     $m=$lig['idM'];
                     echo' <tbody>';
                     echo"<tr>";
                      echo"<td>$a</td>";
                      echo"<td>$b</td>";
                      echo"<td>$c</td>";
                      echo"<td>$d</td>";
                      echo"<td> 
                      <a href='EditRessource.php?id=$a'><i   style='font-size:130%' class='bi bi-pencil-fill'></i></a>
                      <a href='deletRessource.php?id=$a'><i  style='color :red;font-size:130%' class='bi bi-trash ' onclick='return confirmation();'></i></a><br><br>
                     
                      </td>";
                      echo"</tr>";
                      echo' </tbody>';
                      
                      echo"</div>";
                      echo"</div>";
                     
                     }
                     echo"</table>";
                     
                      ?>  

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
    #A11
    {
      font-size: 140%;
      text-align: center;
      text-decoration: underline;
    }
    
</style>

<script>
$(document).ready(function(){
 
 function load_unseen_notification(view = '')
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{view:view},
   dataType:"json",
   success:function(data)
   {
    $('.dropdown-menu').html(data.notification);
    if(data.unseen_notification > 0)
    {
     $('.count').html(data.unseen_notification);
    }
   }
  });
 }
 
 load_unseen_notification();
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  if($('#subject').val() != '' && $('#comment').val() != '')
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"insert.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     $('#comment_form')[0].reset();
     load_unseen_notification();
    }
   });
  }
  else
  {
   alert("Both Fields are Required");
  }
 });
 
 $(document).on('click', '.dropdown-toggle', function(){
  $('.count').html('');
  load_unseen_notification('yes');
 });
 
 setInterval(function(){ 
  load_unseen_notification();; 
}, 5000);
 
});
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="./js/bootstrap.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> 
      <script src="script.js"></script>