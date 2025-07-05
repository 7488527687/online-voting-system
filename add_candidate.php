<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}
include 'includes/header.php';
?>

<div class="container">
    <h2>Add Candidate</h2>

    <form method="POST" action="insert_candidate.php">
        <label for="name">Candidate Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="party">Party Name:</label><br>
        <input type="text" id="party" name="party" required><br><br>

        <input type="submit" value="Add Candidate" class="button">
    </form>
</div>

<?php include 'includes/footer.php'; ?>
