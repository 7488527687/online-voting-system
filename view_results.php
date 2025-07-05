<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
include 'includes/header.php';

if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

$conn = new mysqli("localhost", "root", "", "voting_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name, party, votes FROM candidates ORDER BY votes DESC";
$result = $conn->query($sql);
?>

<div class="container">
    <h2>Election Results</h2>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Party</th>
                <th>Votes</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td data-label="Name"><?php echo $row['name']; ?></td>
                <td data-label="Party"><?php echo $row['party']; ?></td>
                <td data-label="Votes"><?php echo $row['votes']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php include 'includes/footer.php'; ?>
