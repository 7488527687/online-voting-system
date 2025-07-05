<?php
session_start();
session_unset();   // Saare session variables hata do
session_destroy(); // Session destroy kar do

header("Location: admin_login.php"); // Wapas login page pe bhej do
exit();
?>
