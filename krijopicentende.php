<?php include "inc/header.php";?>
<?php include "inc/dbconnect.php";?>	
	<h1  style=" color:white;" align="center">Krijo picen tende</h1><br>
	
		<form align="center" action="krijopicentende.php" enctype="multipart/form-data" method="POST"><br><br><br>
			
			<input type="text" name=" emri_pices" style="height:30px;width:222px" placeholder=" emri_pices"><br><br>
			<input type="text" name="emri_perberesit" style="height:30px;width:222px" placeholder="perberesi"><br><br>
			<input type="text" name="madhesia" style="height:30px;width:222px" placeholder="madhesia"><br><br>
			<input type="file" name="file" /><br><br>
			<input type="text" name="cmimi" style="height:30px;width:222px" placeholder="cmimi"><br><br><br>
			<input  type="submit" name="submit" style="color:black;height:45px;width:120px"     value="Krijo picen tende"> 
		</form>

<?php

        if(isset($_POST['submit'])){
            $name = $_POST['emri_pices'];
			$emri_perberesit = $_POST['emri_perberesit'];
            $madhesia = $_POST['madhesia'];
            $cmimi = $_POST['cmimi'];
			$file = $_POST['file'];
			
			$file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="images/";
 
 // new file size in KB
 $new_size = $file_size/1024;  
 // new file size in KB
 
 // make file name in lower case
 $new_file_name = strtolower($file);
 // make file name in lower case
 
 $final_file=str_replace(' ','-',$new_file_name);
 
 move_uploaded_file($file_loc,$folder.$final_file);
 

			
			
			
			
            $sql = "INSERT INTO krijopicen (name, emri_perberesit, madhesia, cmimi, image) VALUES ('$name', '$emri_perberesit', '$madhesia','$cmimi','$final_file')";
            $query = $pdo->prepare($sql);
            $query->bindParam('name', $name);
			$query->bindParam('emri_perberesit', $emri_perberesit);
            $query->bindParam('madhesia', $madhesia);
			$query->bindParam('cmimi', $cmimi);
			$query->bindParam('file', $final_file);
			
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