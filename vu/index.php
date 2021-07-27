<?php
session_start();
include "../php/connectiondb.php";

$dd = date('Y/m/d');

if(isset($_GET['idemp'])){
      $idemp=$_GET['idemp'];
      $sql = "SELECT * FROM employeur where id_emp=$idemp";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
        
        while($row = mysqli_fetch_assoc($result)) {
          $nomemp = $row['nom'];
          $prenomemp = $row['prenom'];
          $date_de_naissance = $row['date_de_naissance'];
          $metier = $row['metier'];
          $emailemp=$row['email'];
          $cv = $row['cv'];
          $adres = $row['addresse'];
          $image = $row['image'];
          $numtel = $row['nume_tel'];
          @$dif =@$dd - @$date_de_naissance;
        }
      }
}
else{
    exit(0);
}

?>

<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Creative CV</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/aos.css?ver=1.1.0" rel="stylesheet">
    <link href="css/bootstrap.min.css?ver=1.1.0" rel="stylesheet">
    <link href="css/main.css?ver=1.1.0" rel="stylesheet">
    <noscript>
      <style type="text/css">
        [data-aos] {
            opacity: 1 !important;
            transform: translate(0) scale(1) !important;
        }
      </style>
    </noscript>
  </head>
  <body id="top">
    <header>
      <div class="profile-page sidebar-collapse">
        <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-primary" color-on-scroll="400">
          <div class="container">
            <div class="navbar-translate"><a class="navbar-brand" href="#" rel="tooltip">cvteque-dxc-technology</a>
              <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span class="navbar-toggler-bar bar3"></span></button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">
              <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#skill">Skills</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#portfolio">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="#experience">Experience</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll" href="../contacter.php">Contact</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <div class="page-content">
      <div>
<div class="profile-page">
  <div class="wrapper">
    <div class="page-header page-header-small" filter-color="green">
      <div class="page-header-image" data-parallax="true" style="background-image: url('images/cc-bg-1.jpg')"></div>
      <div class="container">
        <div class="content-center">
          <div class="cc-profile-image"><a href="#"><img src="<?php echo'../'.$image?>" alt="Image"/></a></div>
          <div class="h2 title"><?php echo $nomemp." ".$prenomemp?></div>
          <p class="category text-white"><?php echo $metier?></p><a class="btn btn-primary smooth-scroll mr-2" href="#contact" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Hire Me</a><a class="btn btn-primary" href="#" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Download CV</a>
        </div>
      </div>
      <div class="section">
        <div class="container">
          <div class="button-container"><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Facebook"><i class="fa fa-facebook"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Twitter"><i class="fa fa-twitter"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Google+"><i class="fa fa-google-plus"></i></a><a class="btn btn-default btn-round btn-lg btn-icon" href="#" rel="tooltip" title="Follow me on Instagram"><i class="fa fa-instagram"></i></a></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section" id="about">
  <div class="container">
    <div class="card" data-aos="fade-up" data-aos-offset="10">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title">About</div>
            <p>Hello! I am <?php echo $nomemp." ".$prenomemp .". " .$metier ?> </p>
          
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="card-body">
            <div class="h4 mt-0 title">Basic Information</div>
            <div class="row">
              <div class="col-sm-4"><strong class="text-uppercase">Age:</strong></div>
              <div class="col-sm-8"><?php echo $dif ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
              <div class="col-sm-8"><?php echo $emailemp ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Phone:</strong></div>
              <div class="col-sm-8"><?php echo $numtel ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Address:</strong></div>
              <div class="col-sm-8"><?php echo $adres ?></div>
            </div>
            <div class="row mt-3">
              <div class="col-sm-4"><strong class="text-uppercase">Language:</strong></div>

              
              <div class="col-sm-8">
              <?php 
                $sql = "SELECT * FROM langue where id_emp=$idemp";
                $result = mysqli_query($conn, $sql);
          
                if (mysqli_num_rows($result) > 0) {
                  
                  while($row = mysqli_fetch_assoc($result)) {
                      echo $row['nom']." , ";
                  }
                }

              
              ?>
              
              
             </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="section" id="skill">
  <div class="container">
    <div class="h4 text-center mb-4 title">Professional Skills</div>
    <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
      <div class="card-body">

      <?php
      
      $sql = "select * FROM competence WHERE id_emp=$idemp";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
        
        while($row = mysqli_fetch_assoc($result)) {
          $nomcompt = $row['nom'];
            echo "
            <div class='row'>
            <div class='col-md-6'>
              <div class='progress-container progress-primary'><span class='progress-badge'>$nomcompt</span>
                <div class='progress'>
                  <div class='progress-bar progress-bar-primary' data-aos='progress-full' data-aos-offset='10' data-aos-duration='2000' role='progressbar' aria-valuenow='60' aria-valuemin='0' aria-valuemax='100' style='width: 80%;'></div><span class='progress-value'>80%</span>
                </div>
              </div>
            </div>
            </div>
            
            ";
        }
      }
      
      ?>
        
    
        </div>
      </div>
    </div>
  </div>
</div>


<div class="section" id="experience">
  <div class="container cc-experience">
    <div class="h4 text-center mb-4 title">Work Experience</div>

    <?php

$sql = "SELECT * from experience_professionel where id_emp=$idemp";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  
  while($row = mysqli_fetch_assoc($result)) {
    
    $nomexp = $row['nom'];
    $entreprise = $row['entreprise'];
    $datedebut = $row['date_debut'];
    $datefin = $row['date_fin'];
    $description = $row['description'];
    

    echo"
    <div class='card'>
    <div class='row'>
        <div class='col-md-3 bg-primary' data-aos='fade-right' data-aos-offset='50' data-aos-duration='500'>
          <div class='card-body cc-experience-header'>
            <p>$datedebut - $datefin</p>
            <div class='h5'>$entreprise</div>
          </div>
        </div>
        <div class='col-md-9' data-aos='fade-left' data-aos-offset='50' data-aos-duration='500'>
          <div class='card-body'>
            <div class='h5'>$nomexp</div>
            <p>$description</p>
          </div>
        </div>
        </div>
        </div>
    
    ";
  }
} else {
  echo "0 results";
}





?>
  </div>
</div>
<div class="section">
  <div class="container cc-education">
    <div class="h4 text-center mb-4 title">Education</div>
    
    <?php

$sql = "SELECT * from formation where id_emp=$idemp";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  
  while($row = mysqli_fetch_assoc($result)) {
    
    $nomform = $row['nom'];
    $ecole = $row['ecole'];
    $dated = $row['date_debut'];
    $datef = $row['date_fin'];
    

    echo"
    <div class='card'>
    <div class='row'>
      <div class='col-md-3 bg-primary' data-aos='fade-right' data-aos-offset='50' data-aos-duration='500'>
        <div class='card-body cc-education-header'>
          <p>$dated - $datef</p>
          <div class='h5'>$nomform</div>
        </div>
      </div>
      <div class='col-md-9' data-aos='fade-left' data-aos-offset='50' data-aos-duration='500'>
        <div class='card-body'>
          <div class='h5'>$nomform</div>
          <p class='category'>$ecole</p>
          <p>Euismod massa scelerisque suspendisse fermentum habitant vitae ullamcorper magna quam iaculis, tristique sapien taciti mollis interdum sagittis libero nunc inceptos tellus, hendrerit vel eleifend primis lectus quisque cubilia sed mauris. Lacinia porta vestibulum diam integer quisque eros pulvinar curae, curabitur feugiat arcu vivamus parturient aliquet laoreet at, eu etiam pretium molestie ultricies sollicitudin dui.</p>
        </div>
      </div>
    </div>
  </div>
    
    ";
  }
} else {
  echo "0 results";
}


  
    
    ?>
  </div>
</div>

<div class="section">
  <div class="container cc-education">
    <div class="h4 text-center mb-4 title">certification</div>
    
    <?php

$sql = "SELECT * FROM `certificat` where id_emp=$idemp";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  
  while($row = mysqli_fetch_assoc($result)) {
    
    $nomcertif = $row['nom'];
    $descriptioncertif = $row['description'];
    $datecertif = $row['date_de_certif'];
  
    

    echo"
    <div class='card'>
    <div class='row'>
      <div class='col-md-3 bg-primary' data-aos='fade-right' data-aos-offset='50' data-aos-duration='500'>
        <div class='card-body cc-education-header'>
          <p>$datecertif</p>
          <div class='h5'>$nomcertif</div>
        </div>
      </div>
      <div class='col-md-9' data-aos='fade-left' data-aos-offset='50' data-aos-duration='500'>
        <div class='card-body'>
          <div class='h5'>$nomcertif</div>
          <p class='category'>$nomcertif</p>
          <p>$descriptioncertif</p>
        </div>
      </div>
    </div>
  </div>
    
    ";
  }
} else {
  echo "0 results";
}


  
    
    ?>
  </div>
</div>

    <footer class="footer">
      <div class="container text-center"><a class="cc-facebook btn btn-link" href="#"><i class="fa fa-facebook fa-2x " aria-hidden="true"></i></a><a class="cc-twitter btn btn-link " href="#"><i class="fa fa-twitter fa-2x " aria-hidden="true"></i></a><a class="cc-google-plus btn btn-link" href="#"><i class="fa fa-google-plus fa-2x" aria-hidden="true"></i></a><a class="cc-instagram btn btn-link" href="#"><i class="fa fa-instagram fa-2x " aria-hidden="true"></i></a></div>
      <div class="h4 title text-center">Anthony Barnett</div>
      <div class="text-center text-muted">
        <p>&copy; Creative CV. All rights reserved.<br>Design - <a class="credit" href="https://templateflip.com" target="_blank">TemplateFlip</a></p>
      </div>
    </footer>
    <script src="js/core/jquery.3.2.1.min.js?ver=1.1.0"></script>
    <script src="js/core/popper.min.js?ver=1.1.0"></script>
    <script src="js/core/bootstrap.min.js?ver=1.1.0"></script>
    <script src="js/now-ui-kit.js?ver=1.1.0"></script>
    <script src="js/aos.js?ver=1.1.0"></script>
    <script src="scripts/main.js?ver=1.1.0"></script>
  </body>
</html>