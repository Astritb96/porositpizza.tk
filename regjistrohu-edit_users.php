<?php 
	require 'dbconnect.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }

    $sql = 'SELECT * FROM users WHERE id = :id';
    $query = $pdo->prepare($sql);
    $query->execute(['id' => $id]);

    $user = $query->fetch();
	
	if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];

        $sql = 'UPDATE users SET name = :name, email = :email WHERE id = :id ';
        $query = $pdo->prepare($sql);
        $query->bindParam('name', $name);
        $query->bindParam('email', $email);
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
            <input type="text" name="name" value="<?php echo $user['name']; ?>" placeholder="Enter your name"><br>
            <input type="text" name="email" value="<?php echo $user['email']; ?>" placeholder="Enter your email"><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</div>
