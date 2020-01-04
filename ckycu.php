<?php include "inc/dbconnect.php";?>		
<?php 

session_start();

session_destroy();

header('Location: index.php');
?>