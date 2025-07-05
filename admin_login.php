<?php
session_start();
$err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $conn = new mysqli("localhost", "root", "", "online_voting_system");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM admin WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        $admin = $result->fetch_assoc();

        if ($password === $admin['password']) {
            $_SESSION["admin"] = $username;
            header("Location: dashboard.php");
            exit();
        } else {
            $err = "❌ Invalid password!";
        }
    } else {
        $err = "❌ Admin not found!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Admin Login</h2>
        <form method="POST">
            Username: <input type="text" name="username" required><br><br>
            Password: <input type="password" name="password" required><br><br>
            <input type="submit" value="Login">
        </form>
        <p style="color:red;"><?php echo $err; ?></p>
    </div>
</body>
</html>
