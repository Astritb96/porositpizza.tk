<?php include "inc/header.php";?>
<?php include "inc/dbconnect.php";?>		
		
		
		
		<h1  style=" color:white;" align="center">Kycuni</h1><br>
	
		<form align="center" action="kycu.php" method="POST"><br><br><br>
			
			<input type="text" name="email" style="height:30px;width:222px" placeholder="Email"><br><br>
			<input type="password" name="password" style="height:30px;width:222px" placeholder="Password"><br><br><br>
			<input  type="submit" name="submit" style="color:black;height:45px;width:120px"     value="Kycu"> 
		</form>
		
		
		
<?php

		session_start();

		if( isset($_SESSION['user_id']) ){
			header("Location:index.php");
		}

		require 'inc/dbconnect.php';


		if(isset($_POST['submit'])):
			$email = $_POST['email'];
			$password = $_POST['password'];
			$message = '';

			$query = $pdo->prepare('SELECT id,name,email,password FROM users WHERE email = :email');
			$query->bindParam(':email', $email);
			$query->execute();

			$user = $query->fetch();

			if(count($user) > 0 && password_verify($password, $user['password']) ){

				$_SESSION['user_id'] = $user['id'];
				$_SESSION['name'] = $user['name'];

				header("Location: index.php");

			} else {
				 $message = 'JU LUTEMI REGJISTROHUNI, JU FALEMINDERIT';
			}

		endif;

		?>
		<!DOCTYPE html>
		<html>
		<head>
			<title>Faqja e Kycjes</title>
		</head>
		<body>

			<?php if(!empty($message)): ?>
				<p style="color:white;"><?php echo $message ?></p>
			<?php endif; ?>

			
</body>
</html>
		
		
		
		
		
		
		
<?php include "inc/footer.php";?>



