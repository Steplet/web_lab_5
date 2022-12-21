<?php


$connection = mysqli_connect("localhost", "root", "", "web");
$query = 'SELECT * FROM users';
$data = mysqli_query($connection, $query);
$id_select = 'SELECT Id FROM users';
$Id_raw =   mysqli_query($connection, $id_select)->num_rows;



if (isset($_POST['submit'])){
    $name = $_POST['user_name'];
    $email = $_POST['email'];
    $psw = $_POST['psw'];

    $new_row = "INSERT INTO `users`(`Id`, `Name`, `Email`, `Password`) VALUES ('$Id_raw','$name','$email','$psw')";
    mysqli_query($connection, $new_row);
}

?>


<!doctype html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <link rel = "stylesheet" href="style.css">
    <title>MegaNetWork</title>
</head>
<body>

    <form method="post">
        <div class="container">
            <h1>MegaNetWork</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>

            <label for="user_name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="user_name" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <hr>


            <button name="submit" type="submit" class="registerbtn">Register</button>
        </div>

        <div class="container signin">
            <p>List of users <a href="list.php">Click</a>.</p>
        </div>
    </form>
</body>
</html>

