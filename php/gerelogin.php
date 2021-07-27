<?php
session_start();
include "connectiondb.php";

if(isset($_POST['cn'])){

    $password = $_POST['password'];
    $email = $_POST['email'];

    $sql = "SELECT * FROM employeur where pass='$password' and email='$email'";
    $result = mysqli_query($conn, $sql);

    $sql1 = "SELECT * FROM administrateur where pass='$password' and email='$email'";
    $result1 = mysqli_query($conn, $sql1);

    $sql2 = "SELECT * FROM recruteur where pass='$password' and email='$email'";
    $result2 = mysqli_query($conn, $sql2);
    
    if (mysqli_num_rows($result) == 1) {
    
      $row = mysqli_fetch_assoc($result);
        if($row['desactiver'] =='false'){
            $_SESSION['emailcode'] = $email;
            echo "<script type=\"text/javascript\">
            window.alert('tu doix activer ton compte');
            
        </script>
        ";
        header("location:discheck.php");
        }
        elseif($row['disadmin'] =='false'){
            echo "<script type=\"text/javascript\">
            window.alert('contacter admin du site ');
            
        </script>
        ";
        header("location:../contacter.php");

        }
        else{
            $_SESSION['emailemp'] = $row['email'];
            $_SESSION['id_emp'] = $row['id_emp'];
            $_SESSION['nomemp'] = $row['nom'];
            $_SESSION['prenomemp'] = $row['prenom'];
            $_SESSION['metieremp'] = $row['metier'];
            $_SESSION['adressemp'] = $row['addresse'];
            $_SESSION['date'] = $row['date_de_naissance'];
            $_SESSION['datedepo'] = $row['date_depot_cv'];
            $_SESSION['imageemp'] = $row['image'];
            $_SESSION['numeemp'] = $row['nume_tel'];
            $_SESSION['cvemp'] = $row['cv'];
        
   
        header("location:../index.php");
        }

       

      }

      elseif(mysqli_num_rows($result1) == 1){
        $row = mysqli_fetch_assoc($result1);
        $_SESSION['emailadmin'] = $row['email'];
        $_SESSION['id_admin'] = $row['id_admin'];
        $_SESSION['nomadmin'] = $row['nom'];
        $_SESSION['prenonadmin'] = $row['prenom'];
        header("location:../admin.php");


    }
    elseif(mysqli_num_rows($result2)==1){
        $row = mysqli_fetch_assoc($result2);
        if($row['desactiver'] =='false'){
            $_SESSION['emailcode1'] = $email;
            echo "<script type=\"text/javascript\">
            window.alert('tu doix activer ton compte');
            
        </script>
        ";
        header("location:discheck.php");
        }
        elseif($row['disadmin'] =='false'){
            echo "<script type=\"text/javascript\">
            window.alert('contacter admin du site ');
            
        </script>
        ";
        header("location:../contacter.php");

        }
        else{
            $_SESSION['emailrec'] = $row['email'];
            $_SESSION['id_rec'] = $row['id_recruteur'];
            $_SESSION['nomrec'] = $row['nom'];
            $_SESSION['prenomrec'] = $row['prenom'];
            $_SESSION['post'] = $row['post'];
            $_SESSION['imagerec'] = $row['image'];
            $_SESSION['numeemp'] = $row['numero_tele'];
        
   
        header("location:../recruteur.php");
        }


    }
     

    
    else {
        echo "<script type=\"text/javascript\">
        window.alert('pas de compte avec ce email ou bien mot de passe incorrecte');
        
    </script>
    ";
    }







}









?>
