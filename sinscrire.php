<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sinscrirecss.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">
    <title>Document</title>
</head>
<body>

    <div class="layout">


        <div class="main1">
            <span>cvtheque-dxc-technology</span>
            <button class="btn">se connecter</button>
        </div>



        <div class="main2">
            <form action="php/gereinscription.php"  enctype="multipart/form-data" method="post">
            <table>
            
                <tr>
                    <td> nom : </td>
                    <td><input type="text" name="nom" placeholder="nom" id=""><i class="fas fa-exclamation"></i></td>
                </tr>

                <tr>
                    <td>   prenom : </td>
                    <td><input type="text" name="prenom" placeholder="prenom" id=""><i class="fas fa-exclamation"></i></td>

                </tr>
           
                <tr>
                    <td>   date naissance : </td>
                    <td><input type="date" name="date"  id=""><i class="fas fa-exclamation"></i></td>

                </tr>
                <tr>
                    <td> numero tel : </td>
                    <td><input type="text" name="num" placeholder="06123165468" id=""><i class="fas fa-exclamation"></i></td>

                </tr>

                <tr>
                    <td> metier : </td>
                    <td><input type="text" name="metier" placeholder="metier" id=""><i class="fas fa-exclamation"></i></td>

                </tr>
           
                <tr>
                    <td>  adress :</td>
                    <td> <input type="text" name="adress" placeholder="adress" id=""><i class="fas fa-exclamation"></i></td>

                </tr>
               
                <tr>
                    <td>   photo : </td>
                    <td><input type="file" name="photoperso"  id=""><i class="fas fa-exclamation"></i></td>

                </tr>
                
                            
                <tr>
                    <td>  cv : </td>
                    <td><input type="file" name="cv"  id=""></td>

                </tr>


                <tr>
                    <td> email : </td>
                    <td><input type="email" name="email" placeholder="email" id=""> <i class="fas fa-exclamation"></i></td>

                </tr>
               
                <tr>
                    <td> password : </td>
                    <td><input type="password" name="password" placeholder="password"  id=""> <i class="fas fa-exclamation"></i></td>

                </tr>
               
                <tr>
                    <td>   <input type="submit" name="connection" value="creer"></td>
                </tr>
               
               
               
               
               
                
            
            
            </table>
            </form>

        </div>


    </div>
    


<script >
    var btn = document.querySelectorAll(".btn");
        btn[0].onclick = function(){
                
            window.location.href = "login.php";
        }

</script>
</body>
</html>
