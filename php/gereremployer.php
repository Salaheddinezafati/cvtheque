<?php
include "connectiondb.php";
session_start();
$id = $_SESSION['id_emp'];

if(isset($_POST['modifierinfo'])){

    $nom = $_POST['nom'];
    $prenom =$_POST['prenom'] ;
    $metier = $_POST['metier'];
    $addresse = $_POST['adress'];


    $sql = "UPDATE employeur SET nom='$nom' , prenom='$prenom' , addresse='$addresse' , metier='$metier' where id_emp=$id ";
    
    if (mysqli_query($conn, $sql)) {
      echo "update faite";
      header("location:deconnection.php");
    
    
    
    } else {
      echo "Error updating record: " . mysqli_error($conn);
    }

 
}




if(isset($_POST['add_formation'])){

    $nomformation = $_POST['nm_formation'];
    $ecole = $_POST['ecole'];
    $dtdebut = $_POST['dt_db'];
    $dtfin = $_POST['dt_fin'];
    

    
$sql = "INSERT INTO `formation` (`id_formation`, `id_emp`, `nom`, `ecole`, `date_debut`, `date_fin`) VALUES 
 (null,$id,'$nomformation','$ecole','$dtdebut','$dtfin')";

if (mysqli_query($conn, $sql)) {
  header("location:../prfileuser.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


}

if(isset($_POST['add_exp'])){
    $nomex = $_POST['nmex'];
    $entreprise = $_POST['entreprise'];
    $dtdebut = $_POST['dtexdeb'];
    $dtfin = $_POST['dtexpfin'];
    $description = $_POST['descexp'];

    $sql = "
    INSERT INTO `experience_professionel` (`id_exp`, `id_emp`, `nom`, `entreprise`, `description`, `date_debut`, `date_fin`)
     VALUES (NULL, $id, '$nomex', '$entreprise', '$description', '$dtdebut', '$dtfin');";

if (mysqli_query($conn, $sql)) {
  header("location:../prfileuser.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
 
}



if(isset($_POST['add_compe'])){
    $nomcom = $_POST['nomcomp'];
    $descomp = $_POST['desccomp'];
$sql ="
INSERT INTO `competence` (`id_competence`, `id_emp`, `nom`, `description`) VALUES (NULL, '$id', '$nomcom', '$descomp');

";

if (mysqli_query($conn, $sql)) {
    header("location:../prfileuser.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
   
  
    
}


if(isset($_POST['add_langue'])){
    $langue = $_POST['lll'];
    $niveau = $_POST['nnn'];
    $sql ="
INSERT INTO `langue` (`id_langue`, `id_emp`, `nom`, `niveau`) VALUES (NULL, '$id', '$langue', '$niveau');

";

if (mysqli_query($conn, $sql)) {
    header("location:../prfileuser.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}

if(isset($_POST['add_certif'])){
    $nomcertif = $_POST['nomcertif'];
    $desccertif = $_POST['desccertif'];
    $datecertif = $_POST['datecertif'];
    $sql ="
INSERT INTO `certificat` (`id_certif`, `id_emp`, `nom`, `date_de_certif`,`description`) VALUES (NULL, '$id', '$nomcertif', '$datecertif','$desccertif');

";

if (mysqli_query($conn, $sql)) {
    header("location:../prfileuser.php");
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}




?>

