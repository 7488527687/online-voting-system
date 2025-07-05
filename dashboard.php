<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}
include("includes/header.php");
?>

<div class="container">
    <h2>Welcome to Admin Dashboard</h2>
    <p>You have successfully logged in.</p>
</div>

<?php include("includes/footer.php"); ?>
