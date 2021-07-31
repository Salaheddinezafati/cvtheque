<?php
session_start();
include "connectiondb.php";
 $random = rand(1000, 9999);
 if(!empty($_SESSION['emailcode'])){
    $email = $_SESSION['emailcode'] ;
 }
 else{
    $email = $_SESSION['emailcode1'] ;
 }
        $subject = "activer votre compte";
        $message = "votre numero de verification est : ".$random;
        $allmessage = "from : salaheddinezafati@gmail.com the message is : ".$message;
        
    
        mail($email,$subject,$message,"From:salaheddinezafati@gmail.com"); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>

    <style>
      body{
  margin:0;
  padding:0;

}

.layout{
    display: flex;
    flex-direction: column;
    width: 100%;
    height: 720px;
}
.main1{
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 10px;
    width: 100%;
    height: 300px;

}
.main1 img {
    width: 60%;
}
.main2{
    display: flex;
    justify-content: center;
    width: 100%;
    height: 400px;
    position: relative;
}
.main2 form{
  display:flex;
  flex-direction:column;

}

input{
  margin:7px;
  outline:none;
  border-radius:10px ;
  width:150px;
  height:25px;

}

span{
  font-size:18px;
}

#sub{
  cursor:pointer;

}

    </style>
   
</head>
<body>

<?php

if(isset($_POST['subcode'])){
    $cc = $_POST['code'];
    if($email == $_SESSION['emailcode']){
        if($random != $cc ){
            $sql = "UPDATE employeur SET desactiver='true' WHERE email='$email'";
        
        if (mysqli_query($conn, $sql)) {
          echo "update faite";
          header("location:../login.php");
        
        
        
        } else {
          echo "Error updating record: " . mysqli_error($conn);
        }
        
        }
    }else{
        if($random != $cc ){
            $sql = "UPDATE recruteur SET desactiver='true' WHERE email='$email'";
        
        if (mysqli_query($conn, $sql)) {
          echo "update faite";
          header("location:../login.php");
        
        
        
        } else {
          echo "Error updating record: " . mysqli_error($conn);
        }
        
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
       <span> code securite : <input type="text" name="code"></span>
        <input type="submit" name='subcode' id="sub" value="submit">
    </form>
  </div>


</div>



    <script >
        alert("ton code et dans boite email");
    </script>
    
</body>
</html>

