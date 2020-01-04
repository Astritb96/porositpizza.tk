<?php
try{
    $pdo = new PDO("mysql:host=localhost;dbname=pizza", "root" , "");    
}catch(PDOException $pdo){
    die("Unsuccessful connection".$pdo);
}

?>