<?php
session_start();
include "../connectiondb.php";

if(isset($_GET['iddelinfo'])){
    $iddelinfo = $_GET['iddelinfo'];
    $sql = "DELETE FROM formation WHERE id_formation=$iddelinfo";
		

			if (mysqli_query($conn, $sql)) {
			
			    echo "<script type=\"text/javascript\">
			            	window.alert('record deleting');
			            	document.location.href='../../prfileuser.php';
			            	
			            </script>
       	 			";

			} else {
			  echo "Error deleting record: " . mysqli_error($conn);
			}

}




if(isset($_GET['iddelexp'])){
    $iddelexp = $_GET['iddelexp'];
    $sql = "DELETE FROM experience_professionel WHERE id_exp=$iddelexp";
		

			if (mysqli_query($conn, $sql)) {
			
			    echo "<script type=\"text/javascript\">
			            	window.alert('record deleting');
			            	document.location.href='../../prfileuser.php';
			            	
			            </script>
       	 			";

			} else {
			  echo "Error deleting record: " . mysqli_error($conn);
			}

}





if(isset($_GET['iddelcomp'])){
    $iddelcomp = $_GET['iddelcomp'];
    $sql = "DELETE FROM competence WHERE id_competence=$iddelcomp";
		

			if (mysqli_query($conn, $sql)) {
			
			    echo "<script type=\"text/javascript\">
			            	window.alert('record deleting');
			            	document.location.href='../../prfileuser.php';
			            	
			            </script>
       	 			";

			} else {
			  echo "Error deleting record: " . mysqli_error($conn);
			}

}


if(isset($_GET['iddell'])){
    $iddell = $_GET['iddell'];
    $sql = "DELETE FROM langue WHERE id_langue=$iddell";
		

			if (mysqli_query($conn, $sql)) {
			
			    echo "<script type=\"text/javascript\">
			            	window.alert('record deleting');
			            	document.location.href='../../prfileuser.php';
			            	
			            </script>
       	 			";

			} else {
			  echo "Error deleting record: " . mysqli_error($conn);
			}

}



if(isset($_GET['iddelc'])){
    $iddelc = $_GET['iddelc'];
    $sql = "DELETE FROM certificat WHERE id_certif=$iddelc";
		

			if (mysqli_query($conn, $sql)) {
			
			    echo "<script type=\"text/javascript\">
			            	window.alert('record deleting');
			            	document.location.href='../../prfileuser.php';
			            	
			            </script>
       	 			";

			} else {
			  echo "Error deleting record: " . mysqli_error($conn);
			}

}

?>