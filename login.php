<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylelogin.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css">
    <title>Document</title>
</head>
<body>

    <div class="layout">


        <div class="main1">
            <span>dxc-technology</span>
            <button class="btn">creer un compte</button>
        </div>



        <div class="main2">
            <form action="php/gerelogin.php" method="post">
                <div class="email"> email : <input type="email" name="email" placeholder="email" id=""></div>
                <div class="password">password : <input type="password" name="password" placeholder="password" id=""></div>
                <input type="submit" name="cn" value="se connecter">
            </form>

        </div>


    </div>
    


    <script >
        var btn = document.querySelectorAll(".btn");
        btn[0].onclick = function(){
            
            window.location.href = "sinscrire.php";
        }
    </script>
</body>
</html>