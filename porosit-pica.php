<?php
	require 'dbconnect.php';
    
	$query = $pdo->query('SELECT * FROM porosit');
    $porosit = $query->fetchAll();
?>

	<div class="mt-2">
        <div class="container">
            <a href="porositpicen-add.php">Order a new pizza</a>
            <table>
                <thead>
                    <tr>
                        <th>name</th>
                        <th>emri_pices</th>
                        <th>sasia</th>
						<th>madhesia</th>
						<th>cmimi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($porosit as $porosit): ?>
                        <tr>
                            <td><?php echo $porosit['name']; ?></td>
							<td><?php echo $porosit['emri_pices']; ?></td>
                            <td><?php echo $porosit['sasia']; ?></td>
							<td><?php echo $porosit['madhesia']; ?></td>
							 <td><?php echo $porosit['cmimi']; ?></td>
                            <td><a href="porositpicen-edit.php?id=<?php echo $porosit['id']; ?>">Edit</a></td>
                            <td><a href="porositpicen-delete.php?id=<?php echo $porosit['id']; ?>">Delete</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>