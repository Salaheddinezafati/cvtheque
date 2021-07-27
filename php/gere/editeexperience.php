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

if(isset($_GET['ideditexp'])){
    $ideditexp = $_GET['ideditexp'];
    $sql = "SELECT * FROM  experience_professionel WHERE id_exp=$ideditexp";
		
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        
        while($row = mysqli_fetch_assoc($result)) {
          $name=$row['nom'];
          $des=$row['description'];
          $entre=$row['entreprise'];
          $da = $row['date_debut'];
          $daa = $row['date_fin'];

        }
      } else {
        echo "0 results";
      }

}





if(isset($_POST['md'])){
    $nmpost = $_POST['nomcertif'];
    $despost = $_POST['desccertif'];
    $entrepost = $_POST['entreprise'];
    $datdebutpost = $_POST['datedebut'];
    $datpost = $_POST['date'];
    $sql = "UPDATE experience_professionel SET nom='$nmpost' , description='$despost',entreprise='$entrepost',date_debut='$datdebutpost', date_fin='$datpost' WHERE id_exp=$ideditexp";

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
				<td>nom</td>
				
				<td><input type="text" name="nomcertif" value='<?php echo $name?>'></td>
			</tr>
				<tr>
				<td>description</td>
				<td><input type="text" name="desccertif" value='<?php echo $des?>'></td>
			</tr>
            <tr>
				<td>entreprise</td>
				<td><input type="text" name="entreprise" value='<?php echo $entre?>'></td>
			</tr>
            <tr>
				<td>date debut </td>
				<td><input type="date" name="datedebut" value='<?php echo $da?>'></td>
			</tr>
            <tr>
				<td>date fin </td>
				<td><input type="date" name="date" value='<?php echo $daa?>'></td>
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