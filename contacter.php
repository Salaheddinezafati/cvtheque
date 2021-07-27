<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contactecss.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">
    <title>Document</title>
</head>
<body>

    <div class="layout">


        <div class="main1">
            <span>dxc-technology</span>
            <button class="btn">accueil</button>
        </div>

        <?php

            if(isset($_POST['sub'])){
            $nompre = $_POST['nom'];
            $email = $_POST['email'];
             $subject = $_POST['subject'];
             $message = "email from ".$nompre." : ".$email." the message is : ".$_POST['message'];
             
         
             mail("salaheddinezafati@gmail.com",$subject,$message,"From:salaheddinezafati@gmail.com"); 
            }
 
        
        
        ?>

        <div class="main2">
            <form action="" method="post">
                <div class="email"> nom  prenom : <input type="text" name="nom" placeholder="nom" id=""><i class="fas fa-exclamation"></i></div>
                <div class="email"> subject : <input type="text" name="subject" placeholder="subject" id=""><i class="fas fa-exclamation"></i></div>
                <div class="email"> message : <input type="text" taille="30" name="message" placeholder="message" ><i class="fas fa-exclamation"></i></div>
                <div class="email"> email : <input type="email" name="email" placeholder="email" id=""> <i class="fas fa-exclamation"></i></div>
                <input type="submit" name="sub" value="envoyer">
            </form>

        </div>


    </div>
    


    <script >

        var btn = document.querySelectorAll(".btn");
        btn[0].onclick = function(){
            window.location.href = "index.php";
        }
        
</script>
</body>
</html>