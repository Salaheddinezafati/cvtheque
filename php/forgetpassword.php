<?php
session_start();
include "connectiondb.php";
if(!empty($_SESSION['id_rec'])){
    $chois ="rec";
    $id_rec =$_SESSION['id_rec'];
}
elseif(!empty($_SESSION['id_emp'])){
    $chois ="emp";
    $id_emp =$_SESSION['id_emp'];
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

<?php

if(isset($_POST['sub']) && $chois=="rec"){
    $oldpassword = $_POST['oldpassword'];
    $newpassword1 = $_POST['newpassword1'];
    $newpassword2 = $_POST['newpassword2'];

    /* select old password */
    $sql = "SELECT pass FROM recruteur where id_recruteur=$id_rec";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) == 1) {
    
      $row = mysqli_fetch_assoc($result);
      $old_pass_database =$row['pass'];
      
    } 
    else{
        echo "no";
    }
     
/* select old password */

if($oldpassword==$old_pass_database && $newpassword1==$newpassword2){
    $sql = "UPDATE recruteur SET pass='$newpassword2' WHERE id_recruteur=$id_rec";

        if (mysqli_query($conn, $sql)) {
        header("location:deconnection.php");
        } else {
        echo "Error updating record: " . mysqli_error($conn);
        }
        }


}
elseif(isset($_POST['sub']) && $chois=="emp"){
    $oldpassword = $_POST['oldpassword'];
    $newpassword1 = $_POST['newpassword1'];
    $newpassword2 = $_POST['newpassword2'];

    /* select old password */
    $sql = "SELECT pass FROM employeur where id_emp=$id_emp";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) == 1) {
    
      $row = mysqli_fetch_assoc($result);
      $old_pass_database =$row['pass'];
      
    } 
    else{
        echo "no";
    }
     
/* select old password */

if($oldpassword==$old_pass_database && $newpassword1==$newpassword2){
    $sql = "UPDATE employeur SET pass='$newpassword2' WHERE id_emp=$id_emp";

        if (mysqli_query($conn, $sql)) {
        header("location:deconnection.php");
        } else {
        echo "Error updating record: " . mysqli_error($conn);
        }
        }




}
?>
<div class="layout">
    <div class="main1">
        <img src="../images/logo.png" alt="">
    </div>
    <div class="main2">
        <form action="" method="post">
            <table>
                <tr>
                    <td>dernier mot de passe</td>
                    <td><input type="text" name="oldpassword" id="old"></td>
                </tr>
                <tr>
                    <td>neauveau mot de passe</td>
                    <td><input type="password" name="newpassword1" id="new1"></td>
                </tr>
                <tr>
                    <td>retaper neauveau mot de passe</td>
                    <td><input type="password" name="newpassword2" id="new2"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="sub" value="modifier" id="sub"></td>
                </tr>
            </table>
            
            
            
      
        </form>
    </div>
</div>
    
</body>
</html>
