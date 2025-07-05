<?php include 'header.php'; ?>
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<div class="container">
    <h2>🗳️ About the Project</h2>
    <p><strong>Project Name:</strong> Online Voting System</p>

    <p><strong>Description:</strong>  
    This is a web-based voting system that allows a secure and admin-controlled election process. It includes login modules for both voters and the admin, with features like one-vote enforcement, result display, and export to PDF and Excel.</p>

    <p><strong>Key Modules:</strong></p>
    <ul>
        <li>🔐 Admin Login</li>
        <li>👤 Candidate Management</li>
        <li>🧑‍💼 Voter Login with Password Hashing</li>
        <li>✅ One Vote Per Voter Restriction</li>
        <li>📊 View Results (with sorting)</li>
        <li>📥 Export to PDF and Excel</li>
    </ul>

    <p><strong>Technologies Used:</strong></p>
    <ul>
        <li>PHP & MySQL</li>
        <li>HTML, CSS (Responsive Design)</li>
        <li>FPDF Library for PDF</li>
    </ul>

    <p><strong>Developed By:</strong> Pushkar Raj</p>
</div>

<?php include 'footer.php'; ?>
