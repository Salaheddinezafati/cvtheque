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

if(isset($_GET['ideditcert'])){
    $ideditcert = $_GET['ideditcert'];
    $sql = "SELECT * FROM  certificat WHERE id_certif=$ideditcert";
		
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        
        while($row = mysqli_fetch_assoc($result)) {
          $name=$row['nom'];
          $des=$row['description'];
          $da = $row['date_de_certif'];

        }
      } else {
        echo "0 results";
      }

}





if(isset($_POST['md'])){
    $nmpost = $_POST['nomcertif'];
    $despost = $_POST['desccertif'];
    $datpost = $_POST['date'];
    $sql = "UPDATE certificat SET nom='$nmpost' , description='$despost', date_de_certif='$datpost' WHERE id_certif=$ideditcert";

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
	<img src="../../images/logo.png">
	
</div>

<div class="content">

	<form method="post" action="">
		<h2>editer information</h2>
        
		<table>
			<tr>
				<td>nom</td>
				
				<td><input type="text" name="nomcertif" value='<?php echo $name?>'></td>
			</tr>
				<tr>
				<td>description</td>
				<td><input type="text" name="desccertif" value='<?php echo $des?>'></td>
			</tr>
            <tr>
				<td>date </td>
				<td><input type="date" name="date" value='<?php echo $da?>'></td>
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
