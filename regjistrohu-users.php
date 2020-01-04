<?php
	require 'dbconnect.php';
    
	$query = $pdo->query('SELECT * FROM users');
    $users = $query->fetchAll();
?>

	<div class="mt-2">
        <div class="container">
            <a href="regjistrohu-add_users.php">Add a new user</a>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>surname</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($users as $user): ?>
                        <tr>
                            <td><?php echo $user['name']; ?></td>
							<td><?php echo $user['surname']; ?></td>
                            <td><?php echo $user['email']; ?></td>
                            <td><a href="regjistrohu-edit_users.php?id=<?php echo $user['id']; ?>">Edit</a></td>
                            <td><a href="regjistrohu-delete_users.php?id=<?php echo $user['id']; ?>">Delete</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>