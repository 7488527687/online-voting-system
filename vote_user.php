<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['voter_id'])) {
    header("Location: voter_login.php");
    exit();
}

$conn = new mysqli("localhost", "root", "", "voting_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $candidate_id = $_POST['candidate_id'];
    $voter_id = $_SESSION['voter_id'];

    // Update vote count
    $conn->query("UPDATE candidates SET votes = votes + 1 WHERE id = $candidate_id");

    // Mark voter as voted
    $conn->query("UPDATE voters SET has_voted = 1 WHERE voter_id = '$voter_id'");

    // Unset voter session and redirect
    unset($_SESSION['voter_id']);
    header("Location: thank_you.php");
    exit();
}

$result = $conn->query("SELECT * FROM candidates");
?>

<?php include 'includes/voter_header.php'; ?>

<div class="container">
    <h2>🗳️ Cast Your Vote</h2>
    <form method="POST">
        <?php while ($row = $result->fetch_assoc()) { ?>
            <input type="radio" name="candidate_id" value="<?php echo $row['id']; ?>" required>
            <?php echo $row['name'] . " (" . $row['party'] . ")"; ?><br>
        <?php } ?>
        <br>
        <input type="submit" value="Submit Vote" class="button">
    </form>
</div>

<?php include 'includes/footer.php'; ?>
