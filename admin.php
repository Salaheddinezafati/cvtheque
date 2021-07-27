<?php
session_start();
include "php/connectiondb.php";

if( $_SESSION['id_admin'] == 1){
      
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
    <link rel="stylesheet" href="css/admincss.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">
    <title>Document</title>
</head>
<body>
    

    <div class="content">

        <!--*********  navbar  ********  -->

        <div id="nav" class="navbar">    <!--  le probleme dans cette navbar   -->
            <img id="img" src="images/LogoMakr-54D2Hw.png" alt="">
            <ul>
                <li><i class="fas fa-home"></i> &nbsp&nbsp <span id="dis1">accueille</span></li>
                <li><i class="fas fa-unlock-alt"></i> &nbsp&nbsp <span id="dis2">passwords</span></li>
                <a href="php/deconnection.php"><li><i class="fas fa-sign-out-alt"></i> &nbsp&nbsp <span id="dis3"> deconnecter</span></li></a>
            </ul>


        </div>

           <!--*********  navbar  ********  -->
    <?php
    
        $sql = "SELECT COUNT(id_emp) FROM `employeur`";
        $result = mysqli_query($conn, $sql);
        $resemp =0;
        if (mysqli_num_rows($result) > 0) {
        
       $row = mysqli_fetch_assoc($result);
        $resemp = $row['COUNT(id_emp)'];
       
        }


        $sql = "SELECT COUNT(id_recruteur) FROM `recruteur`";
        $result = mysqli_query($conn, $sql);
        $resrec =0;
        if (mysqli_num_rows($result) > 0) {
        
       $row = mysqli_fetch_assoc($result);
        $resrec = $row['COUNT(id_recruteur)'];
       
        }

        $sql = "select COUNT(employeur.desactiver) FROM employeur WHERE employeur.desactiver='false'";
        $result = mysqli_query($conn, $sql);
        $resdisa =0;
        if (mysqli_num_rows($result) > 0) {
        
       $row = mysqli_fetch_assoc($result);
        $resdisa = $row['COUNT(employeur.desactiver)'];
       
        }

        $sql = "select COUNT(recruteur.desactiver) FROM recruteur WHERE recruteur.desactiver='false'";
        $result = mysqli_query($conn, $sql);
       
        if (mysqli_num_rows($result) > 0) {
        
       $row = mysqli_fetch_assoc($result);
        $resdisa += $row['COUNT(recruteur.desactiver)'];
       
        }

        $sql = "select COUNT(employeur.desactiver) FROM employeur WHERE employeur.desactiver='true'";
        $result = mysqli_query($conn, $sql);
        $resena =0;
        if (mysqli_num_rows($result) > 0) {
        
       $row = mysqli_fetch_assoc($result);
        $resena = $row['COUNT(employeur.desactiver)'];
       
        }

        $sql = "select COUNT(recruteur.desactiver) FROM recruteur WHERE recruteur.desactiver='true'";
        $result = mysqli_query($conn, $sql);
       
        if (mysqli_num_rows($result) > 0) {
        
       $row = mysqli_fetch_assoc($result);
        $resena += $row['COUNT(recruteur.desactiver)'];
       
        }
        
        

    /*INSERT INTO `recruteur` (`id_recruteur`, `id_admin`, `nom`, `prenom`, `email`, `desactiver`, `post`, `image`, `pass`, `numero_tele`, `disadmin`)
     VALUES (NULL, '1', 'salah', 'zafati', 'salah07bom@gmail.com', 'false', 'rh', '', 'ssss', '01235456', 'true'); */
    
    ?>
        <!--*********  main  ********  -->

        <div class="main">
            <header>
                <ul>
                    <li> <i id="bars" class="fas fa-bars"></i></li>
                    <li><div class="srch"><input type="text" placeholder="searche here...."><i class="fas fa-search"></i></div></li>
                    <li><img src="images/image2.jpg" alt=""></li>
                </ul>
            </header>

            <!--*********  content1  ********  -->
            <div class="content1">
                <div class="items"><span class="bold"><?php echo @$resemp?></span>  <span class="gray">Employer</span> <i class="fas fa-eye"></i></div>
                <div class="items"><span class="bold"><?php echo @$resrec?></span>  <span class="gray">Recruteur</span><i class="fas fa-user-alt"></i></div>
                <div class="items"><span class="bold"><?php echo @$resdisa?></span>  <span class="gray">Compte  Disabled</span><i class="fas fa-user-lock"></i></div>
                <div class="items"><span class="bold"><?php echo @$resena?></span>  <span class="gray">Compte  Enabled</span><i class="fas fa-unlock"></i></div>
                

            </div>


             <!--*********  content1  ********  -->

              <!--*********  content2  ********  -->

            <div class="content2">
                    <div class="info_user">
                        <label for="">Employer</label>
                        <table>
                            <tr>
                            <th>id</th>
                                <th>nom</th>
                                <th>status</th>
                            </tr>

                            <?php
                            
                            if(isset($_POST['ena1'])){
                                @$idd = $_POST['identifiant'];
                                $sql = "UPDATE employeur SET disadmin='false' WHERE id_emp=$idd";

                                    if (mysqli_query($conn, $sql)) {
                                        echo "<script>alert('compte disabled')</script>";
                                    } 
                                                                    }

                                                                    if(isset($_POST['ena2'])){
                                                                        @$idd = $_POST['identifiant'];
                                                                        $sql = "UPDATE employeur SET disadmin='true' WHERE id_emp=$idd";
                                        
                                                                            if (mysqli_query($conn, $sql)) {
                                                                                echo "<script>alert('compte enabled')</script>";
                                                                            } 
                                                                                                            }

                                


                                $sql = "SELECT * FROM employeur";
                                $result = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($result) > 0) {
                                
                                while($row = mysqli_fetch_assoc($result)) {
                                    $idemp = $row['id_emp'];
                                    if($row['disadmin']=='true'){
                                        $nn ="ena1";
                                        $vl = "disable";

                                    }
                                    else{
                                        $nn ="ena2";
                                        $vl = "enable";

                                    }
                                   echo " 
                                   <tr>
                                   <td><form  method='post'>  <input type='text' readonly  name='identifiant' id='ff' value='$idemp'></td>
                                   <td>".$row['nom']."</td>
                                   <td> <input type='submit' name='$nn' value='$vl'  class='btninfouser'> </form></td>
                               </tr>";
                                }
                                } else {
                                echo "no employer";
                                }
                            
                            ?>
                           
                           
                            
                        </table>

                    </div>



                    <div class="info_recruteur">
                        <label for="">Recruteur</label>
                        <button id="addrectruteur">add</button>
                        <table>
                            <tr>
                            <th>id</th>
                                <th>nom</th>
                                <th>status</th>
                            </tr>
                            <?php

                                    if(isset($_POST['di'])){
                                        @$idd = $_POST['identi'];
                                        $sql = "UPDATE recruteur SET disadmin='false' WHERE id_recruteur=$idd";

                                            if (mysqli_query($conn, $sql)) {
                                                echo "<script>alert('compte disabled')</script>";
                                            } 
                                                                            }

                                        if(isset($_POST['en'])){
                                            @$idd = $_POST['identi'];
                                            $sql = "UPDATE recruteur SET disadmin='true' WHERE id_recruteur=$idd";
            
                                                if (mysqli_query($conn, $sql)) {
                                                    echo "<script>alert('compte enabled')</script>";
                                                } 
                                                                                }






                            
                           
                           $sql = "SELECT * FROM recruteur";
                                $result = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($result) > 0) {
                                
                                while($row = mysqli_fetch_assoc($result)) {
                                    $idrec = $row['id_recruteur'];
                                    if($row['disadmin']=='true'){
                                        $sel ="di";
                                        $val = "disable";

                                    }
                                    else{
                                        $sel ="en";
                                        $val = "enable";

                                    }
                                   echo " 
                                   <tr>
                                   <td><form  method='post'>  <input type='text' readonly  name='identi' id='ff' value='$idrec'></td>
                                   <td>".$row['nom']."</td>
                                   <td> <input type='submit' name='$sel' value='$val'  class='btninfouser'> </form></td>
                               </tr>";
                                }
                                } else {
                                echo "no recruteur";
                                } 
                                
                                ?>
                            
                        </table>

                    </div>

            </div>
         


             <!--*********  content2  ********  -->
        </div>


            <!--*********  main  ********  -->


















        
    </div>


    <?php
        if(isset($_POST['addrec'])):
           $nomrec = strip_tags( $_POST['nomrec']);
            $prenomrec = strip_tags( $_POST['prenomrec']);
            $emailrec = strip_tags($_POST['emailrec']);
            $passrec = strip_tags($_POST['passrec']);
            $postrec = strip_tags($_POST['postrec']);
            $telrec = strip_tags($_POST['telrec']);
            $img =$_FILES['img'];
            $imgname = $img['name']; 
            $imgtmp =  $img['tmp_name']; 
            $twoimg = str_replace(" ","_",$imgname);
            $exstensien = array('jpg','svg','png');
            
            @$image_extentien =strtolower(end(explode(".",$twoimg)));
            $path = $_SERVER['DOCUMENT_ROOT']."/cvte/php/rec/".$twoimg;
            
            if(in_array($image_extentien,$exstensien)){

                move_uploaded_file($imgtmp,$path);
                $sql = "INSERT INTO `recruteur` (`id_recruteur`, `id_admin`, `nom`, `prenom`, `email`, `desactiver`, `post`, `image`, `pass`, `numero_tele`, `disadmin`)
                VALUES (NULL, '1', '$nomrec', '$prenomrec', '$emailrec', 'false', '$postrec', '$path', '$passrec', '$telrec', 'true');";

                if (mysqli_query($conn, $sql)) {
                    echo "<script>alert('recruteur creer');</script>";
                } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }


            }
           
            
           

            



        endif;
    
    ?>



          <!--   addrecruteur   -->

          <div id="adrec" class="addexperience">
        
            <div class="img">
                <img src="images/LogoMakr-54D2Hw.png" alt="">
                <i id="delrec" class="fas fa-times"></i>
            </div>
            <div class="formexperience">
            <form action="" method="post" enctype= "multipart/form-data">
                <div class="form"> <label for="">nom : </label><input type="text" name="nomrec" placeholder="nom du formation"> </div>
                <div class="form"> <label for="">prenom : </label><input  type="text" name="prenomrec" placeholder="prenom"> </div>
                <div class="form"> <label for="">email : </label><input type="email" placeholder="email" name="emailrec"> </div>
                <div class="form"> <label for="">password : </label><input type="text" placeholder="password" name="passrec"> </div>
                <div class="form"> <label for="">post : </label><input type="text" placeholder="post" name="postrec"> </div>
                <div class="form"> <label for="">numero tele : </label><input type="text" placeholder="012345689" name="telrec"> </div>
                <div class="form"> <label for="">photo : </label><input type="file" name="img">  </div>
                <input class="sub" type="submit" name="addrec" value="add">
            </form>    
            </div>
    
        </div>
    
       <!--   addrecreture   -->





    <script src="js/adminjs.js"></script>
    
</body>
</html>