<?php include "../connectiondb.php";
session_start();?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../../css/edite.css">
</head>
<body>

<?php

if(isset($_GET['ideditl'])){
    $ideditl = $_GET['ideditl'];
    $sql = "SELECT * FROM  langue WHERE id_langue=$ideditl";
		
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        
        while($row = mysqli_fetch_assoc($result)) {
          $name=$row['nom'];
          $nive=$row['niveau'];

        }
      } else {
        echo "0 results";
      }

}





if(isset($_POST['md'])){
    $nmpost = $_POST['nomcertif'];
    $despost = $_POST['desccertif'];

    $sql = "UPDATE langue SET nom='$nmpost' , niveau='$despost' WHERE id_langue=$ideditl";

    if (mysqli_query($conn, $sql)) {
        echo "<script type=\"text/javascript\">
        window.alert('data updated');
        document.location.href='../../prfileuser.php';
        
        </script>
        ";
    } else {
    echo "Error updating record: " . mysqli_error($conn);
    }

}





?>

<div class="all">
	
	<div class="logo">
	<img src="../../images/LogoMakr-54D2Hw.png">
	
</div>

<div class="content">

	<form method="post" action="">
		<h2>editer information</h2>
        
		<table>
			<tr>
				<td>lague</td>
				
				<td><input type="text" name="nomcertif" value='<?php echo $name?>'></td>
			</tr>
				<tr>
				<td>niveau</td>
				<td><input type="text" name="desccertif" value='<?php echo $nive?>'></td>
			</tr>
           
				<tr>
				<td></td>
				<td><input type="submit" name="md" value='modifier'></td>
			</tr>
		</table>
		
	
	</form>

	
</div>


</div>
</body>
</html>