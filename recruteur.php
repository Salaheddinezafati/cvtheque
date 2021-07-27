<?php
session_start();
include "php/connectiondb.php";

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
    <link rel="stylesheet" href="css\stylerec.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">
    <title>Document</title>
</head>
<body>
    
    <div class="content">

        <!--*********  navbar  ********  -->

        <div id="nav" class="navbar">
            <img  id="img" src="images/LogoMakr-54D2Hw.png" alt="">
            <ul>
                <li><i class="fas fa-home"></i> &nbsp&nbsp <span id="dis1">accueille</span></li>
                <a href="php/forgetpassword.php"> <li><i class="fas fa-unlock-alt"></i> &nbsp&nbsp <span id="dis2">passwords</span></li></a>
                <a href="php/deconnection.php"> <li><i class="fas fa-sign-out-alt"></i> &nbsp&nbsp <span id="dis3">deconnecter</span></li></a>
            </ul>

          <details>
            <summary>
              filtre
            </summary>
             
                <button class="bt" onclick="plus1()">+1</button>
                <button class="bt" onclick="plus2()">+2</button>
                <button class="bt" onclick="plus3()">+3</button>
                <button class="bt" onclick="plus4()">+4</button>
                <button class="bt" onclick="plus5()">+5</button>
              
          </details>


        </div>

       

           <!--*********  navbar  ********  -->

        <!--*********  main  ********  -->

        <div class="main">
            <header>
                <ul>
                    <li> <i id="bars" class="fas fa-bars"></i></li>
                    <li><div class="srch"><input type="text" placeholder="searche here...."><i class="fas fa-search"></i></div></li>
                    <li><img id="image" src="<?php echo $img?>" alt=""></li>
                </ul>
            </header>


            <?php 
                 $sql = "SELECT COUNT(id_emp) FROM `employeur`";
                 $result = mysqli_query($conn, $sql);
                 $resemp =0;
                 if (mysqli_num_rows($result) > 0) {
                 
                $row = mysqli_fetch_assoc($result);
                 $resemp = $row['COUNT(id_emp)'];
                
                 }
            
            
            
            
            ?>




            <!--*********  content1  ********  -->
            <div class="content1">
                <div class="items"><span class="bold"><?php echo $resemp?></span>  <span class="gray">Employer</span> <i class="fas fa-eye"></i></div>
                <div class="items"><span class="bold"><?php echo "3"?></span>  <span class="gray">Employer selon mon profile</span><i class="fas fa-user-alt"></i></div>

            </div>


             <!--*********  content1  ********  -->

              <!--*********  content2  ********  -->

            <div class="content2">
                
                    <div class="info_user">
                        <label for="">Employer</label>

                        <table id="t">
                            <tr>
                                <th>nom</th>
                                <th>annee dexperience</th>
                                <th>post</th>
                                <th>voir</th>
                            </tr>

                            <?php 
                            
                            $arr = array();
                            $sql1 = "SELECT * FROM profile";
                            $result1 = mysqli_query($conn, $sql1);

                            if (mysqli_num_rows($result1) > 0) {
                            
                            while($row = mysqli_fetch_assoc($result1)) {
                                array_push($arr,$row['nom']);
                               
                               
                            }
                            }
                           
                            
                            $sql = "SELECT employeur.nom AS empnom,metier,experience_professionel.id_emp,experience_professionel.nom AS exnom,experience_professionel.date_debut,experience_professionel.date_fin FROM employeur JOIN experience_professionel on experience_professionel.id_emp=employeur.id_emp";
                            $result = mysqli_query($conn, $sql);

                            if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {
                                if(in_array($row['metier'],$arr)){
                                    
                                  
                                    $idemp =$row['id_emp'];
                                    $nomemp = $row['empnom'];
                                    $post = $row['exnom'];
                                    $datedebut = $row['date_debut'];
                                    $datefin = $row['date_fin'];
                                    @$diference_date = $datefin-$datedebut;
                                    echo"
                                    <tr>
                                    <td>$nomemp</td>
                                    <td>$diference_date</td>
                                    <td>$post</td>
                                   <td><a href='vu/index.php?idemp=$idemp'>  <button class='btninfouser'><i class='fas fa-eye'></i></button> </a></td>
                                   </tr>
                                    
                                    ";
                                    
                                }
                                
                            }
                            } else {
                                echo"
                                <tr>
                                <td>pas demployer</td>
                                <td>pas demployer</td>
                                <td>pas demployer</td>
                               <td> pas demployer </td>
                               </tr>
                                
                                ";
                            }
                            
                            
                            ?>

                            
                           
                            
                        </table>

                    </div>



                    <div class="info_recruteur">
                        <label for="">Profile</label>
                        <button id="addrectruteur">add</button>
                        <table>
                            <tr>
                                <th>nom</th>
                                
                            </tr>

                            <?php
                            $sql = "SELECT * FROM profile JOIN filtre ON filtre.id_profile=profile.id_profile";
                            $result = mysqli_query($conn, $sql);
                            
                            if (mysqli_num_rows($result) > 0) {
                              
                              while($row = mysqli_fetch_assoc($result)) {
                                echo"
                                <tr>
                                <td>".$row['nom']."</td>
                                </tr>
                                ";
                              }
                            } else {
                                echo"
                            <tr>
                            <td>pas d information</td>
                            </tr>
                            ";
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
    if(isset($_POST['subpro'])){

        if($_POST['profile']=="no profile"){
            $nameprofile = $_POST['nameprofile'];
            $sql = "INSERT INTO profile (id_profile, nom)
            VALUES (null, '$nameprofile')";

            if (mysqli_query($conn, $sql)) {
                $sql = "SELECT *  FROM profile where nom='$nameprofile'";
                $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) ==1) {
                
                $row = mysqli_fetch_assoc($result);
                  $idpro = $row['id_profile'];
                  $sql = "INSERT INTO filtre (id_recruteur, id_profile)
                VALUES ($idrec,$idpro)";

                if (mysqli_query($conn, $sql)) {
                   // header("location:recruteur.php");
                } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                
              } 
            } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
        else{
            $nameprofile = $_POST['profile'];
            $sql = "INSERT INTO profile (id_profile, nom)
            VALUES (null, '$nameprofile')";

            if (mysqli_query($conn, $sql)) {
                $sql = "SELECT *  FROM profile where nom='$nameprofile'";
                    $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) ==1) {
                    
                    $row = mysqli_fetch_assoc($result);
                      $idpro = $row['id_profile'];
                      $sql = "INSERT INTO filtre (id_recruteur, id_profile)
                    VALUES ($idrec,$idpro)";

                    if (mysqli_query($conn, $sql)) {
                       //header("location:recruteur.php");
                    } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                    
                  } 
            
            } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }

    }
    
    
    
    
    ?>


          <!--   addprofile   -->

          <div id="adrec" class="addexperience">
        
            <div class="img">
                <img src="images/LogoMakr-54D2Hw.png" alt="">
                <i id="delrec" class="fas fa-times"></i>
            </div>
            <div class="formexperience">
            <form action="" method="post">
                <div class="form"> <label for="">nom du profile: </label><input type="text" name="nameprofile" placeholder="nom du profile"> </div>
                <select name="profile" id="">
                    <option value="no profile">no profile </option>
                    <?php
                    $sql = "SELECT * FROM profile";
                    $result = mysqli_query($conn, $sql);
                    
                    if (mysqli_num_rows($result) > 0) {
                      
                      while($row = mysqli_fetch_assoc($result)) {
                          $nn = $row['nom'];
                        echo "<option value='$nn'> $nn </option>" ;
                      }
                    } 
                    ?>
                </select>
                <input class="sub" name="subpro" type="submit" value="add">
            </form>    
            </div>
    
        </div>
    
       <!--   addprofile   -->


 <!--   profile   -->

 <div class="profile" id="profile">
    <div class="information">
        
        <img src="<?php echo $img?>" alt="">
        <ul>
            <li>email : <?php echo $emailrec?></li>
            <li>nom : <?php echo $nomrec?> | prenom : <?php echo $prenomrec?></li>
           
        </ul>
        <i id="delete" class="fas fa-times"></i>
    </div>
    <ul>
        <li><i class="fas fa-portrait"></i> &nbsp&nbsp change picture</li>
        <li><i class="fas fa-unlock"></i>&nbsp&nbsp password</li>
        <li><i class="fas fa-sign-out-alt"></i>&nbsp&nbsp log out</li>
    </ul>
</div>

  <!--   profile   -->


                    

    <script src="js\jsrecruteur.js"></script>
</body>
</html>