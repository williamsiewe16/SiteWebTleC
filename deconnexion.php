<?php
session_start();
unset($_SESSION['pseudo']);
session_destroy();
sleep(2);
header ('location: ../connexion.php');
?>