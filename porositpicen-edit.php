<?php 
	require 'dbconnect.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $sql = 'SELECT * FROM porosit WHERE id = :id';
    $query = $pdo->prepare($sql);
    $query->execute(['id' => $id]);

    $porosit = $query->fetch();
	
	if(isset($_POST['submit'])){
        $name = $_POST['name'];
		$emri_pices = $_POST['emri_pices'];
        $sasia = $_POST['sasia'];
		$madhesia = $_POST['madhesia'];
        $cmimi = $_POST['cmimi'];

        $sql = 'UPDATE porosit SET name = :name, emri_pices = :emri_pices, sasia = :sasia, madhesia = :madhesia, cmimi = :cmimi WHERE id = :id ';
        $query = $pdo->prepare($sql);
        $query->bindParam('name', $name);
        $query->bindParam('emri_pices', $emri_pices);
		$query->bindParam('sasia', $sasia);
		$query->bindParam('madhesia', $madhesia);
		$query->bindParam('cmimi', $cmimi);
        $query->bindParam('id', $id);

        $query->execute();
		
		//Poashtu mundemi mos mi bo bind parametrat dhe tek metoda execute e bonja pass nje array
		//dhe e ka efektin e njejt
		/*$query->execute([
			'name' => $name,
			'email' => $email,
			'id' => $id,
		]);*/
		
        header("Location: index.php");
    }
?>

<div class="mt-2">
    <div class="container">
        <form method="post">
            <input type="text" name="name" value="<?php echo $porosit['name']; ?>" placeholder="Enter your name"><br>
            <input type="text" name="emri_pices" value="<?php echo $porosit['emri_pices']; ?>" placeholder="Enter your emri_pices"><br>
			<input type="text" name="sasia" value="<?php echo $porosit['sasia']; ?>" placeholder="Enter your sasia"><br>
			<input type="text" name="madhesia" value="<?php echo $porosit['madhesia']; ?>" placeholder="Enter your madhesia"><br>
			<input type="int" name="cmimi" value="<?php echo $porosit['cmimi']; ?>" placeholder="Enter your cmimi"><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</div>
