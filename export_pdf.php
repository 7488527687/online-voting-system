<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

require('fpdf/fpdf.php');

$conn = new mysqli("localhost", "root", "", "voting_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(0, 10, 'Election Results', 0, 1, 'C');

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(60, 10, 'Name', 1);
$pdf->Cell(60, 10, 'Party', 1);
$pdf->Cell(30, 10, 'Votes', 1);
$pdf->Ln();

$sql = "SELECT name, party, votes FROM candidates ORDER BY votes DESC";
$result = $conn->query($sql);

$pdf->SetFont('Arial', '', 12);
while ($row = $result->fetch_assoc()) {
    $pdf->Cell(60, 10, $row['name'], 1);
    $pdf->Cell(60, 10, $row['party'], 1);
    $pdf->Cell(30, 10, $row['votes'], 1);
    $pdf->Ln();
}

$conn->close();
$pdf->Output();
?>
