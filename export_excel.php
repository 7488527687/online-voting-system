<?php
// Start session securely
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Admin access check
if (!isset($_SESSION['admin'])) {
    die("Unauthorized access.");
}

// Database connection
$conn = new mysqli("localhost", "root", "", "voting_db");
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Query results
$sql = "SELECT name, party, votes FROM candidates ORDER BY votes DESC";
$result = $conn->query($sql);
if (!$result) {
    die("Query failed: " . $conn->error);
}

// Set headers for Excel export
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=results.xls");
header("Pragma: no-cache");
header("Expires: 0");

// Begin table output
echo "<table border='1'>";
echo "<tr><th>Name</th><th>Party</th><th>Votes</th></tr>";

// Display rows
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row['name']) . "</td>";
    echo "<td>" . htmlspecialchars($row['party']) . "</td>";
    echo "<td>" . $row['votes'] . "</td>";
    echo "</tr>";
}

echo "</table>";
$conn->close();
?>
