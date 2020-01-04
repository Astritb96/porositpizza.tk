<?php require('dbconnect.php'); ?>
    
    <?php 
        if(isset($_POST['submit'])){
			$name = $_POST['name'];
			$emri_pices = $_POST['emri_pices'];
			$sasia = $_POST['sasia'];
			$madhesia = $_POST['madhesia'];
			$cmimi = $_POST['cmimi'];
			
            $sql = 'INSERT INTO porosit (name, emri_pices, sasia, madhesia, cmimi) VALUES (:name, :emri_pices, :sasia,:madhesia, :cmimi)';
            $query = $pdo->prepare($sql);
            $query->bindParam('name', $name);
            $query->bindParam('emri_pices', $emri_pices);
            $query->bindParam('sasia', $sasia);
			$query->bindParam('madhesia', $madhesia);
			$query->bindParam('cmimi', $cmimi);
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
            <form action="porositpicen-add.php" method="post">
                <input type="text" name="name" placeholder="Enter your name"><br>
                <input type="text" name="emri_pices" placeholder="Enter your pizzaEmri"><br>
                <input type="text" name="sasia" placeholder="Enter your sasia"><br>
				 <input type="text" name="madhesia" placeholder="Enter your madhesia"><br>
				<input type="int" name="cmimi" placeholder="Enter your cmimi"><br>
                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
    </div>