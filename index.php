<?php   session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleindex.css">
    <link href="fontawesome-free-5.15.3-web/css/all.css" rel="stylesheet">
    <title>dxc-technology</title>
</head>
<body>
    

    <div class="layout">

        <div class="header">
            <span>dxc-technology</span>
            <ul>
                <?php
                
                if(@$_SESSION['emailemp']==""){
                    echo "
                    <li><a href='login.php'>cv</a></li>
                    <li><a href='contacter.php'>contacter</a></li>
                    <li><a href='login.php'>se connecter</a></li> 
                    "; 
                }
                else{
                    echo "
                    <li><a href='prfileuser.php'>cv</a></li>
                    <li><a href='contacter.php'>contacter</a></li>
                    <li><a href='php/deconnection.php'>decconnecter</a></li> 
                    "; 
                }
                
                ?>
            </ul>
        </div>

        <div class="main">
            <div class="picture"><div>
                <div class="text">
                <p>dxc technologie  a été fondée en 1959 par Roy Nutt et Fletcher Jones.

                    En 1962, l'entreprise enregistre un chiffre d'affaires annuel de plus d'un million de dollars. Six ans plus tard, en 1968, elle devient la première compagnie de logiciels informatiques cotée en bourse.
                    
                    En mai 2016, les activités de CSC sont fusionnées à celles de Hewlett Packard Enterprise, dans une transaction d'une valeur estimée à 8,5 milliards de dollars. Cette association représente 37 % des activités de HP Enterprise, pour un chiffre d'affaires de 4,7 milliards de dollars5.
                    
                    Le 3 avril 2017 le groupe DXC Technology ouvre à la bourse de New York sous l'acronyme “DXC” et intègre l'indice S&P 5006.
                    
                    Le 5 juillet 2017, DXC Technology annonce le rachat de Tribridge, intégrateur de Microsoft Dynamics 365 comptant 740 salariés aux États-Unis et en Europe pour un montant de 152 millions de dollars7.
                    
                    Le 1er mars 2018, l'entreprise annonce le rachat de M-Power Solutions, partenaire Oracle opérant en Australie et Nouvelle-Zélande8.
                    
                    Le 1er juin 2018, DXC se sépare de ses activités dédiées au secteur public américain, qui prennent le nom de Perspecta. Cette nouvelle société entre en bourse après une fusion avec Vencore et KGS Holding; elle compte 14 000 salariés et 4,2 milliards de dollars pro forma9.
                    
                    En mars 2020, DXC annonce la vente de ses activités liées à la santé pour cinq milliards de dollars à Veritas Capital</p>
                   
                
            </div>
            <button class="btn"> deposer le cv </button>
        </div>

      

    </div>



    <footer>
        <ul>
            <li>contacter nous sur +212600000000</li>
            <li>dxc-technology@dxc.ma</li>
            <li><i class="fab fa-instagram"></i></li>
            <li><i class="fab fa-facebook-f"></i></li>
        </ul>
    </footer>



    <script>

        var btn = document.querySelectorAll(".btn");
        btn[0].onclick = function(){
            window.location.href = "login.php";
        }


    </script>
  
</body>
</html>