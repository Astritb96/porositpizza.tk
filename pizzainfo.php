<?php include "inc/header.php";?>

<?php
   if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
	
	$sql = 'SELECT * FROM krijopicen WHERE id = :id';
    $query = $pdo->prepare($sql);
    $query->execute(['id' => $id]);

    $pizza = $query->fetch();
?>

	<div class="pizza">
	<img src="<?php echo $pizza['image']; ?>"  width="195" height="200" >
	<p style="color:white"> <strong> Perberesit:</strong>  <?php echo $pizza['emri_perberesit']; ?> </p>
	<p style="color:white"> <strong>Madhesia:</strong> <?php echo $pizza['madhesia']; ?> </p>
	<p style="color:white"><strong>Cmimi:</strong> <?php echo $pizza['cmimi']; ?> </p>
	</div>
	