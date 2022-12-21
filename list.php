<?php

$connection = mysqli_connect("localhost", "root", "", "web");
$query = 'SELECT * FROM users';
$data = mysqli_query($connection, $query);

?>

<!doctype html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <link rel = "stylesheet" href="style.css">
    <title>MegaNetWork</title>
</head>
<body>

    <h2>This is the list of users</h2>

    <div class="container_table">
        <table class="table">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>

            <tbody>
            <?php $counter = 0;
           foreach ($data as $elem){
            ?>
            <tr>

                <td><a href="index.php?id= <?php echo $elem['Id'];?>"><?php echo $elem['Id'];?></a></td>
                <td><?php echo $elem['Name']?></td>
                <td><?php echo $elem['Email']?></td>
                <td><?php echo $elem['Password']?></td>
                <td><a href="update.php?id=<?php echo  $elem['Id']; ?>">Редактировать</a></td>
                <td><a href= "delete.php?id=<?php echo  $elem['Id']; ?>" >Удалить</a></td>
            </tr>
            <?php } ?>

            </tbody>
        </table>

        <a href="create.php">Add new user</a>

    </div>
</body>
</html>
