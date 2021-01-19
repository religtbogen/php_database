<?php
include 'htmlhelfer.php';
session_start();
htmlanfang();
$_SESSION['name'] = 'Pikart';
$_SESSION['ort'] = 'Berlin';
?>
Gesetzte Werte auslesen. <a href="/sessionSpeicher/session_auslesen.php">session_auslesen.php</a>
<?php
htmlende();
