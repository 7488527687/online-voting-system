<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$conn = new mysqli("localhost", "root", "", "voting_db");
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $voter_id = $_POST['voter_id'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM voters WHERE voter_id='$voter_id'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $voter = $result->fetch_assoc();

        if (password_verify($password, $voter['password'])) {
            if ($voter['has_voted'] == 0) {
                $_SESSION['voter_id'] = $voter_id;
                header("Location: vote_user.php");
                exit();
            } else {
                $error = "❌ You have already voted.";
            }
        } else {
            $error = "❌ Invalid password.";
        }
    } else {
        $error = "❌ Voter ID not found.";
    }
}

include 'includes/voter_header.php';
?>

<div class="container">
    <h2>Voter Login</h2>

    <?php if (isset($error)) {
        echo "<p style='color:red; font-weight:bold;'>$error</p>";
    } ?>

    <form method="POST">
        Voter ID: <input type="text" name="voter_id" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <input type="submit" value="Login" class="button">
    </form>
</div>

<?php include 'includes/footer.php'; ?>
