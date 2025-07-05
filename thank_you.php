<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include 'includes/voter_header.php';
?>

<div class="container" style="text-align:center;">
    <h2>✅ Thank You!</h2>
    <p>Your vote has been successfully submitted.</p>
    <p>🔒 You have been logged out for security reasons.</p>
    <br>
    <a href="voter_login.php" class="button">🔁 Login Again</a>
</div>

<?php include 'includes/footer.php'; ?>
