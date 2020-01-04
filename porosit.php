<?php include "inc/header.php";?>


	
	<h1  style=" color:white;" align="center">Porosit</h1><br>
	
		<form align="center" action="porosit.php" enctype="multipart/form-data" method="POST"><br><br><br>
			
			<input type="text" name="name" style="height:30px;width:222px" placeholder="EmriiKlientit"><br><br>
			<input type="text" name="emri_pices" style="height:30px;width:222px" placeholder="emri_pices"><br><br>
			<input type="int" name="sasia" style="height:30px;width:222px" placeholder="sasia"><br><br>
			<input type="text" name="madhesia" style="height:30px;width:222px" placeholder="madhesia"><br><br>
			<input type="file" name="image"><br><br>
			<input type="int" name="cmimi" style="height:30px;width:222px" placeholder="cmimi"><br><br><br>
			<input  type="submit" name="submit" style="color:black;height:45px;width:120px"     value="Porosit"> 
		</form>

<?php

        if(isset($_POST['submit'])){
            $name = $_POST['name'];
			$emri_pices = $_POST['emri_pices'];
            $sasia = $_POST['sasia'];
			$madhesia = $_POST['madhesia'];
            $cmimi = $_POST['cmimi'];
			
			
			
			
			
            $sql = "INSERT INTO porosit (name, emri_pices, sasia, madhesia, cmimi) VALUES ('$name', '$emri_pices', '$sasia','$madhesia','$cmimi')";
            $query = $pdo->prepare($sql);
            $query->bindParam('name', $name);
			$query->bindParam('pizzaEmri', $emri_pices);
            $query->bindParam('pizzaSasia', $sasia);
			$query->bindParam('pizzaMadhesia', $madhesia);
			$query->bindParam('cmimi', $cmimi);
			
            $query->execute();
			
			//Poashtu mundemi mos mi bo bind parametrat dhe tek metoda execute e bonja pass nje array
			//dhe e ka efektin e njejt
			/*$query->execute([
				'name' => $name,
				'email' => $email,
				'password' => $password,
			]);*/
			
        }
    ?>
		
		
		
		
		
		
		
<?php include "inc/footer.php";?>