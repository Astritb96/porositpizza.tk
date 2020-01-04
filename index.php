<?php include "inc/header.php";?>



<?php
	
 	$query = $pdo->query('SELECT * FROM krijopicen');
	$pizza = $query->fetchAll();
	
?>



<body>
	 
	 
	 
	 <div class="navbar">
	
		
		<a href="krijopicentende.php"><button class="button1" type="button"><strong>Krijo picen tende</strong>
		</button>
		</a>
		
		 <p class="text1">Pizza is always a good idea... Order it now! </p>
	
	
	<?php foreach($pizza as $pica): ?>
	<div class="pizza">
		<a target="_blank" href="pizzainfo.php?id=<?php echo $pica['id']; ?>">
	<img src="<?php echo $pica['image']; ?>"  width="195" height="200">
		</a>
		
	<div class="desc"> <strong><?php echo $pica['name']; ?><br><?php echo $pica['cmimi']; ?> &euro;</strong></div>
		<a href="porosit.php"><button class="button" type="button" ><strong>Porosit</strong></button></a>
	</div>
		
	<?php endforeach; ?>
	
	
	
	
	
	
	<div class="pizza">
		<a target="_blank" href="images/Fungi.jpg">
	<img src="images/Fungi.jpg"  width="195" height="200">
		</a>
	<div class="desc"> <strong>Fungi<br>2.00-4.00 &euro;</strong></div>
		<a href="porosit.php"><button class="button" type="button" ><strong>Porosit</strong></button></a>
	</div>
	
	<div class="pizza">
		<a target="_blank" href="images/Proshute.jpg">
	<img src="images/Proshute.jpg"  width="195" height="200">
		</a>
	<div class="desc"> <strong>Proshute<br>2.00-4.00&euro;</strong></div>
		<a href="porosit.php"><button class="button" type="button" ><strong>Porosit</strong></button></a>
	</div>
	
	<div class="pizza">
		<a target="_blank" href="images/Tuna.jpg">
	<img src="images/Tuna.jpg"  width="195" height="200">
		</a>
	<div class="desc"> <strong>Tuna<br>2.00-4.00&euro;</strong></div>
		<a href="porosit.php"><button class="button" type="button" ><strong>Porosit</strong></button></a>
	</div> 
	<div class="pizza">
		<a target="_blank" href="images/Margarita.jpg">
	<img src="images/Margarita.jpg"  width="195" height="200">
		</a>
	<div class="desc"> <strong>Margarita<br>2.00-4.00 &euro;</strong></div>
		<a href="porosit.php"><button class="button" type="button" ><strong>Porosit</strong></button></a>
	</div>
	</div>
	
		
	
	
	
	
	<?php include "inc/footer.php";?>