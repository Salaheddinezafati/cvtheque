<?php
session_start();
include "../php/connectiondb.php";

if( !empty($_SESSION['id_rec'] )){
    $emailrec = $_SESSION['emailrec'] ;
    $idrec = $_SESSION['id_rec'] ;
    $nomrec = $_SESSION['nomrec'];
    $prenomrec =$_SESSION['prenomrec'] ;
    $postrec =$_SESSION['post']  ;
    $img =$_SESSION['imagerec']  ;
    $numrec =$_SESSION['numeemp'] ; 

   
      
}
else{
    exit(0);
}


    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    
    <div class="all">
	
        <div class="logo">
        <img src="../images/logo.png">
        
    </div>
    
    <div class="content">


    <?php
    
    if(isset($_POST['subprexp'])){
        $anexp = filter_var($_POST['numeexp'], FILTER_VALIDATE_INT);
        $nomprofilesrch = strip_tags($_POST['profilename']);
    
        $sql = "SELECT * FROM `employeur` JOIN experience_professionel ON employeur.metier = experience_professionel.nom";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
        
        while($row = mysqli_fetch_assoc($result)) {
           $idemp = $row['id_emp'];
           $nnn = $row['nom']." ".$row['prenom'];
           $nommetier = $row['metier'];
           $dtaedebut = $row['date_debut'];
           $datefin = $row['date_fin'];
           $image = $row['image'];
           @$dif = $datefin-$dtaedebut;
           if($dif>=$anexp){
                echo "
                        <div class='row'>
                        <h2>$nommetier</h2>
                    <a href='../vu/index.php?idemp=$idemp'> <img src='../$image'></a>
                        <h3>$nnn</h3>
                    </div>
                
                ";
           }
           else{
               echo "pas de personne";
           }
        }
        } else {
        echo "pas de personne";
        }


    }
    
    ?>
        
       

       
       
       
    </div>
    
    
    </div>


  
</body>
</html>