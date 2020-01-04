<?php include "inc/header.php";?>
<?php include "inc/dbconnect.php";?>
		
			<h1 style=" color:white;" align="center">Miresevini!</h1>
	
		<form align="center" action="regjistrohu.php" method="POST"><br><br><br>
			<input type="text" name="name"  style="height:30px;width:222px"  placeholder="Emri"> <br><br>
			<input type="text" name="surname" style="height:30px;width:222px" placeholder="Mbiemri"><br><br>
			<input type="text" name="email" style="height:30px;width:222px" placeholder="Email"><br><br>
			<input type="password" name="password" style="height:30px;width:222px" placeholder="Password"><br><br><br>
			<input  type="submit" name="submit" style="color:black;height:45px;width:120px"   onclick="alert('U Regjistruat!')"  value="Regjistrohu"> 
		</form>

 <?php

        if(isset($_POST['submit'])){
            $name = $_POST['name'];
			$surname = $_POST['surname'];
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
			
			
			
			
			
            $sql = "INSERT INTO users (name, surname, email, password) VALUES ('$name', '$surname', '$email','$password')";
            $query = $pdo->prepare($sql);
            $query->bindParam('name', $name);
			$query->bindParam('surname', $surname);
            $query->bindParam('email', $email);
			$query->bindParam('password', $password);
			
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