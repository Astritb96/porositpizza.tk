<?php
include "inc/dbconnect.php";
session_start();
?>

<!DOCTYPE html>
<html>
<head> 
     <title> Porosit Pizza</title>
     <link rel="stylesheet" type="text/css" href="CSS/style.css"> 
	   
    <meta name="viewport" content="width=device-width,
      initial-scale=1" >
  
	
	
   

</head>
<body>
	 

	 
	 <div class="navbar">
		<ul>
			<li><a href="index.php" id="porositpizza">Porosit pizza</a></li>
			<li><a href="regjistrohu.php">Regjistrohu</a></li>
			<li><a href="kycu.php">Kycu</a></li>
			<li><a href="kontakti.php">Kontakti</a></li>
			<li><a href="rrethnesh.php">Rreth nesh</a></li>
			<?php if( isset($_SESSION['user_id']) ){ ?>
			<li> <a href="ckycu.php">Ckycu</a></li> <?php } else { echo "test"; } ?>
		</ul>
		
		