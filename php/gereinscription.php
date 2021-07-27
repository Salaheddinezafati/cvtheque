<?php

include "connectiondb.php";

/* create function for connection  */





if(isset($_POST['connection'])){
    $nom = @$_POST['nom'];
    $prenom = @$_POST['prenom'];
    $naissancedate =@$_POST['date'];
    $numerotel = @$_POST['num'];
    $metier = @$_POST['metier'];
    $adress = @$_POST['adress'];
    $photo = @$_FILES['photoperso'];
    $cv = @ $_FILES['cv'];
    $email = @ $_POST['email'];
    $pass = @ $_POST['password'];
    $dd = date("Y/m/d");
    @$path1 = $_SERVER['DOCUMENT_ROOT']."/cvte/php/empfiles/".$cv["name"];
    @$path2= $_SERVER['DOCUMENT_ROOT']."/cvte/php/empfiles/".$photo["name"] ;

    move_uploaded_file($cv['tmp_name'],$path1);
    move_uploaded_file($photo['tmp_name'],$path2);
   

    $sql = "INSERT INTO `employeur` (`id_emp`, `nom`, `prenom`, `metier`, `email`, `addresse`, `date_de_naissance`, `date_depot_cv`, `desactiver`, `image`, `pass`, `nume_tel`,`cv`,`disadmin`)
     VALUES 
    (NULL, '$nom', '$prenom', '$metier', '$email', '$adress', '$naissancedate', '$dd', 'false', '$path2', '$pass', '$numerotel','$path1','true');";

    if (mysqli_query($conn, $sql)) {
      

        echo "<script type=\"text/javascript\">
        window.alert('compte creer');
        document.location.href='../login.php';
    </script>
    ";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}







?>