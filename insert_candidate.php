<?php
$conn = new mysqli("localhost", "root", "", "voting_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$party = $_POST['party'];

$sql = "INSERT INTO candidates (name, party) VALUES ('$name', '$party')";

if ($conn->query($sql) === TRUE) {
    echo "Candidate added successfully. <a href='dashboard.php'>Back to Dashboard</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
