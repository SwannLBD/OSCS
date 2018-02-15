<?php
session_start();
session_destroy();
header('location: se_connecter.php');
exit;
?>
