<?php include "php/connectiondb.php";
session_start();
$pr = $_SESSION['prenomemp'];
 $em =  $_SESSION['emailemp'] ;
 $id =  $_SESSION['id_emp'] ;
 $nm =   $_SESSION['nomemp'] ;
  $met =   $_SESSION['metieremp'] ;
 $add =    $_SESSION['adressemp'] ;
   $dat =  $_SESSION['date'] ;
   $datedep = $_SESSION['datedepo'] ;
   $img = $_SESSION['imageemp'] ;
  $numt =   $_SESSION['numeemp'] ;
   $cvv =  $_SESSION['cvemp'] ;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleprofile.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">
   
    <title>Document</title>
</head>
<body>
    
    <div class="layout">
        
        <header>
            <label for="">cvtheque-dxc-technology</label>
            <ul>
                <li><a href="contacter.php">contacter</a></li>
                <li><a href="php/forgetpassword.php">password</a></li>
                <li><a href="php/deconnection.php">log out</a></li>
                <li> <img id="image" src="php\empfiles\anthony.jpg" alt=""></li>
            </ul>
        </header>

        <div class="main">

            <div class="infouser">
                <label for="">information</label>

                <div class="forms">

                <?php
         
                
                $sql = "SELECT * FROM employeur where id_emp=$id";
                $result = mysqli_query($conn, $sql);
                
                if (mysqli_num_rows($result) > 0) {
         
                $row = mysqli_fetch_assoc($result);
                
                    echo "
                    
                    <form id='form1' action='php/gereremployer.php' method='post'>
                    <div class='email'> nom : <input type='text' name='nom' placeholder='nom' value='$nm'></div>
                    <div class='email'> prenom : <input type='text' name='prenom' placeholder='prenom' value='$pr'></div>
                    <div class='email'> numero tel : <input disabled type='text' name='num' placeholder='06123165468'   value='$numt'></div>
                    <div class='email'> metier : <input type='text' name='metier' placeholder='metier'  value='$met'></div>
                    <div class='email'> adress : <input type='text' name='adress' placeholder='adress'  value='$add'></div>
                    <div class='email'> email : <input disabled type='email' name='email' placeholder='email@gmail.com'  value='$em'> </div>
                    <input type='submit' name='modifierinfo' value='modifier'>
                </form>
                    ";
                  
                }else {
                  
                }
            
                
                ?>
               

            </div>
                
            </div>

            <!--   formation   -->

            <div class="formation top">
                <label for="">formation</label>
                <div class="contains">
                   <div class="chercher"> <input id="srch1" placeholder="chercher..." type="text"><i class="fas fa-search"></i></div>
                    <button id="add_formation">ADD Formation</button>
                    
                </div>
                <table >
                    <tr>
                        <th>nom</th>
                        <th>ecole</th>
                        <th>date debut</th>
                        <th>date fin</th>
                        <th>choix</th>
                    </tr>

                    <?php
                    $sql = "SELECT * FROM formation where id_emp=$id";
                    $result = mysqli_query($conn, $sql);
                    
                    if (mysqli_num_rows($result) > 0) {
                      
                      while($row = mysqli_fetch_assoc($result)) {
                          $idfor = $row['id_formation'];
                        echo "
                        <tr>
                        <td>".$row['nom']."</td>
                        <td>".$row['ecole']."</td>
                        <td>".$row['date_debut']."</td>
                        <td>".$row['date_fin']."</td>
                        <td>
                            <button id='editformation'> <a href='php/gerer/editeformation.php?ideditfor=$idfor'> <i class='fas fa-edit'> </i></a> </button>
                        
                            <button id='deleteformation'><a href='php/gerer/deleteinformation.php?iddelinfo=$idfor'> <i class='fas fa-trash'></i></a> </button>
                        </td>
                    </tr>
                        
                        ";
                      }
                    } else {
                      echo "
                      <tr>
                        <td>ajoutez une formation</td>
                        <td>ajoutez une formation</td>
                        <td>ajoutez une formation</td>
                        <td>ajoutez une formation</td>
                        <td>ajoutez une formation</td>
                      
                    </tr>
                      
                      ";
                    }
                    
                    
                    ?>
                    
                </table>
              
            </div>


            <!--   formation   -->



            <!--experience professionnel-->
            <div class="formation top" >
                <label for="">experience</label>
                <div class="contains">
                   <div class="chercher"> <input id="srch2" placeholder="chercher..." type="text"><i class="fas fa-search"></i></div>
                    <button id="add_experience">ADD experience</button>
         
                </div>
                <table >
                    <tr>
                        <th>nom</th>
                        <th>entreprise</th>
                        <th>description</th>
                        <th>annee experience</th>
                        <th>choix</th>
                    </tr>


                    <?php
                    $sql = "SELECT * FROM experience_professionel where id_emp=$id";
                    $result = mysqli_query($conn, $sql);
                    
                    if (mysqli_num_rows($result) > 0) {
                      
                      while($row = mysqli_fetch_assoc($result)) {
                          $idexpe = $row['id_exp'];
                          @$dif = $row['date_fin']-$row['date_debut'];
                        echo "
                        <tr>
                        <td>".$row['nom']."</td>
                        <td>".$row['entreprise']."</td>
                        <td>".$row['description']."</td>
                        <td>$dif</td>
                        
                        <td>
                            <button id='editformation'> <a href='php/gerer/editeexperience.php?ideditexp=$idexpe'> <i class='fas fa-edit'> </i></a> </button>
                            <button id='deleteformation'><a href='php/gerer/deleteinformation.php?iddelexp=$idexpe'> <i class='fas fa-trash'></i></a> </button>
                        </td>
                    </tr>
                        
                        ";
                      }
                    } else {
                      echo "
                      <tr>
                        <td>ajoutez une experience</td>
                        <td>ajoutez une experience</td>
                        <td>ajoutez une experience</td>
                        <td>ajoutez une experience</td>
                      
                      
                    </tr>
                      
                      ";
                    }
                    
                    
                    ?>
                </table>
              
            </div>

              <!--experience professionnel-->


              <!--   COMPETENCE   -->

              <div class="formation top" >
                <label for="">competence</label>
                <div class="contains">
                   <div class="chercher"> <input id="srch3" placeholder="chercher..." type="text"><i class="fas fa-search"></i></div>
                    <button id="comid">ADD competence</button>
                    
                </div>
                <table >
                    <tr>
                        <th>nom</th>
                        <th>description</th>
                        <th>choix</th>
                    </tr>

                    <?php
                    $sql = "SELECT * FROM competence where id_emp=$id";
                    $result = mysqli_query($conn, $sql);
                    
                    if (mysqli_num_rows($result) > 0) {
                      
                      while($row = mysqli_fetch_assoc($result)) {
                          $idcom = $row['id_competence'];
                        echo "
                        <tr>
                        <td>".$row['nom']."</td>
                        <td>".$row['description']."</td>
                    
                        <td>
                            <button id='editformation'> <a href='php/gerer/editecompetence.php?ideditcomp=$idcom'> <i class='fas fa-edit'> </i></a> </button>
                        
                            <button id='deleteformation'><a href='php/gerer/deleteinformation.php?iddelcomp=$idcom'> <i class='fas fa-trash'></i></a> </button>
                        </td>
                    </tr>
                        
                        ";
                      }
                    } else {
                      echo "
                      <tr>
                        <td>ajoutez une competence</td>
                        <td>ajoutez une competence</td>
                        <td>ajoutez une competence</td>
                   
                      
                    </tr>
                      
                      ";
                    }
                    
                    
                    ?>


                    
                </table>
              
            </div>

            <!--   COMPETENCE   -->

            
              <!--   langue   -->

              <div class="formation top" >
                <label for="">langue</label>
                <div class="contains">
                   <div class="chercher"> <input id="srch4" placeholder="chercher..." type="text"><i class="fas fa-search"></i></div>
                    <button id="add_langue">ADD langue</button>
                    
                </div>
                <table >
                    <tr>
                        <th>nom</th>
                        <th>niveaux</th>
                        <th>choix</th>
                    </tr>
                    <?php
                    $sql = "SELECT * FROM langue where id_emp=$id";
                    $result = mysqli_query($conn, $sql);
                    
                    if (mysqli_num_rows($result) > 0) {
                      
                      while($row = mysqli_fetch_assoc($result)) {
                          $idl = $row['id_langue'];
                        echo "
                        <tr>
                        <td>".$row['nom']."</td>
                        <td>".$row['niveau']."</td>
                    
                        <td>
                            <button id='editformation'> <a href='php/gerer/editelangue.php?ideditl=$idl'> <i class='fas fa-edit'> </i></a> </button>
                        
                            <button id='deleteformation'><a href='php/gerer/deleteinformation.php?iddell=$idl'> <i class='fas fa-trash'></i></a> </button>
                        </td>
                    </tr>
                        
                        ";
                      }
                    } else {
                      echo "
                      <tr>
                        <td>ajoutez une langue</td>
                        <td>ajoutez une langue</td>
                        <td>ajoutez une langue</td>
                   
                      
                    </tr>
                      
                      ";
                    }
                    
                    
                    ?>




                    
                </table>
              
            </div>

            <!--   langue   -->


            <!--  certificat  -->
            <div class="formation top" >
                <label for="">certificat</label>
                <div class="contains">
                   <div class="chercher"> <input id="srch5" placeholder="chercher..." type="text"><i class="fas fa-search"></i></div>
                    <button id="add_certif">ADD certificat</button>
                    
                </div>
                <table >
                    <tr>
                        <th>nom</th>
                        <th>date de certificat</th>
                        <th>description</th>
                        <th>choix</th>
                    </tr>



                    <?php
                    $sql = "SELECT * FROM certificat where id_emp=$id";
                    $result = mysqli_query($conn, $sql);
                    
                    if (mysqli_num_rows($result) > 0) {
                      
                      while($row = mysqli_fetch_assoc($result)) {
                          $idc = $row['id_certif'];
                        echo "
                        <tr>
                        <td>".$row['nom']."</td>
                        <td>".$row['date_de_certif']."</td>
                        <td>".$row['description']."</td>
                    
                        <td>
                            <button id='editformation'> <a href='php/gerer/editecertif.php?ideditcert=$idc'> <i class='fas fa-edit'> </i></a> </button>
                        
                            <button id='deleteformation'><a href='php/gerer/deleteinformation.php?iddelc=$idc'> <i class='fas fa-trash'></i></a> </button>
                        </td>
                    </tr>
                        
                        ";
                      }
                    } else {
                      echo "
                      <tr>
                        <td>ajoutez une langue</td>
                        <td>ajoutez une langue</td>
                        <td>ajoutez une langue</td>
                        <td>ajoutez une langue</td>
                   
                      
                    </tr>
                      
                      ";
                    }
                    
                    
                    ?>

                   
                </table>
              
            </div>

              <!--  certificat  -->

              

              <div class="formation top">
                    <label for="">votre profile vue par</label>
                <table>
                    <tr>
                        <th>profile</th>
                        <th>nom</th>
                    </tr>
                    <tr>
                        <td> <img src="images/imageprofile.jpg"> </td>
                        <td>salah eddine zafati</td>
                    </tr>
                </table>

              </div>





            

        </div>



  <!--   footer   -->

        <footer>
            <ul>
                <li>contacter nous sur +212600000000</li>
                <li>dxc-technology@dxc.ma</li>
                <li><i class="fab fa-instagram"></i></li>
                <li><i class="fab fa-facebook-f"></i></li>
            </ul>
        </footer>

          <!--   footer   -->




    </div>
   


      <!--   profile   -->

    <div class="profile" id="profile">
        <div class="information">
            
        <?php echo "<img src='$img'>";?>
            <ul>
                <li>email : <?php echo $em;?></li>
                <li>nom : <?php echo $nm;?> | prenom : <?php echo $pr;?></li>
                <li>date de naissance :<?php echo $dat;?></li>
                <li>addresse :<?php echo $add;?></li>
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


    <!--   addformation   -->

    <div id="adfrm" class="addformation">
        
        <div class="img">
            <img src="images/LogoMakr-54D2Hw.png" alt="">
            <i id="dfrm" class="fas fa-times"></i>
        </div>
        <div class="formfomation">
        <form action="php/gereremployer.php" method="post">
            <div class="form"> <label for="">nom : </label><input type="text" placeholder="nom du formation" name="nm_formation"> </div>
            <div class="form"> <label for="">ecole : </label><input type="text" placeholder="nom du ecole" name="ecole"> </div>
            <div class="form"> <label for="">date debut : </label><input type="date" name="dt_db"> </div>
            <div class="form"> <label for="">date fin : </label><input type="date" name="dt_fin"> </div>
            <input class="sub" type="submit" name="add_formation" value="add">
        </form>    
        </div>

    </div>

    <!--   addformation   -->

        <!--   addexperinece   -->

        <div id="adex" class="addexperience">
        
            <div class="img">
                <img src="images/LogoMakr-54D2Hw.png" alt="">
                <i id="dexp" class="fas fa-times"></i>
            </div>
            <div class="formexperience">
            <form action="php/gereremployer.php" method="post">
                <div class="form"> <label for="">nom : </label><input type="text" name='nmex' placeholder="nom du formation"> </div>
                <div class="form"> <label for="">entreprise : </label><input type="text" name='entreprise' placeholder="nom du entreprise"> </div>
                <div class="form"> <label for="">description : </label><input  type="text" name='descexp' placeholder="discription"> </div>
                <div class="form"> <label for="">date debut : </label><input type="date" name='dtexdeb' > </div>
                <div class="form"> <label for="">date fin : </label><input type="date" name='dtexpfin'> </div>
                <input class="sub" type="submit" name='add_exp' value="add">
            </form>    
            </div>
    
        </div>
    
        <!--   addexperience   -->

          <!--   addecompetence   -->

          <div id="adcomp" class="addcompetence">
        
            <div class="img">
                <img src="images/LogoMakr-54D2Hw.png" alt="">
                <i id="decomp" class="fas fa-times"></i>
            </div>
            <div class="formcomptecnce">
            <form action="php/gereremployer.php" method="post">
                <div class="form"> <label for="">nom : </label><input type="text" name='nomcomp' placeholder="nom du competence"> </div>
                <div class="form"> <label for="">description : </label><input  type="text"  name='desccomp' placeholder="discription"> </div>
                <input class="sub" type="submit"  name='add_compe' value="add">
            </form>    
            </div>
    
        </div>
    
        <!--   addcompetence   -->

                  <!--   addlangue   -->

                  <div id="adla" class="addcompetence">
        
                    <div class="img">
                        <img src="images/LogoMakr-54D2Hw.png" alt="">
                        <i id="delang" class="fas fa-times"></i>
                    </div>
                    <div class="formcomptecnce">
                    <form action="php/gereremployer.php" method="post">
                        <div class="form"> <label for="">langue : </label> <select name="lll" id="">
                            <option value="arabe" selected>arabe</option>
                            <option value="français">français</option>
                            <option value="anglais">anglais</option>
                            <option value="espagnole">espagnole</option>
                        </select>  </div>
                        <div class="form"> <label for="">niveau : </label> <select name="nnn" id="">
                            <option value="courant" selected>courant</option>
                            <option value="notion de base">notion de base</option>
                            <option value="soutenu ">soutenu </option>
                           
                        </select>  </div>
                        <input class="sub" type="submit" name="add_langue" value="add">
                    </form>    
                    </div>
            
                </div>
            
                <!--   addlangue   -->


                   <!--   addcertif   -->

        <div id="adcert" class="addexperience">
        
            <div class="img">
                <img src="images/LogoMakr-54D2Hw.png" alt="">
                <i id="decert" class="fas fa-times"></i>
            </div>
            <div class="formexperience">
            <form action="php/gereremployer.php" method="post">
                <div class="form"> <label for="">nom : </label><input type="text" name='nomcertif' placeholder="nom du formation"> </div>
                <div class="form"> <label for="">description : </label><input  type="text" name='desccertif' placeholder="discription"> </div>
                <div class="form"> <label for="">date de certif : </label><input type="date"   name='datecertif'> </div>
                <input class="sub" type="submit"   name='add_certif' value="add">
            </form>    
            </div>
    
        </div>
    
       <!--   addcertif   -->
        

    <script src="js/profileuserjs.js"></script>
</body>
</html>
