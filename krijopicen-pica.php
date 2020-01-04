<?php
	require 'dbconnect.php';
    
	$query = $pdo->query('SELECT * FROM krijopicen');
    $krijopicen = $query->fetchAll();
?>

	<div class="mt-2">
        <div class="container">
            <a href="krijopicen-add.php">Add a new pizza</a>
            <table>
                <thead>
                    <tr>
                        <th>emri_pices</th>
                        <th>emri_perberesit</th>
                        <th>madhesia</th>
						<th>cmimi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($krijopicen as $krijopicen): ?>
                        <tr>
                            <td><?php echo $krijopicen['emri_pices']; ?></td>
							<td><?php echo $krijopicen['emri_perberesit']; ?></td>
                            <td><?php echo $krijopicen['madhesia']; ?></td>
							 <td><?php echo $krijopicen['cmimi']; ?></td>
                            <td><a href="krijopicen-edit.php?id=<?php echo $krijopicen['id']; ?>">Edit</a></td>
                            <td><a href="krijopicen-delete.php?id=<?php echo $krijopicen['id']; ?>">Delete</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>