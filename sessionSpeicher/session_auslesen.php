<?php
include 'htmlhelfer.php';
session_start();
htmlanfang();
?>
Gesetzte Werte auslesen:
<?php
echo $_SESSION['name'] . ' in ' . $_SESSION['ort'];
htmlende();