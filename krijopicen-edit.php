<?php 
	require 'dbconnect.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $sql = 'SELECT * FROM krijopicen WHERE id = :id';
    $query = $pdo->prepare($sql);
    $query->execute(['id' => $id]);

    $krijopicen = $query->fetch();
	
	if(isset($_POST['submit'])){
        $name = $_POST['emri_pices'];
		$emri_perberesit = $_POST['emri_perberesit'];
        $madhesia = $_POST['madhesia'];
        $cmimi = $_POST['cmimi'];

        $sql = 'UPDATE krijopicen SET name = :name, emri_perberesit = :emri_perberesit, madhesia = :madhesia, cmimi = :cmimi WHERE id = :id ';
        $query = $pdo->prepare($sql);
        $query->bindParam('name', $name);
        $query->bindParam('emri_perberesit', $email);
		$query->bindParam('madhesia', $email);
		$query->bindParam('cmimi', $email);
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
            <input type="text" name="name" value="<?php echo $krijopicen['emri_pices']; ?>" placeholder="Enter your name"><br>
            <input type="text" name="emri_perberesit" value="<?php echo $krijopicen['emri_perberesit']; ?>" placeholder="Enter your emri_perberesit"><br>
			<input type="text" name="madhesia" value="<?php echo $krijopicen['madhesia']; ?>" placeholder="Enter your madhesia"><br>
			<input type="int" name="cmimi" value="<?php echo $krijopicen['cmimi']; ?>" placeholder="Enter your cmimi"><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</div>
