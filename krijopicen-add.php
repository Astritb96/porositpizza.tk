<?php require('dbconnect.php'); ?>
    
    <?php 
        if(isset($_POST['submit'])){
			$name = $_POST['emri_pices'];
			$emri_perberesit = $_POST['emri_perberesit'];
			$madhesia = $_POST['madhesia'];
			$cmimi = $_POST['cmimi'];
			
            $sql = 'INSERT INTO krijopicen (name, emri_perberesit, madhesia, cmimi) VALUES (:name, :emri_perberesit, :madhesia, :cmimi)';
            $query = $pdo->prepare($sql);
            $query->bindParam('emri_pices', $name);
            $query->bindParam('emri_perberesit', $emri_perberesit);
            $query->bindParam('madhesia', $madhesia);
			$query->bindParam('cmimi', $madhesia);
            $query->execute();
			
			//Poashtu mundemi mos mi bo bind parametrat dhe tek metoda execute e bonja pass nje array
			//dhe e ka efektin e njejt
			/*$query->execute([
				'name' => $name,
				'email' => $email,
				'password' => $password,
			]);*/
			
            header("Location: index.php");
        }
    ?>

    <div class="mt-2">
        <div class="container">
            <form action="krijopicen-add.php" method="post">
                <input type="text" name="name" placeholder="Enter your name"><br>
                <input type="text" name="emri_perberesit" placeholder="Enter your emri_perberesit"><br>
                <input type="text" name="madhesia" placeholder="Enter your madhesia"><br>
				<input type="int" name="cmimi" placeholder="Enter your cmimi"><br>
                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
    </div>