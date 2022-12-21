<?php
$id = $_GET['id'];
$connection = mysqli_connect("localhost", "root", "", "web");


$sql = "DELETE FROM `users` WHERE Id = $id;";

mysqli_query($connection, $sql)
?>

<p>List of users <a href="list.php">Click</a>.</p>
